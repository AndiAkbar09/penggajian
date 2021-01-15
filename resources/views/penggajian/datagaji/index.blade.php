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
                <div class="d-flex">
                    <h5 class="text-muted font-weight-bold">Data Gaji Karyawan</h5>
                </div>
                
                <div class="pt-4">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Gaji Pokok</th>
                                <th>Jam Lembur</th>
                                <th>Uang Lembur</th>
                                <th>Tgl. Transfer</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Rachmat Ababil</td>
                                <td>Rp. 2.500.000</td>
                                <td>3 Jam</td>
                                <td>Rp. 500.000</td>
                                <td>01 Januari</td>
                                <td> 
                                    <a href="{{route('penggajians.data-gaji.buat')}}" type="submit" class="btn btn-sm btn-primary">Transfer Gaji</a> 
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