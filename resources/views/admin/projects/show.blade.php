@extends('layouts.auth')

@section('content')

<div class="container">
  @if (session('message'))
    <div class="alert alert-success">
        {{-- atspausdina sesija message --}}
        {{ session('message') }}
    </div>
  @endif

    <div class="row justify-content-center mb-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <span>
                      <span class="badge badge-danger">
                        @if(isset($category->title))
                          {{ $category->title}}
                        @else
                        Uncategorized
                        @endif
                      </span>
                      {{ $project->title }}
                    </span>
                    <img src="{{ $project->image_url }}" height="40" alt="">
                </div>

                <div class="card-body">
                  <div class="row">
                    <div class="col-md-8">
                      <span class="badge badge-success">{{ $project->created_at }}</span>
                      <span class="badge badge-primary">{{ $project->updated_at }}</span>
                      <h3>{{ $project->client }}</h3>
                      <h4>{{ $project->year }}</h4>
                      <p>{!! $project->description !!}</p>
                      {{-- {!! !!} reiškia, jog turinys bus atvaizduojamas kaip HTML kodas,
                           pavojinga, nes potencialiai gali būti įterptas kenkejiškas JS kodas. --}}
                    </div>
                    <div class="col-md-4">
                      <img src="{{ $project->image_url }}" height="270" alt="">
                    </div>
                  </div>
                </div>

                <div class="card-footer d-flex justify-content-between">
                  <a  href="{{ route('projects.edit', $project->id) }}"
                      class="btn btn-primary btn-lg">Koreguoti</a>

                  <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-xs">Ištrinti</button>
                  </form>
                </div>

                {{-- <form action="{{ route('contact.remove') }}" method="post">
                  @csrf
                  <input type="hidden" name="id" value="{{ $contact->id }}">
                  <button type="submit" class="btn btn-danger btn-xs">Ištrinti</button>
                </form> --}}
            </div>
        </div>
    </div>
</div>
@endsection
