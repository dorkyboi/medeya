@extends('index')

@push('styles')
    <link rel="stylesheet" href="/css/admin.css" />
@endpush

@section('body')
    <div class="wrapper">
        @include('components.admin.sidebar')
        <div class="main-panel ps-container ps-theme-default">
            @include('components.admin.topbar')

            <div class="content">
                <div class="container-fluid">
                    @yield('main')
                </div>
            </div>

            {{--@include('admin.components.footer')--}}
        </div>
    </div>
@endsection

@prepend('scripts')
    <script src="/js/admin.js" type="text/javascript"></script>
@endprepend
