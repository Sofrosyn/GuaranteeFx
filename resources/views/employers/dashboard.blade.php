@extends('layouts.employer')

@section('content')
    <div class="card card-body">
        <div class="list-group list-group-numbered">
            @forelse($jobs as $job)
                <div class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">{{ $job->title }}</div>
                        {{ $job->location }}
                    </div>
                    <div>
                        <span class="d-block badge bg-{{ $job->status->colour }} rounded-pill">{{ $job->status->name }}</span>

                        {{ $job->created_at->todateString() }}
                    </div>
                </div>
            @empty

            @endforelse
        </div>
    </div>
@endsection
