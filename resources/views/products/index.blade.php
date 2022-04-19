@extends('layouts.app')
@section('title') | {{ __('Poducts') }} @endsection
@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Products</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Products</li>
        </ol>

        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div>
                  <i class="fas fa-user-alt"></i>
                </div>
                <a href="{{ route('products.index') }}" class="btn btn-sm btn-secondary">{{ __('Add Product') }}</a>
            </div>
            <div class="card-body">
                <table id="productsTable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Ref</th>
                            <th>Name</th>
                            <th>EAN</th>
                            <th>VAT</th>
                            <th>Price Without VAT</th>
                            <th>Price With VAT</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

@section('js')
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        console.log('document ready');
        $('#productsTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('products.index') }}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'ref', name: 'ref' },
                { data: 'name', name: 'name' },
                { data: 'bar_code', name: 'bar_code' },
                { data: 'vat', name: 'vat' },
                { data: 'price_without_vat', name: 'price_without_vat' },
                { data: 'price_with_vat', name: 'price_with_vat' },
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
    } );
</script>
@endsection
@endsection