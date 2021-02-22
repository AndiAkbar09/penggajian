@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex">
                <h5 class="text-muted font-weight-bold">Catatan Kehadiran Pegawai </h5>
            </div>
            <div class="pt-3">
                    <a href="{{route('tambah.absensi')}}" type="submit" class="btn btn-warning">Input Kehadiran Pegawai</a>
            </div>
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
                                <a href="{{route('edit.absensi', $type->id)}}" type="submit" class="btn btn-sm btn-primary">Edit</a> 
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
@endsection