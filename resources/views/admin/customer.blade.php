@extends('admin.base')

@section('title', 'Customer')

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
                    <select class="form-select" name="calon_customer" id="">
                        @foreach ($calons as $calon)
                            <option value={{$calon->ID_CUSTOMER}}>{{$calon->NAMA_CUSTOMER}}</option>
                        @endforeach
                    </select>
                    <label for="" class="form-label">Pilih Produk</label>
                    <select class="form-select" name="produk" id="">
                        @foreach ($products as $product)
                            <option value={{$product->ID_PRODUCT}}>{{$product->PRODUCT}}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn btn-primary mt-2">Simpan</button>
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
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
@endsection