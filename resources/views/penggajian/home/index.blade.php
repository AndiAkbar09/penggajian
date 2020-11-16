@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="mr-auto px-4">
                <ul class="list-group">
                    <li class="list-group-item-0 d-flex justify-content-between text-muted align-items-center">
                        Aplikasi pengajian karyawan
                    </li>
                </ul>   
                <div class="d-flex align-items-end flex-column ">
                    <div class="mr-4 px-3">
                        <img src="{{asset('img/male.png')}}" class="rounded-circle" width="50" alt="">
                    </div>
                    <div class="card-0 shadow rounded">
                        <div class="card-body">
                            Logout Profile
                        </div>  
                    </div>  
                </div>
                <div class="d-flex">
                    <h5 class="text-muted font-weight-bold">Home</h5>
                </div>
                <span class="d-block p-2 bg-warning rounded font-weight-bold text-dark h3">Welcome !
                    <p class="mr-auto text-muted h6">Hey selamat datang kembali di aplikasi karyawan ada yang bisa kami bantu</p>
                </span>
                <div class="d-flex pt-3">
                    <h5 class="text-muted font-weight-bold">Data Pegawai</h5>
                </div>
                <button type="submit" class="btn btn-warning">Tambah Pegawai</button>
                <div class="pt-4">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nip</th>
                                <th>Nama</th>
                                <th>Gaji Pokok</th>
                                <th>Tanggal Masuk</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>123456</td>
                                <td>Rachmat Ababil</td>
                                <td>Rp. 2.500.000</td>
                                <td>01 Januari 2020</td>
                                <td>
                                    <button type="submit" class="btn btn-sm btn-info">Detail</button> 
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button> 
                                    <button type="submit" class="btn btn-sm btn-primary">Transfer Gaji</button> 
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection