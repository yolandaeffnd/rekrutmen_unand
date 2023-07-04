@php
    $data_menu = [
        //Menu Manajemen User
        [
            'name' => 'Manajemen User',
            'icon' => 'fas fa-users',
            'url' => route('user.index'),
            'url-open' => request()->is('apps/manage/user*') ? 'menu-open' : '',
            'url-active' => request()->is('apps/manage/user*') ? 'active' : '',
            'permissions' => ['manage-user'],
            'sub-menu' => [],
        ],
        //Menu Master Data
        [
            'name' => 'Post Information',
            'icon' => 'fas fa-newspaper',
            'url' => '#',
            'url-open' => request()->is('apps/article*') ? 'menu-open' : '',
            'url-active' => request()->is('apps/article*') ? 'active' : '',
            'permissions' => ['article'],
            'sub-menu' => [
                [
                    'name' => 'Artikel',
                    'url' => route('article.index'),
                    'url-open' => request()->is('apps/article*') ? 'menu-open' : '',
                    'url-active' => request()->is('apps/article*') ? 'active' : '',
                    'permissions' => ['article'],
                    'sub-sub-menu' => [],
                ],
                [
                    'name' => 'Notifikasi',
                    'url' => route('notifikasi.index'),
                    'url-open' => request()->is('apps/notifikasi*') ? 'menu-open' : '',
                    'url-active' => request()->is('apps/notifikasi*') ? 'active' : '',
                    'permissions' => ['article'],
                    'sub-sub-menu' => [],
                ],
            ],
        ],
        //Menu Master Data
        [
            'name' => 'Master Data',
            'icon' => 'fas fa-database',
            'url' => '#',
            'url-open' => request()->is('apps/master*') ? 'menu-open' : '',
            'url-active' => request()->is('apps/master*') ? 'active' : '',
            'permissions' => ['master-formasi'],
            'sub-menu' => [
                [
                    'name' => 'Periode Penerimaan',
                    'url' => route('periode-penerimaan.index'),
                    'url-open' => request()->is('apps/master/periode-penerimaan*') ? 'menu-open' : '',
                    'url-active' => request()->is('apps/master/periode-penerimaan*') ? 'active' : '',
                    'permissions' => ['master-formasi'],
                    'sub-sub-menu' => [],
                ],
                [
                    'name' => 'Pendidikan Formasi',
                    'url' => route('pendidikan-list'),
                    'url-open' => request()->is('apps/master/pendidikan-list*') ? 'menu-open' : '',
                    'url-active' => request()->is('apps/master/pendidikan-list*') ? 'active' : '',
                    'permissions' => ['master-formasi'],
                    'sub-sub-menu' => [],
                ],
                [
                    'name' => 'Jenis Formasi',
                    'url' => route('jenisformasi.index'),
                    'url-open' => request()->is('apps/master/jenisformasi*') ? 'menu-open' : '',
                    'url-active' => request()->is('apps/master/jenisformasi*') ? 'active' : '',
                    'permissions' => ['master-formasi'],
                    'sub-sub-menu' => [],
                ],
                [
                    'name' => 'Formasi',
                    'url' => route('formasi.index'),
                    'url-open' => request()->is('apps/master/formasi*') ? 'menu-open' : '',
                    'url-active' => request()->is('apps/master/formasi*') ? 'active' : '',
                    'permissions' => ['master-formasi'],
                    'sub-sub-menu' => [],
                ],
                
            ],
        ],
        //Menu Kelola Pelamar
        [
            'name' => 'Kelola Pelamar',
            'icon' => 'fas fa-user-tie',
            'url' => '#',
            'url-open' => request()->is('apps/rekrutmen*') ? 'menu-open' : '',
            'url-active' => request()->is('apps/rekrutmen*') ? 'active' : '',
            'permissions' => ['rekrutmen-pelamar'],
            'sub-menu' => [
                [
                    'name' => 'Data Pelamar',
                    'url' => route('pelamar.index'),
                    'url-open' => request()->is('apps/rekrutmen/pelamar*') ? 'menu-open' : '',
                    'url-active' => request()->is('apps/rekrutmen/pelamar*') ? 'active' : '',
                    'permissions' => ['rekrutmen-pelamar'],
                    'sub-sub-menu' => [],
                ],
                [
                    'name' => 'Data Pelamar [Datatable]',
                    'url' => route('pelamar.datatable'),
                    'url-open' => request()->is('apps/rekrutmen/datatable/pelamar*') ? 'menu-open' : '',
                    'url-active' => request()->is('apps/rekrutmen/datatable/pelamar*') ? 'active' : '',
                    'permissions' => ['rekrutmen-pelamar'],
                    'sub-sub-menu' => [],
                ],
            ],
        ],
    ];
@endphp


{{-- //WARNING : JANGAN DIEDIT --}}
@if (count($data_menu) > 0)
    <li class="nav-header" style=""><b>SPESIFIC MENU</b></li>

    @foreach ($data_menu as $key => $mainmenu)
        @canany($mainmenu['permissions'])
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
                        @canany($submenu['permissions'])
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
                                            @canany($subsubmenu['permissions'])
                                                <ul class="nav nav-treeview">
                                                    <li class="nav-item  {{ $subsubmenu['url-open'] }}">
                                                        <a href="{{ $subsubmenu['url'] }}"
                                                            class="nav-link {{ $subsubmenu['url-active'] }}">
                                                            <i class="far fa-dot-circle nav-icon"></i>
                                                            {{ $subsubmenu['name'] }}
                                                        </a>

                                                    </li>
                                                </ul>
                                            @endcanany
                                        @endforeach
                                    @endif
                                </li>
                            </ul>
                        @endcanany
                    @endforeach
                @endif


            </li>
        @endcanany
    @endforeach
@endif
