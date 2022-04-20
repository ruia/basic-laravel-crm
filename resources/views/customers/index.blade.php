@extends('layouts.app')

@section('title') | {{ __('Customers') }} @endsection

@section('css')
    @livewireStyles
@endsection

@section('content')

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Customers</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Customers</li>
        </ol>

        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div>
                  <i class="fas fa-user-alt"></i>
                </div>
                <a href="{{ route('customers.create') }}" class="btn btn-sm btn-secondary">{{ __('Add Customer') }}</a>
            </div>
            <div class="card-body">
                <livewire:customers-table />
            </div>
        </div>
    </div>
</main>

@section('js')
    @livewireScripts
@endsection

@endsection