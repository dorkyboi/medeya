<nav class="navbar navbar-expand-lg navbar-transparent">
    <div class="container-fluid">
        <div class="navbar-wrapper">
            <div class="navbar-minimize">
                <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
                    <i class="visible-on-sidebar-regular fas fa-ellipsis-v fa-sm"></i>
                    <i class="visible-on-sidebar-mini far fa-window-maximize fa-sm fa-rotate-270"></i>
                </button>
            </div>
            <a class="navbar-brand" href="#"></a>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
        </button>

        <div class="topbar-user">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="flag-icon {{ \App\Helpers\Locales::ICONS[app()->getLocale()] }}"></span>
                        &nbsp;{{ \App\Helpers\Locales::LABELS[app()->getLocale()][app()->getLocale()] }}
                    </a>
                    <div class="dropdown-menu">
                        @foreach(config('app.locales') as $locale)
                            @if($locale !== app()->getLocale())
                                    <form class="form-inline" action="{{ route('set-locale') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="locale" value="{{ $locale }}" />
                                        <button class="dropdown-item w-100" type="submit">
                                            <span class="flag-icon {{ \App\Helpers\Locales::ICONS[$locale] }}"></span>
                                            &nbsp;{{ \App\Helpers\Locales::LABELS[app()->getLocale()][$locale] }}
                                        </button>
                                    </form>
                            @endif
                        @endforeach
                    </div>
                </li>

                @if(auth()->check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.users.show', auth()->user()->id) }}">
                            <i class="fas fa-lg fa-fw fa-user"></i>
                            {{ auth()->user()->full_name }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <!-- Logout -->
                        <form class="form-inline" action="{{ route('admin.logout') }}" method="post">
                            @csrf
                            <button type="submit" class="nav-link border-0 cursor-pointer">
                                <i class="fas fa-lg fa-fw fa-sign-out-alt"></i>
                                @lang('Logout')
                            </button>
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.login') }}" role="button">
                            @lang('Login')
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
