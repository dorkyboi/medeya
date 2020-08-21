<div class="col">
    {{ $category->name }}
</div>

<div class="col text-right">
    @include('components.admin.actions', [
        'route' => 'categories',
        'entity' => $category,
        'browse' => false,
    ])
</div>
