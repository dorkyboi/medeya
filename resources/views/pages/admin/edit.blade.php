@extends('layouts.admin.main')

@section('main')
    @component('components.admin.page-header', $headerArgs)
        {{ $title }}
        @slot('description')
            {{ $subtitle }}
        @endslot
    @endcomponent

    @if($translatable)
        <x-form-locale-switcher :form="$form"/>
    @else
        <div class="card shadow mb-4">
            <div class="card-body">
                {!! form($form) !!}
            </div>
        </div>
    @endif
@endsection
