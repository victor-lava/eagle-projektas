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
                      <span class="badge badge-danger">{{ ucfirst($category->title) }}</span>
                    </span>
                </div>

                <div class="card-body">
                  <div class="row">

                  </div>
                </div>

                <div class="card-footer d-flex justify-content-between">
                  <a  href="{{ route('categories.edit', $category->id) }}"
                      class="btn btn-primary btn-lg">Koreguoti</a>

                  <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
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
