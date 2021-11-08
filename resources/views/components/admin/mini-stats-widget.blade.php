@props(['stats' => null, 'wIconClass' => 'text-danger'])
<div class="card">
    <div class="card-body">
        <div class="mini-stat clearfix">
            <span class="font-size-40 {{ $wIconClass }} me-0 float-end">{{ $icon }}</span>
            <div class="mini-stat-info">
                <h3 class="counter fw-normal mt-0">{{ $wValue }}</h3>
            </div>
            <div class="clearfix"></div>
            <p class=" mb-0 mt-3 text-muted">{{ $wSubject }} @if($stats) {{ $stats }} @endif</p>
        </div>
    </div>
</div>
