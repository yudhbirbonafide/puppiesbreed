<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Breed;
use App\Models\Puppies;
use Session;
use File;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function shop(Request $request){
        $breed_info=Breed::all();
        $result=Puppies::select('tbl_puppies.*')->Join('tbl_breed', 'tbl_puppies.breed', '=', 'tbl_breed.id');
        $heading="Puppies";
        $filter=[];
        if(!empty($request->query)){
            $filter=$request->query();
        }
        if(!empty($request->query('age'))){
            if(!in_array('all',$request->query('age'))){
                if(in_array('20',$request->query('age'))){
                    $result->where(DB::raw('FLOOR(DATEDIFF(DATE(now()), DATE(dob))/7)'),'>', "16");
                }else{
                    $result->whereIn(DB::raw('FLOOR(DATEDIFF(DATE(now()), DATE(dob))/7)'), $request->query('age'));
                }
            }
        }
        if(!empty($request->query('breed'))){
            $result->whereIn('tbl_puppies.breed', $request->query('breed'));
        }
        if(!empty($request->query('gender'))){
            $gender=$request->query('gender');
            if(in_array('3',$gender)){
                $gender[]=1;
                $gender[]=2;
            }
            $gender=array_unique($gender);
            $result->whereIn('gender', $gender);
        }
        if(!empty($request->query('color'))){
            $result->whereIn('color', $request->query('color'));
        }
        if(!empty($request->query('doodle'))){
            $result->where('tbl_breed.doodle', 1);
        }
        $result=$result->paginate(10);
        $view_data=['success' => true,'result'=>$result,'breed_info'=>$breed_info,'filter'=>$filter];
        return view('shop',$view_data);
    }
}
