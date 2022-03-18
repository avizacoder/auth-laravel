@extends('layouts.app')
@section('title', 'Login')
@section('content')
    <div class="container p-4">
        <div class="row">
            <div class="col-md-center">
                <div class="card card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session('notification'))
                        <div class="alert alert-success">
                            <p><strong>{{ session('notification') }}</strong></p>
                        </div>
                    @endif
                    <form action="{{ url('/register/'.$user->id) }}" method="POST">
                        @csrf
                        {{ method_field('patch') }}
                        @include('auth.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
