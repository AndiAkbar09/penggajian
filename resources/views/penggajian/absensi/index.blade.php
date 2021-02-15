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
                        <h5 class="text-muted font-weight-bold">Catatan Kehadiran Pegawai </h5>
                    </div>
                    <a href="{{route('tambah.absensi')}}" type="submit" class="btn btn-warning">Input Kehadiran Pegawai</a>
                <div class="pt-4">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nip</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Hadir</th>
                                <th>Sakit</th>
                                <th>Izin</th>
                                <th>Alpha</th>
                                <th>Lembur</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($types as $type)
                            <tr>
                                <td>{{$type->employee->nip}}</td>
                                <td>{{$type->employee->nama}}</td>
                                <td>{{$type->employee->jabatan}}</td>
                                <td>{{$type->hadir}}</td>
                                <td>{{$type->sakit}}</td>
                                <td>{{$type->izin}}</td>
                                <td>{{$type->alpha}}</td>
                                <td>{{$type->lembur}}</td>
                                <td> 
                                <form action="{{route('hapus.absensi', $type->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    <a href="" type="submit" class="btn btn-sm btn-primary">Edit</a> 
                                </form>
                                </td>
                            @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection