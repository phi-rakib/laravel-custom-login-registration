@extends('layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">

                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif

                @if (Session::has('error'))
                    <div class="alert alert-danger">
                        {{ Session::get('error') }}
                    </div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h2>Login</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('login.post') }}" method="post">
                            @csrf

                            <div class="form-group">
                                <div class="col-2">
                                    <label for="email">Email</label>
                                </div>
                                <div class="col-6">
                                    <input type="email" name="email" id="email" class="form-control" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-2">
                                    <label for="password">Password</label>
                                </div>
                                <div class="col-6">
                                    <input type="password" name="password" id="password" class="form-control" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-6 offset-4">
                                    <div class="form-check">
                                        <input type="checkbox" name="remember" id="remember" class="form-check-input">
                                        <label for="remember" class="form-check-label">Remember Me</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 offset-4">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection