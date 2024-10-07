<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('home') }}" class="app-brand-link">
            <img src="{{ asset('PTP.png') }}" width="35">
            <span class="app-brand-text demo text-black fw-bolder ms-2">
                <span style="text-transform: uppercase;">D</span>Arsip
            </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">


        <!-- Digital Library-->
        <li class="menu-item {{ \Illuminate\Support\Facades\Route::is('home') ? 'active' : '' }}">
            <a href="{{ route('home') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="{{ __('menu.home') }}">{{ __('menu.home') }}</div>
            </a>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">{{ __('menu.header.main_menu') }}</span>
        </li>
        <li class="menu-item {{ \Illuminate\Support\Facades\Route::is('transaction.*') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-mail-send"></i>
                <div data-i18n="{{ __('menu.transaction.menu') }}">{{ __('menu.transaction.menu') }}</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ \Illuminate\Support\Facades\Route::is('transaction.outgoing.*') ? 'active' : '' }}">
                    <a href="{{ route('transaction.outgoing.index') }}" class="menu-link">
                        <div
                            data-i18n="{{ __('menu.digital.surse') }}">{{ __('menu.digital.surse') }}</div>
                    </a>
                </li>
            </ul>
            <ul class="menu-sub">
                <li class="menu-item {{ \Illuminate\Support\Facades\Route::is('transaction.outgoing.*') ? 'active' : '' }}">
                    <a href="{{ route('transaction.perdir.index') }}" class="menu-link">
                        <div
                            data-i18n="{{ __('menu.digital.surperdir') }}">{{ __('menu.digital.surperdir') }}</div>
                    </a>
                </li>
            </ul>
            <ul class="menu-sub">
                <li class="menu-item {{ \Illuminate\Support\Facades\Route::is('transaction.outgoing.*') ? 'active' : '' }}">
                    <a href="{{ route('transaction.kpts.index') }}" class="menu-link">
                        <div
                            data-i18n="{{ __('menu.digital.surkpts') }}">{{ __('menu.digital.surkpts') }}</div>
                    </a>
                </li>
            </ul>
            <ul class="menu-sub">
                <li class="menu-item {{ \Illuminate\Support\Facades\Route::is('transaction.outgoing.*') ? 'active' : '' }}">
                    <a href="{{ route('transaction.pemberitahuan.index') }}" class="menu-link">
                        <div
                            data-i18n="{{ __('menu.digital.surpemberitahuan') }}">{{ __('menu.digital.surpemberitahuan') }}</div>
                    </a>
                </li>
            </ul>
            <ul class="menu-sub">
                <li class="menu-item {{ \Illuminate\Support\Facades\Route::is('transaction.outgoing.*') ? 'active' : '' }}">
                    <a href="{{ route('transaction.pakta.index') }}" class="menu-link">
                        <div
                            data-i18n="{{ __('menu.digital.surpakta') }}">{{ __('menu.digital.surpakta') }}</div>
                    </a>
                </li>
            </ul>
            <ul class="menu-sub">
                <li class="menu-item {{ \Illuminate\Support\Facades\Route::is('transaction.outgoing.*') ? 'active' : '' }}">
                    <a href="{{ route('transaction.notulen.index') }}" class="menu-link">
                        <div
                            data-i18n="{{ __('menu.digital.surnotulen') }}">{{ __('menu.digital.surnotulen') }}</div>
                    </a>
                </li>
            </ul>
        </li>
        {{-- End Digital Library --}}



        {{-- <li class="menu-item {{ \Illuminate\Support\Facades\Route::is('agenda.*') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-book"></i>
                <div data-i18n="{{ __('menu.agenda.menu') }}">{{ __('menu.agenda.menu') }}</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ \Illuminate\Support\Facades\Route::is('agenda.incoming') ? 'active' : '' }}">
                    <a href="{{ route('agenda.incoming') }}" class="menu-link">
                        <div
                            data-i18n="{{ __('menu.agenda.incoming_letter') }}">{{ __('menu.agenda.incoming_letter') }}</div>
                    </a>
                </li>
                <li class="menu-item {{ \Illuminate\Support\Facades\Route::is('agenda.outgoing') ? 'active' : '' }}">
                    <a href="{{ route('agenda.outgoing') }}" class="menu-link">
                        <div
                            data-i18n="{{ __('menu.agenda.outgoing_letter') }}">{{ __('menu.agenda.outgoing_letter') }}</div>
                    </a>
                </li>
            </ul>
        </li> --}}

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">{{ __('menu.header.other_menu') }}</span>
        </li>
        <li class="menu-item {{ \Illuminate\Support\Facades\Route::is('gallery.*') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-images"></i>
                <div data-i18n="{{ __('menu.gallery.menu') }}">{{ __('menu.gallery.menu') }}</div>
            </a>
            <ul class="menu-sub">
                {{-- <li class="menu-item {{ \Illuminate\Support\Facades\Route::is('gallery.incoming') ? 'active' : '' }}">
                    <a href="{{ route('gallery.incoming') }}" class="menu-link">
                        <div
                            data-i18n="{{ __('menu.gallery.incoming_letter') }}">{{ __('menu.gallery.incoming_letter') }}</div>
                    </a>
                </li> --}}
                <li class="menu-item {{ \Illuminate\Support\Facades\Route::is('gallery.outgoing') ? 'active' : '' }}">
                    <a href="{{ route('gallery.outgoing') }}" class="menu-link">
                        <div
                            data-i18n="{{ __('menu.digital.surse') }}">{{ __('menu.digital.surse') }}</div>
                    </a>
                </li>
                <li class="menu-item {{ \Illuminate\Support\Facades\Route::is('gallery.perdir') ? 'active' : '' }}">
                    <a href="{{ route('gallery.perdir') }}" class="menu-link">
                        <div
                            data-i18n="{{ __('menu.digital.surperdir') }}">{{ __('menu.digital.surperdir') }}</div>
                    </a>
                </li>
                <li class="menu-item {{ \Illuminate\Support\Facades\Route::is('gallery.kpts') ? 'active' : '' }}">
                    <a href="{{ route('gallery.kpts') }}" class="menu-link">
                        <div
                            data-i18n="{{ __('menu.digital.surkpts') }}">{{ __('menu.digital.surkpts') }}</div>
                    </a>
                </li>
                <li class="menu-item {{ \Illuminate\Support\Facades\Route::is('gallery.pemberitahuan') ? 'active' : '' }}">
                    <a href="{{ route('gallery.pemberitahuan') }}" class="menu-link">
                        <div
                            data-i18n="{{ __('menu.digital.surpemberitahuan') }}">{{ __('menu.digital.surpemberitahuan') }}</div>
                    </a>
                </li>
                <li class="menu-item {{ \Illuminate\Support\Facades\Route::is('gallery.pakta') ? 'active' : '' }}">
                    <a href="{{ route('gallery.pakta') }}" class="menu-link">
                        <div
                            data-i18n="{{ __('menu.digital.surpakta') }}">{{ __('menu.digital.surpakta') }}</div>
                    </a>
                </li>
                <li class="menu-item {{ \Illuminate\Support\Facades\Route::is('gallery.notulen') ? 'active' : '' }}">
                    <a href="{{ route('gallery.notulen') }}" class="menu-link">
                        <div
                            data-i18n="{{ __('menu.digital.surnotulen') }}">{{ __('menu.digital.surnotulen') }}</div>
                    </a>
                </li>
            </ul>
        </li>
        @if(auth()->user()->role == 'admin')
            <li class="menu-item {{ \Illuminate\Support\Facades\Route::is('reference.*') ? 'active open' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-analyse"></i>
                    <div data-i18n="{{ __('menu.reference.menu') }}">{{ __('menu.reference.menu') }}</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item {{ \Illuminate\Support\Facades\Route::is('reference.classification.*') ? 'active' : '' }}">
                        <a href="{{ route('reference.classification.index') }}" class="menu-link">
                            <div
                                data-i18n="{{ __('menu.reference.classification') }}">{{ __('menu.reference.classification') }}</div>
                        </a>
                    </li>
                    <li class="menu-item {{ \Illuminate\Support\Facades\Route::is('reference.status.*') ? 'active' : '' }}">
                        <a href="{{ route('reference.status.index') }}" class="menu-link">
                            <div data-i18n="{{ __('menu.reference.status') }}">{{ __('menu.reference.status') }}</div>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- User Management -->
            <li class="menu-item {{ \Illuminate\Support\Facades\Route::is('user.*') ? 'active' : '' }}">
                <a href="{{ route('user.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-user-pin"></i>
                    <div data-i18n="{{ __('menu.users') }}">{{ __('menu.users') }}</div>
                </a>
            </li>
        @endif
    </ul>
</aside>
