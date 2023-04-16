@include('Admin.dashboard.include.header')

<div class="app-wrapper">
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            @yield('content')
        </div>
    </div>
</div>
@include('Admin.dashboard.include.footer')