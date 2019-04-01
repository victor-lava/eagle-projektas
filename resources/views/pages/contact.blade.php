@extends('layouts/app') {{-- failiukas layouts/app.blade.php --}}

@section('title', 'Project')

@section('content')

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <div class="row">
                        <div class="col-lg-9">
                            <h2><span>Let's</span> keep in touch.</h2>

                            <h4 class="subtitle text-muted">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor Aenean sollicitudin, adipisicing elit sed lorem quis bibendum auctor.</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="margin-t-30">
    <div class="container">

        <div class="row margin-t-50">
            <div class="col-lg-4 address-box">
                <div>
                    <h5>Email Address</h5>
                    <p class="text-muted">support.yourdomain@email.com</p>
                </div>
                <div class="margin-t-30">
                    <h5>Telephone</h5>
                    <p class="text-muted">+123 45 56 879</p>
                </div>
                <div class="margin-t-30">
                    <h5>Address</h5>
                    <p class="text-muted">09 Design Street, Downtown Victoria, Australia</p>
                </div>
            </div>
            <div class="col-lg-8">
                <!-- Jei siunčiate duomenis:
                    1. Naudoti POST metodą būtinai apsirašant HTML formą. Pvz. method="POST"
                    2. Formoje turi būti CSRF laukelis, iškviečiamas su csrf_field() komanda. Skirtas apsisaugoti nuo CSRF atakų.
                    3. Routas aprašytas turi būti su post metodu, pvz. Route::post()
                    4. Routo metode (pvz. ContactController@save) išsikviesti duomenis. Pvz.   public function save(Request $request) {}
                    * - nepamiršti, jog HTML formos input laukeliai privalo turėti atribūtą name
                -->
                <form action="/contact" method="POST" class="form-custom">

                  {{ csrf_field() }}

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Your Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="Your Email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" name="subject" class="form-control" placeholder="Subject">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" placeholder="Your Message...."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 text-right">
                            <input type="submit" class="btn btn-dark btn-rounded" value="Send Message">
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </div> <!-- end container -->
</section>


<section class="margin-t-50">
    <div class="container">

        <div class="row margin-t-30">
            <div class="col-lg-2">
                <div class="client-box">
                    <img src="images/clients/clients-1.png" class="img-fluid" alt="client-logo">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="client-box">
                    <img src="images/clients/clients-2.png" class="img-fluid" alt="client-logo">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="client-box">
                    <img src="images/clients/clients-3.png" class="img-fluid" alt="client-logo">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="client-box">
                    <img src="images/clients/clients-4.png" class="img-fluid" alt="client-logo">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="client-box">
                    <img src="images/clients/clients-5.png" class="img-fluid" alt="client-logo">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="client-box">
                    <img src="images/clients/clients-6.png" class="img-fluid" alt="client-logo">
                </div>
            </div>
        </div>

    </div> <!-- end container -->
</section>

@endsection
