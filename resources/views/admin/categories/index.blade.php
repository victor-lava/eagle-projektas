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
      <a href="{{ route('categories.create') }}" class="mb-5 btn btn-success btn-block btn-lg">Įdėti Kategoriją</a>
    </div>
  </div>
  @foreach($categories as $category)
    <div class="row justify-content-center mb-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <span>{{ $category->title }}</span>
                </div>

                <div class="card-footer d-flex justify-content-between">
                  <a href="{{ route('categories.show', $category->id) }}" class="btn btn-lg btn-primary">Peržiūrėti</a>


                  <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-xs">Ištrinti</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
  @endforeach
</div>
@endsection
