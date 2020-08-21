@extends('layouts.admin.main')

@section('main')
    @component('components.admin.page-header', [
        'back_to_list' => [
            'route' => route('components.admin.faqs.index'),
        ],
    ])
        @if($edit)
            @lang('Edit FAQ')
            @slot('description')
                {{ $faq->title }}
            @endslot
        @else
            @lang('Add new FAQ')
        @endif
    @endcomponent

    <x-admin.form-location-switcher>
        {!! form($form) !!}
    </x-admin.form-location-switcher>
@endsection
