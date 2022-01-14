@extends('admin.base')

@section('title', 'Approval')

@section('content')
    <div>
        <div class="card-style">
            <table class="table" id="myTable">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Telepon</th>
                        <th>Produk</th>
                        <th>Approve</th>
                        <th>Reject</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $data)
                    <tr>
                        <td>{{ $data->NAMA_CUSTOMER }}</td>
                        <td>{{ $data->TELP }}</td>
                        <td>{{ $data->PRODUCT }}</td>
                        <td><button onclick="approve('{{$data->ID_CUSTOMER}}')" class="btn btn-success"><i class="ri-check-line"></i></button></td>
                        <td><button class="btn btn-danger"><i class="ri-close-line"></i></button></td>
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
    <script>
        function approve(id){
            alert(id);
        }
    </script>
@endsection