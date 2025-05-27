@extends('layouts.app')

@section('content')
<div class="container">
  <div class="page-inner">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
      <div>
        <h3 class="fw-bold mb-3">Data Laundry</h3>
        <h6 class="op-7 mb-2">Manajemen Transaksi Laundry</h6>
      </div>
      <div class="ms-md-auto py-2 py-md-0">
        <a href="{{ route('pengguna.create') }}" class="btn btn-primary btn-round">Tambah Data</a>
      </div>
    </div>

    <!-- Table -->
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Daftar Laundry</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    
                  </tr>
                </thead>
                <tbody>
                  @forelse($penggunas as $index => $pengguna)
                  <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $pengguna->customer_name }}</td>
                    <td>{{ $pengguna->phone }}</td>
                    <td>{{ $pengguna->service_type }}</td>
                    <td>{{ $pengguna->weight }} kg</td>
                    <td>Rp {{ number_format($pengguna->price, 0, ',', '.') }}</td>
                    <td>
                      <span class="badge bg-{{ $pengguna->status === 'done' ? 'success' : ($pengguna->status === 'processing' ? 'warning' : 'secondary') }}">
                        {{ ucfirst($pengguna->status) }}
                      </span>
                    </td>
                    <td>
                      <a href="{{ route('pengguna.edit', $pengguna->id) }}" class="btn btn-sm btn-info">Edit</a>
                      <form action="{{ route('pengguna.destroy', $pengguna->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Hapus data ini?')">Hapus</button>
                      </form>
                    </td>
                  </tr>
                  @empty
                  <tr>
                    <td colspan="8" class="text-center">Tidak ada data</td>
                  </tr>
                  @endforelse
                </tbody>
              </table>
              {{ $penggunas->links() }} <!-- Pagination -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
