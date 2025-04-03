@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Profile
                </div>

                <div class="card-body">
                    <h3>{{ Auth::user()->name }}</h3>
                    <p>Email: {{ Auth::user()->email }}</p>
                    <p>Joined: {{ Auth::user()->created_at->format('d M Y') }}</p>

                    <a href="{{ route('profile.edit') }}" class="btn btn-primary">
                        Edit Profile
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection