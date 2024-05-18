@extends("layouts.default")

@section("content")
<section>
    <div class="blog-categories-wrapper">
        <div class="container">
            <div class="blog-categories">
                <div class="blog-heading">
                    <h2>Pricing Plans</h2>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb categories-breadcumbs">
                        <li class="breadcrumb-item"><a href="javascript:;">Home <span class="bread-icon"><i
                                        class="fa-solid fa-chevron-right"></i></span></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><span>Pricing Plans </span></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
@include("includes.pricing")

@stop