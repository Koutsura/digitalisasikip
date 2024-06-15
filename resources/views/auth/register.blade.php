@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header text-center d-flex justify-content-center">
            <div class="card-header">{{ __('Register') }}</div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="operator" class="col-md-4 col-form-label text-md-end">{{ __('Operator') }}</label>

                            <div class="col-md-6">
                                <select id="operator" class="form-control @error('operator') is-invalid @enderror" name="operator" required>
                                    <option value="">-- Pilih Operator --</option>
                                    <option value="operator1" {{ old('operator') == 'operator1' ? 'selected' : '' }}>Universitas Bina Darma</option>
                                    <option value="operator2" {{ old('operator') == 'operator2' ? 'selected' : '' }}>Universitas Lampung (UNILA)</option>
                                    <option value="operator3" {{ old('operator') == 'operator3' ? 'selected' : '' }}>Universitas Sriwijaya</option>
                                    <option value="operator4" {{ old('operator') == 'operator4' ? 'selected' : '' }}>POLITEKNIK NEGERI SRIWIJAYA (POLSRI)</option>
                                    <option value="operator5" {{ old('operator') == 'operator5' ? 'selected' : '' }}>Universitas Mitra Indonesia (UMITRA)</option>
                                    <option value="operator6" {{ old('operator') == 'operator6' ? 'selected' : '' }}>Universitas Teknokrat Indonesia</option>
                                    <option value="operator7" {{ old('operator') == 'operator7' ? 'selected' : '' }}>Institut Teknologi dan Bisnis PalComTech Palembang</option>
                                    <option value="operator8" {{ old('operator') == 'operator8' ? 'selected' : '' }}>Universitas Aisyah Pringsewu</option>
                                </select>

                                @error('operator')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4 text-center">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                                <a href="{{ route('login') }}" class="btn btn-link">{{ __('Login') }}</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
