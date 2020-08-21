@extends('layouts.admin.main')

@section('content')
    @component('components.admin.page-header', [
        'create' => [
            'route' => route('categories.create'),
            'permission' => 'create categories',
        ],
    ])
        Kategorie
    @endcomponent

    <div class="card shadow mb-4">
        <div class="card-body">
            @foreach($categories as $category)
                <div class="row">
                    @include('components.admin.category-row')
                </div>

                @foreach($category->children as $category)
                    <div class="row ml-3">
                        @include('components.admin.category-row')
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
@endsection
