@foreach($data->values as $value)
<section class="about-page-banner">
    <img src="{{ asset('images/home/h-1.jpg') }}" class="img-fluid" width="100%"/>
</section>

<section class="offer-content-section">
    <div class="container-fluid">
        <div class="offer-content">
            <h1>Fengon SUV for AED 59,000 or AED 904/month”</h1>

            <h3>Move your way</h3>

            <p>
                Drive a new Fengon SUV for as low as AED 59,000 or AED 904/month. You can also save up to AED 38,000 and enjoy unbeatable benefits like:
            </p>
            <ul>
                <li>
                    5-year or 100,000 km manufacturer warranty

                </li>
                <li>
                    6-month or 10,000 km service 

                </li>
                <li>
                    3-year roadside assistance

                </li>
                <li>
                    Free registration
                </li>
            </ul>
            <p>T&Cs apply.</p>

        </div>
    </div>
</section>

<section class="inquiry-form-section pb-md-5">
    <div class="container-fluid">
        <h1 class="nouvelr-font section-title text-black pb-4">Inquire Now</h1>
        <form>
            <div class="inquiry-form-div">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>First Name*</label>
                            <input class="form-control" type="text">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Last Name*</label>
                            <input class="form-control" type="text">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Phone Number*</label>
                            <input class="form-control" type="text">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Model of interest*</label>
                            <select class="form-control">
                                <option>Interested in a SUV model</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control" placeholder="Type your message" rows="5"></textarea>
                        </div>
                        <p class="note-text">
                            * Stars are mandetory
                        </p>

                    </div>
                    <div class="col-md-12">
                        <div class="form-btn-div">
                            <button class="btn btn-dark">
                                Submit
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

@endforeach
