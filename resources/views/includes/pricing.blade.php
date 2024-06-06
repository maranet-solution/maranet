<section>
    <div class="noanet-wordpress-hosting-wrappper">
        <div class="container">
            <div class="choose-box">
                <div class="title-wrapper title-service center-title-wrapper ">
                    <h2> <span>Internet Packages</span></h2>
                    <span> <img src="images/underline.png" alt="line"> </span>
                </div>
                <p class="para-text">
                    We offer plans designed to accommodate various internet needs, whether you require basic streaming access or extensive company-wide connectivity.
                </p>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" 
                role="tabpanel" aria-labelledby="pills-home-tab">
                   <div class="tabs-inner-content">
                    @foreach ($plans as $plan)

                      <div class="plan-box-wrapper wow fadeInUp" data-wow-delay="100ms">
                         <div class="plant-text">
                            <div class="title">
                               @if ($loop->iteration ==1)
                                <span> <img src="images/mammal.png" alt="icon"> </span>
                                @endif
                                @if ($loop->iteration ==2)
                                <span> <img src="images/lion.png" alt="icon"> </span>
                                @endif
                                @if ($loop->iteration ==3)
                                <span> <img src="images/elephant.png" alt="icon"> </span>
                                @endif
                               <h4>{{$plan['name']}}</h4>
                            </div>
                            <h2> <span>kes</span>{{$plan['price']}}</h2>
                            <p class="pt-0">Per month</p>
                         </div>
                         <div class="plant-list">
                            @foreach (explode("\n", $plan['description']) as $line)
                            <div class="list">
                                <span> <img src="images/tick.png" alt="icon"> </span>
                                <p>{{$line}} ​</p>
                             </div>
                            @endforeach
                            <div class="center-btn">
                               <a class="customButton"  href="https://wa.me/254703666999?text=Hi Maranet, I am Interested in Internet plan: {{$plan['name'] }}"><span>Get Started</span></a>
                              </div>
                         </div>
                      </div>
                 @endforeach
                   </div>
                </div>
             </div>
        </div>
    </div>
</section>