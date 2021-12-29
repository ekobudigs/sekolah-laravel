@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">
          Tambah Siswa
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-end">
                <a class="btn btn-info " href="{{ route('siswa.index') }}">Back</a>
            </div>
         
            <form action="{{ route('siswa.store') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-md-4 ">
                        <div class="form-group mb-3">
                            <label for="nama">NAMA</label>
                            <input type="text" class="form-control" name="nama"  placeholder="Masukan Nama">   
                          </div>
                        <div class="form-group mb-3">
                            <label for="nis">NIS</label>
                            <input type="number" class="form-control" name="nis"  placeholder="Masukan NIS">   
                          </div>
                        <div class="form-group mb-3">
                            <label for="tanggal lahir">tanggal lahir</label>
                            <input type="date" class="form-control" name="tgl_lahir"  placeholder="Masukan tanggal lahir">   
                          </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Add</button>
            </form>

        </div>
      </div>


  
@endsection