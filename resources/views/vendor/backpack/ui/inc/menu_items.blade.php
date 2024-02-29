{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="{{ trans('backpack::base.user') }}" icon="la la-user" :link="backpack_url('user')" />

<x-backpack::menu-dropdown title="{{ config('backpack.crud.locales')[Session::get('locale', config('app.locale'))] }}" icon="la la-globe" :flag="config('app.locale')">
    @foreach(config('backpack.crud.locales') as $code => $native)
        @if($code != config('app.locale'))
            <x-backpack::menu-dropdown-item title="{{ $native }}" flag="{{ $code }}" :link="route('setLocale', $code)" />
        @endif
    @endforeach
</x-backpack::menu-dropdown>
