@extends('layouts.admin.main')

@section('content')
    @component('components.admin.page-header', ['create' => [
        'title' => 'Dodaj nowego',
        'route' => route('users.create'),
        'permission' => 'create users',
    ]])
        Użytkownicy
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
