@foreach($data->values as $value)

<section class="detail-page-banner">
    <div class="dpb-content">
        <h1>
            C32
        </h1>
        <span>
            <img src="{{ asset('images/fengon-500/title-line.svg') }}" class="img-fluid" width="100%"/>
        </span>
        <p>
            Built for Strength, <br>
            Designed for <br>
            Efficiency
        </p>
    </div>
    <img src="{{ asset('images/cv-c32/c32-banner.jpg') }}" class="img-fluid" width="100%"/>
    <div class="page-banner-btn-div">
        <a href="#" class="btn btn-dark">Book a test drive</a>
    </div>
</section>



<section class="explore-drive-section mt-4">
    <h1 class="nouvelr-font section-title mb-5">Explore the drive</h1>
    <div class="explore-drive-carousel line-dot cr-arrow owl-carousel owl-theme">
        <div class="item">
            <div class="etd-img">
                <img src="{{ asset('images/cv-c32/c32-s1.jpg') }}" class="img-fluid" width="100%"/>
            </div>
            <div class="etc-content">
                <p>
                    The DFSK C31 is the perfect combination of compact size and heavy-duty capability. Designed for businesses who need a practical workhorse, this widened mini truck offers impressive power and exceptional load capacity.
                </p>
            </div>
        </div>
        <div class="item">
            <div class="etd-img">
                <img src="{{ asset('images/cv-c32/c32-s2.jpg') }}" class="img-fluid" width="100%"/>
            </div>
            <div class="etc-content">
                <p>
                    The DFSK C31 is the perfect combination of compact size and heavy-duty capability. Designed for businesses who need a practical workhorse, this widened mini truck offers impressive power and exceptional load capacity.
                </p>
            </div>
        </div>
        <div class="item">
            <div class="etd-img">
                <img src="{{ asset('images/cv-c32/c32-s3.jpg') }}" class="img-fluid" width="100%"/>
            </div>
            <div class="etc-content">
                <p>
                    The DFSK C31 is the perfect combination of compact size and heavy-duty capability. Designed for businesses who need a practical workhorse, this widened mini truck offers impressive power and exceptional load capacity.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="explore-drive-section">
    <div class="container-fluid">
        <h1 class="nouvelr-font section-title mb-5">Features</h1>
        <div class="feature-img-div mb-4">
            <img src="{{ asset('images/cv-c32/c32-feature.jpg') }}" class="img-fluid" width="100%"/>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="ftr-box">
                    <h4 class="nouvelr-font">Spacious Interior</h4>
                    <p class="nouvelr-font">
                        The DFSK C32 prioritizes comfort and functionality. With an exceptionally spacious cabin, there’s ample legroom and headroom for up to five adults. The widened body design ensures maximum interior space for both drivers and passengers, enhancing the overall experience.
                    </p>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="ftr-box">
                    <h4 class="nouvelr-font">High Payload Capacity</h4>
                    <p class="nouvelr-font">
                        With a Gross Vehicle Weight (G.V.W) of 2315 kg and a curb weight of 1172 kg, the C32 is built to handle heavy loads. Its high payload capacity makes it an ideal choice for businesses requiring a dependable and efficient commercial vehicle.
                    </p>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="ftr-box">
                    <h4 class="nouvelr-font">Outstanding Fuel Efficiency</h4>
                    <p class="nouvelr-font">
                        Reduce your operational costs with the DFSK C32’s impressive fuel efficiency. Achieving a fuel consumption of 15.5 km/L, this commercial vehicle minimizes the need for frequent refueling, making it a cost-effective and eco-friendly choice.

                    </p>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="ftr-box">
                    <h4 class="nouvelr-font">Versatile Cargo Space</h4>
                    <p class="nouvelr-font">
                        Designed for utility, the C32 features a versatile cargo box measuring 2060 x 1540 x 370 mm, providing ample room for various loads. The fold-down rear seats enable the transport of longer items, making it adaptable for different needs.

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
                    <img src="{{ asset('images/cv-c32/post-1.jpg') }}" class="img-fluid" width="100%"/>
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
                    <img src="{{ asset('images/cv-c32/post-2.jpg') }}" class="img-fluid" width="100%"/>
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
