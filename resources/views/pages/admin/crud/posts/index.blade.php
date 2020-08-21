@extends('layouts.admin.main')

@section('main')
    @component('components.admin.page-header', [
        'create' => [
            'route' => route('components.admin.posts.create'),
        ],
    ])
        @lang('Posts')
    @endcomponent

    <div class="card shadow">
        <div class="card-body">
            <div class="wide-table-container">
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{ $dataTable->scripts() }}
@endpush
