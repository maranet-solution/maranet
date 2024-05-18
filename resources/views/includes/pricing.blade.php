<section>
    <div class="plan-wrapper pricing-table-boxs">
        <div class="container">
            <div class="choose-box">
                <div class="title-wrapper title-service center-title-wrapper ">
                    <h2> <span>CHOOSE YOUR PLAN </span></h2>
                    <span> <img src="images/underline.png" alt="line"> </span>
                </div>
                <p class="para-text">
                    We offer plans designed to accommodate various internet needs, whether you require basic streaming access or extensive company-wide connectivity.
                </p>
            </div>
            <div class="pricing-table">
                <div class="row">
                    @foreach ($plans as $plan)
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="kc-pricing-tables text-center">
                            <div class="header-pricing">
                                <div class="content-title">
                    <div>{{$plan['name']}}</div>
                    </div>
                    <div class="kc-pricing-price">
                        <span class="content-currency">kes</span>
                        <span class="content-price">{{$plan['price']}}</span>
                        <span class="content-duration">{{$plan['duration']}}</span>
                    </div>
                </div>
                <ul class="content-desc">
                    @foreach (explode("\n", $plan['description']) as $line)
                    <li>{{$line}}
                    </li>
                    @endforeach
                </ul>
                <div class="content-button text-uppercase"><a href="#">Get Now!</a></div>
            </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>