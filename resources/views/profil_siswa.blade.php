@extends('layouts.app')
@section('content')
<div class="container d-flex justify-content-center mt-5">
    <div class="card">
        <a href="{{route ('siswa.index')}}" class="btn btn-info">Kembali</a>
        <div class="top-container"> <img src="https://i.pravatar.cc/300" class="img-fluid profile-image" width="70">
            <div style="margin-left: 12px">
                <h5 class="name">{{ $siswa->nama }}</h5>
                <h6 class="name text-success">{{ $siswa->nis }}</h6>
                <p class="mail">{{ $siswa->tgl_lahir }}</p>
                
            </div>
        </div>
        <div class="middle-container d-flex justify-content-between align-items-center mt-3 p-2">
            <div class="dollar-div px-3">
                <div class="round-div"><i class="fa fa-dollar dollar"></i></div>
            </div>
            <div class="d-flex flex-column text-right mr-2"> <span class="current-balance">Current Balance</span> <span class="amount"><span class="dollar-sign">$</span>1476</span> </div>
        </div>
        <div class="recent-border mt-4"> <span class="recent-orders">Recent orders</span> </div>
        <div class="wishlist-border pt-2"> <span class="wishlist">Wishlist</span> </div>
        <div class="fashion-studio-border pt-2"> <span class="fashion-studio">Fashion studio</span> </div>
    </div>
</div>
@endsection


@push('styles')

    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">

@endpush