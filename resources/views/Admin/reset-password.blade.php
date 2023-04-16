<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Reset Password </title>
    <link rel="icon" href="{!! asset('assets/Admin/images/ecomm-colored.png') !!}" >
    <link rel="stylesheet"  href="{{ asset('assets/Admin/css/bootstrap.min.css') }}" >
  </head>
  <body>
    
    <section class="vh-100 " style="background-color: #ccc; font-family: Arial, Helvetica, sans-serif">
        <div class="container ">
            <div class="row justify-content-center ">
                <div class="col-lg-6 col-md-8 col-sm-10 mt-5 ">
                    <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
                        <h3 class="text-light mb-4 bg-success text-center p-2 fw-bold">
                            Reset Password
                        </h3>
                        <form action="{{ route('reset-password') }}" method="post">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                                
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





