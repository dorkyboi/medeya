@extends('layouts.admin.main')

@section('content')
    @component('components.admin.page-header')
        {{__('footer.page_title')}}
    @endcomponent

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('footer.update') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-4">
                        <h3>{{__('footer.social_links')}}</h3>
                        @include('components.admin.forms.social', [
                            'field' => 'facebook',
                            'label' => 'Facebook',
                            'value' => \App\FooterSetting::facebook(),
                        ])
                        @include('components.admin.forms.social', [
                            'field' => 'twitter',
                            'label' => 'Twitter',
                            'value' => \App\FooterSetting::twitter(),
                        ])
                        @include('components.admin.forms.social', [
                            'field' => 'instagram',
                            'label' => 'Instagram',
                            'value' => \App\FooterSetting::instagram(),
                        ])
                        @include('components.admin.forms.social', [
                            'field' => 'youtube',
                            'label' => 'Youtube',
                            'value' => \App\FooterSetting::youtube(),
                        ])
                        @include('components.admin.forms.social', [
                            'field' => 'linkedin',
                            'label' => 'LinkedIn',
                            'value' => \App\FooterSetting::linkedin(),
                        ])
                    </div>
                    <div class="col-5">
                        <label class="h3" for="widget_1">{{__('footer.widget_1_title')}}</label>
                        <textarea name="widget_1" id="widget_1">{{ \App\FooterSetting::widget_1() }}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <h3>{{__('footer.widget_2_title')}}</h3>

                        <button type="button" class="btn btn-success btn-icon-split"
                                id="widget_2_add_pages_to_list" data-toggle="modal"
                                data-target="#widget_2_pages_list">
                            <span class="icon"><i class="fas fa-plus-circle"></i></span>
                            <span class="text">{{__('footer.add_pages')}} 2</span>
                        </button>
                        <hr>
                        <ul class="list-group" id="widget_2_sortable_offers">

                            @foreach($widget_2_added_pages ?? [] as $widget)
                                <li class="list-group-item border-bottom" data-offer_id="{{$widget->id}}">
                                    <div class="d-flex justify-content-between">
                                        <h4>
                                            {{$widget->title}}
                                        </h4>
                                        <input type="hidden" name="widget_2[]" value="{{$widget->id}}">
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
                    <div class="col-3">
                        <h3>{{__('footer.widget_3_title')}}</h3>

                        <button type="button" class="btn btn-success btn-icon-split"
                                id="widget_3_add_pages_to_list" data-toggle="modal"
                                data-target="#widget_3_pages_list">
                            <span class="icon"><i class="fas fa-plus-circle"></i></span>
                            <span class="text">{{__('footer.add_pages')}} 3</span>
                        </button>
                        <hr>
                        <ul class="list-group" id="widget_3_sortable_offers">
                            @foreach($widget_3_added_pages ?? [] as $widget)
                                <li class="list-group-item border-bottom" data-offer_id="{{$widget->id}}">
                                    <div class="d-flex justify-content-between">
                                        <h4>
                                            {{$widget->title}}
                                        </h4>
                                        <input type="hidden" name="widget_3[]" value="{{$widget->id}}">
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
                    <div class="col-3">
                        <h3>{{__('footer.download_app_links_title')}}</h3>
                        <label>
                            <input type="checkbox" name="show_app_links"
                                   value="1" {{ \App\FooterSetting::show_app_links() ? 'checked' : '' }}>
                            {{__('footer.show_section_question')}}
                        </label>
                        <div class="form-group bmd-form-group">
                            <label for="app_store" class="control-label bmd-label-static">App Store</label>
                            <input class="form-control" name="app_store" type="text" id="app_store"
                                   value="{{ \App\FooterSetting::app_store() ?? '' }}">
                        </div>
                        <div class="form-group bmd-form-group">
                            <label for="google_play" class="control-label bmd-label-static">Google Play</label>
                            <input class="form-control" name="google_play" type="text" id="google_play"
                                   value="{{ \App\FooterSetting::google_play() ?? '' }}">
                        </div>
                    </div>
                </div>
                @include('components.admin.submit-button')
            </form>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="widget_2_pages_list" tabindex="-1" role="dialog"
         aria-labelledby="Widget_2_Modal_label"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="Widget_2_Modal_label">{{__('footer.widget_2_title')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-row align-items-center">
                            <div class="col-9">
                                <select data-select2-model="App\Page" class="select2" multiple id="widget_2_selected_pages"
                                        name="widget_2_selected_pages">
                                    @foreach($widget_2_added_pages as $pages)
                                        <option value="{{$pages->id}}" selected>{{$pages->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-3">
                                <button type="button" class="btn btn-success"
                                        id="update_widget_2_pages_list">{{__('generic.save')}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="widget_3_pages_list" tabindex="-1" role="dialog"
         aria-labelledby="Widget_3_Modal_label"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="Widget_3_Modal_label">{{__('footer.widget_3_title')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-row align-items-center">
                            <div class="col-9">
                                <select data-select2-model="App\Page" class="select2" multiple id="widget_3_selected_pages"
                                        name="widget_3_selected_pages">
                                    @foreach($widget_3_added_pages as $pages)
                                        <option value="{{$pages->id}}" selected>{{$pages->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-3">
                                <button type="button" class="btn btn-success"
                                        id="update_widget_3_pages_list">{{__('generic.save')}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        $("#widget_2_sortable_offers").sortable({
            connectWith: '#widget_2_sortable_offers',
            update: function (event, ui) {
                var order = $(this).sortable('toArray', {attribute: 'data-offer_id'});
                var positions = order.join(',');

                console.log({
                    positions: positions
                });
            }
        });
        $("#update_widget_2_pages_list").on("click", function () {
            var rendered_offers = [];
            $.each($('#widget_2_selected_pages option'), function () {
                var text = $(this).text();
                var id = $(this).val();
                rendered_offers.push({"text": text, "id": id});
            });
            console.log(rendered_offers);
            $('#widget_2_pages_list').modal('hide');
            if (rendered_offers.length > 0) {
                var render_list = "";
                $.each(rendered_offers, function (index, value) {
                    render_list += "" +
                        "<li class=\"list-group-item border-bottom\" data-offer_id=\"" + value.id + "\">" +
                        "<div class=\"d-flex justify-content-between\">" +
                        "<h4>" + value.text + "</h4>" +
                        "<input type=\"hidden\" name=\"widget_2[]\" value=\"" + value.id + "\">" +
                        "<div class=\"homepage-offers-offer-actions\">" +
                        "<a href=\"#\" class=\"btn btn-primary homepage_move_offer_button\">" +
                        "<em class=\"fas fa-arrows-alt\"></em>\n" +
                        "</a>" +
                        "<a href=\"#\" class=\"btn btn-danger homepage_delete_offer_button\">" +
                        "<em class=\"fas fa-trash\"></em>\n" +
                        "</a>" +
                        "</div>" +
                        "</div>" +
                        "</li>";
                });
                $("#widget_2_sortable_offers").html(render_list);
            }
        });
        $("#widget_3_sortable_offers").sortable({
            connectWith: '#widget_3_sortable_offers',
            update: function (event, ui) {
                var order = $(this).sortable('toArray', {attribute: 'data-offer_id'});
                var positions = order.join(',');

                console.log({
                    positions: positions
                });
            }
        });
        $("#update_widget_3_pages_list").on("click", function () {
            var rendered_offers = [];
            $.each($('#widget_3_selected_pages option'), function () {
                var text = $(this).text();
                var id = $(this).val();
                rendered_offers.push({"text": text, "id": id});
            });
            console.log(rendered_offers);
            $('#widget_3_pages_list').modal('hide');
            if (rendered_offers.length > 0) {
                var render_list = "";
                $.each(rendered_offers, function (index, value) {
                    render_list += "" +
                        "<li class=\"list-group-item border-bottom\" data-offer_id=\"" + value.id + "\">" +
                        "<div class=\"d-flex justify-content-between\">" +
                        "<h4>" + value.text + "</h4>" +
                        "<input type=\"hidden\" name=\"widget_3[]\" value=\"" + value.id + "\">" +
                        "<div class=\"homepage-offers-offer-actions\">" +
                        "<a href=\"#\" class=\"btn btn-primary homepage_move_offer_button\">" +
                        "<em class=\"fas fa-arrows-alt\"></em>\n" +
                        "</a>" +
                        "<a href=\"#\" class=\"btn btn-danger homepage_delete_offer_button\">" +
                        "<em class=\"fas fa-trash\"></em>\n" +
                        "</a>" +
                        "</div>" +
                        "</div>" +
                        "</li>";
                });
                $("#widget_3_sortable_offers").html(render_list);
            }
        });
        $(".homepage_delete_offer_button").on('click', function () {
            $(this).closest("li").remove();
        });
    </script>
@endpush
