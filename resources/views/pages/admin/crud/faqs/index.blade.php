@extends('layouts.admin.main')

@section('main')
    @component('components.admin.page-header', [
        'create' => [
            'route' => route('components.admin.faqs.create'),
        ],
    ])
        {{ __('FAQ') }}
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
