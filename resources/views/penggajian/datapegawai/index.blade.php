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
                    <h5 class="text-muted font-weight-bold">Data Pegawai</h5>
                </div>
                <a href="{{route('penggajians.data-pegawai.buat')}}" type="submit" class="btn btn-warning">Tambah Pegawai</a>
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
                            @forelse($pegawais as $pegawai)
                            <tr>
                                <td>{{$pegawai->nip}}</td>
                                <td>{{$pegawai->nama}}</td>
                                <td>{{$pegawai->gaji}}</td>
                                <td>{{$pegawai->tanggal}}</td>
                                <td>
                                <form action="{{route('penggajians.data-pegawai.hapus', $pegawai->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="" type="submit" class="btn btn-sm btn-info">Detail</a> 
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button> 
                                    <a href="" type="submit" class="btn btn-sm btn-primary">Transfer Gaji</a> 
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
            </div>
        </div>
    </div>
</div>
@endsection