@extends("layouts.default")

@section("content")
<section>
    <div class="blog-categories-wrapper">
        <div class="container">
            <div class="blog-categories">
                <div class="blog-heading">
                    <h2>Contact Us</h2>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb categories-breadcumbs">
                        <li class="breadcrumb-item"><a href="javascript:;">Home <span class="bread-icon"><i
                                        class="fa-solid fa-chevron-right"></i></span></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><span> Contact Us</span></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!--  blog categories wrapper end-->
<!-- contact us box start -->
<section>
    <div class="contact-us-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 cl-md-6 col-lg-3">
                    <div class="contact-detail-box">
                        <div>
                            <img src="images/fb1.png" alt="img" class="mx-auto d-block">
                        </div>
                        <div class="content-title"><a href="javascript:;">Address</a></div>
                        <div class="content-desc">
                            <p>
                                Kims Plaza, 3rd Floor, Room D3,
                                Narok Town, Narok, Kenya
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 cl-md-6 col-lg-3">
                    <div class="contact-detail-box">
                        <div>
                            <img src="images/fb2.png" alt="img" class="mx-auto d-block">
                        </div>
                        <div class="content-title"><a href="javascript:;">Phone</a></div>
                        <div class="content-desc">
                            <p>
                                (+254) 703666999 <br>
                                <span>.<span>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 cl-md-6 col-lg-3">
                    <div class="contact-detail-box">
                        <div>
                            <img src="images/fb2.png" alt="img" class="mx-auto d-block">
                        </div>
                        <div class="content-title"><a href="javascript:;">Whatsapp</a></div>
                        <div class="content-desc">
                            <p>
                                (+254) 703666999<br>
                                <span>.<span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 cl-md-6 col-lg-3">
                    <div class="contact-detail-box">
                        <div>
                            <img src="images/fb4.png" alt="img" class="mx-auto d-block">
                        </div>
                        <div class="content-title"><a href="javascript:">Email</a></div>
                        <div class="content-desc">
                            <p>
                                <a href="mailto:info@maranat.co.ke">info@maranat.co.ke</a>
                                <a href="mailto:support@maranat.co.ke">support@maranat.co.ke</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include("includes.map")
@stop