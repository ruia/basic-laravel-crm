@extends('layouts.app')

@section('title') | {{ __('View Product') }} @endsection

@section('content')

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">{{ __('View Product') }}</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('products.index') }}">{{ __('Products') }}</a></li>
            <li class="breadcrumb-item active">{{ __('View Product') }}</li>
        </ol>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card mb-4">
                    <div class="card-header">&nbsp;</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <x-forms.input name="ref" type="text" label="Ref" args="readonly" />
                                <x-forms.input name="name" type="text" label="Name" args="readonly" />
                                <x-forms.input name="bar_code" type="text" label="Bar Code" args="readonly" />
                                <x-forms.input name="price_without_vat" type="text" label="Price Without Vat" args="readonly" />
                                <x-forms.select-vat name="vat_id" label="VAT" args="disabled" />
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">{{ __('Save') }}</button>
                <button type="reset" class="btn btn-warning">{{ __('Clear') }}</button>
            </div>
        </div>
    </div>
</main>

@endsection