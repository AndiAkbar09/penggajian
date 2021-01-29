@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-12 ">

            <div class="card border-0 shadow">
                <div class="card-body">
                    <form action="{{route('penggajians.pegawai.update', $employee->id)}}"  method="post" enctype="multipart/form-data">
                    @csrf
                        @method('PATCH')
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success')}}
                            </div>
                        @endif
                        
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">NIP</label>
                                    <input type="text" name="nip" class="form-control" value="{{$employee->nip}}" id="">
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nama Lengkap</label>
                                    <input type="text" name="nama" class="form-control" value="{{$employee->nama}}" id=""  >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Jabatan</label>
                                    <input type="text" name="jabatan" class="form-control" value="{{$employee->jabatan}}" id=""  >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Agama</label>
                                    <select name="agama" id="" class="form-control">
                                        <option disabled>{{$employee->agama}}</option>
                                        <option value="islam">islam</option>
                                        <option value="hindu">hindu</option>
                                        <option value="budha">budha</option>
                                        <option value="kristen">kristen</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control" value="{{$employee->tempat_lahir}}" id=""  >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Tanggal Lahir</label>
                                    <input type="text" name="tanggal_lahir" class="form-control" value="{{$employee->tanggal_lahir}}" id=""  >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" value="{{$employee->alamat}}" id=""  >
                                </div>
                            </div>                    
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <input type="text" name="status" class="form-control" value="{{$employee->status}}" id=""  >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" id="" class="form-control">
                                        <option value="">{{$employee->jenis_kelamin}}</option>
                                        <option value="laki - laki">Laki - Laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nomor Telpon</label>
                                    <input type="text" name="no_telp" class="form-control" value="{{$employee->no_telp}}" id=""  >
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Informasi</label>
                                    <textarea name="keterangan" id="" class="form-control">{{$employee->keterangan}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div >
                            <button type="submit" class="btn btn-outline-info">Masukan Kegiatan Baru</button>
                            <a href="{{route('penggajians.pegawai')}}" class="btn btn-outline-secondary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 