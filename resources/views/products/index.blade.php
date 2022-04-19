@extends('layouts.app')
@section('title') | {{ __('Poducts') }} @endsection
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
                <a href="{{ route('products.list') }}" class="btn btn-sm btn-secondary">{{ __('Add Product') }}</a>
            </div>
            <div class="card-body">
                <table id="productsTable">
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
                        {{-- @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->ref }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->bar_code }}</td>
                                <td>{{ $product->vat->tax_percent }}%</td> <!-- TODO: implement helper to format tax and currencies? -->
                                <td>{{ $product->price_without_vat }}</td>
                                <td>{{ $product->getPriceWithVat() }}</td>
                                <td><a href="{{ route('products.show', $product->id) }}">{{ __('View') }}</a> |  <a href="{{ route('products.edit', $product->id) }}">{{ __('Edit') }}</a></td> 
                            </tr>
                        @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

@section('js')
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    window.addEventListener('DOMContentLoaded', event => {
        // // Simple-DataTables
        // // https://github.com/fiduswriter/Simple-DataTables/wiki

        const datatablesSimple = document.getElementById('productsTable');
        if (datatablesSimple) {
            let table = new simpleDatatables.DataTable(datatablesSimple);
            table.on('datatable.init', function(){
                console.log('datatables init\ntrying to get data');
                axios({
                    method: 'get',
                    url: "{{ route('products.index') }}",
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    responseType: 'json'
                }).then(function (response) {
                    console.log(response.data)
                })
            });
            
        }
        // $('.productsTable').DataTable( {
        //     // ajax: '/api/myData'
        // } );
    });
</script>
@endsection
@endsection