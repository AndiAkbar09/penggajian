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
                                            Id
                                        </label>
                                        <select name="employee_id" id="employee_id" class="form-control select2">
                                            <option disabled value>Pilih Id</option>
                                            @foreach ($employee as $item)
                                            <option value="{{$item->id}}">{{$item->id}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div> 
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">
                                            Id
                                        </label>
                                        <select name="price_id" id="price_id" class="form-control select2">
                                            <option disabled value>Pilih Id</option>
                                            @foreach ($price as $item)
                                            <option value="{{$item->id}}">{{$item->id}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">No Rek</label>
                                        <input type="text" name="no_rek" class="form-control" id="" value="{{$payment->no_rek}}" >
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Tanggal Transfer</label>
                                        <input type="date" name="tgl_transfer" class="form-control" id="" value="{{$payment->tgl_transfer}}" >
                                    </div>
                                </div>
                                
                            </div>
                        
                        <div>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection