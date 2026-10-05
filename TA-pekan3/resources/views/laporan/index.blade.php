@extends('layouts.app')

@section('title', 'Daftar Laporan')

@section('content')
    <h2>Daftar Laporan Banjir</h2>
    <p>Contoh laporan kejadian banjir di Kabupaten Bandung.</p>

    <div class="report-list">
        @forelse ($laporan as $item)
            @include('partials.laporan-card', ['laporan' => $item])
        @empty
            <p>Belum ada laporan banjir.</p>
        @endforelse
    </div>
@endsection