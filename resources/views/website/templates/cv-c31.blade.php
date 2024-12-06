@foreach($data->values as $value)

<section class="detail-page-banner">
    <div class="dpb-content">
        <h1>
            C31
        </h1>
        <span>
            <img src="{{ asset('images/fengon-500/title-line.svg') }}" class="img-fluid" width="100%"/>
        </span>
        <p>
            The Perfect Blend<br>
            of Efficiency and <br>
            Power
        </p>
    </div>
    <img src="{{ asset('images/cv-c31/c31-banner.jpg') }}" class="img-fluid" width="100%"/>
    <div class="page-banner-btn-div">
        <a href="#" class="btn btn-dark">Book a test drive</a>
    </div>
</section>



<section class="explore-drive-section mt-4">
    <h1 class="nouvelr-font section-title mb-5">Explore the drive</h1>
    <div class="explore-drive-carousel line-dot cr-arrow owl-carousel owl-theme">
        <div class="item">
            <div class="etd-img">
                <img src="{{ asset('images/cv-c31/c31-s1.jpg') }}" class="img-fluid" width="100%"/>
            </div>
            <div class="etc-content">
                <p>
                    The DFSK C31 is the perfect combination of compact size and heavy-duty capability. Designed for businesses who need a practical workhorse, this widened mini truck offers impressive power and exceptional load capacity.
                </p>
            </div>
        </div>
        <div class="item">
            <div class="etd-img">
                <img src="{{ asset('images/cv-c31/c31-s2.jpg') }}" class="img-fluid" width="100%"/>
            </div>
            <div class="etc-content">
                <p>
                    The DFSK C31 is the perfect combination of compact size and heavy-duty capability. Designed for businesses who need a practical workhorse, this widened mini truck offers impressive power and exceptional load capacity.
                </p>
            </div>
        </div>
        <div class="item">
            <div class="etd-img">
                <img src="{{ asset('images/cv-c31/c31-s3.jpg') }}" class="img-fluid" width="100%"/>
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
            <img src="{{ asset('images/cv-c31/c31-feature.jpg') }}" class="img-fluid" width="100%"/>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="ftr-box">
                    <h4 class="nouvelr-font">Spacious and Comfortable Interior</h4>
                    <p class="nouvelr-font">
                        The interior of the C31 is designed for practicality. It provides ample legroom and headroom, accommodating up to five adults comfortably. The thoughtful design ensures that this commercial vehicle meets the needs of businesses looking for both utility and comfort.
                    </p>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="ftr-box">
                    <h4 class="nouvelr-font">Exceptional Fuel Efficiency</h4>
                    <p class="nouvelr-font">
                        DFSK prioritizes affordability and efficiency in its vehicles. The C31 is equipped with a fuel-efficient 1.5L engine that delivers an impressive fuel economy of 18 km/L. This efficiency helps businesses reduce fuel expenses, allowing for better resource management.
                    </p>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="ftr-box">
                    <h4 class="nouvelr-font">Compact Design for Urban Use</h4>
                    <p class="nouvelr-font">
                        The C31 reflects DFSK’s commitment to providing practical solutions for businesses in the UAE. With a compact length of just 4.7 meters, this vehicle is highly maneuverable, making it ideal for navigating narrow city streets and tight parking spaces.
                    </p>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="ftr-box">
                    <h4 class="nouvelr-font">High Payload Capacity</h4>
                    <p class="nouvelr-font">
                        Despite its compact size, the C31 offers a robust payload capacity of up to 2,295 kg. With a generous cargo area measuring 2900 x 1540 x 370 mm, this commercial vehicle is designed to accommodate a variety of loads, making it a reliable option for businesses that require efficient transport solutions.

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
                    <img src="{{ asset('images/cv-c31/post-1.jpg') }}" class="img-fluid" width="100%"/>
                    <div class="exp-content">
                        <h4>C32</h4>
                        <a href="#" class="btn btn-outline-light">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="exp-more-card mb-4">
                    <img src="{{ asset('images/cv-c31/post-2.jpg') }}" class="img-fluid" width="100%"/>
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
