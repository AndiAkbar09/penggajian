@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h5 class="text-muted font-weight-bolder">Pembayaran Gaji</h5>
            </div>
            <div class="pt-3">
                <a href="{{route('tambah.payment')}}" class="btn btn-warning">Tambah</a>
            </div>
            <div class="pt-4">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nip</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>No rek</th>
                            <th>Tgl Transfer</th>
                            <th>Total</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($payments as $payment)
                        <tr>
                            <td>{{$payment->employee->nip}}</td>
                            <td>{{$payment->employee->nama}}</td>
                            <td>{{$payment->employee->jabatan}}</td>
                            <td>{{$payment->no_rek}}</td>
                            <td>{{$payment->tgl_transfer}}</td>
                            <td>{{$payment->price->total}}</td>
                            <td>
                                <form action="{{route('hapus.payment', $payment->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="{{route('edit.payment', $payment->id)}}" type="submit" class="btn btn-primary">Edit</a>
                                <button type="submit" class="btn btn-danger">Hapus</button>
                                <a href="{{route('lihat.payment', $payment->id)}}" type="submit" class="btn btn-success">Detail</a>
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