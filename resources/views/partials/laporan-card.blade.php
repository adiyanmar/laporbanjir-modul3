<div class="card">
    <h3>{{ $item['nama'] }}</h3>
    <p><strong>Lokasi:</strong> {{ $item['lokasi'] }}</p>
    <p><strong>Tinggi genangan:</strong> {{ $item['tinggi'] }} cm</p>
    <p><strong>Waktu lapor:</strong> {{ $item['waktu'] }}</p>

    @if($item['tinggi'] < 30)
        <p>Status: <span class="badge" style="background:#ca8a04;">Waspada</span></p>
    @elseif($item['tinggi'] <= 70)
        <p>Status: <span class="badge" style="background:#ea580c;">Siaga</span></p>
    @else
        <p>Status: <span class="badge" style="background:#dc2626;">Awas</span></p>
    @endif
</div>