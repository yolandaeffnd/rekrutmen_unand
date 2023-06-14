@php
    $data_menu = [
        [
            'name' => 'Dashboard',
            'icon' => 'fas fa-home',
            'url' => route('dashboard'),
            'url-open' => request()->is('apps/dashboard') ? 'menu-open' : '',
            'url-active' => request()->is('apps/dashboard') ? 'active' : '',
            'sub-menu' => [],
        ],
        [
            'name' => 'Personal Information',
            'icon' => 'fas fa-user',
            'url' => '#',
            'url-open' => request()->is('apps/personal*') ? 'menu-open' : '',
            'url-active' => request()->is('apps/personal*') ? 'active' : '',
            'sub-menu' => [
                [
                    'name' => 'Profile',
                    'url' => route('profile'),
                    'url-open' => request()->is('apps/personal/profile') ? 'menu-open' : '',
                    'url-active' => request()->is('apps/personal/profile') ? 'active' : '',
                    'sub-sub-menu' => [],
                ],
                [
                    'name' => 'Edit Password',
                    'url' => route('edit-password'),
                    'url-open' => request()->is('apps/personal/akun/edit-password') ? 'menu-open' : '',
                    'url-active' => request()->is('apps/personal/akun/edit-password') ? 'active' : '',
                    'sub-sub-menu' => [],
                ],
            ],
        ],
    ];
@endphp


{{-- //WARNING : JANGAN DIEDIT --}}
@if (count($data_menu) > 0)
    <li class="nav-header" style=""><b>GENERAL MENU</b></li>

    @foreach ($data_menu as $key => $mainmenu)

        <li class="nav-item {{ $mainmenu['url-open'] }}">
            <a href="{{ $mainmenu['url'] }}" class="nav-link {{ $mainmenu['url-active'] }}">
                <i class="nav-icon {{ $mainmenu['icon'] }}"></i>
                <p>
                    {{ $mainmenu['name'] }}
                    @if (count($mainmenu['sub-menu']) > 0)
                        <i class="fas fa-angle-left right"></i>
                    @endif

                </p>
            </a>

            @if (count($mainmenu['sub-menu']) > 0)
                @foreach ($mainmenu['sub-menu'] as $key => $submenu)

                    <ul class="nav nav-treeview">
                        <li class="nav-item {{ $submenu['url-open'] }}">
                            <a href="{{ $submenu['url'] }}" class="nav-link {{ $submenu['url-active'] }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    {{ $submenu['name'] }}
                                    @if (count($submenu['sub-sub-menu']) > 0)
                                        <i class="fas fa-angle-left right"></i>
                                    @endif
                                </p>
                            </a>

                            @if (count($submenu['sub-sub-menu']) > 0)
                                @foreach ($submenu['sub-sub-menu'] as $key => $subsubmenu)
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item  {{ $subsubmenu['url-open'] }}">
                                            <a href="{{ $subsubmenu['url'] }}" class="nav-link {{ $subsubmenu['url-active'] }}">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                {{ $subsubmenu['name'] }}
                                            </a>

                                        </li>
                                    </ul>
                                @endforeach
                            @endif
                        </li>
                    </ul>
                @endforeach
            @endif


        </li>
    @endforeach
@endif
