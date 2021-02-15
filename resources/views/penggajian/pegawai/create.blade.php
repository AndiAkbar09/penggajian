@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-muted">Silahkan Isi Data
                <small class="text-muted">dibawah ini</small>
            </h3> 
        <div class="pt-3">
            <div class="card border-0">
                <div class="card-body">
                    <form action="{{route('penggajians.pegawai.simpan')}}" enctype="multipart/form-data" method="post">
                        @csrf
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{session('success')}}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">NIP</label>
                                    <input type="text" name="nip" class="form-control" id="" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nama Lengkap</label>
                                    <input type="text" name="nama" class="form-control" id="" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Jabatan</label>
                                    <input type="text" name="jabatan" class="form-control" id="" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Agama</label>
                                    <select name="agama" id="" class="form-control">
                                        <option value=""  >Pilih agama</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Kristen">Kristen</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control" id="" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" class="form-control" id="" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" id="" >
                                </div>
                            </div>                    
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <input type="text" name="status" class="form-control" id="" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" id="" class="form-control">
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="laki - laki">Laki - Laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nomor Telpon</label>
                                    <input type="text" name="no_telp" class="form-control" id="" >
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Informasi</label>
                                    <textarea name="keterangan" id="" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{route('penggajians.pegawai')}}" type="submit" class="btn btn-success">Cancel</a>
                        </div>
                    </form>            
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection