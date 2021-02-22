@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h5 class="text-muted font-weight-bolder">Data Pendapatan Pegawai</h5>
            </div>
            <div class="pt-3">
                <a href="{{route('tambah.price')}}" class="btn btn-warning">Tambah Pendapatan Pegawai</a>
            </div>
            <div class="pt-4">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nip</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Gaji Pokok</th>
                            <th>Lembur</th>
                            <th>Pendapatan</th>
                            <th>Total</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($prices as $price)
                        <tr>
                            <td>{{$price->employee->nip}}</td>
                            <td>{{$price->employee->nama}}</td>
                            <td>{{$price->employee->jabatan}}</td>
                            <td>{{$price->gaji_pokok}}</td>
                            <td>{{$price->type->lembur}}</td>
                            <td>{{$price->pendapatan}}</td>
                            <td>{{$price->total}}</td>
                            <td>
                            <form action="{{route('hapus.price', $price->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="{{route('edit.price', $price->id)}}" type="submit" class="btn btn-primary btn-sm">Edit</a>
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                <a href="{{route('lihat.price', $price->id)}}" type="submit" class="btn btn-success btn-sm">Lihat</a>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection