@extends("layouts.default")

@section("content")
    
<section>
    <div class="blog-categories-wrapper">
        <div class="container">
            <div class="blog-categories">
                <div class="blog-heading">
                    <h2>Frequently Ask Question</h2>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb categories-breadcumbs">
                        <li class="breadcrumb-item"><a href="javascript:;">Home <span class="bread-icon"><i
                                        class="fa-solid fa-chevron-right"></i></span></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><span> FAQ </span></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!--  blog categories wrapper end-->
<!-- blog detail wrapper start -->
<section>
    <div class="blog-detail-wrapper">
        <div class="container">
            <div class="row">
               
                <div class="col-12 col-md-12  col-lg-9 col-xl-9">
                    <div class="left-blog faq-blog-left">
                        <div class="comment-form-box mt-0 faq-comment-box">
                            <div class="choose-box">
                                <div class="title-wrapper title-service center-title-wrapper ">
                                    <h2> <span>Maranet's F.A.Q. </span></h2>
                                    <span> <img src="images/underline.png" alt="line"> </span>
                                </div>
                                <p class="contact-para">
                                    Check out our most frequently asked questions, maybe they will help answer the questions you already have,
                                    If not, feel free to ask or contacting our support team.
                                </p>
                            </div>
                            <div class="search-form">
                                <form action="#" method="get">
                                    <div class="input-group">
                                        <ul class="w-100">
                                            <li class="w-100">
                                                <input type="text" placeholder="Search" name="s"
                                                    class="apus-search form-control input-sm" aria-label="Search"
                                                    aria-describedby="basic-addon2">
                                            </li>
                                            <li>
                                                <span class="input-group-btn" id="basic-addon2">
                                                    <button type="submit" class="btn"><i
                                                            class="fa fa-search"></i></button>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <input type="hidden" name="post_type" value="page" class="post_type">
                                </form>
                            </div>
                        </div>
                        <div class="faq-content">
                            @foreach ($faqs as $faq)
                            <div class="acc-container" id="accordion{{$faq['id']}}">

                                <div class="acc-btn" id="heading{{$faq['id']}}">
                                    <a class="acc_ctrl {{($loop->first) ? 'active' : ''}}" data-bs-toggle="collapse" href="#collapse{{$faq['id']}}"
                                        aria-expanded="true" aria-controls="collapse{{$faq['id']}}">{{$faq['question']}}</a>
                                </div>
                                <div class="acc-content accordion-collapse collapse {{($loop->first) ? 'show' : ''}}" id="collapse{{$faq['id']}}"
                                    aria-labelledby="heading{{$faq['id']}}" data-bs-parent="#accordion{{$faq['id']}}">
                                    <div class="acc-content-inner card card-body">
                                        <div class="tab-contents">
                                            {{$faq['answer']}}
                                          
                                        </div>
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
@stop