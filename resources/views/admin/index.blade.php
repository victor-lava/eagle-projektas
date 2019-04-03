@extends('layouts.auth')

@section('content')

<div class="container">
  @if (session('message'))
    <div class="alert alert-success">
        {{-- atspausdina sesija message --}}
        {{ session('message') }}
    </div>
  @endif
  @foreach($contacts as $contact)
    <div class="row justify-content-center mb-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <span>{{ $contact->full_name }}</span>
                    <span>{{ $contact->email }}</span>
                </div>

                <div class="card-body">
                  <span class="badge badge-success">{{ $contact->created_at }}</span>
                  <h2>{{ $contact->subject }}</h2>
                  <p>{{ $contact->message }}</p>
                </div>

                <div class="card-footer d-flex justify-content-between">
                  <a  href="mailto:{{ $contact->email }}"
                      class="btn btn-primary btn-lg">Atsakyti</a>

                  <form action="{{ route('contact.remove') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $contact->id }}">
                    <button type="submit" class="btn btn-danger btn-xs">Ištrinti</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
  @endforeach
</div>
@endsection
