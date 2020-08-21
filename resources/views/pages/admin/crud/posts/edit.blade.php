@extends('layouts.admin.main')

@section('main')
    @component('components.admin.page-header', [
        'back_to_list' => [
            'route' => route('components.admin.posts.index'),
        ],
    ])
        @if($edit)
            @lang('Edit post')
            @slot('description')
                {{ $post->title }}
            @endslot
        @else
            @lang('Add new post')
        @endif
    @endcomponent

    <x-admin.form-location-switcher>
        {!! form($form) !!}
    </x-admin.form-location-switcher>
@endsection
