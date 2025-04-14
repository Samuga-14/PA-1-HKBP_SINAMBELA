@extends('layout.admin')

@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="card border-dark shadow">
      <div class="card-header bg-navy text-white">
        <h3 class="card-title"><i class="fas fa-plus-circle"></i> Tambah Warta Jemaat</h3>
      </div>

      <form action="{{ route('warta.store') }}" method="POST">
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" name="judul" class="form-control" placeholder="Masukkan Judul" required>
          </div>

          <div class="form-group">
            <label for="isi">Isi Warta</label>
            <textarea name="isi" class="form-control" rows="5" placeholder="Tulis isi warta jemaat..." required></textarea>
          </div>

          <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" required>
          </div>
        </div>

        <div class="card-footer bg-white d-flex justify-content-between">
          <a href="{{ route('warta.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Kembali</a>
          <button type="submit" class="btn bg-navy text-white"><i class="fas fa-save"></i> Simpan</button>
        </div>
      </form>
    </div>
  </div>
</section>
@endsection
