@extends('layouts.admin.main')

@section('content')
    @component('components.admin.page-header', [
        'back_to_list' => [
            'route' => route('components.admin.cars.index'),
        ],
    ])
        @if($edit)
            @lang('Edit car')
            @slot('description')
                {{ $offer->title }}
            @endslot
        @else
            @lang('Add new car')
        @endif
    @endcomponent

    <div class="card shadow">
        <div class="card-body">
            {!! form_start($form) !!}
            <div class="row">
                <div class="col-9 mr-auto">
                    {!! form_until($form, 'content') !!}
                </div>
                <div class="col-auto">
                    {!! form_until($form, 'submit') !!}
                </div>
            </div>

            {!! form_end($form, $renderRest = false); !!}
        </div>
    </div>
@endsection
