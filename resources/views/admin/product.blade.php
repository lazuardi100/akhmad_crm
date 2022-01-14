@extends('admin.base')

@section('title', 'Produk')

@section('content')
    <div>
        <div class="card-style">
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#input_data"
                aria-expanded="false" aria-controls="input_data">
                Tambah Produk
            </button>
            <div class="collapse" id="input_data">
                <div class="card card-body">
                    <form action={{ route('submit.product') }} method="post">
                        @csrf
                        <label for="" class="form-label">Masukkan nama produk</label>
                        <input class="form-control mb-3" type="text" name="nama_produk" placeholder="">
                        <button type="submit" class="btn btn-primary">Simpan</button>
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

            <table class="table" id="myTable">
                <thead>
                    <tr>
                        <th>Nama Produk</th>
                        <th>Terjual</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $data)
                        <tr>
                            <td>{{ $data->PRODUCT }}</td>
                            <td>{{ $data->TERJUAL }}</td>
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
