@foreach($data->values as $value)

<section class="detail-page-banner">
    <div class="dpb-content">
        <h1>
            K01H
        </h1>
        <span>
            <img src="{{ asset('images/fengon-500/title-line.svg') }}" class="img-fluid" width="100%"/>
        </span>
        <p>
            The Mini Truck   <br>
            That Delivers <br>
            Power and  <br>
            Capacity
        </p>
    </div>
    <img src="{{ asset('images/k01h/k01h-banner.jpg') }}" class="img-fluid" width="100%"/>
    <div class="page-banner-btn-div">
        <a href="#" class="btn btn-dark">Book a test drive</a>
    </div>
</section>



<section class="explore-drive-section mt-4">
    <h1 class="nouvelr-font section-title mb-5">Explore the drive</h1>
    <div class="explore-drive-carousel line-dot cr-arrow owl-carousel owl-theme">
        <div class="item">
            <div class="etd-img">
                <img src="{{ asset('images/k01h/k01h-s1.jpg') }}" class="img-fluid" width="100%"/>
            </div>
            <div class="etc-content">
                <p>
                    The DFSK K01H is a versatile and efficient commercial vehicle designed to meet the demands of modern businesses. Its compact size allows for easy navigation through crowded city streets, making it ideal for urban deliveries and services. With a strong payload capacity, the K01H can handle a variety of loads, from tools to products, ensuring your operations run smoothly.
                </p>
            </div>
        </div>
        <div class="item">
            <div class="etd-img">
                <img src="{{ asset('images/k01h/k01h-s2.jpg') }}" class="img-fluid" width="100%"/>
            </div>
            <div class="etc-content">
                <p>
                    The DFSK K01H is a versatile and efficient commercial vehicle designed to meet the demands of modern businesses. Its compact size allows for easy navigation through crowded city streets, making it ideal for urban deliveries and services. With a strong payload capacity, the K01H can handle a variety of loads, from tools to products, ensuring your operations run smoothly.
                </p>
            </div>
        </div>

    </div>
</section>

<section class="explore-drive-section">
    <div class="container-fluid">
        <h1 class="nouvelr-font section-title mb-5">Features</h1>
        <div class="feature-img-div mb-4">
            <img src="{{ asset('images/k01h/k01h-feature.jpg') }}" class="img-fluid" width="100%"/>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="ftr-box">
                    <h4 class="nouvelr-font">Compact and Maneuverable</h4>
                    <p class="nouvelr-font">
                        With a compact size and a small turning radius, the K01H is built for navigating narrow streets and tight spaces. This makes it a perfect fit for city driving, allowing businesses to handle deliveries and other urban tasks efficiently.
                    </p>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="ftr-box">
                    <h4 class="nouvelr-font">Straightforward<br>
                        Entertainment System</h4>
                    <p class="nouvelr-font">
                        The K01H comes equipped with a simple, easy-to-use entertainment system, featuring an MP3 player that keeps drivers entertained during their journeys. Whether for long drives or short trips, this feature adds a touch of convenience to everyday work.
                    </p>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="ftr-box">
                    <h4 class="nouvelr-font">Clear, Informative Display</h4>
                    <p class="nouvelr-font">
                        The C35 is designed with affordability and efficiency in mind. Powered by a fuel-efficient 1.5L DVVT gasoline engine, it achieves 15.5 km/L, reducing fuel expenses for businesses. With minimal maintenance needs and reasonable service costs, the C35 allows you to focus on running your business without worrying about high upkeep.


                    </p>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="ftr-box">
                    <h4 class="nouvelr-font">Spacious, Comfortable 2-Seater Interior</h4>
                    <p class="nouvelr-font">

                        The DFSK K01H offers a spacious 2-seater cabin, providing ample room for both driver and passenger to travel comfortably. Designed with practicality and comfort in mind, this commercial vehicle is well-suited for long hours on the road, making it an efficient choice for businesses.
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
                    <img src="{{ asset('images/k01h/post-1.jpg') }}" class="img-fluid" width="100%"/>
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
                    <img src="{{ asset('images/k01h/post-2.jpg') }}" class="img-fluid" width="100%"/>
                    <div class="exp-content">
                        <h4>c32</h4>
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
