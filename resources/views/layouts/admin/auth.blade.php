@extends('index')

@push('styles')
    <link rel="stylesheet" href="/css/admin.css" />
@endpush

@section('body')
    <div class="container-fluid">
        @yield('content')
    </div>
@endsection
