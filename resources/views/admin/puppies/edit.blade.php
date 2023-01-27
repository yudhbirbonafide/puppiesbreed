@extends('layouts.admin.admin')
@section('content')
  <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <div class="page-header"> <!-- Page-header Start -->
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <div class="page-header-title">
                                        <h5 class="m-b-10"><?php echo $heading;?>s</h5>
                                        </div>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="feather icon-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="{{route('admin_dashboard')}}">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="javascript:"><?php echo $heading;?> <?php echo (!empty($result['id']))?'Edit':"Add";?></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- Page-header End -->

                        <div class="main-body">
                            <div class="page-wrapper">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card">
                                            <div class="card-header">
                                            <h5><?php echo $heading;?> <?php echo (!empty($result['id']))?'Edit':"Add";?></h5>
                                            </div>
                                            <div class="card-body">                                                
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <form name="add_puppy" id="add_puppy" method="post" action="{{route('admin_puppies_edit')}}" enctype="multipart/form-data">
                                                            @csrf
                                                             <div class="form-group">
                                                                <label>Image</label>
                                                                <input type="file" class="form-control required" placeholder="Enter puppies image" name="puppies_image" accept="image/*"/>
                                                                <?php if(!empty($result['id'])){?>
                                                                <img src="<?php echo (!empty($result['imageUrl']))?asset($result['imageUrl']):"";?>" width="100" height="100" class="puppy_avatar">
                                                                <?php }?>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Name</label>
                                                                <input type="text" class="form-control required" placeholder="Enter Name" name="puppies_name" value="<?php echo (!empty($result['name']))?$result['name']:"";?>" />
                                                            </div> 
                                                            <div class="form-group">
                                                                <label>Age</label>
                                                                <input type="text" class="form-control required" placeholder="Enter Age" name="age" value="<?php echo (!empty($result['age']))?$result['age']:"";?>" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label>DOB</label>
                                                                <input type="text" class="form-control required" placeholder="Enter DOB" name="dob" value="<?php echo (!empty($result['dob']))?$result['dob']:"";?>" />
                                                                <!-- <Datepicker value="puppies_info.dob" class="form-control required" name="dob" inputFormat="yyyy-MM-dd"/> -->
                                                            </div>                                                            
                                                            <div class="form-group">
                                                                <label>Breed </label>
                                                                <select class="form-control required" name="breed">
                                                                    <option value="">Please select the Breed</option>
                                                                    <?php if(!$breed_info->isEmpty()){
                                                                        foreach($breed_info as $breed){    
                                                                    ?>
                                                                    <option value="{{$breed['id']}}" <?php echo (!empty($result['breed']) && $result['breed']==$breed['id'])?"selected='selected'":"";?>>{{$breed['breed']}}</option>
                                                                    <?php }}?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Registery</label>
                                                                <input type="text" class="form-control required" placeholder="Enter Registery" name="registery" value="<?php echo (!empty($result['registery']))?$result['registery']:"";?>" />
                                                            </div> 
                                                            <div class="form-group">
                                                                <label>Weight</label>
                                                                <input type="text" class="form-control required" placeholder="Enter Weight" name="weight" value="<?php echo (!empty($result['weight']))?$result['weight']:"";?>" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Collection</label>
                                                                <input type="text" class="form-control required" placeholder="Enter Collection" name="collection" value="<?php echo (!empty($result['collection']))?$result['collection']:"";?>" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Vaccination</label>
                                                                <div class="form-check form-check-inline mx-4">
                                                                    <input class="form-check-input" type="radio" name="vaccination" id="inlineRadio1" value="1" <?php echo (isset($result['vaccination']) && $result['vaccination']=='1')?"checked='checked'":"";?>>
                                                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="vaccination" id="inlineRadio2" value="0" <?php echo (isset($result['vaccination']) && $result['vaccination']=='1')?"checked='checked'":"";?>>
                                                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Color</label>
                                                                <input type="text" class="form-control required" placeholder="Enter Color" name="color" value="<?php echo (!empty($result['color']))?$result['color']:"";?>" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Gender</label>
                                                                <?php $gender=['1'=>'Male','2'=>'Female','3'=>'Either']; ?>
                                                                 <select class="form-control required" name="gender" value="puppies_info.gender">
                                                                    <option value="">Please select the Gender</option>
                                                                    <?php 
                                                                        foreach($gender as $key=>$gen_val){    
                                                                    ?>
                                                                    <option value="{{$key}}" <?php echo (!empty($result['gender']) && $result['gender']==$key)?"selected='selected'":"";?>>{{$gen_val}}</option>
                                                                    <?php }?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Price</label>
                                                                <input type="text" class="form-control required" placeholder="Enter price" name="price" value="<?php echo (!empty($result['price']))?$result['price']:"";?>" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Vendor Name</label>
                                                                <input type="text" class="form-control required" placeholder="Enter Vendor Name" name="vendor_name" value="<?php echo (!empty($result['vendor_name']))?$result['vendor_name']:"";?>" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Vendor Url</label>
                                                                <input type="text" class="form-control required" placeholder="Enter price" name="vendor_url" value="<?php echo (!empty($result['vendor_url']))?$result['vendor_url']:"";?>" />
                                                            </div>
                                                            <br/>
                                                            <?php if(!empty($result['id'])){?>
                                                                <input type="hidden" name="puppy_id" value="<?php echo (!empty($result['id']))?$result['id']:"";?>">
                                                                <input type="hidden" name="imageUrl" value="<?php echo (!empty($result['imageUrl']))?$result['imageUrl']:"";?>">
                                                            <?php }?>
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- card End -->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </div>
<style>
.errors {
    color: red;
    font-style: italic;
}
.puppy_avatar{
    margin-top: 12px;
    border-radius: 20px;
}
</style>
<script>
    $(document).ready(function(){
        form_validation("#add_puppy");
    });
</script>
@endsection