@extends('layouts.app')

@section('content')
    <div class="container" id="login-form">
        <div class="row ">
            <div class="col-lg-8 mx-auto text-center">
                <div class="login-form text-center">
                    <div class="font-weight-bold text-center">Sing in</div>
                    <hr>
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="exampleInputEmail1">Email address</label>
                            <input id="email" type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                            <small id="emailHelp" class="form-text text-muted">{{ $errors->first('email') }}</small>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="exampleInputPassword1">Password</label>
                            <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                            @if ($errors->has('password'))
                            <small id="passwordHelp" class="form-text text-muted">{{ $errors->first('password') }}</small>
                            @endif
                        </div>

                        <div class="form-group form-check">
                            <div class="float-left">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                            </div>
                            <div class="float-right">
                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>

                        <div class="form-group mb-5">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                        </div>

                        <div class="form-group">
                            <a href="{{url('/social/auth/redirect', ['facebook'])}}" class="btn btn-primary btn-block">Login with Facebook</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('footer')

    <footer class="footer">

        <div class="container">
            <p class="text-center">Copyright @ <script> document.write(new Date().getFullYear()); </script> | Author: Dragoslav Predojevic</p>
        </div>

    </footer>

@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            //ToDo
        });
    </script>
@endpush
