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
                    <form action={{route('submit.calon.customer')}} method="post">
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

        <div class="card-style">
            <table class="table">
                <thead>
                    <tr>
                        
                    </tr>
                </thead>

            </table>
        </div>
    </div>
@endsection
