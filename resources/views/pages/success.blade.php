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
                            <h2>Jūsų duomenys sėkmingai gauti, susisieksime su jumis per 24h.</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
