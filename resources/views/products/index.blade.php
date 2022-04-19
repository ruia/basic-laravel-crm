@extends('layouts.app')
@section('title') | {{ __('Poducts') }} @endsection
@section('css')
    <link href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet" />
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
            <div class="card-body dataTables_wrapper dt-bootstrap5">
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
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
    // window.addEventListener('DOMContentLoaded', event => {
    //     // // Simple-DataTables
    //     // // https://github.com/fiduswriter/Simple-DataTables/wiki

    //     // const datatablesSimple = document.getElementById('productsTable');
    //     // if (datatablesSimple) {
    //     //     let table = new simpleDatatables.DataTable(datatablesSimple);
    //     //     table.on('datatable.init', function(){
    //     //         console.log('datatables init\ntrying to get data');
    //     //         axios({
    //     //             method: 'get',
    //     //             url: "{{ route('products.index') }}",
    //     //             headers: {
    //     //                 'X-Requested-With': 'XMLHttpRequest'
    //     //             },
    //     //             responseType: 'json'
    //     //         }).then(function (response) {
    //     //             console.log(response.data)
    //     //             table.rows().add(response.data);
    //     //             // let tableData = []
                    
    //     //             // response.data.data.forEach(row => {
    //     //             //     // let tmp = {};
    //     //             //     // // console.log(row.vat.tax_percent);
    //     //             //     // tmp['#'] = row.id;    
    //     //             //     // tmp['Ref'] = row.ref;
    //     //             //     // tmp['Name'] = row.name;
    //     //             //     // tmp['EAN'] = row.bar_code;
    //     //             //     // tmp['VAT'] = row.vat.tax_percent;
    //     //             //     // tmp['Price Without VAT'] = row.price_without_vat;
    //     //             //     // tmp['Price With VAT'] = 0;                        
    //     //             //     // tmp['Actions'] = '';                        
    //     //             //     // tableData.push(tmp);
    //     //             //     // let tmp = [];
    //     //             //     // tmp.push(row.id);
    //     //             //     // tmp.push(row.ref);
    //     //             //     // tmp.push(row.name);
    //     //             //     // tmp.push(row.bar_code);
    //     //             //     // tmp.push(row.vat.tax_percent);
    //     //             //     // tmp.push(row.price_without_vat);
    //     //             //     // tmp.push(0);
    //     //             //     // tmp.push("");
    //     //             //     // tableData.push(tmp);
    //     //             // });
    //     //             // console.log(tableData);
    //     //             // 
    //     //         })
    //     //     });
            
    //     // }
    // });
    $(document).ready(function() {
        console.log('document ready');
        $('#productsTable').DataTable();
    } );
</script>
@endsection
@endsection