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
                    <h5 class="text-muted font-weight-bold">Home</h5>
                </div>
                <span class="d-block p-2 bg-warning rounded font-weight-bold text-dark h3">Welcome !
                    <p class="mr-auto text-muted h6">Hey selamat datang kembali di aplikasi karyawan ada yang bisa kami bantu</p>
                </span>
            </div>
        </div>
    </div>
</div>
@endsection