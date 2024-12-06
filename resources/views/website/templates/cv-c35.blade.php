@foreach($data->values as $value)

<section class="detail-page-banner">
    <div class="dpb-content">
        <h1 class="text-black">
            C35
        </h1>
        <span>
            <img src="{{ asset('images/fengon-500/title-line.svg') }}" class="img-fluid" width="100%"/>
        </span>
        <p class="text-black">
            Super Load  <br>
            Bearing for <br>
            Unmatched City <br>
            Delivery Power
        </p>
    </div>
    <img src="{{ asset('images/cv-c35/c35-banner.jpg') }}" class="img-fluid" width="100%"/>
    <div class="page-banner-btn-div">
        <a href="#" class="btn btn-dark">Book a test drive</a>
    </div>
</section>



<section class="explore-drive-section mt-4">
    <h1 class="nouvelr-font section-title mb-5">Explore the drive</h1>
    <div class="explore-drive-carousel line-dot cr-arrow owl-carousel owl-theme">
        <div class="item">
            <div class="etd-img">
                <img src="{{ asset('images/cv-c35/c35-s1.jpg') }}" class="img-fluid" width="100%"/>
            </div>
            <div class="etc-content">
                <p>
                    The DFSK C35 is engineered for those seeking a dependable and spacious commercial vehicle. With its sturdy construction and generous cargo capacity, this mini truck is perfect for transporting goods, tools, or equipment across urban and rural landscapes. Its efficient engine not only delivers reliable performance but also helps reduce fuel costs, making it a cost-effective choice for everyday operations.
                </p>
            </div>
        </div>
        <div class="item">
            <div class="etd-img">
                <img src="{{ asset('images/cv-c35/c35-s2.jpg') }}" class="img-fluid" width="100%"/>
            </div>
            <div class="etc-content">
                <p>
                    The DFSK C35 is engineered for those seeking a dependable and spacious commercial vehicle. With its sturdy construction and generous cargo capacity, this mini truck is perfect for transporting goods, tools, or equipment across urban and rural landscapes. Its efficient engine not only delivers reliable performance but also helps reduce fuel costs, making it a cost-effective choice for everyday operations.
                </p>
            </div>
        </div>
        <div class="item">
            <div class="etd-img">
                <img src="{{ asset('images/cv-c35/c35-s3.jpg') }}" class="img-fluid" width="100%"/>
            </div>
            <div class="etc-content">
                <p>
                    The DFSK C35 is engineered for those seeking a dependable and spacious commercial vehicle. With its sturdy construction and generous cargo capacity, this mini truck is perfect for transporting goods, tools, or equipment across urban and rural landscapes. Its efficient engine not only delivers reliable performance but also helps reduce fuel costs, making it a cost-effective choice for everyday operations.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="explore-drive-section">
    <div class="container-fluid">
        <h1 class="nouvelr-font section-title mb-5">Features</h1>
        <div class="feature-img-div mb-4">
            <img src="{{ asset('images/cv-c35/c35-feature.jpg') }}" class="img-fluid" width="100%"/>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="ftr-box">
                    <h4 class="nouvelr-font">Comfortable, Spacious Interior</h4>
                    <p class="nouvelr-font">
                        Designed with comfort in mind, the C35 features a roomy cabin with generous headroom and legroom, ensuring a comfortable driving experience, even on longer trips. The ergonomic seating and intuitive dashboard design help reduce fatigue, making city driving and deliveries more manageable.
                    </p>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="ftr-box">
                    <h4 class="nouvelr-font">Automatic Intelligent Headlights</h4>
                    <p class="nouvelr-font">
                        Equipped with automatic headlights, the C35 adjusts to changing light conditions, ensuring optimal visibility and safety during night drives or in dimly lit areas. This intelligent feature enhances convenience without the need for manual adjustments.
                    </p>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="ftr-box">
                    <h4 class="nouvelr-font">Low-Cost, Easy Maintenance</h4>
                    <p class="nouvelr-font">
                        The C35 is designed with affordability and efficiency in mind. Powered by a fuel-efficient 1.5L DVVT gasoline engine, it achieves 15.5 km/L, reducing fuel expenses for businesses. With minimal maintenance needs and reasonable service costs, the C35 allows you to focus on running your business without worrying about high upkeep.


                    </p>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="ftr-box">
                    <h4 class="nouvelr-font">Spacious Cargo Area</h4>
                    <p class="nouvelr-font">

                        The C35 offers over 2.6 meters of cargo length and 1.3 meters of height, providing one of the most spacious cargo areas among city delivery vehicles. This ample space allows businesses to easily transport packages, goods, and supplies, making it ideal for urban deliveries.
                    </p>
                </div>
            </div>
        </div>
        <div class="specification-btn-div mt-4 mb-5">
            <a href="#" class="btn btn-outline-dark">Download Specifications</a>
        </div>
        <div class="cnt-btn-div text-center">
            <a href="#" class="btn btn-dark">
                Contact Us
            </a>
        </div>
    </div>
</section>



<section class="explore-more-section py-5">
    <div class="container-fluid">
        <h1 class="nouvelr-font section-title mb-5">Explore More SUVs</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="exp-more-card mb-4">
                    <img src="{{ asset('images/cv-c35/post-1.jpg') }}" class="img-fluid" width="100%"/>
                    <div class="exp-content">
                        <h4>C31</h4>
                        <a href="#" class="btn btn-outline-light">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="exp-more-card mb-4">
                    <img src="{{ asset('images/cv-c35/post-2.jpg') }}" class="img-fluid" width="100%"/>
                    <div class="exp-content">
                        <h4>C35</h4>
                        <a href="#" class="btn btn-outline-light">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endforeach
