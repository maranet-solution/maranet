@extends('layouts.default')
@section('content')

<section>
    <div class="index-slider">
        <!-- Carousel -->
        <div id="demo" class="carousel slide custom-slider-box" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($plans as $plan)
                <div class="carousel-item active carousel-adjust" style="background-image: url(images/slide5.png)">
                    <div class="carousel-caption">
                        <h3>{{$plan['name']}} </h3>
                        <h4>quality connection <span>Starting @ kes {{$plan['price']}} {{$plan['duration']}}</span></h4>
                        <div class="tab-content" >
                            <ul class="row">
                                @foreach (explode("\n", $plan['description']) as $line)
                                {{-- should not be empty --}}
                                @if (!empty($line))
                                <li class="col-12 col-md-6 "><i class="fa-regular fa-circle-check"></i>
                                    {{$line}}
                                    </li>
                                @endif
                               
                                @endforeach
                            </ul>
                        </div>
                        <div class="btn-box">
                            <ul>
                                <li>
                                    <a href="https://wa.me/254703666999?text=Hi Maranet, I am Interested in Internet plan: {{$plan['name'] }}
                                    " class="slider-btn">
                                        Get Now
                                    </a>
                                </li>
                                <li>
                                    <a href="/pricing" class="slider-btn">
                                        More plans
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- Left and right controls/icons -->
                <div class="carousel-control-prev" data-bs-target="#demo" data-bs-slide="prev">
                    <div class="arrow-box"><span class="carousel-control-prev-icon"></span></div>
                </div>
                <div class="carousel-control-next" data-bs-target="#demo" data-bs-slide="next">
                    <div class="arrow-box"><span class="carousel-control-next-icon"></span></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="welcome-wrapper welcome-padding-wrap">
        <div class="container">
            <div class="inner-welcome-bxo">
              <div class="title-wrapper title-service center-title-wrapper ">
                 <h2 class="" style="color: #ffffff"> Why  Choose Us</h2>
                 <span> <img src="images/underline.png" alt="line"> </span>
             </div>
                <div class="welcome-text-box">
                    <p>
                       We offer a variety of internet plans with different speeds and prices. 
                       Choose the option that best suits your needs and budget.
                    </p>
                </div>
                <div class="welcome-btn">
                    <a href="/about" class="slider-btn">
                        About us
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- welcome section end -->
<!-- plan section start -->
@include("includes.pricing")
<!-- plan section end -->
<!-- our service section start -->
<section>
    <div class="our-service-section our-service-section-two">
        <div class="container">
            <div class="service-wrap">
                <div class="title-wrapper title-service center-title-wrapper">
                    <h2 class=""> OUR  SERVICE</h2>
                    <span> <img src="images/underline.png" alt="line"> </span>
                </div>
                <p class="para-text">
                 Fast Wi-Fi, hassle-free! Our pros arrive with everything you need to get online in no time.
                </p>
            </div>
            <div class="service-col-box">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="service-detail-box">
                            <div class="service-icon-box">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="fbox-content">
                                <h3 class="ourservice-heading"><a href="javascript:;">Broadband</a></h3>
                                <p class="description">Experience high-speed, reliable internet connectivity with our broadband service. 
                                   Enjoy fast download and upload speeds.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="service-detail-box">
                            <div class="service-icon-box">
                             <i>$</i>
                            </div>
                            <div class="fbox-content">
                                <h3 class="ourservice-heading"><a href="javascript:;">Best Selling Plans</a></h3>
                                <p class="description">Explore our top-tier internet plans tailored to suit your needs. From basic browsing to 4K streaming and small business requirements, we've got you covered.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="service-detail-box">
                            <div class="service-icon-box">
                                <i class="fa-solid fa-wifi"></i>
                            </div>
                            <div class="fbox-content">
                                <h3 class="ourservice-heading"><a href="javascript:;">Wifi Zone</a></h3>
                                <p class="description">
                                   Enjoy seamless internet access across your entire home or office, 
                                   ensuring fast and reliable connectivity for all your devices.<p>                                    </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="service-detail-box">
                            <div class="service-icon-box">
                                <i class="fa-solid fa-money-check"></i>
                            </div>
                            <div class="fbox-content">
                                <h3 class="ourservice-heading"> <a href="javascript:;">Pay Bills (All User)</a></h3>
                                <p class="description">
                                   Manage Payment for your internet with our automated payment system with less human interaction.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="service-detail-box">
                            <div class="service-icon-box">
                                <i class="fas fa-broadcast-tower"></i>
                            </div>
                            <div class="fbox-content">
                                <h3 class="ourservice-heading"><a href="javascript:;">New Connection</a></h3>
                                <p class="description">Get online quickly with our hassle-free new connection service. And our team will have you up and running in no time.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="service-detail-box">
                            <div class="service-icon-box">
                                <i class="fa-solid fa-shield-halved"></i>
                            </div>
                            <div class="fbox-content">
                                <h3 class="ourservice-heading"><a href="javascript:;">Secure Internet</a></h3>
                                <p class="description">
                                   Protect your activities with our Secure Internet service. 
                                   Enjoy advanced security features that safeguard your data.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- our service section end -->
<!-- counter section start -->
<section>
    <div class="counter-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="counter-box">
                        <div class="kc_counter_box">
                            <i class="fa-solid fa-user element-icon"></i> <span class="count">200</span>
                            <h4>Happy Customers</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="counter-box">
                        <div class="kc_counter_box">
                            <i class="fa-solid fa-clock-rotate-left element-icon"></i><span class="count">24</span>
                            <h4>Good Speed</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="counter-box counter-box-margin">
                        <div class="kc_counter_box">
                            <i class="fas fa-broadcast-tower element-icon"></i><span class="count">500</span>
                            <h4>Better Loading</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 ">
                    <div class="counter-box counter-box-margin">
                        <div class="kc_counter_box">
                            <i class="fa-solid fa-trophy element-icon"></i><span class="count">120</span>
                            <h4>Fast Network</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- counter section end -->
<!-- choose-us-wrapper section start-->
<section>
    <div class="choose-us-wrapper">
        <div class="container">
            <div class="choose-box">
                <div class="title-wrapper choose-title">
                 <div class="title-wrapper title-service center-title-wrapper">
                    <h2 class=""> Why  Choose Us</h2>
                    <span> <img src="images/underline.png" alt="line"> </span>
                </div>
                </div>
                <p class="para-text">We offer a variety of internet plans with different speeds and prices. Choose the option that best suits your needs and budget.
                </p>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="feature-box">
                        <div class="fbox-img">
                            <div class="fbox-icon">
                                <div class="inner">
                                    <i class="fa-regular fa-clock"></i>
                                </div>
                            </div>
                        </div>
                        <div class="fbox-content">
                            <h3 class="ourservice-heading"><a href="javascript:;">Best Speed</a></h3>
                            <p class="description">Looking for fast broadband without line rental fees? Look no
                                further! We
                                even include Net phone with every Naked DSL plan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="feature-box">
                        <div class="fbox-img">
                            <div class="fbox-icon">
                                <div class="inner">
                                    <i class="fa-solid fa-wrench"></i>
                                </div>
                            </div>
                        </div>
                        <div class="fbox-content">
                            <h3 class="ourservice-heading"><a href="javascript:;">installation & setup</a></h3>
                            <p class="description">If you already have high-speed (broadband) Internet service at
                                your house,
                                it's pretty easy to create your own home wireless network.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="feature-box">
                        <div class="fbox-img">
                            <div class="fbox-icon">
                                <div class="inner">
                                    <i class="fa-solid fa-headphones"></i>
                                </div>
                            </div>
                        </div>
                        <div class="fbox-content">
                            <h3 class="ourservice-heading"><a href="javascript:;">24 x 7 Service</a></h3>
                            <p class="description">
                                Network users (such as MES servers) have to be able to communicate with one another
                                from the protected
                                and unprotected network .
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- choose-us-wrappers section end -->
<!-- download-wrapper start -->
<section>
    <div class="fast-download-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-7 col-xl-6">
                    <div class="kc-pc-loaded">
                        <div class="kc_wrapper ">
                            <div class="kc_text_block">
                                <div class="intro">
                                    <div class="title">Fast Download &amp; Upload<br>
                                        Speeds at an Affordable Price
                                    </div>
                                    <div class="description">
                                        <p>When choosing among the best high speed Internet providers, there are
                                            several other factors that should be taken into consideration besides
                                            just the
                                            available download speeds.
                                        </p>
                                        <p>
                                            If you are looking for a high speed Internet provider that offers the
                                            best value for your money, look no further.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="contact-info">
                                <div class="media">
                                    <div class="media-body">
                                        <div class="phone"><span>(254)</span> 703666999<br>
                                            <span>(254)</span> 703666999
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-body">
                                        <p>Kims Plaza, 3rd Floor, Room D3</p>
                                        <p>Narok Town, Narok, Kenya</p>
                                        <p> Email : <a href="mailto:support@maranet.co.ke">support@maranet.co.ke</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-5 col-xl-6">
                    <div class="kc-pc-loaded download-img-box">
                        <img src="images/intro-bg-side-img.jpg.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include("includes.map")
@stop
