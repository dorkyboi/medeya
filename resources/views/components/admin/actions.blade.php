@php
    $none   = $none   ?? false;
    $browse = $browse ?? true;
    $edit   = $edit   ?? true;
    $delete = $delete ?? true;

    $args   = $args   ?? (isset($entity) ? [$entity->id] : null);
@endphp

@switch($route)
    @case('')
    @break
@endswitch

@if(!$none && $browse)
    <a href="{{ route("admin.$route.show", $args) }}" class="btn btn-sm btn-success btn-icon-split ml-2" target="_blank">
        <span class="icon"><i class="fas fa-book-open"></i></span>
        <span class="text">{{ __('View') }}</span>
    </a>
@endif

@if(!$none && $edit)
    <a href="{{ route("admin.$route.edit", $args) }}" class="btn btn-sm btn-warning btn-icon-split ml-2">
        <span class="icon"><i class="fas fa-edit"></i></span>
        <span class="text">{{ __('Edit') }}</span>
    </a>
@endif

@if(!$none && $delete)
    <a href="{{ route("admin.$route.destroy", $args) }}" data-delete="row"
       class="btn btn-sm btn-danger btn-icon-split ml-2">
        <span class="icon"><i class="fas fa-trash-alt"></i></span>
        <span class="text">{{ __('Delete') }}</span>
    </a>
@endif
