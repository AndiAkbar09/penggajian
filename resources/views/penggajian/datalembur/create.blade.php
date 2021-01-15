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
                    <form action="" enctype="multipart/form-data" method="post">
                        @csrf
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{session('success')}}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nip</label>
                                    <input type="text" name="nip" class="form-control" id="" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">No Rek</label>
                                    <input type="text" name="no_rek" class="form-control" id="" >
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
                                    <label for="">Gaji Pokok</label>
                                    <input type="text" name="gaji_pokok" class="form-control" id="" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Tgl Masuk</label>
                                    <input type="date" name="tgl_masuk" class="form-control" id="" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Jam Lembur</label>
                                    <input type="text" name="jam_lembur" class="form-control" id="" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">No Telp</label>
                                    <input type="text" name="no_telp" class="form-control" id="" >
                                </div>
                            </div>
                            
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="submit" class="btn btn-success">Cancel</button>
                        </div>
                    </form>            
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection