@extends('layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <h2>Register</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('registration.post') }}" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="name">Name</label>
                                <div class="col-6">
                                    <input type="text" name="name" id="name" class="form-control" required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <div class="col-6">
                                    <input type="email" name="email" id="email" class="form-control" required>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <div class="col-6">
                                    <input type="password" name="password" id="password" class="form-control" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-6 offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection