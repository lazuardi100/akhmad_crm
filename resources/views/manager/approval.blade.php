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
                            <td><button onclick="approve('{{ $data->ID_CUSTOMER }}', '{{ $data->NAMA_CUSTOMER }}')"
                                    class="btn btn-success"><i class="ri-check-line"></i></button></td>
                            <td><button onclick="reject('{{ $data->ID_CUSTOMER }}', '{{ $data->NAMA_CUSTOMER }}')" class="btn btn-danger"><i class="ri-close-line"></i></button></td>
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
        function approve(id, nama) {
            let text = `Anda yakin ingin approve ${nama}?`
            if (confirm(text) == true) {
                window.location.href = '/submit/approve/' + id
            }
        }

        function reject(id, nama) {
            let text = `Anda yakin ingin reject ${nama}?`
            if (confirm(text) == true) {
                window.location.href = '/submit/reject/' + id
            }
        }
    </script>
@endsection
