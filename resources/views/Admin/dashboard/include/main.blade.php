@include('Admin.dashboard.include.header')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>@stack('page-title')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">@stack('page-title')</li>
            </ol>
        </nav>
    </div>

    <!-- main div -->
    <div class="container-fluid"> 

        @yield('content')

    </div>
    <!-- end of main div -->


</main>
<!-- End #main -->
@include('Admin.dashboard.include.footer')