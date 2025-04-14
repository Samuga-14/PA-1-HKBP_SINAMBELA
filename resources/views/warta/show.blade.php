@extends('layout')

@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="card shadow-lg border-left-navy">
      <div class="card-header bg-dark text-white">
        <h3 class="card-title"><i class="fas fa-eye"></i> Detail Warta Jemaat</h3>
      </div>
      <div class="card-body">
        <dl class="row">
          <dt class="col-sm-3">Judul</dt>
          <dd class="col-sm-9">{{ $item->judul }}</dd>

          <dt class="col-sm-3">Tanggal</dt>
          <dd class="col-sm-9">{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}</dd>

          <dt class="col-sm-3">Isi Warta</dt>
          <dd class="col-sm-9">{{ $item->isi }}</dd>
        </dl>
      </div>
      <div class="card-footer bg-white">
        <a href="{{ route('warta.index') }}" class="btn bg-navy text-white"><i class="fas fa-arrow-left"></i> Kembali ke Daftar</a>
      </div>
    </div>
  </div>
</section>
@endsection
