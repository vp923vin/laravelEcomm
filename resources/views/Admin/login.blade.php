<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="icon" href="{!! asset('assets/Admin/images/ecomm-colored.png') !!}" >
    <link rel="stylesheet"  href="{{ asset('assets/Admin/css/bootstrap.min.css') }}" >
  </head>
  <body style="background-color: #ccc;">
    
    <section class="" style="font-family: Arial, Helvetica, sans-serif">
        <div class="container ">
            <div class="row justify-content-center ">
                <div class="col-lg-6 col-md-8 col-sm-10 mt-5 " style="background-image: url('http://127.0.0.1.8000/public/assets/Admin/images/ecomm-colored.png');">
                    <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
                        <h3 class="text-light mb-4 bg-success text-center p-2 fw-bold">
                            <img src="{{asset('assets/Admin/images/ecomm-colored.png')}}" width="35" alt="" srcset="">
                            Admin Login
                        </h3>
                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form action="{{ route('login') }}" method="post">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
                                <span class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>   
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" >
                                <span class="text-danger">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <button type="submit" class="btn btn-primary px-4 fw-bold">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <script src="{{ asset('assets/Admin/js/bootstrap.bundle.min.js') }}" ></script>
  </body>
</html>





