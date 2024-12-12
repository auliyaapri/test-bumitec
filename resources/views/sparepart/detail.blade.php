@extends('layouts.app')

@section('content')
<!-- Page Content -->


<div class="page-heading contact-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h4>Detail Sparepart</h4>
                    <h3 class="judul-banner">Sparepart {{ $sparepart->name }}</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">

    <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#exampleModal">
        Edit Spareparts
      </button>
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                    <form action="{{ route('spareparts-update', $sparepart->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                      <div class="mb-3">
                          <label for="name" class="form-label">Nama Sparepart</label>
                          <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $sparepart->name) }}" required>
                      </div>
      
                      <div class="mb-3">
                          <label for="code" class="form-label">Kode Sparepart</label>
                          <input type="text" class="form-control" id="code" name="code" value="{{ old('code', $sparepart->code) }}" required>
                      </div>
      
                      <div class="mb-3">
                          <label for="price" class="form-label">Harga Sparepart</label>
                          <input type="number" class="form-control" id="price" name="price" value="{{ old('price', $sparepart->price) }}" required>
                      </div>
      
                      <div class="mb-3">
                          <label for="quantity" class="form-label">Jumlah Sparepart</label>
                          <input type="number" class="form-control" id="quantity" name="quantity" value="{{ old('quantity', $sparepart->quantity) }}" required>
                      </div>
      
                      <div class="mb-3">
                          <label for="supplier_id" class="form-label">Supplier</label>
                          <select class="form-control" id="supplier_id" name="supplier_id" required>
                              <option value="">Pilih Supplier</option>
                              @foreach ($suppliers as $supplier)
                              <option value="{{ $supplier->id }}" {{ old('supplier_id', $sparepart->supplier_id) == $supplier->id ? 'selected' : '' }}>
                                  {{ $supplier->company_name }}
                              </option>
                              @endforeach
                          </select>
                      </div>
      
                      <div class="mb-3">
                          <label for="category_id" class="form-label">Kategori</label>
                          <select class="form-control" id="category_id" name="category_id" required>
                              <option value="">Pilih Kategori</option>
                              @foreach ($categories as $category)
                              <option value="{{ $category->id }}" {{ old('category_id', $sparepart->category_id) == $category->id ? 'selected' : '' }}>
                                  {{ $category->name }}
                              </option>
                              @endforeach
                          </select>
                      </div>
      
                      <div class="mb-3">
                          <label for="description" class="form-label">Deskripsi</label>
                          <textarea name="description" rows="4" class="form-control" id="description" required>{{ old('description', $sparepart->description) }}</textarea>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>
                  </div>
                 
              </div>
          </div>
      </div>
    

    <br>

    <ul class="list-group">
        <li class="list-group-item"><strong>Nama:</strong> {{ $sparepart->name }}</li>
        <li class="list-group-item"><strong>Kode:</strong> {{ $sparepart->code }}</li>
        <li class="list-group-item"><strong>Harga:</strong> Rp{{ number_format($sparepart->price, 0, ',', '.') }}</li>
        <li class="list-group-item"><strong>Jumlah:</strong> {{ $sparepart->quantity }}</li>
        <li class="list-group-item"><strong>Deskripsi:</strong> {{ $sparepart->description }}</li>
        <li class="list-group-item"><strong>Supplier:</strong> {{ $sparepart->supplier->company_name ?? 'Tidak Ada' }}</li>
        <li class="list-group-item"><strong>Kategori:</strong> {{ $sparepart->category->name ?? 'Tidak Ada' }}</li>
    </ul>
</div>
@endsection
