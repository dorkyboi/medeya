@extends('layouts.admin.main')

@section('main')
    @component('components.admin.page-header')
        {{ __('Homepage settings') }}
    @endcomponent

    <x-form-locale-switcher :form="$form"/>

    {{--<div class="card shadow">
        <div class="card-body">
            <div class="container-fluid">
                <form action="{{ route('admin.homepage.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    --}}{{--<div class="card shadow">
                        <div class="card-header card-header card-header-text card-header-success">
                            <div class="card-text">
                                <h4 class="card-title">Favicon</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            @if(\App\HomepageSetting::favicon())
                                <img src="{{ url(\App\HomepageSetting::favicon()) }}" width="200px" height="200px" alt="" class="img-fluid">
                            @endif
                            <input type="file" name="favicon" class="form-control" value="{{ \App\HomepageSetting::favicon() }}">
                        </div>
                    </div>
                    <div class="card shadow">
                        <div class="card-header card-header card-header-text card-header-success">
                            <div class="card-text">
                                <h4 class="card-title">{{ __('homepage.slider_section_title') }}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    @include('components.admin.forms.social', [
                                        'field' => 'slider_title',
                                        'label' => __('homepage.title'),
                                        'value' => \App\HomepageSetting::slider_title(),
                                    ])
                                    @include('components.admin.forms.social', [
                                        'field' => 'slider_subtitle',
                                        'label' => __('homepage.subtitle'),
                                        'value' => \App\HomepageSetting::slider_subtitle(),
                                    ])
                                    @include('components.admin.forms.social', [
                                        'field' => 'slider_link_text',
                                        'label' => __('homepage.link_text'),
                                        'value' => \App\HomepageSetting::slider_link_text(),
                                    ])
                                    @include('components.admin.forms.social', [
                                        'field' => 'slider_link',
                                        'label' => __('homepage.link'),
                                        'value' => \App\HomepageSetting::slider_link(),
                                    ])

                                </div>
                                <div class="col-lg-6">
                                    @if(\App\HomepageSetting::slider_image())
                                        <img src="{{url(\App\HomepageSetting::slider_image())}}" alt=""
                                             class="img-fluid">
                                    @endif
                                    <input type="file" name="slider_image" class="form-control" value="{{\App\HomepageSetting::slider_image()}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow">
                        <div class="card-header card-header card-header-text card-header-success">
                            <div class="card-text">
                                <h4 class="card-title">{{ __('homepage.best_offers') }}</h4>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <button type="button" class="btn btn-success btn-icon-split"
                                            id="homepage_add_offer_to_list" data-toggle="modal"
                                            data-target="#homepage_offers_list">
                                        <span class="icon"><i class="fas fa-plus-circle"></i></span>
                                        <span class="text">{{__('homepage.add_offer')}}</span>
                                    </button>
                                    <hr>
                                    <ul class="list-group" id="homepage_sortable_offers">
                                        @foreach($added_offers as $offer)
                                            <li class="list-group-item border-bottom" data-offer_id="{{$offer->id}}">
                                                <div class="d-flex justify-content-between">
                                                    <h4>
                                                        {{$offer->title}}
                                                    </h4>
                                                    <input type="hidden" name="promoted_offers[]" value="{{$offer->id}}">
                                                    <div class="homepage-offers-offer-actions">
                                                        <a href="#" title="{{ __('homepage.change_order')}}"
                                                           class="btn btn-primary homepage_move_offer_button">
                                                            <em class="fas fa-arrows-alt"></em>
                                                        </a>
                                                        <a href="#"
                                                           title="{{ __('homepage.remove_offer_from_list')}}"
                                                           class="btn btn-danger homepage_delete_offer_button">
                                                            <em class="fas fa-trash"></em>
                                                        </a>

                                                    </div>
                                                </div>

                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            @include('components.admin.submit-button')
                        </div>
                    </div>--}}{{--
                </form>
            </div>
        </div>
    </div>--}}
@endsection
