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
            <form action="{{ route('categories.update', $category->id)}}" method="post">
              @csrf
              @method('PUT')

              <div class="form-group">
                 <label for="title">Title</label>
                 <input type="text" name="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" id="title" value="{{ $category->title }}">

                 @if($errors->has('title'))
                 <div class="invalid-feedback">
                   {{ $errors->first('title') }}
                 </div>
                 @endif
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg" name="button">Išsaugoti</button>
              </div>
            </form>
        </div>
    </div>
</div>
@endsection
