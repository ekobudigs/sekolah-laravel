@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Ubah Data Siswa</h3>
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-end">
                <a href="{{ route('siswa.index') }}" class="btn btn-primary ">Back</a>
            </div>

            {{-- @error('nama')
                <span class="text-danger">{{ $message }}</span>
            @enderror--}}


            @foreach($errors->all() as $error)
                {{-- {{ $error }}<br /> --}}
                <span class="text-danger">{{ $error }}</span><br>
            @endforeach

            <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-4 ">
                        <div class="form-group mb-3">
                            <label for="nama">NAMA</label>
                            <input type="text" class="form-control" name="nama" value="{{ $siswa->nama }}"
                                placeholder="Masukan Nama">
                        </div>
                        <div class="form-group mb-3">
                            <label for="nis">NIS</label>
                            <input type="number" class="form-control" name="nis" value="{{ $siswa->nis }}"
                                placeholder="Masukan NIS">
                        </div>
                        <div class="form-group mb-3">
                            <label for="tanggal lahir">tanggal lahir</label>
                            <input type="date" class="form-control" name="tgl_lahir" value="{{ $siswa->tgl_lahir }}"
                                placeholder="Masukan tanggal lahir">
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-success">Edit</button>
            </form>
        </div>
    </div>
</div>
@endsection
