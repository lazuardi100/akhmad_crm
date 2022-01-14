@extends('admin.base')

@section('title', 'Calon Customer')

@section('content')
    <div>
        <div class="card-style">
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#input_data"
                aria-expanded="false" aria-controls="input_data">
                Tambah Calon Customer
            </button>
            <div class="collapse" id="input_data">
                <div class="card card-body">
                    <form action={{ route('submit.calon.customer') }} method="post">
                        @csrf
                        <label for="" class="form-label">Masukkan nama calon customer</label>
                        <input class="form-control mb-3" type="text" name="nama_customer" placeholder="">
                        <label for="" class="form-label">Masukkan nomor telepon</label>
                        <input class="form-control mb-3" type="text" name="telp" placeholder="">
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
            @if (isset($datas))
                <table class="table" id='myTable'>
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Telepon</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($datas as $data)
                            <tr>
                                <td>{{ $data->NAMA_CUSTOMER }}</td>
                                <td>{{ $data->TELP }}</td>
                                <td>{{ $data->STATUS }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <h2>Belum ada data</h2>
            @endif
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
