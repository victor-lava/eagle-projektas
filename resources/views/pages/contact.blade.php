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


            {{-- Klaidų sąrašui --}}
            {{--
            @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
            @endif
            --}}

            {{-- patikrina ar yra sesija, kurios pavadinimas message --}}
            @if (session('message'))
              <div class="alert alert-success">
                  {{-- atspausdina sesija message --}}
                  {{ session('message') }}
              </div>
          @endif

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
                        <div class="col-lg-4">
                            <div class="form-group">

                                  <input type="text"
                                        name="name"
                                        class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                        placeholder="Your Name"
                                        value="{{ old('name') }}"
                                        {{ session('message') ? 'disabled' : ' '}}
                                        >

                                @if($errors->has('name'))
                                  {{-- patikrinu ar input name turi klaidą --}}
                                <div class="invalid-feedback">
                                  {{ $errors->first('name') }}
                                  {{-- atspausdina input name klaidą --}}
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Your Email" value="{{ old('email') }}">

                                @if($errors->has('email'))
                                <div class="invalid-feedback">
                                  {{ $errors->first('email') }}
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" placeholder="863111166" value="{{ old('phone') }}">

                                @if($errors->has('phone'))
                                <div class="invalid-feedback">
                                  {{ $errors->first('phone') }}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" name="subject" class="form-control{{ $errors->has('subject') ? ' is-invalid' : '' }}" placeholder="Subject" value="{{ old('subject') }}">

                                @if($errors->has('subject'))
                                <div class="invalid-feedback">
                                  {{ $errors->first('subject') }}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }}" name="message" rows="5" placeholder="Your Message....">{{ old('message') }}</textarea>
                                @if($errors->has('message'))
                                <div class="invalid-feedback">
                                  {{ $errors->first('message') }}
                                </div>
                                @endif
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
