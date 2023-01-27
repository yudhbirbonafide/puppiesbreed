<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Breed;
use App\Models\Puppies;
use Session;
use File;
use DB;
 
class AdminController extends Controller{
    
    public $successStatus = 200;

    public function index(Request $request){
        if (Auth::user() && Auth::user()->role==1) {
            return redirect()->route('admin_dashboard'); 
        }
        if ($request->isMethod('post')) {
            $email=$request->email;
            $password=$request->password;
            if (Auth::attempt(['email' => $email, 'password' => $password, 'role' => 1])) {
                return redirect()->route('admin_dashboard');
            }else{
                return back()->with('error','Not an Authorize user.');
            }
        }
        return view('admin.login');
    } 
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function breed(Request $request,$all=null){
        $result=(!empty($all))?Breed::all():Breed::paginate(10);
        $heading="Breed";
        $view_data=['success' => true,'result'=>$result,'heading'=>$heading];
        return view('admin.breed.list',$view_data);
    }
    public function breed_edit(Request $request,$id=null){        
        if ($request->isMethod('post')) {
            $lastInsertedId="";
            $msg="";
            $data_info=['breed'=>$request->breed_name,'type'=>$request->breed_type,'doodle'=>(!empty($request->doodle))?$request->doodle:0];
            if(!empty($request->breed_id)){
                Breed::where('id', $request->breed_id)->update($data_info);
                $lastInsertedId=true;
                $msg="updated";
            }else{
                $result= Breed::create($data_info);
                $lastInsertedId=$result->id;
                $msg="created";
            }
            if (!empty($lastInsertedId)) {
                return redirect()->route('admin_breed_list')->with('success','Record has been '.$msg.' successfully.');
            }else{
                return redirect()->route('admin_breed_list')->with('success','Record has not been '.$msg.' successfully.');
            }
        }
        $result="";
        $heading="Breed";
        if(!empty($id)){
            $result = Breed::find($id);
        }
        $view_data=['success' => true,'result'=>$result,'heading'=>$heading];
        return view('admin.breed.edit',$view_data);
    }
    public function breed_delete(Request $request,$id=null){ 
        Breed::where('id', $id)->delete();
        return redirect()->route('admin_breed_list')->with('success','Record has been deleted successfully');
    }
    public function puppies(Request $request){
        $result=Puppies::select('tbl_puppies.*')->Join('tbl_breed', 'tbl_puppies.breed', '=', 'tbl_breed.id');
        $heading="Puppies";        
        $result=$result->paginate(10);
        $view_data=['success' => true,'result'=>$result,'heading'=>$heading];
        return view('admin.puppies.list',$view_data);
    }
    public function puppies_edit(Request $request,$id=null){        
        if ($request->isMethod('post')) {
            $lastInsertedId="";
            $msg="";
            $data_info=$request->all();
            // dd($data_info);
            $puppy_id="";
            if ($request->hasFile('puppies_image')) {
                $image_data=$data_info['imageUrl'];
                list($type, $image_data) = explode(';', $image_data);
                list(, $image_data)      = explode(',', $image_data);
                $image_data = base64_decode($image_data);
                $file_name=time().'_'.$data_info['puppies_image'];
                $storage_path='uploads/puppies/';         
                $destinationPath = public_path().'/'.$storage_path;
                File::makeDirectory($destinationPath, $mode = 0777, true, true);

                $destinationPath = $destinationPath.''.$file_name;
                file_put_contents($destinationPath, $image_data);

                $storage_path='/'.$storage_path.$file_name;  
                $data_info['imageUrl']=$storage_path;

            }else{
                $data_info['imageUrl']= $request->imageUrl;
            }
            if(!empty($data_info['puppies_name'])){
                $data_info['name']=$data_info['puppies_name'];
                unset($data_info['puppies_name']);
                if(!empty($data_info['puppy_id'])){
                    $puppy_id= $request->puppy_id;
                }
                unset($data_info['puppy_id']);
                $data_info['dob']=date('Y-m-d',strtotime($data_info['dob']));              
            }
            if(!empty($puppy_id)){
                Puppies::where('id', $puppy_id)->update($data_info);
                $lastInsertedId=true;
                $msg="updated";
            }else{
                $result= Puppies::create($data_info);
                $lastInsertedId=$result->id;
                $msg="created";
            }
            if (!empty($lastInsertedId)) {
                return redirect()->route('admin_puppies_list')->with('success','Record has been '.$msg.' successfully.');
            }else{
                return redirect()->route('admin_puppies_list')->with('success','Record has not been '.$msg.' successfully.');
            }
        }
        $result="";
        $heading="Puppies";
        $breed_info=Breed::all();
        if(!empty($id)){
            $result = Puppies::find($id);
        }
        $view_data=['success' => true,'result'=>$result,'heading'=>$heading,'breed_info'=>$breed_info];
        return view('admin.puppies.edit',$view_data);
    }
    public function puppies_delete(Request $request,$id=null){ 
        Puppies::where('id', $id)->delete();
        return redirect()->route('admin_puppies_list')->with('success','Record has been deleted successfully.');
    }  
    public function logout(){
        Session::flush();        
        Auth::logout();
        return redirect()->route('admin_login');
    }
}