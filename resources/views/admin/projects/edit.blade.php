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
            <form action="{{ route('projects.update', $project->id)}}" method="post">
              @csrf
              @method('PUT')

              <div class="form-group">
                 <label for="title">Title</label>
                 <input type="text" name="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" id="title" value="{{ $project->title }}">

                 @if($errors->has('title'))
                 <div class="invalid-feedback">
                   {{ $errors->first('title') }}
                 </div>
                 @endif
              </div>
              <div class="form-group row">
                 <div class="col-md-4">
                   <label for="title">Year</label>
                   <input type="text" name="year" placeholder="Year" class="form-control{{ $errors->has('year') ? ' is-invalid' : '' }}" id="year" value="{{ $project->year }}">

                    @if($errors->has('year'))
                    <div class="invalid-feedback">
                      {{ $errors->first('year') }}
                    </div>
                    @endif
                 </div>
                 <div class="col-md-4">
                    <label for="title">Client</label>
                   <input type="text" name="client" placeholder="Client" class="form-control{{ $errors->has('client') ? ' is-invalid' : '' }}" id="client" value="{{ $project->client }}">

                   @if($errors->has('client'))
                   <div class="invalid-feedback">
                     {{ $errors->first('client') }}
                   </div>
                   @endif
                 </div>
                 <div class="col-md-4">

                   <label for="title">Kategorija</label>

                   <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="kategorija">Kategorija</label>
                    </div>

                    {{--  Sulyginate seną reikšmę su reikšme iš masyvo, jei reikšmės sutampa, tai vadinasi šitas optionas turi turėti atributą selected
                    old() grąžiną "string" dėl to konvertuojame į int
                    --}}
                    <select class="custom-select{{ $errors->has('category') ? ' is-invalid' : '' }}" name="category" id="kategorija">
                      @foreach($categories as $category)
                      <option value="{{ $category->id }}"
                              {{ $project->kategorija === $category->id ? 'selected' : '' }}>{{ $category->title }}</option>
                      @endforeach
                    </select>

                     @if($errors->has('category'))
                     <div class="invalid-feedback">
                       {{ $errors->first('category') }}
                     </div>
                     @endif
                  </div>

                 </div>
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                 <textarea class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" id="description" rows="10">{{ $project->description }}</textarea>

                 @if($errors->has('description'))
                 <div class="invalid-feedback">
                   {{ $errors->first('description') }}
                 </div>
                 @endif
              </div>
              <div class="form-group">
                 <label for="image">Image</label>
                 <input class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" id="image" value="{{ $project->image_url }}">

                 @if($errors->has('image'))
                 <div class="invalid-feedback">
                   {{ $errors->first('image') }}
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
