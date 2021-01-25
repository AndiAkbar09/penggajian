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
                    <li class="list-group-item-0 d-flex align-items-end flex-column ">
                        <div class="px-5">
                            <div class="dropdown">
                                <a href="" class="dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="{{asset('img/male.png')}}" class="rounded-circle" width="50" alt="">
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item" type="button">Log Out</button>
                                </div>
                            </div> 
                        </div> 
                    </li>
                </ul> 
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
                                    <a href="" type="submit" class="btn btn-sm btn-primary">Lembur Pegawai</a> 
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