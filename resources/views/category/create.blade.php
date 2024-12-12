@extends('layouts.app')

@section('content')

<!-- Page Content -->

<div class="page-heading contact-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h4>Catgeory</h4>
                    <h2>Tambahkan Catgeory</h2>
                </div>
            </div>
        </div>



    </div>
</div>


<div class="container mt-5">
    <div class="row mx-auto">
        <div class="col-12">
            <form action="{{ route('category-store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Category</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
            
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            
        </div>
    </div>
</div>

@push('add-footer')

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-content">
                    <p>Copyright &copy; 2020 Sixteen Clothing Co., Ltd. - Design: <a rel="nofollow noopener"
                            href="https://templatemo.com" target="_blank">TemplateMo</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
@endpush


@endsection