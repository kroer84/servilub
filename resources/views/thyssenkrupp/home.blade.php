{{-- @extends('layouts.user')

@section('content') --}}

<x-layouts.user>

    <div class="card">
        {{-- <div class="card-header">{{ __('Dashboard') }}</div> --}}

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            view>thyssenkrup>home
        </div>
    </div>
</x-layouts.user>

{{-- @endsection --}}
