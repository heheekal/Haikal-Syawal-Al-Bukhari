<article class="report-card">
    <h3>{{ $laporan['lokasi'] }}</h3>
    <p><strong>Pelapor:</strong> {{ $laporan['nama'] }}</p>
    <p><strong>Tinggi genangan:</strong> {{ $laporan['tinggi'] }} cm</p>

    @if ($laporan['tinggi'] < 30)
        <span class="status waspada">Waspada</span>
    @elseif ($laporan['tinggi'] <= 70)
        <span class="status siaga">Siaga</span>
    @else
        <span class="status awas">Awas</span>
    @endif
</article>