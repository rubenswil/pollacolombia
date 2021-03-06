@extends('layouts.app')

@section('content')
<div class="container" style="padding-bottom: 16.5rem!important;">
     <div class="row">
        <div class="col-md-12 title_polla">
            <img src="{{ asset('img/logo.png') }}" style="height: 205px;">
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h4>{{ __('Recordar Contraseña') }}</h4></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row ">
                            <div class="col-md-4 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="width: 100%;">
                                    {{ __('Enviar Contraseña') }}
                                </button>
                            </div>
                        </div>
                    </form>
                        <div class="form-group row mb-0">
                            <div class="col-md-4 offset-md-4">
                                <button type="" class="btn btn-primary" onclick="window.location='{{ route('login') }}'" style="width: 100%;">
                                    {{ __('Entrar') }}
                                </button>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
