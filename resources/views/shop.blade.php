@extends('layouts.default')
@section('content')
  <div class="container">
  <div class="row">
    <div class="col-3">
        <form method="GET" name="filter_frm" id="filter_frm">
            @include('shop_filter_sidebar')
        </form>
    </div>
    <div class="col-9">
        <div class="row">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Collection</th>
                        <th scope="col">Weeks</th>
                        <th scope="col">Registery</th>
                        <th scope="col">Price</th>
                        <th scope="col">Retailer</th>
                    </tr>
                </thead>
                <tbody>
                <?php if(!$result->isEmpty()){
                    foreach($result as $val){    
                ?>
                <tr>
                    <td>{{$val['id']}}</td>
                    <?php if(check_file_exist($val['imageUrl'])){?>
                        <td><img src="{{asset($val['imageUrl'])}}" alt="..." width="100" height="60"></td>
                    <?php }else{?>
                        <td><img src="{{asset('images/blank.jpg')}}" alt="..." width="100" height="60"></td>
                    <?php }?>
                    <td>{{$val['name']}}</td>
                    <td>{{$val['collection']}}</td>
                    <td>{{$val['weeks']}}</td>
                    <td>{{$val['registery']}}</td>
                    <td>{{$val['price']}}</td>
                    <td>{{$val['vendor_name']}}</td>
                </tr>
                <?php }}else{?>
                    <tr>
                        <td colspan="4">No Record Found.</td> 
                    </tr>
                <?php }?> 
                </tbody>
            </table>
        </div>
        <div class="row pos_right">
            {{ $result->links() }} 
        </div>
    </div>
  </div>
  </div>
  <br/>
<style>
    .filter_label{font-weight: bold; padding: 0px 36px;}
    .btn-link{width: 100%; text-align: left;top: -6px;color: #1b1a1a !important;position: relative;}
    .pos_right{float:right;}
    .form-check {padding-left: 3.25rem;}
    .card-header { background-color: #827a7a2e; height: 46px; }
</style>
  @endsection