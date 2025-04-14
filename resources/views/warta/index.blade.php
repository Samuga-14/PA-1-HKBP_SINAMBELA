@extends('layout.admin')

@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="card card-primary card-outline">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="card-title">Daftar Warta Jemaat</h3>
        <a href="{{ route('warta.create') }}" class="btn btn-sm btn-success">
          <i class="fas fa-plus-circle"></i> Tambah Warta
        </a>
      </div>

      <div class="card-body p-0">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th style="width: 5%;">No</th>
              <th>Judul</th>
              <th>Tanggal</th>
              <th style="width: 20%;">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @forelse($data as $index => $item)
            <tr>
              <td>{{ $index + 1 }}</td>
              <td>{{ $item->judul }}</td>
              <td>{{ \Carbon\Carbon::parse($item->tanggal)->format('d-m-Y') }}</td>
              <td>
                <a href="{{ route('warta.show', $item->id) }}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
                <a href="{{ route('warta.edit', $item->id) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                <form action="{{ route('warta.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin hapus data ini?')">
                  @csrf @method('DELETE')
                  <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                </form>
              </td>
            </tr>
            @empty
            <tr>
              <td colspan="4" class="text-center">Belum ada data.</td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
@endsection
