@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-muted">Silahkan Isi Data
                <small class="text-muted">dibawah ini</small>
            </h3> 
            <div class="pt-3">
                <div class="card border-0">
                    <div class="card-body">
                        <form action="{{route('update.absensi', $type->id)}}" enctype="multipart/form-data" method="post">
                            @csrf
                            @method('PATCH')

                            <div class="row">

                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for=""> Id </label>
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
                                        <label for="">Hadir</label>
                                        <input type="number" name="hadir" class="form-control" id="" value="{{$type->hadir}}" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Sakit</label>
                                        <input type="number" name="sakit" class="form-control" id="" value="{{$type->sakit}}" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Izin</label>
                                        <input type="number" name="izin" class="form-control" id="" value="{{$type->izin}}" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Alpha</label>
                                        <input type="number" name="alpha" class="form-control" id="" value="{{$type->alpha}}" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Lembur</label>
                                        <input type="number" name="lembur" class="form-control" id="" value="{{$type->lembur}}" >
                                    </div>
                                </div>
                                
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="{{route('absensi')}}" type="submit" class="btn btn-success">Cancel</a>
                            </div>
                        </form>            
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection