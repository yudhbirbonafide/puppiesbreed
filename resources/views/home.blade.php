@extends('layouts.default')
@section('content')
    <section class="main-sectionbg" style="width: 100%; height: 450px; background-image: url('images/puppies_banner.jpg');">
    </section>
    <section class="top-sectionbm" >
        <div class="container rs-bft">
            <div class="top-businesssec view-all-category-bg row">
                <div class="col-md-3">
                    <div class="view-category-box border-color1">
                        <div class="text-center">
                            <p><img src="{{asset('images/network.png')}}" alt="icn" width="50px"> Social Business</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="view-category-box border-color2">
                        <div class="text-center">
                            <p><img src="{{asset('images/network.png')}}" alt="icn" width="50px"> Social Business</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="view-category-box border-color3">
                        <div class="text-center">
                            <p><img src="{{asset('images/network.png')}}" alt="icn" width="50px"> Social Business</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="view-category-box border-color4">
                        <div class="text-center">
                            <p><img src="{{asset('images/network.png')}}" alt="icn" width="50px"> Social Business</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Ammo category start -->
    <div class="container rs-bft mt-5">
        <div class="view-all-category-bg">
            <div class="row">
            
                <div class="view-category-box col-xl-3 col-lg-6 col-md-6 col-sm-6 col-sm-12 " >
                    <div class="bft_pd">
                        <h4>Name cat</h4>
                        <div class="category-image-box">
                            <img class="lazy" src="{{asset('images/network.png')}}" alt="category Image" width="164px" height="140px">
                        </div>
                        <ul>
                            
                            <li><a href="" title="<?php //echo @$val['name']?>">Cat Name</a></li>
                        </ul>
                        <div class="view-category">
                            <a href="">View All Categories</a>
                        </div>
                    </div>
                </div>
                <div class="view-category-box col-xl-3 col-lg-6 col-md-6 col-sm-6 col-sm-12 " >
                    <div class="bft_pd">
                        <h4>Name cat</h4>
                        <div class="category-image-box">
                            <img class="lazy" src="{{asset('images/network.png')}}" alt="category Image" width="164px" height="140px">
                        </div>
                        <ul>
                            
                            <li><a href="" title="<?php //echo @$val['name']?>">Cat Name</a></li>
                        </ul>
                        <div class="view-category">
                            <a href="">View All Categories</a>
                        </div>
                    </div>
                </div>
                <div class="view-category-box col-xl-3 col-lg-6 col-md-6 col-sm-6 col-sm-12 " >
                    <div class="bft_pd">
                        <h4>Name cat</h4>
                        <div class="category-image-box">
                            <img class="lazy" src="{{asset('images/network.png')}}" alt="category Image" width="164px" height="140px">
                        </div>
                        <ul>
                            
                            <li><a href="" title="<?php //echo @$val['name']?>">Cat Name</a></li>
                        </ul>
                        <div class="view-category">
                            <a href="">View All Categories</a>
                        </div>
                    </div>
                </div>
                <div class="view-category-box col-xl-3 col-lg-6 col-md-6 col-sm-6 col-sm-12 " >
                    <div class="bft_pd">
                        <h4>Name cat</h4>
                        <div class="category-image-box">
                            <img class="lazy" src="{{asset('images/network.png')}}" alt="category Image" width="164px" height="140px">
                        </div>
                        <ul>
                            
                            <li><a href="" title="<?php //echo @$val['name']?>">Cat Name</a></li>
                        </ul>
                        <div class="view-category">
                            <a href="">View All Categories</a>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
    <!-- Ammo category end -->

    <!-- carousel slider logo start -->   
    <section class="trigger container rs-bft gutter-horizontal bg-gray gutter-vertical--m gutter-horizontal mt-5">
        <div class="bft-ammunition-brand">
            <h2>Popular Puppies Retailers.</h2>
        </div>
        <div class="customer-logos slider" >
            <div class="slide-in-right slide"><img src="{{asset('images/SMKW.jpg')}}" alt="Kinderhotel Aschauerhof" height="auto" width="auto"></div>
            <!--<div class="slide-in-right slide" ><img src="{{asset('images/remington.png')}}" height="auto" width="auto"></div>-->
            <div class="slide-in-right slide"><img src="{{asset('images/sportsmansguide.jpg')}}" height="auto" width="auto"></div>
            <div class="slide-in-right slide"><img src="{{asset('images/firearms-depot.jpg')}}" height="auto" width="auto"></div>
            <!-- <div class="slide-in-right slide" ><img src="{{asset('images/natchez.png')}}" height="auto" width="auto" alt="Tannenmuehle"></div> -->
            <div class="slide-in-right slide"><img src="{{asset('images/brownells.jpg')}}" height="auto" width="auto" alt="Loeffele"></div>
            <div class="slide-in-right slide" ><img src="{{asset('images/trueShot.jpg')}}" alt="Krone" height="auto" width="auto"></div>
            <div class="slide-in-right slide" ><img src="{{asset('images/Global-Ordnance.jpg')}}" alt="Obereggen" height="auto" width="auto"></div>
            <div class="slide-in-right slide" ><img src="{{asset('images/brownells.jpg')}}" alt="Ortnerhof" height="auto" width="auto"></div>
            <div class="slide-in-right slide"><img src="{{asset('images/ammo.jpg')}}" alt="Ottonenhof" height="auto" width="auto"></div>
            <div class="slide-in-right slide"><img src="{{asset('images/sportsmansguide.jpg')}}" alt="Leiners" height="auto" width="auto"></div>
            <div class="slide-in-right slide" ><img src="{{asset('images/ammunition-depot.jpg')}}" alt="Seitenalm" height="auto" width="auto"></div>
            <div class="slide-in-right slide" ><img src="{{asset('images/firearms-depot.jpg')}}" alt="Testerhof" height="auto" width="auto"></div>
        </div>
    </section>
    <!-- carousel slider logo end --> 

    <!-- section text start -->
    <section class="latest-blog">
        <div class="container rs-bft">
            <div class="what-about">
                <h1 class="class_h1_ammo"><b>Buy Puppies Online</b></h1>
                <h3 class="class_h3_ammo">One-Stop Shop to Buy Ammo Online on best deals. Get the best out of the gun world from the top retailers. </h3>
                <p>Whether you are a hunter looking for that one killer round for your target or a learning shooter, spend hundreds of bullets for one perfect shoot, we have got you covered. Buy Ammo Online from our vast collection of rounds, rifles, and other rimfire weapons, perfect for beginners to expert shooters. Explore our extensive collection of shotgun ammo at reasonable prices and offers for shooting, self-defense, and clay target shooting. <br>

Check our collection of rifle ammunition to find both a market-leading variety of traditional and classic cartridges as well as modern sporting rifle rounds. Handgun Ammunition is necessary for both defensive and shooting purposes.<br><br>

Buy Ammo Online is the go-to online platform for finding affordable ammo, firearms, bullets, and reloading supplies.

We keep an eye on several operating ammo providers. To present you with the most relevant pricing and deals on ammunition deals from various ammunition dealers, we work with different ammunition retailers.  We continuously monitor the current prices and inventory levels of our listed ammo vendors 24 hours a day. Our website displays pricing from several sellers so you may find the greatest offers on your desired ammunition.<br> <br>

We assist you in locating affordable ammo offers and getting the greatest ammunition prices. We gather the most recent ammunition prices and stock information from different online ammunition retailers and present the most recent competitive prices. We supply a wide variety of guns, hunting, and shooting gear. Our goal is to offer a large selection of shooting, hunting, and sports goods to our customers at fair and reasonable costs. <br><br>

The following categories of guns are listed on our website:<br><br>
<b><a href="/shop/handgun-ammo">Handgun Ammo:</a></b> We provide a comprehensive selection of handguns to meet the needs of any shooter, including Glocks, Berettas, and everything in between.<br><br>
<b><a href="/shop/rifle-ammo">Rifle Ammo:</a></b> Our selection of rifles includes models targeting extreme long-range hunters, deer hunters, vermin shooters, and everything in between.<br><br>
<b><a href="/shop/shotgun-ammo">Shotgun Ammo:</a></b> Best for Victorian and club shooters.<br><br>
<b><a href="/shop/rimfire-ammo">Rimfire Ammo:</a></b> We also have an extensive collection of 22 and 17-rim fire ammo to give our shooters the best shot they deserve. Our collection includes 22 LR, 22 Short, 22 Long, 22 WRM, 17 HM2, & 17 HMR.<br><br>
To find you the major ammunition prices, we collaborate with the top Dealers and Retailers.<br>
Whether you need affordable ammunition for competitive shooting, hunting, or target shooting, we have listed all the special prices and offers on different Ammo, including 9mm, 22lr, 223, and more, available from major vendors.</p>
            </div>
        </div>
    </section>
    <!-- section text start -->

    <!-- Start Blog  -->
    <div class="latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h3 class="class_h1_ammo"><b>Latest Blog</b></h3>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p> -->
                    </div>
                </div>
            </div>
            <div class="row">
                
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <a href=""><img class="img-fluid" src="{{asset('images/network.png')}}" alt="" /></a>
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3><a href="">Blog name</a></h3>                               
                            </div>
                            <ul class="option-blog">
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <a href=""><img class="img-fluid" src="{{asset('images/network.png')}}" alt="" /></a>
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3><a href="">Blog name</a></h3>                               
                            </div>
                            <ul class="option-blog">
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <a href=""><img class="img-fluid" src="{{asset('images/network.png')}}" alt="" /></a>
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3><a href="">Blog name</a></h3>                               
                            </div>
                            <ul class="option-blog">
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- End Blog  -->
    <!-- FAQ Section Start -->

   <div class="container">
    <div id="accordion" class="accordion">
        <div class="card mb-0">
            <div class="card-header collapsed" data-toggle="collapse" href="#collapseOne">
                <a class="card-title">What is the Best Place to Buy Ammo Online?</a>
            </div>
            <div id="collapseOne" class="card-body collapse" data-parent="#accordion">
                <p>The best place to purchase all types of ammunition from reputable and well-known ammunition brands is<b> Buy Ammo Online.</b> You can sort the ammunition by price, brand, size, rounds, and other criteria. It is the place to start exploring if you want to purchase ammunition in large quantities and get the best deal. They offer an enormous variety of the most well-known brands at great prices. </p>
            </div>
            <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                <a class="card-title">Do you Sell Ammo? </a>
            </div>
            <div id="collapseTwo" class="card-body collapse" data-parent="#accordion">
                <p>We don't sell ammunition. We are the best ammo search engine. We only offer links to legitimate suppliers of ammo.</p>
            </div>
            <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                <a class="card-title">Is it Safe to Buy Ammo Online?</a>
            </div>
            <div id="collapseThree" class="collapse" data-parent="#accordion">
                <div class="card-body">The best way to purchase ammunition is online, but you must confirm that it is legal where you live. We have an extensive collection of ammo from various retailers so that you can get the best value offer on ammo.
                </div>
             </div>
             <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                <a class="card-title">Why Should you Buy Ammo Online?</a>
            </div>
            <div id="collapseFour" class="collapse" data-parent="#accordion">
                <div class="card-body">1. Buying ammo online saves time.<br>
                                       2. It's simple to compare all the prices and brands online.<br>
                                       3. The greatest deals are available online.<br>
                                       4. We list the most affordable prices of ammo one can get anywhere online.
                </div>
            </div>
            <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                <a class="card-title">Is it a Smart Idea to Buy Ammo in Bulk?</a>
            </div>
            <div id="collapseFive" class="collapse" data-parent="#accordion">
                <div class="card-body">You can save money by buying ammo in bulk because you'll always pay less per round. It is way too inexpensive to buy ammo online. Naturally, the caution is to place as large of an order as possible. You will save more money the more you purchase in bulk.
                </div>
            </div>
    </div>
   </div>
</div>    
@endsection

