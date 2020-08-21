@extends('layouts.admin.main')

@section('content')
    @component('components.admin.page-header')
        {{ __('homepage.page_title') }}
    @endcomponent

    <div class="card shadow">
        <div class="card-body">
            <div class="container-fluid">
                <form action="{{ route('homepage.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card shadow">
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
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="homepage_offers_list" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{__('homepage.add_offer')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-row align-items-center">
                            <div class="col-9">
                                <select data-select2-model="App\Offer" class="select2" multiple id="selected_offers" name="selected_offers">
                                    @foreach($added_offers as $offer)
                                        <option value="{{$offer->id}}" selected>{{$offer->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-3">
                                <button type="button" class="btn btn-success" id="update_offer_list">{{__('generic.save')}}</button>
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
        $( "#homepage_sortable_offers" ).sortable({
            connectWith: '#homepage_sortable_offers',
            update: function(event, ui) {
                var order = $(this).sortable('toArray',{attribute: 'data-offer_id'});
                var positions = order.join(',');

                console.log({
                    positions: positions
                });
            }
        });
        $("#update_offer_list").on("click",function(){
            //#selected_offers
            //#homepage_sortable_offers
            var rendered_offers = [];
            $.each($('#selected_offers option'), function(){
                var text = $(this).text();
                var id = $(this).val();
                rendered_offers.push({"text":text, "id":id});
            });
            console.log(rendered_offers);
            $('#homepage_offers_list').modal('hide');
            $("#homepage_sortable_offers").html('');
            if(rendered_offers.length > 0){

                var render_list = "";
                $.each(rendered_offers, function(index, value){
                    render_list += "" +
                        "<li class=\"list-group-item border-bottom\" data-offer_id=\""+value.id+"\">" +
                            "<div class=\"d-flex justify-content-between\">" +
                                "<h4>" + value.text + "</h4>" +
                            "<input type=\"hidden\" name=\"promoted_offers[]\" value=\""+value.id+"\">" +
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
                $("#homepage_sortable_offers").html(render_list);
            }
            $(".homepage_delete_offer_button").on('click', function(){
                $(this).closest("li").remove();
            });
        });
        $(".homepage_delete_offer_button").on('click', function(){
            $(this).closest("li").remove();
        });
    </script>
@endpush
