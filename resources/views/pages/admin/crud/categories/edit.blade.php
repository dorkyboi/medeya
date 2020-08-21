@extends('layouts.admin.main')

@section('content')
    @component('components.admin.page-header', [
        'back_to_list' => [
            'route' => route('components.admin.categories.index'),
            'permission' => 'list categories',
        ],
    ])
        @if($edit)
            Edytuj kategorię
            @slot('description')
                {{ $category->name }}
            @endslot
        @else
            Dodaj nową kategorię
        @endif
    @endcomponent

    <div class="card shadow mb-4">
        <div class="card-body">
            {!! form($form) !!}
        </div>
    </div>
@endsection
