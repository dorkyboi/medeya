@extends('layouts.admin.main')
@push('styles')

@endpush
@section('content')
    @component('components.admin.page-header', [
        'back_to_list' => [
            'route' => route('components.admin.offers.index'),
            'permission' => 'list offers',
        ],
    ])
        @if($edit)
            Edytuj element
            @slot('description')
                {{ $offer->title }}
            @endslot
        @else
            Dodaj nowy element
        @endif
    @endcomponent

    <div class="card shadow">
        <div class="card-body">
            {!! form_start($form) !!}
            <div class="row">
                <div class="col-7">
                    {!! form_until($form, 'notes') !!}
                </div>
                <div class="col-5">

                    {!! form_rest($form) !!}
                </div>
            </div>
            {!! form_end($form, $renderRest = false); !!}
        </div>
    </div>
@endsection
@push('scripts')
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>
        $( "#images-handler" ).sortable({
            connectWith: '#images-handler',
            update: function(event, ui) {
                var order = $(this).sortable('toArray',{attribute: 'data-offer_image'});
                var positions = order.join(',');

                console.log({
                    positions: positions
                });
            }
        });
        lfm('images', 'file', {prefix: '/filemanager'} );
        lfms('thumbnail', 'file', {prefix: '/filemanager'} );
        $(document).ready(function(){
            render_offer_images('images','#images-input','#images-handler');
        });
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_KEY') }}&libraries=places" type="text/javascript"></script>
    <script src="/js/map-inputs.js"></script>
    <script>
        const custom_address = document.getElementById('pickup_address');
        const latitude = document.getElementById('address_latitude');
        const longitude = document.getElementById('address_longitude');

        checkCustomAddressVisibility('{{ $offer->pickup_place ?? \App\Offer::PICKUP_METHOD_USER_ADDRESS }}');

        document.querySelectorAll('input[name=pickup_place]').forEach((input) => {
{{--            input.checked = input.value == '{{ $offer->pickup_place ?? \App\Offer::PICKUP_METHOD_USER_ADDRESS }}';--}}

            input.addEventListener('change', function () {
                checkCustomAddressVisibility(this.value);
            });
        });

        function checkCustomAddressVisibility(value) {
            if (value == '{{ \App\Offer::PICKUP_METHOD_CUSTOM_ADDRESS }}') {
                custom_address.parentNode.style.display = 'block';
                custom_address.setAttribute('required', 'required');
                latitude.parentNode.style.display = 'block';
                latitude.setAttribute('required', 'required');
                longitude.parentNode.style.display = 'block';
                longitude.setAttribute('required', 'required');
            }
            else {
                custom_address.parentNode.style.display = 'none';
                custom_address.removeAttribute('required');
                latitude.parentNode.style.display = 'none';
                latitude.removeAttribute('required');
                longitude.parentNode.style.display = 'none';
                longitude.removeAttribute('required');
            }
        }
    </script>
@endpush

