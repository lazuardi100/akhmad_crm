@extends('admin.base')

@section('title', 'Calon Customer')

@section('css')
    <link href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet" />
@endsection

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
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($datas as $data)
                            <tr>
                                <td>{{ $data->NAMA_CUSTOMER }}</td>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
@endsection
