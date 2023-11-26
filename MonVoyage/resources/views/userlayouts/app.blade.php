<div id="app">
    <div class="main-wrapper">
        @include('userlayouts.header')
        <div class="main-content">
            @yield('content')
        </div>
        @include('userlayouts.footer')
    </div>
</div>
