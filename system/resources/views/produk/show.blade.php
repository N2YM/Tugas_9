@extends('template.base')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail Data Produk
                </div>
                <div class="card-body">
                    <h4>Nama Produk : {{ $produk->nama }}</h4>
                    <hr>
                    <h6>Harga Rp.{{$produk->harga}}</h6>
                    <h6>Stok : {{ $produk->stok }}</h6>
                    <h6>Berat : {{ $produk->berat }} gr</h6>
                    <h6>Seller : {{ $produk->seller->nama }}</h6>
                    <h6>Deskripsi : <br>{!!nl2br ($produk->deskripsi) !!}</h6>
                    {{-- <h6>Tanggal Produk : {{ $produk->created_at->format("d M Y") }}</h6> --}}
                    <h6>Tanggal Produk : {{ $produk->created_at->diffForHumans() }}</h6>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection