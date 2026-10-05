@extends('layouts.app')

@section('title', 'Form Pelaporan')

@section('content')
    <section class="panel">
        <h2>Laporkan Kejadian Banjir</h2>
        <p>Isi informasi kejadian banjir yang Anda temukan.</p>

        <form action="{{ route('laporan.store') }}" method="POST">
            @csrf
            <div class="field">
                <label for="nama">Nama pelapor</label>
                <input id="nama" name="nama" type="text" value="{{ old('nama') }}" required maxlength="100">
                @error('nama') <p class="error">{{ $message }}</p> @enderror
            </div>
            <div class="field">
                <label for="lokasi">Lokasi kejadian</label>
                <input id="lokasi" name="lokasi" type="text" value="{{ old('lokasi') }}" required maxlength="255" placeholder="Contoh: Baleendah, Kecamatan Baleendah">
                @error('lokasi') <p class="error">{{ $message }}</p> @enderror
            </div>
            <div class="field">
                <label for="tinggi">Tinggi genangan air (cm)</label>
                <input id="tinggi" name="tinggi" type="number" value="{{ old('tinggi') }}" required min="0" step="any">
                @error('tinggi') <p class="error">{{ $message }}</p> @enderror
            </div>
            <button type="submit">Kirim Laporan</button>
        </form>
    </section>
@endsection