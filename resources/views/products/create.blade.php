@extends('layouts.app')

@section('title') | {{ __('Create Product') }} @endsection

@section('content')

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">{{ __('Create Product') }}</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('products.index') }}">{{ __('Products') }}</a></li>
            <li class="breadcrumb-item active">{{ __('Create Product') }}</li>
        </ol>
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">&nbsp;</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <x-forms.input name="ref" type="text" label="Ref" args="required autofocus" />
                                    <x-forms.input name="name" type="text" label="Name" args="required" />
                                    <x-forms.input name="bar_code" type="text" label="Bar Code" />
                                    <x-forms.input name="price_without_vat" type="text" label="Price Without Vat" />
                                    <x-forms.input name="ref" type="text" label="Ref" />
                                    <div class="mb-3">
                                        <label class="form-label" for="sel">Select</label>
                                        <select class="form-select" id="sel" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success">{{ __('Save') }}</button>
            <button type="reset" class="btn btn-warning">{{ __('Clear') }}</button>
        </form>
    </div>
</main>

@endsection