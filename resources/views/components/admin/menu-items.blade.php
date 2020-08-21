<ul class="nav" id="accordionSidebar">
    @foreach($menu_items as $section)
        @if($section->accessible($user))
            @php
                $can_access_children = count($section->children) > 0;
                if ($can_access_children) {
                    $can_access_children = false;
                    foreach ($section->children as $menu_item) {
                        if ($menu_item->accessible($user))
                            $can_access_children = true;
                    }
                }
            @endphp
            @if($can_access_children)
                <li class="nav-item {{ $section->isActive($request) }} has-dropdown">
                    <div class="wrap-toggle">
                        <a class="nav-link-toggle nav-link" href="{{$section->href()}}">
                            {{ $section->icon() }}
                            <p class="text-uppercase">{{ $section->title }}</p>
                        </a>

                        <span class="sidebar-toggle border-dark border-left toggle-collapse {{ $section->isActive($request) ? '' : 'collapsed' }}"
                              data-toggle="collapse"
                              data-target="#collapse{{$section->href}}"
                              aria-expanded="true" aria-controls="collapse{{$section->href}}">
                                    <i class="fas fa-angle-up"></i>
                                </span>
                    </div>

                    <div id="collapse{{$section->href}}" data-parent="#accordionSidebar"
                         class="collapse {{ $section->isActive($request) ? 'show' : '' }}">
                        <ul class="nav">
                            @foreach($section->children as $menu_item)
                                @if($menu_item->accessible($user))
                                    <li class="nav-item {{ $menu_item->isActive($request) }}">
                                        <a class="nav-link"
                                           href="{{ $menu_item->href() }}">
                                            {{ $menu_item->icon() }}
                                            <p>{{ $menu_item->title }}</p>
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </li>
            @else
                @if($section->accessible($user))
                    <li class="nav-item {{ $section->isActive($request) }}">
                        <a class="nav-link {{ $section->isActive($request) }}"
                           href="{{ $section->href() }}">
                            {{ $section->icon() }}
                            <p class="text-uppercase">{{ $section->title }}</p>
                        </a>
                    </li>
                @endif
            @endif
        @endif
    @endforeach
</ul>
