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
                                            <?php //dump($result);?>
                                            <div class="card-body">                                                
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <form name="add_breed" id="add_breed" method="post" action="{{route('admin_breed_edit')}}">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label>Breed</label>
                                                                <input type="text" class="form-control required" placeholder="Enter Breed Name" name="breed_name" value="<?php echo (!empty($result['breed']))?$result['breed']:"";?>" />
                                                            </div> 
                                                            <div class="form-group">
                                                                <label>Breed Type</label>
                                                                <select class="form-control required" name="breed_type">
                                                                    <option value="1" <?php echo (!empty($result['type']) && $result['type']=='1')?"selected='selected'":"";?>>Pure</option>
                                                                    <option value="2" <?php echo (!empty($result['type']) && $result['type']=='2')?"selected='selected'":"";?>>Designed</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="doodle" value="1" id="flexCheckDefault" <?php echo (!empty($result['doodle']))?"checked='checked'":"";?>>
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    Doodle
                                                                </label>
                                                            </div> 
                                                            <br/>                                                          
                                                            <?php if(!empty($result['id'])){?>
                                                                <input type="hidden" name="breed_id" value="<?php echo (!empty($result['id']))?$result['id']:"";?>">
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
    <script>
    $(document).ready(function(){
        form_validation("#add_breed");
    });
</script>
@endsection