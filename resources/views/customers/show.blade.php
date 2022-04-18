@extends('layouts.app')
@section('title') | {{ __('View Customer') }} @endsection
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">{{ __('View Customer') }} :: {{ $customer->name }}</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('customers.index') }}">{{ __('Customers') }}</a></li>
            <li class="breadcrumb-item active">{{ __('View Customer') }}</li>
        </ol>
        <div class="card">
            <div class="card-header">
                <ul class="nav nav-pills card-header-pills" id="tabCustomers" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="data-tab" data-bs-toggle="tab" data-bs-target="#data" type="button" role="tab" aria-controls="data" aria-selected="true">{{ __('Customer Data') }}</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="orders-tab" data-bs-toggle="tab" data-bs-target="#orders" type="button" role="tab" aria-controls="orders" aria-selected="false">{{ __('Orders') }}</button>
                    </li>
                    {{-- <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
                    </li> --}}
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="tabCustomersContent">
                    <div class="tab-pane fade show active" id="data" role="tabpanel" aria-labelledby="data-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <div class="card-header">{{ __('Info') }}</div>
                                    <div class="card-body">data
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="mb-3">
                                                    <label class="form-label" for="inputName">{{ __('Name') }}</label>
                                                    <input class="form-control" id="inputName" name="name" type="text" value="{{ $customer->name }}" readonly />
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label class="form-label" for="inputVAT">{{ __('VAT') }}</label>
                                                    <input class="form-control" id="inputVAT" name="vat_number" type="text" value="{{ $customer->vat }}" readonly />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label" for="inputAddress">{{ __('Address') }}</label>
                                                    <input class="form-control" id="inputAddress" name="address" type="text" value="{{ $customer->address }}" readonly />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label" for="inputPostalCode">{{ __('Postal Code') }}</label>
                                                    <input class="form-control" id="inputPostalCode" name="postal_code" type="text" value="{{ $customer->postal_code }}" readonly />
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="mb-3">
                                                    <label class="form-label" for="inputCity">{{ __('City') }}</label>
                                                    <input class="form-control" id="inputCity" name="city" type="text"value="{{ $customer->city }}" readonly />
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
                                            <input class="form-control" id="inputName" name="cellphone" type="text" value="{{ $customer->cellphone }}" readonly />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="inputEmail">{{ __('Email') }}</label>
                                            <input class="form-control" id="inputName" name="email" type="email" value="{{ $customer->email }}" readonly />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="inputOtherContact">{{ __('Other Contact') }}</label>
                                            <input class="form-control" id="inputOtherContact" name="other_contact" type="text" value="{{ $customer->other_contact }}" readonly />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9">
                                <div class="mb-3">
                                    <label class="form-label" for="inputObervations">{{ __('Observations') }}</label>
                                    <textarea class="form-control" id="inputObervations" name="observations" rows="3" readonly>{{ $customer->observations }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <dl class="row">
                                    <dt class="col-sm-7">Criado a</dt>
                                    <dd class="col-sm-5">{{ dateTimeToLocal($customer->created_at) }}</dd>
                                    <dt class="col-sm-7">Ultima atualização em</dt>
                                    <dd class="col-sm-5">{{ dateTimeToLocal($customer->updated_at) }}</dd>
                                    </dd>
                                </dl>
                                <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-secondary">Editar</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">...</div>
                    {{-- <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div> --}}
                </div>
            </div>
        </div>
    </div>
</main>
@endsection