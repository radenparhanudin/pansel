@extends('layouts.auth')
@section('auth')
    <body class="login-page">
        <div class="login-box">
            <div class="logo">
                <a href="javascript:void(0);">Pan<b>Sel</b></a>
                <span>Jabatan Pimpinan Tinggi Pratama</span>
            </div>
            <div class="card">
                <div class="body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="msg text-danger">Silahkan login dengan menggunakan Username dan Password saat mendaftar!</div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">person</i>
                            </span>
                            <div class="form-line @error('email') error @enderror">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Username" required autocomplete="email" autofocus>
                            </div>
                            @error('email')
                                <label class="error" role="alert">
                                    {{ $message }}
                                </label>
                            @enderror
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">lock</i>
                            </span>
                            <div class="form-line @error('password') error @enderror">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
                            </div>
                            @error('password')
                                <label class="error" role="alert">
                                    {{ $message }}
                                </label>
                            @enderror
                        </div>
                        <div class="row">
                            {{-- <div class="col-xs-8 p-t-5">
                                <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                                <label for="rememberme">Remember Me</label>
                            </div> --}}
                            <div class="col-xs-4 col-xs-offset-8">
                                <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
                            </div>
                        </div>
                        <div class="row m-t-15 m-b--20">
                            <div class="col-xs-6">
                                <a href="#">Deftar Akun!</a>
                            </div>
                            <div class="col-xs-6 align-right">
                                <a href="#">Lupa Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        @include('layouts.auth.foot')
    </body>
@endsection
