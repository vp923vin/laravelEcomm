@include('Admin.dashboard.include.header')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div>

    <div class="container-fluid">  <!-- -->
        

            @yield('content')

        
    </div>



</main>
<!-- End #main -->
@include('Admin.dashboard.include.footer')