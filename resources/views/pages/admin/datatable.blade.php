@extends('layouts.admin.main')

@section('main')
    @component('components.admin.page-header', $buttons)
        {{ $title }}
    @endcomponent

    <div class="card shadow mb-4">
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
