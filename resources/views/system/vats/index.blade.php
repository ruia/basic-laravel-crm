@extends('layouts.app')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">VATs</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">VATs</li>
        </ol>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-percent"></i>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Percent</th>
                            <th>Inactive</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vats as $vat)
                            <tr>
                                <td>{{ $vat->id }}</td>
                                <td>{{ $vat->name }}</td>
                                <td>{{ $vat->tax_percent }}%</td>
                                <td><input type="checkbox" disabled="disabled" {{ $vat->inactive ? 'checked' : ''}} /></td> 
                                <td>&nbsp;</td>
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