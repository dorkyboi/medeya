@extends('layouts.admin.main')

@section('content')
    @component('components.admin.page-header', [
        'back_to_list' => [
            'route' => route('components.admin.users.index'),
            'permission' => 'list users',
        ],
    ])
        @if($edit)
            Edytuj użytkownika
            @slot('description')
                {{ $user->full_name }}
            @endslot
        @else
            Dodaj nowego użytkownika
        @endif
    @endcomponent

    <div class="card shadow mb-4">
        <div class="card-body">
            {!! form($form) !!}
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_KEY') }}&libraries=places" type="text/javascript"></script>
    <script src="/js/map-inputs.js"></script>
@endpush
