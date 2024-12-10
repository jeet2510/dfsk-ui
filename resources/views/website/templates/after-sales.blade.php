@foreach($data->values as $value)
<section class="sales-page-banner">
    <div class="sp-top-title">
        <h1 class="text-uppercase">
            Drive further with<br>
            aftersales support
        </h1>
    </div>
    <img src="{{ asset('images/after-sales/after-sales-banner.jpg') }}" class="img-fluid" width="100%"/>
    <div class="sp-bottom-text">
        <p>
            Visit a service center in<br>
            <span class="font-bold">
                Mussafah, Deira, or Ras Al Khaimah.
            </span>
        </p>
    </div>
</section>

<section class="best-care-section">
    <div class="container-fluid">
        <div class="best-card-div py-4">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="nouvelr-font section-title mb-4">Your DFSK Deserves the Best Care</h1>
                    <div class="row bg-black mb-4">
                        <div class="col-md-4 p-0 order-2 order-sm-2 order-md-1">
                            <div class="best-care-content ftr-box">
                                <h4 class="nouvelr-font">Warranty</h4>
                                <p class="nouvelr-font">
                                    Hit the road worry-free. With DFSK’s standard warranty and extended coverage on key components like the battery, motor, and electric control system, you're always protected.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-8 p-0 order-1 order-sm-1 order-md-2">
                            <div class="best-care-img">
                                <img src="{{ asset('images/after-sales/as-1.jpg') }}" class="img-fluid" width="100%"/>
                            </div>
                        </div>
                    </div>

                    <div class="row bg-black mb-4">
                        <div class="col-md-4 p-0 order-2 order-sm-2 order-md-2">
                            <div class="best-care-content ftr-box">
                                <h4 class="nouvelr-font"> Genuine Parts</h4>
                                <p class="nouvelr-font">
                                    Keep your DFSK running at its best. We only use genuine DFSK parts that meet the highest standards. Available at our authorized dealerships, these parts ensure your vehicle performs just as it was designed to. Why settle for less?
                                </p>
                            </div>
                        </div>
                        <div class="col-md-8 p-0 order-1 order-sm-1 order-md-1">
                            <div class="best-care-img">
                                <img src="{{ asset('images/after-sales/as-2.jpg') }}" class="img-fluid" width="100%"/>
                            </div>
                        </div>
                    </div>

                    <div class="row bg-black mb-4">
                        <div class="col-md-4 p-0 order-2 order-sm-2 order-md-1">
                            <div class="best-care-content ftr-box">
                                <h4 class="nouvelr-font">24/7 Roadside Assistance </h4>
                                <p class="nouvelr-font">
                                    Unexpected flat tire? No problem. With DFSK’s full-risk insurance, 24/7 roadside assistance is just a call away. Day or night, we're here to get you back on the road, fast.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-8 p-0 order-1 order-sm-1 order-md-2">
                            <div class="best-care-img">
                                <img src="{{ asset('images/after-sales/as-3.jpg') }}" class="img-fluid" width="100%"/>
                            </div>
                        </div>
                    </div>

                    <div class="row bg-black mb-4">
                        <div class="col-md-4 p-0 order-2 order-sm-2 order-md-2">
                            <div class="best-care-content ftr-box">
                                <h4 class="nouvelr-font"> Body Shop & Repairs</h4>
                                <p class="nouvelr-font">
                                    When accidents happen, we do more than just repair—we restore. Our body shop will have your DFSK looking as good as new, just like the day you drove it home.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-8 p-0 order-1 order-sm-1 order-md-1">
                            <div class="best-care-img">
                                <img src="{{ asset('images/after-sales/as-4.jpg') }}" class="img-fluid" width="100%"/>
                            </div>
                        </div>
                    </div>

                    <div class="row bg-black mb-4">
                        <div class="col-md-4 p-0 order-2 order-sm-2 order-md-1">
                            <div class="best-care-content ftr-box">
                                <h4 class="nouvelr-font">Insurance Claims</h4>
                                <p class="nouvelr-font">
                                    We handle the paperwork so you don’t have to. Our team will liaise with your insurance company to ensure everything goes smoothly. You focus on the road ahead, and we’ll take care of the rest.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-8 p-0 order-1 order-sm-1 order-md-2">
                            <div class="best-care-img">
                                <img src="{{ asset('images/after-sales/as-5.jpg') }}" class="img-fluid" width="100%"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<h1 class="nouvelr-font section-title py-4">Find a showroom</h1>
<section class="map-section bg-black">

    <div class="accordion map-accordion-box accordion-flush" id="mapaccordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="map-headingOne">
                <button class="accordion-button collapsed" onclick="checkIframe(1)" type="button" data-bs-toggle="collapse" data-bs-target="#map-collapseOne" aria-expanded="true" aria-controls="map-collapseOne">
                    DFSK Deira
                </button>
            </h2>
            <div id="map-collapseOne" class="accordion-collapse collapse show" aria-labelledby="map-headingOne" data-bs-parent="#mapaccordion">
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
                <button class="accordion-button" type="button" onclick="checkIframe(2)" data-bs-toggle="collapse" data-bs-target="#map-collapseTwo" aria-expanded="false" aria-controls="map-collapseTwo">
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
                <button class="accordion-button collapsed" onclick="checkIframe(3)" type="button" data-bs-toggle="collapse" data-bs-target="#map-collapseThree" aria-expanded="false" aria-controls="map-collapseThree">
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
                <button class="accordion-button collapsed" onclick="checkIframe(4)" type="button" data-bs-toggle="collapse" data-bs-target="#map-collapseFour" aria-expanded="false" aria-controls="map-collapseFour">
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
        <div class="map1 map-div">
            <iframe width="100%" height="700" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28866.28890950208!2d55.334151!3d25.260959!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5d00079674f1%3A0x74ba90d91a5bae13!2sSERES%20Dubai%20-%20Deira%20Showroom%20-%20Green%20Motors!5e0!3m2!1sen!2sin!4v1733843649184!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
        <div class="map2 map-div d-none">
            <iframe width="100%" height="700" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29050.90109531895!2d54.35111!3d24.472889!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5e67808054c74b%3A0x45489df9f5beeacd!2sDFSK%20Abu%20Dhabi%20-%20Khalidiyah%20Showroom%20-%20Green%20Motors!5e0!3m2!1sen!2sin!4v1733843599552!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="map3 map-div d-none">
            <iframe width="100%" height="700" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29050.90109531895!2d54.35111!3d24.472889!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5e67808054c74b%3A0x45489df9f5beeacd!2sDFSK%20Abu%20Dhabi%20-%20Khalidiyah%20Showroom%20-%20Green%20Motors!5e0!3m2!1sen!2sin!4v1733843599552!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="map4 map-div d-none">
            <iframe width="100%" height="700" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28756.044670081883!2d55.866958!3d25.720789!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ef675770a37280b%3A0xd5174a61d113c911!2sDFSK%20Ras%20Al%20Khaimah%20Showroom%20-%20Green%20Motors!5e0!3m2!1sen!2sin!4v1733843561366!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>

@endforeach
