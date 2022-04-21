@extends('layouts.app')
@section('title') | {{ __('Create Customer') }} @endsection
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">{{ __('Create Customer') }}</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('customers.index') }}">{{ __('Customers') }}</a></li>
            <li class="breadcrumb-item active">{{ __('Create Customer') }}</li>
        </ol>
        <form action="{{ route('customers.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-header">{{ __('Info') }}</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <x-forms.input name="name" type="text" label="Name" />
                                </div>
                                <div class="col-md-3">
                                    <x-forms.input name="vat_number" type="text" label="VAT" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <x-forms.input name="address" type="text" label="Address" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <x-forms.input name="postal_code" type="text" label="Postal Code" />
                                </div>
                                <div class="col-md-8">
                                    <x-forms.input name="city" type="text" label="City" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 offset-md-1">
                    <div class="card mb-4">
                        <div class="card-header">{{ __('Contacts') }}</div>
                        <div class="card-body">
                            <x-forms.input name="cellphone" type="text" label="Cellphone" />
                            <x-forms.input name="email" type="text" label="Email" />
                            <x-forms.input name="other_contact" type="text" label="Other Contact" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10">
                    <x-forms.text-area name="observations" type="text" label="Observations" />
                </div>
            </div>
            <button type="submit" class="btn btn-success">{{ __('Save') }}</button>
            <button type="reset" class="btn btn-warning">{{ __('Clear') }}</button>
        </form>
    </div>
</main>
@endsection