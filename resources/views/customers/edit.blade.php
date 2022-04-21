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
                                    <x-forms.input name="name" type="text" label="Name" :model="$customer" args="required autofocus" />
                                </div>
                                <div class="col-md-3">
                                    <x-forms.input name="vat_number" type="text" label="VAT" :model="$customer" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <x-forms.input name="address" type="text" label="Address" :model="$customer" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <x-forms.input name="postal_code" type="text" label="Postal Code" :model="$customer" />
                                </div>
                                <div class="col-md-8">
                                    <x-forms.input name="city" type="text" label="City" :model="$customer" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 offset-md-1">
                    <div class="card mb-4">
                        <div class="card-header">{{ __('Contacts') }}</div>
                        <div class="card-body">
                            <x-forms.input name="cellphone" type="text" label="Cellphone" :model="$customer" />
                            <x-forms.input name="email" type="text" label="Email" :model="$customer" />
                            <x-forms.input name="other_contact" type="text" label="Other Contact" :model="$customer" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10">
                    <x-forms.text-area name="observations" type="text" label="Observations" :model="$customer" />
                </div>
            </div>
            <button type="submit" class="btn btn-success">{{ __('Save') }}</button>
        </form>
    </div>
</main>
@endsection