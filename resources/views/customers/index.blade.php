@extends('layouts.app')
@section('title') | {{ __('Customers') }} @endsection
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
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>VAT Number</th>
                            <th>Cellphone</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers as $customer)
                            <tr>
                                <td>{{ $customer->id }}</td>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->vat_number }}</td>
                                <td>{{ $customer->cellphone }}</td>
                                <td>{{ $customer->email }}</td>
                                <td><a href="{{ route('customers.show', $customer->id) }}">{{ __('View') }}</a> |  <a href="{{ route('customers.edit', $customer->id) }}">{{ __('Edit') }}</a></td> 
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

@section('js')
<script>
    window.addEventListener('DOMContentLoaded', event => {
        // Simple-DataTables
        // https://github.com/fiduswriter/Simple-DataTables/wiki

        const datatablesSimple = document.getElementById('datatablesSimple');
        if (datatablesSimple) {
            new simpleDatatables.DataTable(datatablesSimple);
        }
    });
</script>
@endsection
@endsection