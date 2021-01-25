@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-muted">Data telah terlampir
                <small class="text-muted">mohon menunggu kabar dari kami</small>
            </h3>
            <div class="pt-3">
                <div class="card border-0">
                    <div class="card-body">
                        <form action="" enctype="multipart/form-data" method="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">NIP</label>
                                        <input type="text" name="nip" class="form-control" placeholder="{{$employee->nip}}" id="" disabled >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Nama Lengkap</label>
                                        <input type="text" name="nama" class="form-control" placeholder="{{$employee->nama}}" id="" disabled >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Jabatan</label>
                                        <input type="text" name="jabatan" class="form-control" placeholder="{{$employee->jabatan}}" id="" disabled >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Agama</label>
                                        <input type="text" name="agama" class="form-control" placeholder="{{$employee->agama}}" id="" disabled >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Tempat Lahir</label>
                                        <input type="text" name="tempat_lahir" class="form-control" placeholder="{{$employee->tempat_lahir}}" id="" disabled >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Tanggal Lahir</label>
                                        <input type="text" name="tanggal_lahir" class="form-control" placeholder="{{$employee->tanggal_lahir}}" id="" disabled >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Alamat</label>
                                        <input type="text" name="alamat" class="form-control" placeholder="{{$employee->alamat}}" id="" disabled >
                                    </div>
                                </div>                    
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <input type="text" name="status" class="form-control" placeholder="{{$employee->status}}" id="" disabled >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Jenis Kelamin</label>
                                        <input type="text" name="jenis_kelamin" class="form-control" placeholder="{{$employee->jenis_kelamin}}" id="" disabled >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Nomor Telpon</label>
                                        <input type="text" name="no_telp" class="form-control" placeholder="{{$employee->no_telp}}" id="" disabled >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Informasi</label>
                                        <textarea name="keterangan" id="" disabled class="form-control">{{$employee->keterangan}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <a href="{{route('penggajians.data-pegawai')}}" type="submit" class="btn btn-success">Kembali</a>
                            </div>
                        </form>            
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection