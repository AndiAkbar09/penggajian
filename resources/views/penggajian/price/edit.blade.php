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
                        <form action="{{route('update.price', $price->id)}}" method="post">
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
                                        <select name="type_id" id="type_id" class="form-control select2">
                                            <option disabled value>Pilih Id</option>
                                            @foreach ($type as $item)
                                            <option value="{{$item->id}}">{{$item->id}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Gaji Pokok</label>
                                        <input type="text" name="gaji_pokok" class="form-control" value="{{$price->gaji_pokok}}" id="" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Jam Lembur</label>
                                        <input type="text" name="jam_lembur" class="form-control" value="{{$price->jam_lembur}}" id="" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Uang Lembur</label>
                                        <input type="text" name="uang_lembur" class="form-control" value="{{$price->uang_lembur}}" id="" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Uang Makan</label>
                                        <input type="text" name="uang_makan" class="form-control" value="{{$price->uang_makan}}" id="" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Uang Transport</label>
                                        <input type="text" name="uang_transport" class="form-control" value="{{$price->uang_transport}}" id="" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Pendapatan</label>
                                        <input type="text" name="pendapatan" class="form-control" value="{{$price->pendapatan}}" id="" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Potongan</label>
                                        <input type="text" name="potongan" class="form-control" value="{{$price->potongan}}" id="" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Total</label>
                                        <input type="text" name="total" class="form-control" value="{{$price->total}}" id="" >
                                    </div>
                                </div>
                                
                            </div>
                        
                        <div>
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <a href="{{route('price')}}" type="submit" class="btn btn-primary">Cancel</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection