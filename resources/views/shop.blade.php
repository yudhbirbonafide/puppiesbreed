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
            <?php if(!$result->isEmpty()){
                foreach($result as $val){    
            ?>
            <div class="col-3 mb-2" v-for="puppy in shopListing?.data" :key="puppy.id">
                <div class="card">
                    <img src="{{asset($val['imageUrl'])}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">{{$val['name']}}</p>
                        <p class="card-text">{{$val['collection']}}</p>
                        <p class="card-text">{{$val['weeks']}}</p>
                    </div>
                </div>
            </div>
            <?php }}else{?>
                <div class="col-3 mb-2">
                    <p>No Record Found.</p> 
                </div>
            <?php }?> 
            
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