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
                              <h2>{{ $project->title }}</h2>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>


  <section class="">
      <div class="container">

          <div class="row">
              <div class="col-lg-12">
                  <img src="{{ $project->image_url }}" alt="about-img" class="img-fluid img-rounded margin-t-30">
              </div>
          </div>

          <div class="row">
              <div class="col-lg-3">
                  <ul class="project-meta margin-t-50 list-unstyled">
                      <li><h5>Client:</h5>{{ $project->client }}</li>
                      <li class="margin-t-30"><h5>Year:</h5>{{ $project->year }}</li>
                  </ul>
              </div>
              <div class="col-lg-9">
                  <div class="project-desc margin-t-50">
                      <p class="text-muted">{!! $project->description !!}</p>
                  </div>
              </div>
          </div>

      </div> <!-- end container -->
  </section>

@endsection
