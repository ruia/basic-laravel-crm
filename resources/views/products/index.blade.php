@extends('layouts.app')

@section('title') | {{ __('Products') }} @endsection

@section('css')
    @livewireStyles
@endsection

@section('content')

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">{{ __('Products') }}</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="/">{{ __('Home') }}</a></li>
            <li class="breadcrumb-item active">{{ __('Products') }}</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div>
                  <i class="fas fa-boxes-stacked"></i>
                </div>
                <a href="{{ route('products.create') }}" class="btn btn-sm btn-secondary">{{ __('Add Product') }}</a>
            </div>
            <div class="card-body">
                <livewire:products-table />
            </div>
        </div>
    </div>
</main>

@section('js')
    @livewireScripts
@endsection

@endsection