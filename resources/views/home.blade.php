@extends('layouts.app')

@section('content')

<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="banner header-text">
    <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
            <div class="text-content">
                <h4>Spareparts</h4>
                <h2>Spareparts Motor</h2>
            </div>
        </div>
    </div>
</div>
<!-- Banner Ends Here -->

<div class="latest-products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Daftar Spareparts</h2>
                    <form action="{{ route('spareparts') }}" method="GET">
                        <div class="d-flex">
                            <input type="text" name="query" placeholder="Cari sparepart..." class="form-control w-25" value="{{ request('query') }}">
                            <button class="btn btn-primary" type="submit">Cari</button>

                        </div>
                    </form>
                </div>
            </div>
         
            
            @foreach ($spareparts as $sparepart)
            <div class="col-md-4">
                <div class="product-item">
                    <div class="down-content">
                        <a href="#">
                            <h4>{{$sparepart->name}}</h4>
                        </a>
                        <p>Rp. {{ number_format($sparepart->price, 0, ',', '.') }}</p>
                        <p>Kode : {{ $sparepart->code }}</p>
                       <div class="d-flex justify-between">
                        <a href="{{ route('spareparts-detail', $sparepart->id) }}" class="btn btn-success">Detail</a>
                    
                        <form action="{{ route('spareparts-destroy', $sparepart->id) }}" class="ml-3" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>

                    </div>
                </div>
            </div>
            @endforeach

        </div>
      
    </div>
</div>



@endsection