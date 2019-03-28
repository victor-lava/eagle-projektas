@extends('layouts/app') {{-- failiukas layouts/app.blade.php --}}

@section('title', 'Home')

@section('content')
{{-- bus neatspausdintas --}}
{{-- sekcijos pavadinimas, kuris bus įterptas į layouts/app.blade.php failiuką --}}
<!--  html komentaras, bus atspausdintas -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <div class="row">
                        <div class="col-lg-9">
                            <h2>Founded and based in <span>Spain</span>, we are Eagle, a design and branding agency with partners worldwide.</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PROJEKTAI -->

<div class="row">
    <div class="col-lg-12">
        <div class="text-center margin-t-30">

            <!-- uzkrauna komponenta iš components/button.blade.php,
                 ir nusiunčia kintamajį $href į komponento vidų -->

           <!--  Tekstas "More works" atkeliauja į komponentą
                 kaip $slot kintamasis -->
            @component('components/button', ['href' => 'http://google.com'])
              More works
            @endcomponent
        </div>
    </div>
</div>
@endsection
