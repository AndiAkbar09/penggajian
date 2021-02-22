@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-muted">Silahkan isi data
                <small class="text-muted">dibawah ini</small>
            </h3>
            <div class="pt-3">
                <div class="card border-0">
                    <div class="card-body">
                        <form action="{{route('update.payment', $payment->id)}}" method="post">
                            @csrf
                            @method('PATCH')
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">
                                            Nip
                                        </label>
                                        <select disabled name="employee_id" id="employee_id" class="form-control select2">
                                            @foreach ($employee as $item)
                                            <option value="{{$item->id}}">{{$item->nip}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div> 
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">
                                            Nama
                                        </label>
                                        <select disabled name="employee_id" id="employee_id" class="form-control select2">
                                            @foreach ($employee as $item)
                                            <option value="{{$item->id}}">{{$item->nama}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div> 
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">
                                            Jabatan
                                        </label>
                                        <select disabled name="employee_id" id="employee_id" class="form-control select2">
                                            @foreach ($employee as $item)
                                            <option value="{{$item->id}}">{{$item->jabatan}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div> 
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">
                                            Total
                                        </label>
                                        <select disabled name="price_id" id="price_id" class="form-control select2">
                                            @foreach ($price as $item)
                                            <option value="{{$item->id}}">{{$item->total}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">No Rek</label>
                                        <input type="text" name="no_rek" class="form-control" id="" disabled value="{{$payment->no_rek}}" >
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Tanggal Transfer</label>
                                        <input type="date" name="tgl_transfer" class="form-control" id="" disabled value="{{$payment->tgl_transfer}}" >
                                    </div>
                                </div>
                                
                            </div>
                        
                        <div>
                            <a href="{{route('payment')}}" type="submit" class="btn btn-success">Kembali</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection