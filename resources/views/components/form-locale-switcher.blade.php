<input type="hidden" id="current_locale" value="{{ app()->getLocale() }}"/>
<input type="hidden" id="fallback_locale" value="{{ config('app.fallback_locale') }}"/>
<input type="hidden" id="translation_locales" value="{{ json_encode(config('app.locales')) }}"/>

<div id="form-locale-switcher" class="card card-nav-tabs mt-5">
    <div class="card-header card-header-primary">
        {{-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" --}}
        <div class="nav-tabs-navigation">
            <div class="nav-tabs-wrapper">
                <ul class="nav nav-tabs" data-tabs="tabs">
                    @foreach(config('app.locales') as $locale)
                        <li class="nav-item">
                            <a
                                class="nav-link{{ $locale === config('app.fallback_locale') ? ' active show' : '' }}"
                                href="#{{ $locale }}"
                                data-locale-switcher="{{ $locale }}"
                                data-toggle="tab"
                            >
                                <span class="flag-icon {{ \App\Helpers\Locales::ICONS[$locale] }}"></span>
                                &nbsp;{{ \App\Helpers\Locales::LABELS[app()->getLocale()][$locale] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="card-body">
        @if((string) $slot)
            {{ $slot }}
        @else
            @if($form->isOneColumnLayout)
                {!! form($form) !!}
            @else
                {!! form_start($form) !!}
                <div class="row">
                    <div class="col-9">
                        @foreach($form->getFields() as $field)
                            @if(!isset($field->getOptions()['side']) || $field->getOptions()['side'] !== 'right')
                                {!! form_row($field) !!}
                            @endif
                        @endforeach
                    </div>
                    <div class="col-3 d-flex justify-content-center">
                        @foreach($form->getFields() as $field)
                            @if(isset($field->getOptions()['side']) && $field->getOptions()['side'] == 'right')
                                {!! form_row($field) !!}
                            @endif
                        @endforeach
                    </div>
                </div>
                {!! form_end($form, $renderRest = false); !!}
            @endif
        @endif
    </div>
</div>
