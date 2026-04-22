<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-mini">{{ __('My') }}</a>
            <a href="#" class="simple-text logo-normal">{{ __('My Project') }}</a>
        </div>

        <ul class="nav">

            {{-- Dashboard --}}
            <li @if (isset($pageSlug) && $pageSlug == 'dashboard') class="active" @endif>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>

            {{-- Master Data --}}
            <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="fab fa-laravel"></i>
                    <span class="nav-link-text">{{ __('Laravel Examples') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="laravel-examples">
                    <ul class="nav pl-4">

                        {{-- Profile --}}
                        <li @if (isset($pageSlug) && $pageSlug == 'profile') class="active" @endif>
                            <a href="{{ route('profile.edit') }}">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ __('User Profile') }}</p>
                            </a>
                        </li>

                        {{-- User Management --}}
                        <li @if (isset($pageSlug) && $pageSlug == 'users') class="active" @endif>
                            <a href="{{ route('user.index') }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ __('User Management') }}</p>
                            </a>
                        </li>

                        {{-- Category --}}
                        <li @if (isset($pageSlug) && $pageSlug == 'categories') class="active" @endif>
                            <a href="{{ route('categories.index') }}">
                                <i class="tim-icons icon-tag"></i>
                                <p>{{ __('Category Management') }}</p>
                            </a>
                        </li>

                        {{-- BERITA --}}
                        <li @if (isset($pageSlug) && $pageSlug == 'news') class="active" @endif>
                            <a href="{{ route('news.index') }}">
                                <i class="tim-icons icon-paper"></i>
                                <p>{{ __('News') }}</p>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>

            {{-- Dummy Menu --}}
            <li @if (isset($pageSlug) && $pageSlug == 'icons') class="active" @endif>
                <a href="#">
                    <i class="tim-icons icon-atom"></i>
                    <p>{{ __('Icons') }}</p>
                </a>
            </li>

            <li @if (isset($pageSlug) && $pageSlug == 'maps') class="active" @endif>
                <a href="{{ route('pages.maps') }}">
                    <i class="tim-icons icon-pin"></i>
                    <p>{{ __('Maps') }}</p>
                </a>
            </li>

            <li @if (isset($pageSlug) && $pageSlug == 'notifications') class="active" @endif>
                <a href="{{ route('pages.notifications') }}">
                    <i class="tim-icons icon-bell-55"></i>
                    <p>{{ __('Notifications') }}</p>
                </a>
            </li>

            <li @if (isset($pageSlug) && $pageSlug == 'tables') class="active" @endif>
                <a href="{{ route('pages.tables') }}">
                    <i class="tim-icons icon-puzzle-10"></i>
                    <p>{{ __('Table List') }}</p>
                </a>
            </li>

            <li @if (isset($pageSlug) && $pageSlug == 'typography') class="active" @endif>
                <a href="{{ route('pages.typography') }}">
                    <i class="tim-icons icon-align-center"></i>
                    <p>{{ __('Typography') }}</p>
                </a>
            </li>

        </ul>
    </div>
</div>