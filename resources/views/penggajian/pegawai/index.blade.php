@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex">
                <h5 class="text-muted font-weight-bold">Data Pegawai</h5>
            </div>
            <div class="pt-3">
                <a href="{{route('penggajians.pegawai.buat')}}" type="submit" class="btn btn-warning">Tambah Pegawai</a>
            </div>
            <div class="pt-4">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nip</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Informasi</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($employees as $employee)
                        <tr>
                            <td>{{$employee->nip}}</td>
                            <td>{{$employee->nama}}</td>
                            <td>{{$employee->jabatan}}</td>
                            <td>{{$employee->keterangan}}</td>
                            <td>
                            <form action="{{route('penggajians.pegawai.hapus', $employee->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="{{route('penggajians.pegawai.edit', $employee->id)}}" type="submit" class="btn btn-sm btn-primary">Edit</a> 
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button> 
                                <a href="{{route('penggajians.pegawai.lihat', $employee->id)}}" type="submit" class="btn btn-sm btn-info">Detail</a> 
                            </form>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="5">
                                    Data pegawai belum tersedia.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div>
                {{ $employees->links() }}
            </div>
        </div>
    </div>
</div>
@endsection