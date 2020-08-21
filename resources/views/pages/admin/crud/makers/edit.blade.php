@extends('layouts.admin.main')

@section('main')
    @component('components.admin.page-header', [
        'back_to_list' => [
            'route' => route('components.admin.makers.index'),
        ],
    ])
        @if($edit)
            @lang('Edit maker')
            @slot('description')
                {{ $maker->name }}
            @endslot
        @else
            @lang('Add new maker')
        @endif
    @endcomponent

    <div class="card shadow">
        <div class="card-body">
            {!! form($form) !!}
        </div>
    </div>
@endsection
