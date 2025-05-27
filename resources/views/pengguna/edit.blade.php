@extends('layouts.app')

@section('content')
<div class="container">
  <div class="page-inner">
    <div class="page-header">
      <h4 class="page-title">Edit Data Laundry</h4>
    </div>

    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <div class="card-title">Form Edit Laundry</div>
          </div>
          <div class="card-body">
            <form action="{{ route('laundry.update', $laundry->id) }}" method="POST">
              @csrf
              @method('PUT')

              <div class="form-group">
                <label>Nama Customer</label>
                <input type="text" name="customer_name" class="form-control" value="{{ $laundry->customer_name }}" required>
              </div>

              <div class="form-group">
                <label>No. Telepon</label>
                <input type="text" name="phone" class="form-control" value="{{ $laundry->phone }}" required>
              </div>

              <div class="form-group">
                <label>Jenis Layanan</label>
                <select name="service_type" class="form-control" required>
                  <option value="Cuci Kering" {{ $laundry->service_type == 'Cuci Kering' ? 'selected' : '' }}>Cuci Kering</option>
                  <option value="Cuci Setrika" {{ $laundry->service_type == 'Cuci Setrika' ? 'selected' : '' }}>Cuci Setrika</option>
                  <option value="Setrika" {{ $laundry->service_type == 'Setrika' ? 'selected' : '' }}>Setrika</option>
                </select>
              </div>

              <div class="form-group">
                <label>Berat (kg)</label>
                <input type="number" name="weight" step="0.1" class="form-control" value="{{ $laundry->weight }}" required>
              </div>

              <div class="form-group">
                <label>Total Harga (Rp)</label>
                <input type="number" name="price" class="form-control" value="{{ $laundry->price }}" required>
              </div>

              <div class="form-group">
                <label>Status</label>
                <select name="status" class="form-control" required>
                  <option value="pending" {{ $laundry->status == 'pending' ? 'selected' : '' }}>Pending</option>
                  <option value="processing" {{ $laundry->status == 'processing' ? 'selected' : '' }}>Processing</option>
                  <option value="done" {{ $laundry->status == 'done' ? 'selected' : '' }}>Done</option>
                </select>
              </div>

              <div class="form-group">
                <button class="btn btn-primary">Update</button>
                <a href="{{ route('pengguna.index') }}" class="btn btn-secondary">Kembali</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
