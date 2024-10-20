@foreach($data->values as $value)
<section class="home-slider-section">
    <div class="home-carousel line-dot cr-arrow owl-carousel owl-theme">
        <div class="item">
            <div class="banner-div">
                <img src="{{ asset('images/home/slider1.jpg') }}" class="img-fluid" width="100%"/>
                <div class="banner-content">
                    <h1>FENGON 600</h1>
                    <p>
                        Elevate your Drive with Luxury and Tech
                    </p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="banner-div">
                <img src="{{ asset('images/home/slider2.jpg') }}" class="img-fluid" width="100%"/>
                <div class="banner-content">
                    <h1 class="text-white">FENGON IX5</h1>
                    <p class="text-white">
                        Experience Premium Quality and Cutting-Edge Tech
                    </p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="banner-div">
                <img src="{{ asset('images/home/slider3.jpg') }}" class="img-fluid" width="100%"/>
                <div class="banner-content">
                    <h1>FENGON IX7</h1>
                    <p>
                        Indulge in Luxury and Innovation
                    </p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="banner-div">
                <img src="{{ asset('images/home/slider4.jpg') }}" class="img-fluid" width="100%"/>
                <div class="banner-content">
                    <h1 class="text-white">FENGON 500</h1>
                    <p class="text-white">
                        Smart Utility, Unmatched Value
                    </p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="banner-div">
                <img src="{{ asset('images/home/slider5.jpg') }}" class="img-fluid" width="100%"/>
                <div class="banner-content">
                    <h1 class="text-white">FENGON 580</h1>
                    <p class="text-white">
                        The Perfect Multipurpose SUV
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="explore-range-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="explore-head text-center">
                    <h1 class="nouvelr-font section-title">Explore our Range</h1>
                    <div class="ex-tab-div">
                        <!-- Nav pills -->
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="pill" href="#SUV-Tab">SUV</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="pill" href="#Commercial-Tab">Commercial Vehicles</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="explore-body">
                    <div class="tab-content">
                    <div class="tab-pane active" id="SUV-Tab">
                        <div class="explore-img-div">
                            <div class="home-carousel line-dot cr-arrow owl-carousel owl-theme">
                                <div class="item">
                                    <div class="explore-div">
                                        <div class="explore-img-div">
                                            <h1>FENGON 500</h1>
                                            <img src="{{ asset('images/home/explore-range/suv/fengon500.png') }}" class="img-fluid" width="100%"/>
                                        </div>
                                        <div class="explore-btn-div">
                                            <a href="#" class="btn btn-dark cs-btn">
                                                Book Test Drive
                                            </a>
                                            <a href="#" class="btn btn-outline-dark cs-btn">
                                                Learn More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="explore-div">
                                        <div class="explore-img-div">
                                            <h1>FENGON 580</h1>
                                            <img src="{{ asset('images/home/explore-range/suv/fengon580.png') }}" class="img-fluid" width="100%"/>
                                        </div>
                                        <div class="explore-btn-div">
                                            <a href="#" class="btn btn-dark cs-btn">
                                                Book Test Drive
                                            </a>
                                            <a href="#" class="btn btn-outline-dark cs-btn">
                                                Learn More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="explore-div">
                                        <div class="explore-img-div">
                                            <h1>FENGON 600</h1>
                                            <img src="{{ asset('images/home/explore-range/suv/fengon600.png') }}" class="img-fluid" width="100%"/>
                                        </div>
                                        <div class="explore-btn-div">
                                            <a href="#" class="btn btn-dark cs-btn">
                                                Book Test Drive
                                            </a>
                                            <a href="#" class="btn btn-outline-dark cs-btn">
                                                Learn More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="explore-div">
                                        <div class="explore-img-div">
                                            <h1>FENGON IX5</h1>
                                            <img src="{{ asset('images/home/explore-range/suv/fengonix5.png') }}" class="img-fluid" width="100%"/>
                                        </div>
                                        <div class="explore-btn-div">
                                            <a href="#" class="btn btn-dark cs-btn">
                                                Book Test Drive
                                            </a>
                                            <a href="#" class="btn btn-outline-dark cs-btn">
                                                Learn More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="explore-div">
                                        <div class="explore-img-div">
                                            <h1>FENGON IX7</h1>
                                            <img src="{{ asset('images/home/explore-range/suv/fengonix7.png') }}" class="img-fluid" width="100%"/>
                                        </div>
                                        <div class="explore-btn-div">
                                            <a href="#" class="btn btn-dark cs-btn">
                                                Book Test Drive
                                            </a>
                                            <a href="#" class="btn btn-outline-dark cs-btn">
                                                Learn More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Commercial-Tab">
                        <div class="explore-img-div">
                            <div class="home-carousel line-dot cr-arrow owl-carousel owl-theme">
                                <div class="item">
                                    <div class="explore-div">
                                        <div class="explore-img-div">
                                            <h1>C31</h1>
                                            <img src="{{ asset('images/home/explore-range/commercial/c31.png') }}" class="img-fluid" width="100%"/>
                                        </div>
                                        <div class="explore-btn-div">
                                            <a href="#" class="btn btn-dark cs-btn">
                                                Book Test Drive
                                            </a>
                                            <a href="#" class="btn btn-outline-dark cs-btn">
                                                Learn More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="explore-div">
                                        <div class="explore-img-div">
                                            <h1>C32</h1>
                                            <img src="{{ asset('images/home/explore-range/commercial/c32.png') }}" class="img-fluid" width="100%"/>
                                        </div>
                                        <div class="explore-btn-div">
                                            <a href="#" class="btn btn-dark cs-btn">
                                                Book Test Drive
                                            </a>
                                            <a href="#" class="btn btn-outline-dark cs-btn">
                                                Learn More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="explore-div">
                                        <div class="explore-img-div">
                                            <h1>C35</h1>
                                            <img src="{{ asset('images/home/explore-range/commercial/c35.png') }}" class="img-fluid" width="100%"/>
                                        </div>
                                        <div class="explore-btn-div">
                                            <a href="#" class="btn btn-dark cs-btn">
                                                Book Test Drive
                                            </a>
                                            <a href="#" class="btn btn-outline-dark cs-btn">
                                                Learn More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="explore-div">
                                        <div class="explore-img-div">
                                            <h1>K01H</h1>
                                            <img src="{{ asset('images/home/explore-range/commercial/k01h.png') }}" class="img-fluid" width="100%"/>
                                        </div>
                                        <div class="explore-btn-div">
                                            <a href="#" class="btn btn-dark cs-btn">
                                                Book Test Drive
                                            </a>
                                            <a href="#" class="btn btn-outline-dark cs-btn">
                                                Learn More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="advantage-section">
    <h1 class="section-title">The DFSK Advantage</h1>
    <div class="adt-img">
        <img src="{{ asset('images/home/dfsk-image.jpg') }}" class="img-fluid" width="100%"/>
    </div>
    <div class="avdvantage-list-div">
        <div class="container">
            <div class="row">
            <div class="col-md-3">
                <div class="advantage-box">
                    <span>1</span>
                    <p>
                        Luxuriously crafted with premium materials, offering a spacious and lavish seating experience.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="advantage-box">
                    <span>2</span>
                    <p>
                        Upgrade your adventures with DFSK smart SUVs, combining strength and agility.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="advantage-box">
                    <span>3</span>
                    <p>
                        DFSK vehicles are elegantly designed, offering ample luggage space and comfortable seating - perfect for road trips and family travel.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="advantage-box">
                    <span>4</span>
                    <p>
                        Smart is the new standard with DFSK, where keyless entry and climate control redefine intelligence in vehicles
                    </p>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>

