@if (Auth::user()->isDeveloper())

    @php
        $data_menu = [
            [
                'name' => 'Developer Menu',
                'icon' => 'fas fa-bug',
                'url' => route('role.index'),
                'url-open' => request()->is('apps/developer/manage/role*') ? 'menu-open' : '',
                'url-active' => request()->is('apps/developer/manage/role*') ? 'active' : '',
                'sub-menu' => [],
            ],
        ];
    @endphp


    {{-- //WARNING : JANGAN DIEDIT --}}
    @if (count($data_menu) > 0)
        <li class="nav-header" style=""><b>DEVELOPER MENU</b></li>

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
                                                <a href="{{ $subsubmenu['url'] }}"
                                                    class="nav-link {{ $subsubmenu['url-active'] }}">
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

@endif
