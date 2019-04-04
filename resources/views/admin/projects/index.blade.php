@extends('layouts.auth')

@section('content')

<div class="container">
  @if (session('message'))
    <div class="alert alert-success">
        {{-- atspausdina sesija message --}}
        {{ session('message') }}
    </div>
  @endif
  <div class="row">
    <div class="col-md-12">
      <a href="{{ route('projects.create') }}" class="mb-5 btn btn-success btn-block btn-lg">Įdėti Projektą</a>
    </div>
  </div>
  @foreach($projects as $project)
    <div class="row justify-content-center mb-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <span>{{ $project->title }}</span>
                    <img src="{{ $project->image_url }}" height="40" alt="">
                </div>

                <div class="card-footer d-flex justify-content-between">
                  <a  href="{{ route('projects.show', $project->id) }}"
                      class="btn btn-primary btn-lg">Peržiūrėti</a>

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
  @endforeach
</div>
@endsection
