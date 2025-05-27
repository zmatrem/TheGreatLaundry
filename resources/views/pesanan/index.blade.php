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
        <a href="{{ route('pesanan.create') }}" class="btn btn-primary btn-round">Tambah Data</a>
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
                    <th>Layanan</th>
                    <th>Status</th>
                    
                  </tr>
                </thead>
                <tbody>
                  @forelse($pesanans as $index => $pesanan)
                  <tr>
                    <td>{{ $pesanan->nama }}</td>
                    <td>{{ $pesanan->layanan }}</td>
                    <td>{{ $pesanan->status }}</td>
                    <td>
                      <span class="badge bg-{{ $pesanan->status === 'done' ? 'success' : ($pesanan->status === 'processing' ? 'warning' : 'secondary') }}">
                        {{ ucfirst($pesanan->status) }}
                      </span>
                    </td>
                    <td>
                      <a href="{{ route('pesanan.edit', $pesanan->id) }}" class="btn btn-sm btn-info">Edit</a>
                      <form action="{{ route('pesanan.destroy', $pesanan->id) }}" method="POST" style="display:inline;">
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
              {{ $pesanans->links() }} <!-- Pagination -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
