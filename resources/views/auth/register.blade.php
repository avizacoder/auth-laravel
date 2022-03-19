@extends('layouts.app')
@section('title', 'Login')
@section('content')
    <div class="container p-4">

        <div class="row">

            <div class="col-md-4">
              
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
                    <form action="{{ url('/register') }}" method="POST">
                        @csrf
                        @include('auth.form')
                    </form>
                </div>

            </div>
            <div class="col-md-8">
                <div class="card card-body">
                    <table class="table table-light">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Number Phone</th>
                                <th>C.I.</th>
                                <th>Date Birt</th>
                                <th>City Code</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->number_phone }}</td>
                                    <td>{{ $user->cedula_identidad }}</td>
                                    <td>{{ $user->date_birt }}</td>
                                    <td>{{ $user->city_code }}</td>
                                    <td>
                                        <a href="{{ url('/register/'.$user->id.'/edit') }}">Edit</a>
                                        | 
                                        <form action="{{ url('/register/'.$user->id) }}" method="post" >
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <input type="submit" value="Delete" onclick="return confirm('¿Quieres borrar?')">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
    
