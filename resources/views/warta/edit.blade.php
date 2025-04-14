@extends('layout.admin')

@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="card border-dark shadow">
      <div class="card-header bg-navy text-white">
        <h3 class="card-title"><i class="fas fa-edit"></i> Edit Warta Jemaat</h3>
      </div>

      <form action="{{ route('warta.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
          <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" name="judul" class="form-control" value="{{ $item->judul }}" required>
          </div>

          <div class="form-group">
            <label for="isi">Isi Warta</label>
            <textarea name="isi" class="form-control" rows="5" required>{{ $item->isi }}</textarea>
          </div>

          <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" value="{{ $item->tanggal }}" required>
          </div>
        </div>

        <div class="card-footer bg-white d-flex justify-content-between">
          <a href="{{ route('warta.index') }}" class="btn btn-dark"><i class="fas fa-arrow-left"></i> Batal</a>
          <button type="submit" class="btn bg-navy text-white"><i class="fas fa-save"></i> Update</button>
        </div>
      </form>
    </div>
  </div>
</section>
@endsection
