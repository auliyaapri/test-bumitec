@extends('layouts.app')

@section('content')

<!-- Page Content -->

<div class="page-heading contact-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h4>Sparepart</h4>
                    <h2>Tambahkan Sparepart</h2>
                </div>
            </div>
        </div>



    </div>
</div>

<div class="container mt-5">
    <div class="row mx-auto">
        <div class="col-12">
            <form action="{{ route('spareparts-store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Sparepart</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="Kategori" class="form-label">Kategori</label>
                    <select class="form-control" id="category_id" name="category_id">
                        <option value="">Pilih Kategori</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>


                <div class="mb-3">
                    <label for="code" class="form-label">Code Sparepart</label>
                    <input type="text" class="form-control" id="code" name="code">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Harga Sparepart</label>
                    <input type="number" class="form-control" id="price" name="price">
                </div>
                <div class="mb-3">
                    <label for="supplier" class="form-label">Supplier</label>
                    <select class="form-control" id="supplier_id" name="supplier_id">
                        <option value="">Pilih Supplier</option>
                        @foreach ($suppliers as $supplier)
                        <option value="{{ $supplier->id }}">{{ $supplier->company_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="quantity" class="form-label">Jumlah Sparepart</label>
                    <input type="number" class="form-control" id="quantity" name="quantity">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description Sparepart</label>
                    <textarea name="description" rows="6" class="form-control" id="description"
                        placeholder="Description of Sparepart" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>


@endsection