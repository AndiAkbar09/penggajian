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
                        <div class="card-body  text-muted">
                            Logout Profile
                        </div>  
                    </div>  
                </div>
                    <div class="d-flex">
                        <h5 class="text-secondary font-weight-bold">Data Lembur Pegawai</h5>
                    </div>
                <div class="pt-4">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nip</th>
                                <th>Nama</th>
                                <th>No rek</th>
                                <th>Jabatan</th>
                                <th>Gaji Pokok</th>
                                <th>Tgl. Masuk</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>123456</td>
                                <td>Rachmat Ababil</td>
                                <td>2312498459</td>
                                <td>Pegawai</td>
                                <td>Rp. 2.500.000</td>
                                <td>01 Januari 2020</td>
                                <td> 
                                    <button type="submit" class="btn btn-sm btn-primary">Lembur Pegawai</button> 
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