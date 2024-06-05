@extends('layouts.default')
@section('content')

@include("includes.banner")

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
                            <p class="description">For optimal speed and performance, we offer top-of-the-line routers and expert installation services, ensuring that your network operates at its best.</p>
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
                            <p class="description">
                                We provide free installation assistance and include a router as part of our setup package to ensure a seamless integration process for our customers.
                            </p>
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
                                Network users, including MES servers, 
                                must maintain the capability to seamlessly communicate with our team 
                                at any hour, 
                                ensuring swift resolution of any encountered issues.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include("includes.pricing")

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

@include("includes.contaxt")
@stop
