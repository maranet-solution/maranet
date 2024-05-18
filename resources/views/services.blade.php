@extends("layouts.default")

@section("content")
        <!--  blog categories wrapper start-->
        <section>
            <div class="blog-categories-wrapper">
                <div class="container">
                    <div class="blog-categories">
                        <div class="blog-heading">
                            <h2> Our Service</h2>
                        </div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb categories-breadcumbs">
                                <li class="breadcrumb-item"><a href="javascript:;">Home <span class="bread-icon"><i
                                                class="fa-solid fa-chevron-right"></i></span></a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span> our Service </span></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!--  blog categories wrapper end-->
        <!-- service section  start -->
        <section>
            <div class="service-wrapper">
                <div class="container">
                    <div class="choose-box">
                        <div class="title-wrapper title-service center-title-wrapper ">
                            <h2> <span>OUR SERVICE </span></h2>
                            <span> <img src="images/underline.png" alt="line"> </span>
                        </div>
                        <p class="para-text">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor
                            aliquet.
                            Aenean sollicitudin,
                            lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.
                        </p>
                    </div>
                    <div class="service-section-content clearfix">
                        <div class="row">
                            <div class="tab d-flex align-items-start row">
                                <!-- tab-title -->
                                <ul class="nav nav-tabs tabs nav flex-column nav-pills col-12 col-md-12 col-lg-3 text-uppercase"
                                    id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <li class="nav-item" role="presentation">
                                        <a href="#Best" class="nav-link active" id="v-pills-Best-tab" data-bs-target="#Best"
                                            data-bs-toggle="pill" data-toggle="tab" role="tab" aria-selected="true">
                                          <i>$</i>
                                            Best Selling Plans</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="#Broadband" class="nav-link" id="v-pills-Broadband-tab"
                                            data-bs-target="#Broadband" data-bs-toggle="pill" data-toggle="tab" role="tab"
                                            aria-selected="false">
                                            <i class="fa-solid fa-satellite-dish"> </i>
                                            Broadband
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation"><a href="#Wifi" class="nav-link"
                                            id="v-pills-Wifi-tab" data-bs-target="#Wifi" data-bs-toggle="pill"
                                            data-toggle="tab" role="tab" aria-selected="false"><i
                                                class="fa-solid fa-wifi"></i> Wifi
                                            Zone</a></li>
                                    <li class="nav-item" role="presentation"><a href="#Pay" class="nav-link"
                                            id="v-pills-Pay-tab" data-bs-target="#Pay" data-bs-toggle="pill"
                                            data-toggle="tab" role="tab" aria-selected="false">  <i class="fa-solid fa-file-invoice-dollar"></i>
                                            Pay Bills (All User)</a>
                                    </li>
                                    <li class="nav-item" role="presentation"><a href="#New" class="nav-link"
                                            id="v-pills-New-tab" data-bs-target="#New" data-bs-toggle="pill"
                                            data-toggle="tab" role="tab" aria-selected="false">
                                            <i class="fas fa-broadcast-tower"></i>
                                            New Connection </a>
                                    </li>
                                    <li class="nav-item" role="presentation"><a href="#Secure" class="nav-link"
                                            id="v-pills-Secure-tab" data-bs-target="#Secure" data-bs-toggle="pill"
                                            data-toggle="tab" role="tab" aria-selected="false"><i
                                                class="fa-solid fa-shield-halved"></i>Secure
                                            Internet</a></li>
                                </ul>
                                <!-- / tabs -->
                                <div class="tab_content tab-content col-12 col-md-12 col-lg-9" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="Best" role="tabpanel"
                                        aria-labelledby="v-pills-Best-tab" tabindex="0">
                                        <div class="d-flex tab-box-wrap">
                                            <div class="service-pic">
                                                <img src="images/tab-contetn-bg-1.png" alt="image">
                                            </div>
                                            <div class="media-body tab-content-wrap">
                                                <div class="title"><span class="mn-icon-786"><i
                                                            class="fa-solid fa-sack-dollar"></i></span>Best Internet Plans
                                                </div>
                                                <div class="description">
                                                    we understand that every individual's internet requirements are unique. That's why we offer a diverse selection of 
                                                    Best Internet Plans tailored to suit a variety of needs and preferences.
                                                     Whether you're a casual browser, a passionate gamer, or a busy professional, 
                                                     we have a plan crafted just for you. 
                                                     From basic browsing packages to high-speed streaming options, we ensure that everyone can find the perfect fit
                                                      for their online lifestyle.
                                                     Explore our range of plans today and experience internet connectivity that's tailored to you
                                                </div>
                                                <ul>
                                                    <li><i class="fa-regular fa-circle-check"></i> Fibreoptic Internet Router
                                                        <span class="badge rounded-pill bg-info badge-cust-clr">New</span>
                                                    </li>
                                                    <li><i class="fa-regular fa-circle-check"></i> Automated Payments
                                                    </li>
                                                    <li><i class="fa-regular fa-circle-check"></i> Free Intallation and Router</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- / tabs_item -->
                                    <div class="tab-pane fade" id="Broadband" role="tabpanel"
                                        aria-labelledby="v-pills-Broadband-tab" tabindex="0">
                                        <div class="d-flex tab-box-wrap">
                                            <div class="service-pic">
                                                <img src="images/tab-contetn-bg.jpg" alt="image">
                                            </div>
                                            <div class="media-body tab-content-wrap">
                                                <div class="title"><span class="mn-icon-786"><i
                                                            class="fa-solid fa-satellite-dish"></i></span>BroadBand (Router)
                                                </div>
                                                <div class="description">
                                                    Incorporating modern fiber optic routers into our broadband services revolutionizes your internet experience. 
                                                    These cutting-edge routers harness the power of fiber optics, 
                                                    enabling lightning-fast data transmission and exceptionally reliable connectivity. 
                                                    With their advanced technology, you can enjoy seamless streaming, lag-free gaming,
                                                     and efficient browsing, ensuring that your online activities are always smooth and uninterrupted. 
                                                    Say goodbye to buffering and connectivity issues with our state-of-the-art broadband routers.
                                                </div>
                                                <ul>
                                                    <li><i class="fa-regular fa-circle-check"></i>Fibreoptic Internet Router
                                                        <span class="badge rounded-pill bg-info badge-cust-clr">New</span>
                                                    </li>
                                                    <li><i class="fa-regular fa-circle-check"></i>Automated Payments</li>
                                                    <li><i class="fa-regular fa-circle-check"></i>Free Intallation and Router</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- / tabs_item -->
                                    <div class="tab-pane fade" id="Wifi" role="tabpanel" aria-labelledby="v-pills-Wifi-tab"
                                        tabindex="0">
                                        <div class="d-flex tab-box-wrap">
                                            <div class="service-pic">
                                                <img src="images/tab-contetn-bg-2.png" alt="image">
                                            </div>
                                            <div class="media-body tab-content-wrap">
                                                <div class="title"><span class="mn-icon-786"><i
                                                            class="fa-solid fa-wifi"></i></span>Wifi Zone</div>
                                                <div class="description">We've implemented a robust system to ensure optimal WiFi connectivity in your designated zones. Our aim is to maintain a consistently strong internet connection for your convenience. With our system in place, you can count on seamless access, minimizing any disruptions that might otherwise occur. Your WiFi experience is our priority.
                                                </div>
                                                <ul>
                                                    <li><i class="fa-regular fa-circle-check"></i>Fibreoptic Internet Router
                                                        <span class="badge rounded-pill bg-info badge-cust-clr">New</span>
                                                    </li>
                                                    <li><i class="fa-regular fa-circle-check"></i>Automated Payments</li>
                                                    <li><i class="fa-regular fa-circle-check"></i>Free Intallation and Router</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- / tabs_item -->
                                    <div class="tab-pane fade" id="Pay" role="tabpanel" aria-labelledby="v-pills-Pay-tab"
                                        tabindex="0">
                                        <div class="d-flex tab-box-wrap">
                                            <div class="service-pic">
                                                <img src="images/tab-contetn-bg-3.png" alt="image">
                                            </div>
                                            <div class="media-body tab-content-wrap">
                                                <div class="title"><span class="mn-icon-786"><i
                                                            class="fa-solid fa-money-bills"></i></span>Pay Bills (All User)
                                                </div>
                                                <div class="description">
                                                    We offer a robust system designed to assist you in paying your internet bills and ensuring the security of your online connection. Your access will be activated promptly upon payment, thereby minimizing potential delays that might arise if human intervention were required to manage your connection and payments.

                                                </div>
                                                <ul>
                                                    <li><i class="fa-regular fa-circle-check"></i>Fibreoptic Internet Router
                                                        <span class="badge rounded-pill bg-info badge-cust-clr">New</span>
                                                    </li>
                                                    <li><i class="fa-regular fa-circle-check"></i>Automated Payments</li>
                                                    <li><i class="fa-regular fa-circle-check"></i>Free Intallation and Router</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- / tabs_item -->
                                    <div class="tab-pane fade" id="New" role="tabpanel" aria-labelledby="v-pills-New-tab"
                                        tabindex="0">
                                        <div class="d-flex tab-box-wrap">
                                            <div class="service-pic">
                                                <img src="images/tab-contetn-bg-4.png" alt="image">
                                            </div>
                                            <div class="media-body tab-content-wrap">
                                                <div class="title"><span class="mn-icon-786"><i
                                                            class="fa-solid fa-tower-cell"></i></span>New Connection
                                                </div>
                                                <div class="description">
                                                    Embark on your digital journey hassle-free with our New Connection service, where we provide complimentary installation and a router to get you started. Our expert technicians will ensure a seamless setup, bringing the convenience of high-speed internet right to your doorstep. Say goodbye to setup fees and equipment costs – with us, your new connection comes with everything you need to stay connected from day one.
                                                </div>
                                                <ul>
                                                    <li><i class="fa-regular fa-circle-check"></i>Fibreoptic Internet Router
                                                        <span class="badge rounded-pill bg-info badge-cust-clr">New</span>
                                                    </li>
                                                    <li><i class="fa-regular fa-circle-check"></i>Automated Payments</li>
                                                    <li><i class="fa-regular fa-circle-check"></i>Free Intallation and Router</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- / tabs_item -->
                                    <div class="tab-pane fade" id="Secure" role="tabpanel"
                                        aria-labelledby="v-pills-Secure-tab" tabindex="0">
                                        <div class="d-flex tab-box-wrap">
                                            <div class="service-pic">
                                                <img src="images/tab-contetn-bg-5.png" alt="image">
                                            </div>
                                            <div class="media-body tab-content-wrap">
                                                <div class="title"><span class="mn-icon-786"><i
                                                            class="fa-solid fa-shield-halved"></i></span>Secure Internet
                                                </div>
                                                <div class="description">
                                                    Our commitment to a secure internet experience is unwavering.
                                                     Through advanced encryption protocols and rigorous cybersecurity measures,
                                                      we safeguard your online presence against potential threats. 
                                                      With our secure internet service, you can browse, shop, and communicate with confidence, 
                                                      knowing that your data and privacy are protected.
                                                     Stay safe and secure in the digital realm with our dedicated efforts to fortify your online experience
                                                </div>
                                                <ul>
                                                    <li><i class="fa-regular fa-circle-check"></i>Fibreoptic Internet Router
                                                        <span class="badge rounded-pill bg-info badge-cust-clr">New</span>
                                                    </li>
                                                    <li><i class="fa-regular fa-circle-check"></i>Automated Payments</li>
                                                    <li><i class="fa-regular fa-circle-check"></i>Free Intallation and Router</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- / tab_content -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service  secction  end -->
        <!-- free download section start -->
        <section>
            <div class="personal-speed">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12 col-xl-7">
                            <div class="personal-speed-content">
                                <div class="personal-heading">
                                    <h2>Your personal – speed</h2>
                                </div>
                                <div class="personal-heading-2">
                                    <p>& quality home connection <span> Starting @ $ 22 / mo </span></p>
                                </div>
                                <p>
                                    When choosing among the best high speed Internet providers,
                                    there are several other factors that should be taken into consideration
                                    besides just the available download speeds.
                                </p>
                                <div class="personal-btn-box">
                                    <a href="javascript:;" class="common-button">
                                        More plans
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12 col-xl-5">
                            <div class="personal-img-box">
                                <img src="images/use-phone.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- free download section end -->
        <!-- news question section start -->
        <section>
            <div class="news-ques-wrap">
                <div class="container">
                    <div class="choose-box">
                        <div class="title-wrapper title-service center-title-wrapper ">
                            <h2> <span>Few Questions </span></h2>
                            <span> <img src="images/underline.png" alt="line"> </span>
                        </div>
                        <p class="para-text">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor
                            aliquet.
                            Aenean sollicitudin,
                            lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-6">
                            <div class="faq-content">
                                <div class="acc-container" id="accordionExampleA">
                                    @foreach ($faqs2 as $faq) 
                                    <div class="acc-btn" id="heading{{$faq['id']}}">
                                        <a class="acc_ctrl {{ $loop->first ? 'active' : ''}}" data-bs-toggle="collapse" href="#collapse{{$faq['id']}}"
                                            aria-expanded="false">{{$faq['question']}}
                                        </a>
                                    </div>
                                    <div class="acc-content accordion-collapse collapse" id="collapse{{$faq['id']}}"
                                        aria-labelledby="heading{{$faq['id']}}" data-bs-parent="#accordionExampleB">
                                        <div class="acc-content-inner card card-body">
                                            <div class="tab-contents">
                                               {{ $faq['answer'] }}
                                            </div>
                                        </div>
                                    </div>
                                    
                                    @endforeach
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-6">
                            <div class="faq-content">
                                <div class="acc-container" id="accordionExampleB">
                                    @foreach ($faqs as $faq) 
                                    <div class="acc-btn" id="heading{{$faq['id']}}">
                                        <a class="acc_ctrl {{ $loop->first ? 'active' : ''}}" data-bs-toggle="collapse" href="#collapse{{$faq['id']}}"
                                            aria-expanded="false">{{$faq['question']}}
                                        </a>
                                    </div>
                                    <div class="acc-content accordion-collapse collapse" id="collapse{{$faq['id']}}"
                                        aria-labelledby="heading{{$faq['id']}}" data-bs-parent="#accordionExampleB">
                                        <div class="acc-content-inner card card-body">
                                            <div class="tab-contents">
                                               {{ $faq['answer'] }}
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- our service section end -->
        <!-- choose-us-wrapper section start-->
        <section>
            <div class="service-wrap">
                <div class="container">
                    <div class="choose-box">
                        <div class="title-wrapper title-service center-title-wrapper ">
                            <h2> <span>Why Choose Us </span></h2>
                            <span> <img src="images/underline.png" alt="line"> </span>
                        </div>
                        <p class="para-text">
                            We prioritize providing a seamless online experience, ensuring you can stay connected and productive whenever you need it most.
                            While fast download speeds are undoubtedly important, our commitment to reliability, customer support, and network stability sets us apart from the competition.
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
                                    <h3 class="ourservice-heading"><a href="javascript:;"> Best Speed</a></h3>
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
@stop