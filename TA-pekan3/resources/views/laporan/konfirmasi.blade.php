@extends('layouts.app')

@section('title', 'Konfirmasi Laporan')

@section('content')
    <section class="panel">
        <x-alert type="success">Laporan berhasil dikirim. Terima kasih telah membantu melaporkan kondisi banjir.</x-alert>
        <h2>Detail Laporan</h2>
        <dl class="details">
            <div><dt>Nama pelapor</dt><dd>{{ $laporan['nama'] }}</dd></div>
            <div><dt>Lokasi kejadian</dt><dd>{{ $laporan['lokasi'] }}</dd></div>
            <div><dt>Tinggi genangan</dt><dd>{{ $laporan['tinggi'] }} cm</dd></div>
        </dl>
        <a class="button" href="{{ route('laporan.form') }}">Buat Laporan Baru</a>
        <a class="button" href="{{ route('laporan.index') }}">Lihat Daftar Laporan</a>
    </section>
@endsection