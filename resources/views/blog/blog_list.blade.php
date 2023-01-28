@extends('layouts.default')
@section('content')
 <!-- prodcut page start -->
 <div class="container">
    <div class="row mx-auto mt-5 mb-5">
 <?php if(!empty($result)){?>
 <?php foreach($result as $val){?>
    <div class="col-12 col-sm-12 col-md-6 col-lg-4">
      <div class="card">
        <div class="card-image">
        <img class="card-img" src="{{asset($val['image'])}}" alt="Bologna">
        </div>
        <div class="card-body">
          <h4 class="card-title"><?php echo $val['title'];?></h4>
          <small class="text-muted cat">
            <i class="far fa-clock text-info"></i> 30 minutes
            <i class="fas fa-users text-info"></i> 4 portions
          </small>
          <p class="card-text">I love quick, simple pasta dishes, and this is one of my favorite.</p>
          <a href="{{route('blog_post',['slug'=>$val['slug']])}}" class="btn btn-info">Read Blog</a>
        </div>
      </div>
    </div>

<?php }}?> 
    </div>
</div>
<!-- prodcut page start -->
@endsection

<style type="text/css">
    
.card-image{
  width: 100%;
  height: 250px;
}

.card-img {
  border-bottom-left-radius: 0px;
  border-bottom-right-radius: 0px;
  width: 100%;
  height: 250px;
   object-fit: cover;
}

h4.card-title {
    font-size: 20px;
    margin-bottom: 0.3rem !important;
}

p.card-text {
  display: inline-block;
  margin-bottom: 1rem;
}

.fa-users {
  margin-left: 1rem;
}

.card-footer {
  font-size: 0.8rem;
}
</style>