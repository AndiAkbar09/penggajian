@extends('layouts.app')

@section('content')

<div class="container pt-4">
    <div class="card">
        <div class="card-body">
            <form action="{{route('send.sms')}}" method="post">
                @csrf
    
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Number</label>
                        <input type="text" name="number" class="form-control" id="" >
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Messagge</label>
                        <input type="text" name="text" class="form-control" id="" >
                    </div>
                </div>

                <div>
                    <button type="submit" class="btn btn-outline-primary">Simpan</button>
                </div>
            
            </form>
        </div>
    </div>
</div>

@endsection