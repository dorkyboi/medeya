@extends('layouts.admin.main')

@section('content')
    @component('components.admin.page-header')
        {{ __('mails.plural') }}
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
