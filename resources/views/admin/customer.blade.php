@extends('admin.base')

@section('title', 'Customer')
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('content')
<div>

    <div class="card-style">
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#input_data"
            aria-expanded="false" aria-controls="input_data">
            Tambah Customer
        </button>
        <div class="collapse" id="input_data">
            <div class="card card-body">
                <form action={{ route('submit.new.customer') }} method="post">
                    @csrf
                    <label for="" class="form-label">Pilih calon customer</label>
                    <br>
                    <select class="form-select selecting" name="calon_customer" id="">
                        @foreach ($calons as $calon)
                            <option value={{$calon->ID_CUSTOMER}}>{{$calon->NAMA_CUSTOMER}}</option>
                        @endforeach
                    </select>
                    <br>
                    <label for="" class="form-label">Pilih Produk</label>
                    <br>
                    <select class="form-select selecting" name="produk" id="">
                        @foreach ($products as $product)
                            <option value={{$product->ID_PRODUCT}}>{{$product->PRODUCT}}</option>
                        @endforeach
                    </select>
                    <br>
                    <button type="submit" class="btn btn-primary mt-2">Tambah</button>
                </form>
            </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <div class="card-style mt-3">
        <table class="table" id='myTable'>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>No Telp</th>
                    <th>Produk</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <td>{{$data->NAMA_CUSTOMER}}</td>
                        <td>{{$data->TELP}}</td>
                        <td>{{$data->PRODUCT}}</td>
                        <td>{{$data->STATUS}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
            $('.selecting').select2();
        });
    </script>
@endsection