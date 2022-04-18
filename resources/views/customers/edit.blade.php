@extends('layouts.app')
@section('title') | {{ __('Edit Customer') }} @endsection
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">{{ __('Edit Customer') }}</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('customers.index') }}">{{ __('Customers') }}</a></li>
            <li class="breadcrumb-item active">{{ __('Edit Customer') }}</li>
        </ol>
        <form action="{{ route('customers.update', $customer->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-header">{{ __('Info') }}</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="mb-3">
                                        <label class="form-label" for="inputName">{{ __('Name') }}</label>
                                        <input class="form-control @error('name') is-invalid @enderror" id="inputName" name="name" type="text" placeholder="{{ __('Name') }}" value="{{ old('name', $customer->name) }}" required autofocus/>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label" for="inputVAT">{{ __('VAT') }}</label>
                                        <input class="form-control @error('vat_number') is-invalid @enderror" id="inputVAT" name="vat_number" type="text" placeholder="{{ __('VAT') }}" value="{{ old('vat_number', $customer->vat_number) }}" />
                                        @error('vat_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="inputAddress">{{ __('Address') }}</label>
                                        <input class="form-control @error('address') is-invalid @enderror" id="inputAddress" name="address" type="text" placeholder="{{ __('Address') }}" value="{{ old('address', $customer->address) }}" />
                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        {{-- IMPROV? Change to input of address to text area?  --}}
                                        {{-- <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label> --}}
                                        {{-- <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="inputPostalCode">{{ __('Postal Code') }}</label>
                                        <input class="form-control @error('postal_code') is-invalid @enderror" id="inputPostalCode" name="postal_code" type="text" placeholder="{{ __('Postal Code') }}" value="{{ old('postal_code', $customer->postal_code) }}" />
                                        @error('postal_code')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label class="form-label" for="inputCity">{{ __('City') }}</label>
                                        <input class="form-control @error('city') is-invalid @enderror" id="inputCity" name="city" type="text" placeholder="{{ __('City') }}" value="{{ old('city', $customer->city) }}" />
                                        @error('city')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 offset-md-1">
                    <div class="card mb-4">
                        <div class="card-header">{{ __('Contacts') }}</div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label" for="inputCellphone">{{ __('Cellphone') }}</label>
                                <input class="form-control @error('cellphone') is-invalid @enderror" id="inputName" name="cellphone" type="text" placeholder="{{ __('Cellphone') }}" value="{{ old('cellphone', $customer->cellphone) }}" />
                                @error('cellphone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="inputEmail">{{ __('Email') }}</label>
                                <input class="form-control @error('email') is-invalid @enderror" id="inputName" name="email" type="email" placeholder="{{ __('Email') }}" value="{{ old('email', $customer->email) }}" />
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="inputOtherContact">{{ __('Other Contact') }}</label>
                                <input class="form-control @error('other_contact') is-invalid @enderror" id="inputOtherContact" name="other_contact" type="text" placeholder="{{ __('Other Contact') }}" value="{{ old('other_contact', $customer->other_contact) }}" />
                                @error('other_contact')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10">
                    <div class="mb-3">
                        <label class="form-label" for="inputObervations">{{ __('Observations') }}</label>
                        {{-- <input class="form-control @error('observations') is-invalid @enderror" id="inputObervations" name="observations" type="text" placeholder="Observations"/> --}}
                        <textarea class="form-control @error('observations') is-invalid @enderror" id="inputObervations" name="observations" placeholder="Observations" rows="3">{{ old('observations', $customer->observations) }}</textarea>
                        @error('observations')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        {{-- <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label> --}}
                        {{-- <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea> --}}
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success">{{ __('Save') }}</button>
        </form>
    </div>
</main>
@endsection