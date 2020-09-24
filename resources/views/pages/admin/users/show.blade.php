@extends('layouts.admin.main')

@section('content')
    @component('components.admin.page-header', [
        'back_to_list' => [
            'route' => route('components.admin.users.index'),
            'permission' => 'list users',
        ],
    ])
        {{ __('users.singular') }}
        @slot('description')
            {{ $user->full_name }}
        @endslot
    @endcomponent

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-4">
                    @foreach(collect($user->toArray())->except(['address_id', 'company_address_id', 'avatar', 'updated_at']) as $field => $value)
                        <h6 class="m-0 text-gray">{{ __("users.$field") }}</h6>
                        <h5 class="m-0 {{ $loop->last ? '' : 'mb-3' }}">{{ $value }}</h5>
                    @endforeach
                </div>
                <div class="col-4 ml-5">
                    @if($user->address)
                        @foreach(collect($user->address->toArray())->except('id') as $field => $value)
                            <h6 class="m-0 text-gray">{{ __("users.$field") }}</h6>
                            <h5 class="m-0 mb-3">{{ $value }}</h5>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
