<div class="align-items-center mb-4">
    <h3 class="m-0 text-gray-800">
        {{-- Title --}}
        {{ $slot }}

        {{-- Optional 'create' button --}}
        @if(isset($create) && (isset($create['permission']) ? auth()->user()->can($create['permission']) : true))
            <a href="{{ $create['route'] }}" class="btn btn-success btn-icon-split ml-3">
                <span class="icon"><i class="fas fa-plus-circle"></i></span>
                <span class="text">{{ $create['title'] ?? __('Add') }}</span>
            </a>
        @endif

        {{-- Optional 'go back' button --}}
        @if(isset($go_back))
            <a href="{{ $go_back }}" class="btn btn-primary btn-icon-split ml-3">
                <span class="icon"><i class="fas fa-arrow-left"></i></span>
                <span class="text">{{ __('generic.back') }}</span>
            </a>
        @endif

        {{-- Optional 'back to list' button --}}
        @if(isset($back_to_list) && (isset($back_to_list['permission']) ? auth()->user()->can($back_to_list['permission']) : true))
            <a href="{{ $back_to_list['route'] }}" class="btn btn-primary btn-icon-split ml-3">
                <span class="icon"><i class="fas fa-arrow-left"></i></span>
                <span class="text">{{ __('Back to list') }}</span>
            </a>
        @endif
    </h3>

    {{-- Optional description, fill in with @slot('description') --}}
    @isset($description)
        <h5 class="text-secondary">{{ $description }}</h5>
    @endisset
</div>
