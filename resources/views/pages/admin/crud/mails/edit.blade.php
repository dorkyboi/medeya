@extends('layouts.admin.main')

@section('content')
    @component('components.admin.page-header', [
        'back_to_list' => [
            'route' => route('mails.index'),
            'permission' => 'list mails',
        ],
    ])
        Edytuj {{ lcfirst(__('mails.singular')) }}
        @slot('description')
            {{ __('mails.' . $mail->type . '.type') }}
        @endslot
    @endcomponent

    <div class="card shadow">
        <div class="card-header pb-0">
            @if(($mail->type)::SHORTCODES ?? [])
                <h4>Dostępne skróty:</h4>
                @foreach(($mail->type)::SHORTCODES ?? [] as $shortcode)
                    <p class="m-0 p-0">%%{{ $shortcode }}%% - {{ lcfirst(__('mails.' . $mail->type . '.' . $shortcode)) }}</p>
                @endforeach
            @endif
        </div>

        <div class="card-body pt-0">
            {!! form($form) !!}
        </div>
    </div>
@endsection
