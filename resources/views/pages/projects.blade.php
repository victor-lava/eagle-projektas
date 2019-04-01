@extends('layouts/app') {{-- failiukas layouts/app.blade.php --}}

@section('title', 'Projects')

@section('content')

  <section>
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="page-title text-center">
                      <div class="row">
                          <div class="col-lg-12">
                              <h2><span>Latest Works & Projects.</span></h2>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  @component('partials/gallery', ['projects' => $projects,
                                  'isCenter' => true])
  @endcomponent


@endsection