<section class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="about-head text-center mb-4">
                    <p class="mb-2">About Us</p>
                    <h1>DISCOVER A RANGE OF AFFORDABLE MOBILITY SOLUTIONS</h1>
                </div>
                <div class="about-body text-center mb-5">
                    <p class="mb-4">
                        DFSK is a leading Chinese automobile manufacturer that is bringing innovation and value to drivers
                        in the UAE. Established in 1986 as part of the Sokon Group, DFSK has evolved from its early days of
                        manufacturing motorcycles and automotive components into a global leader in intelligent vehicle
                        development, desig,n and production.
                    </p>
                    <p>
                        Driven by a commitment to quality, sustainability, and practicality, DFSK offers drivers in the UAE a
                        range of affordable and fuel-efficient cars to suit every need. Its diverse product family includes
                        Fengon and DFSK commercial vehicles.
                    </p>
                </div>
                <div class="about-btn-div text-center">
                    <a href="#" class="btn cs-btn btn-light">Learn more</a>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="map-section">
    <div class="accordion map-accordion-box accordion-flush" id="mapaccordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="map-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#map-collapseOne" aria-expanded="false" aria-controls="map-collapseOne">
                    DFSK Deira
                </button>
            </h2>
            <div id="map-collapseOne" class="accordion-collapse collapse" aria-labelledby="map-headingOne" data-bs-parent="#mapaccordion">
                <div class="accordion-body">
                    <div class="map-address-box">
                        <div class="mb-4">
                            <p>
                                <b>Address:</b> 22A St - Al ittihad Road, Deira, Dubai.
                            </p>
                            <p>
                                <b>Opening Date:</b> 14 November 2022
                            </p>
                            <p>
                                <b>Opening Hours:</b> Monday to Sunday - 09:00–21:00
                            </p>
                        </div>
                        <div class="ma-contact-box mb-4">
                            <h6>Contact:</h6>
                            <p>
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.4902 14.9492L17.0901 12.9775L17.0779 12.9719C16.8495 12.8742 16.6003 12.835 16.3529 12.8579C16.1055 12.8807 15.8677 12.9648 15.6611 13.1027C15.6367 13.1188 15.6133 13.1362 15.591 13.155L13.3176 15.0931C11.8774 14.3935 10.3904 12.9178 9.69087 11.4962L11.6317 9.18827C11.6504 9.16492 11.6682 9.14157 11.685 9.11635C11.8199 8.91022 11.9017 8.67393 11.9232 8.42852C11.9447 8.18311 11.9052 7.93619 11.8083 7.70974V7.69853L9.83097 3.29094C9.70277 2.99511 9.48233 2.74867 9.20256 2.58842C8.92279 2.42816 8.59869 2.36269 8.27865 2.40177C7.01304 2.56831 5.85133 3.18985 5.01049 4.15032C4.16966 5.11079 3.70719 6.34449 3.70948 7.62101C3.70948 15.037 9.74318 21.0707 17.1592 21.0707C18.4357 21.073 19.6694 20.6106 20.6299 19.7697C21.5904 18.9289 22.2119 17.7672 22.3784 16.5016C22.4176 16.1816 22.3523 15.8576 22.1922 15.5779C22.0321 15.2981 21.7859 15.0776 21.4902 14.9492ZM17.1592 19.5763C13.9895 19.5729 10.9507 18.3122 8.70935 16.0709C6.46804 13.8296 5.20736 10.7907 5.20389 7.62101C5.20038 6.70894 5.52898 5.82677 6.12832 5.13926C6.72766 4.45174 7.55676 4.00589 8.46078 3.88497C8.46041 3.8887 8.46041 3.89245 8.46078 3.89618L10.4222 8.28602L8.4916 10.5968C8.47201 10.6193 8.45421 10.6433 8.43837 10.6687C8.29781 10.8844 8.21536 11.1327 8.19899 11.3896C8.18263 11.6465 8.23291 11.9033 8.34496 12.1351C9.19118 13.8658 10.935 15.5965 12.6844 16.4418C12.9178 16.5528 13.1761 16.6013 13.4339 16.5827C13.6918 16.564 13.9404 16.4788 14.1554 16.3353C14.1794 16.3191 14.2025 16.3017 14.2245 16.283L16.4951 14.3459L20.885 16.312C20.885 16.312 20.8924 16.312 20.8952 16.312C20.7758 17.2173 20.3306 18.048 19.643 18.6488C18.9553 19.2497 18.0723 19.5794 17.1592 19.5763Z" fill="white"/>
                                </svg>

                                <a class="text-white" href="tel:04 255 6392">04 255 6392</a>
                            </p>
                            <p>
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.6426 4.51294H3.70961C3.51144 4.51294 3.32138 4.59166 3.18125 4.73179C3.04113 4.87192 2.9624 5.06197 2.9624 5.26015V17.9627C2.9624 18.359 3.11985 18.7391 3.40011 19.0194C3.68036 19.2996 4.06047 19.4571 4.45682 19.4571H20.8954C21.2917 19.4571 21.6718 19.2996 21.9521 19.0194C22.2323 18.7391 22.3898 18.359 22.3898 17.9627V5.26015C22.3898 5.06197 22.3111 4.87192 22.1709 4.73179C22.0308 4.59166 21.8407 4.51294 21.6426 4.51294ZM19.7213 6.00735L12.6761 12.466L5.63086 6.00735H19.7213ZM20.8954 17.9627H4.45682V6.95911L12.1708 14.0305C12.3086 14.157 12.489 14.2272 12.6761 14.2272C12.8632 14.2272 13.0435 14.157 13.1814 14.0305L20.8954 6.95911V17.9627Z" fill="white"/>
                                </svg>

                                <a class="text-white" href="mailto:appointments@greenmotors.ae">appointments@greenmotors.ae</a>
                            </p>
                        </div>
                        <div class="ma-btn-div mb-2">
                            <a href="#" class="btn cs-btn py-2 text-dark bg-white">Book Test Drive</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="map-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#map-collapseTwo" aria-expanded="false" aria-controls="map-collapseTwo">
                    DFSK Khalidiya
                </button>
            </h2>
            <div id="map-collapseTwo" class="accordion-collapse collapse" aria-labelledby="map-headingTwo" data-bs-parent="#mapaccordion">
                <div class="accordion-body">
                    <div class="map-address-box">
                        <div class="mb-4">
                            <p>
                                <b>Address:</b> 317, Mubarak Bin Mohammed St,  Al Khalidiyah,  Abu Dhabi.
                            </p>
                            <p>
                                <b>Opening Date:</b> 14 November 2022
                            </p>
                            <p>
                                <b>Opening Hours:</b> Monday to Sunday 09:00–21:00
                            </p>
                        </div>
                        <div class="ma-contact-box mb-4">
                            <h6>Contact:</h6>
                            <p>
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.4902 14.9492L17.0901 12.9775L17.0779 12.9719C16.8495 12.8742 16.6003 12.835 16.3529 12.8579C16.1055 12.8807 15.8677 12.9648 15.6611 13.1027C15.6367 13.1188 15.6133 13.1362 15.591 13.155L13.3176 15.0931C11.8774 14.3935 10.3904 12.9178 9.69087 11.4962L11.6317 9.18827C11.6504 9.16492 11.6682 9.14157 11.685 9.11635C11.8199 8.91022 11.9017 8.67393 11.9232 8.42852C11.9447 8.18311 11.9052 7.93619 11.8083 7.70974V7.69853L9.83097 3.29094C9.70277 2.99511 9.48233 2.74867 9.20256 2.58842C8.92279 2.42816 8.59869 2.36269 8.27865 2.40177C7.01304 2.56831 5.85133 3.18985 5.01049 4.15032C4.16966 5.11079 3.70719 6.34449 3.70948 7.62101C3.70948 15.037 9.74318 21.0707 17.1592 21.0707C18.4357 21.073 19.6694 20.6106 20.6299 19.7697C21.5904 18.9289 22.2119 17.7672 22.3784 16.5016C22.4176 16.1816 22.3523 15.8576 22.1922 15.5779C22.0321 15.2981 21.7859 15.0776 21.4902 14.9492ZM17.1592 19.5763C13.9895 19.5729 10.9507 18.3122 8.70935 16.0709C6.46804 13.8296 5.20736 10.7907 5.20389 7.62101C5.20038 6.70894 5.52898 5.82677 6.12832 5.13926C6.72766 4.45174 7.55676 4.00589 8.46078 3.88497C8.46041 3.8887 8.46041 3.89245 8.46078 3.89618L10.4222 8.28602L8.4916 10.5968C8.47201 10.6193 8.45421 10.6433 8.43837 10.6687C8.29781 10.8844 8.21536 11.1327 8.19899 11.3896C8.18263 11.6465 8.23291 11.9033 8.34496 12.1351C9.19118 13.8658 10.935 15.5965 12.6844 16.4418C12.9178 16.5528 13.1761 16.6013 13.4339 16.5827C13.6918 16.564 13.9404 16.4788 14.1554 16.3353C14.1794 16.3191 14.2025 16.3017 14.2245 16.283L16.4951 14.3459L20.885 16.312C20.885 16.312 20.8924 16.312 20.8952 16.312C20.7758 17.2173 20.3306 18.048 19.643 18.6488C18.9553 19.2497 18.0723 19.5794 17.1592 19.5763Z" fill="white"/>
                                </svg>

                                <a class="text-white" href="tel:02 553 0362">02 553 0362</a>
                            </p>
                            <p>
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.6426 4.51294H3.70961C3.51144 4.51294 3.32138 4.59166 3.18125 4.73179C3.04113 4.87192 2.9624 5.06197 2.9624 5.26015V17.9627C2.9624 18.359 3.11985 18.7391 3.40011 19.0194C3.68036 19.2996 4.06047 19.4571 4.45682 19.4571H20.8954C21.2917 19.4571 21.6718 19.2996 21.9521 19.0194C22.2323 18.7391 22.3898 18.359 22.3898 17.9627V5.26015C22.3898 5.06197 22.3111 4.87192 22.1709 4.73179C22.0308 4.59166 21.8407 4.51294 21.6426 4.51294ZM19.7213 6.00735L12.6761 12.466L5.63086 6.00735H19.7213ZM20.8954 17.9627H4.45682V6.95911L12.1708 14.0305C12.3086 14.157 12.489 14.2272 12.6761 14.2272C12.8632 14.2272 13.0435 14.157 13.1814 14.0305L20.8954 6.95911V17.9627Z" fill="white"/>
                                </svg>

                                <a class="text-white" href="mailto:appointments@greenmotors.ae">appointments@greenmotors.ae</a>
                            </p>
                        </div>
                        <div class="ma-btn-div mb-2">
                            <a href="#" class="btn cs-btn py-2 text-dark bg-white">Book Test Drive</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="map-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#map-collapseThree" aria-expanded="false" aria-controls="map-collapseThree">
                    DFSK Musaffah
                </button>
            </h2>
            <div id="map-collapseThree" class="accordion-collapse collapse" aria-labelledby="map-headingThree" data-bs-parent="#mapaccordion">
                <div class="accordion-body">
                    <div class="map-address-box">
                        <div class="mb-4">
                            <p>
                                <b>Address:</b> M16, 8th St, Musaffah, Musaffah Industrial,  Abu Dhabi.
                            </p>
                            <p>
                                <b>Opening Date:</b> 14 November 2022
                            </p>
                            <p>
                                <b>Opening Hours:</b> Monday to Sunday 09:00–18:30
                            </p>
                        </div>
                        <div class="ma-contact-box mb-4">
                            <h6>Contact:</h6>
                            <p>
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.4902 14.9492L17.0901 12.9775L17.0779 12.9719C16.8495 12.8742 16.6003 12.835 16.3529 12.8579C16.1055 12.8807 15.8677 12.9648 15.6611 13.1027C15.6367 13.1188 15.6133 13.1362 15.591 13.155L13.3176 15.0931C11.8774 14.3935 10.3904 12.9178 9.69087 11.4962L11.6317 9.18827C11.6504 9.16492 11.6682 9.14157 11.685 9.11635C11.8199 8.91022 11.9017 8.67393 11.9232 8.42852C11.9447 8.18311 11.9052 7.93619 11.8083 7.70974V7.69853L9.83097 3.29094C9.70277 2.99511 9.48233 2.74867 9.20256 2.58842C8.92279 2.42816 8.59869 2.36269 8.27865 2.40177C7.01304 2.56831 5.85133 3.18985 5.01049 4.15032C4.16966 5.11079 3.70719 6.34449 3.70948 7.62101C3.70948 15.037 9.74318 21.0707 17.1592 21.0707C18.4357 21.073 19.6694 20.6106 20.6299 19.7697C21.5904 18.9289 22.2119 17.7672 22.3784 16.5016C22.4176 16.1816 22.3523 15.8576 22.1922 15.5779C22.0321 15.2981 21.7859 15.0776 21.4902 14.9492ZM17.1592 19.5763C13.9895 19.5729 10.9507 18.3122 8.70935 16.0709C6.46804 13.8296 5.20736 10.7907 5.20389 7.62101C5.20038 6.70894 5.52898 5.82677 6.12832 5.13926C6.72766 4.45174 7.55676 4.00589 8.46078 3.88497C8.46041 3.8887 8.46041 3.89245 8.46078 3.89618L10.4222 8.28602L8.4916 10.5968C8.47201 10.6193 8.45421 10.6433 8.43837 10.6687C8.29781 10.8844 8.21536 11.1327 8.19899 11.3896C8.18263 11.6465 8.23291 11.9033 8.34496 12.1351C9.19118 13.8658 10.935 15.5965 12.6844 16.4418C12.9178 16.5528 13.1761 16.6013 13.4339 16.5827C13.6918 16.564 13.9404 16.4788 14.1554 16.3353C14.1794 16.3191 14.2025 16.3017 14.2245 16.283L16.4951 14.3459L20.885 16.312C20.885 16.312 20.8924 16.312 20.8952 16.312C20.7758 17.2173 20.3306 18.048 19.643 18.6488C18.9553 19.2497 18.0723 19.5794 17.1592 19.5763Z" fill="white"/>
                                </svg>

                                <a class="text-white" href="tel:02 555 5018">02 555 5018</a>
                            </p>
                            <p>
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.6426 4.51294H3.70961C3.51144 4.51294 3.32138 4.59166 3.18125 4.73179C3.04113 4.87192 2.9624 5.06197 2.9624 5.26015V17.9627C2.9624 18.359 3.11985 18.7391 3.40011 19.0194C3.68036 19.2996 4.06047 19.4571 4.45682 19.4571H20.8954C21.2917 19.4571 21.6718 19.2996 21.9521 19.0194C22.2323 18.7391 22.3898 18.359 22.3898 17.9627V5.26015C22.3898 5.06197 22.3111 4.87192 22.1709 4.73179C22.0308 4.59166 21.8407 4.51294 21.6426 4.51294ZM19.7213 6.00735L12.6761 12.466L5.63086 6.00735H19.7213ZM20.8954 17.9627H4.45682V6.95911L12.1708 14.0305C12.3086 14.157 12.489 14.2272 12.6761 14.2272C12.8632 14.2272 13.0435 14.157 13.1814 14.0305L20.8954 6.95911V17.9627Z" fill="white"/>
                                </svg>

                                <a class="text-white" href="mailto:appointments@greenmotors.ae">appointments@greenmotors.ae</a>
                            </p>
                        </div>
                        <div class="ma-btn-div mb-2">
                            <a href="#" class="btn cs-btn py-2 text-dark bg-white">Book Test Drive</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="map-headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#map-collapseFour" aria-expanded="false" aria-controls="map-collapseFour">
                    DFSK  Ras Al Khaimah
                </button>
            </h2>
            <div id="map-collapseFour" class="accordion-collapse collapse" aria-labelledby="map-headingFour" data-bs-parent="#mapaccordion">
                <div class="accordion-body">
                    <div class="map-address-box">
                        <div class="mb-4">
                            <p>
                                <b>Address:</b> 23 Aqaq Rd, Khalifa Bin Zayed City, Ras al Khaimah.
                            </p>
                            <p>
                                <b>Opening Date:</b> 14 November 2022
                            </p>
                            <p>
                                <b>Opening Hours:</b> Monday to Sunday 09:00–21:00
                            </p>
                        </div>
                        <div class="ma-contact-box mb-4">
                            <h6>Contact:</h6>
                            <p>
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.4902 14.9492L17.0901 12.9775L17.0779 12.9719C16.8495 12.8742 16.6003 12.835 16.3529 12.8579C16.1055 12.8807 15.8677 12.9648 15.6611 13.1027C15.6367 13.1188 15.6133 13.1362 15.591 13.155L13.3176 15.0931C11.8774 14.3935 10.3904 12.9178 9.69087 11.4962L11.6317 9.18827C11.6504 9.16492 11.6682 9.14157 11.685 9.11635C11.8199 8.91022 11.9017 8.67393 11.9232 8.42852C11.9447 8.18311 11.9052 7.93619 11.8083 7.70974V7.69853L9.83097 3.29094C9.70277 2.99511 9.48233 2.74867 9.20256 2.58842C8.92279 2.42816 8.59869 2.36269 8.27865 2.40177C7.01304 2.56831 5.85133 3.18985 5.01049 4.15032C4.16966 5.11079 3.70719 6.34449 3.70948 7.62101C3.70948 15.037 9.74318 21.0707 17.1592 21.0707C18.4357 21.073 19.6694 20.6106 20.6299 19.7697C21.5904 18.9289 22.2119 17.7672 22.3784 16.5016C22.4176 16.1816 22.3523 15.8576 22.1922 15.5779C22.0321 15.2981 21.7859 15.0776 21.4902 14.9492ZM17.1592 19.5763C13.9895 19.5729 10.9507 18.3122 8.70935 16.0709C6.46804 13.8296 5.20736 10.7907 5.20389 7.62101C5.20038 6.70894 5.52898 5.82677 6.12832 5.13926C6.72766 4.45174 7.55676 4.00589 8.46078 3.88497C8.46041 3.8887 8.46041 3.89245 8.46078 3.89618L10.4222 8.28602L8.4916 10.5968C8.47201 10.6193 8.45421 10.6433 8.43837 10.6687C8.29781 10.8844 8.21536 11.1327 8.19899 11.3896C8.18263 11.6465 8.23291 11.9033 8.34496 12.1351C9.19118 13.8658 10.935 15.5965 12.6844 16.4418C12.9178 16.5528 13.1761 16.6013 13.4339 16.5827C13.6918 16.564 13.9404 16.4788 14.1554 16.3353C14.1794 16.3191 14.2025 16.3017 14.2245 16.283L16.4951 14.3459L20.885 16.312C20.885 16.312 20.8924 16.312 20.8952 16.312C20.7758 17.2173 20.3306 18.048 19.643 18.6488C18.9553 19.2497 18.0723 19.5794 17.1592 19.5763Z" fill="white"/>
                                </svg>

                                <a class="text-white" href="tel:07 243 1363">07 243 1363</a>
                            </p>
                            <p>
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.6426 4.51294H3.70961C3.51144 4.51294 3.32138 4.59166 3.18125 4.73179C3.04113 4.87192 2.9624 5.06197 2.9624 5.26015V17.9627C2.9624 18.359 3.11985 18.7391 3.40011 19.0194C3.68036 19.2996 4.06047 19.4571 4.45682 19.4571H20.8954C21.2917 19.4571 21.6718 19.2996 21.9521 19.0194C22.2323 18.7391 22.3898 18.359 22.3898 17.9627V5.26015C22.3898 5.06197 22.3111 4.87192 22.1709 4.73179C22.0308 4.59166 21.8407 4.51294 21.6426 4.51294ZM19.7213 6.00735L12.6761 12.466L5.63086 6.00735H19.7213ZM20.8954 17.9627H4.45682V6.95911L12.1708 14.0305C12.3086 14.157 12.489 14.2272 12.6761 14.2272C12.8632 14.2272 13.0435 14.157 13.1814 14.0305L20.8954 6.95911V17.9627Z" fill="white"/>
                                </svg>

                                <a class="text-white" href="mailto:appointments@greenmotors.ae">appointments@greenmotors.ae</a>
                            </p>
                        </div>
                        <div class="ma-btn-div mb-2">
                            <a href="#" class="btn cs-btn py-2 text-dark bg-white">Book Test Drive</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="map-box" style="width: 100%">
        <iframe width="100%" height="700" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Hili%20Tower%20B+()&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps systems</a></iframe>
    </div>
</section>

<section class="blog-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="section-title mb-5">Explore Recent Blogs</p>
            </div>
            <div class="col-md-4">
                <div class="blog-card mb-3">
                    <div class="blog-img">
                        <img src="{{ asset('images/home/blog1.jpg') }}" class="img-fluid" width="100%"/>
                    </div>
                    <div class="blog-content">
                        <small>2024-06-20</small>
                        <p>
                            The Best Fuel-Efficient SUVs in the UAE: Balancing Performance and Economy
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="blog-card mb-3">
                    <div class="blog-img">
                        <img src="{{ asset('images/home/blog2.jpg') }}" class="img-fluid" width="100%"/>
                    </div>
                    <div class="blog-content">
                        <small>May 28, 2024</small>
                        <p>
                            Low Maintenance SUVs in the UAE: Top Picks for Hassle-Free Ownership
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="blog-card mb-3">
                    <div class="blog-img">
                        <img src="{{ asset('images/home/blog3.jpg') }}" class="img-fluid" width="100%"/>
                    </div>
                    <div class="blog-content">
                        <small>May 23, 2024</small>
                        <p>
                            The Best Fuel-Efficient SUVs in the UAE: Balancing Performance and Economy
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 text-center mt-5">
                <a href="#" class="btn btn-dark cs-btn py-2 text-white">View All</a>
            </div>
        </div>
    </div>
</section>

@endforeach
