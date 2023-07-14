@include('layout/frontend/header')
@include('layout/frontend/menu')



<div class="intro-section site-blocks-cover innerpage" style="background-image: url('{{ asset('assets/images/bus1.jpg') }}');">
    <div class="container">
        <div class="row align-items-center text-center border">
            <div class="col-lg-12 mt-5" data-aos="fade-up">
                <h1>Login Below !!!</h1>
                <p class="text-white text-center">
                    <a href="index.php">Home</a>
                    <span class="mx-2">/</span>
                    <span>Contact Us</span>
                </p>
            </div>
        </div>
    </div>
</div>

      @if (session('success'))
        <!-- Bootstrap Modal -->
        <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="successModalLabel">Registered successfully</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>You have successfully registered.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script>
            $(document).ready(function() {
                $('#successModal').modal('show');
            });
        </script>
        @endif
    


<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                 
                        <h4>Hello! let's get started</h4>
                        <h6 class="font-weight-light">Sign in to continue.</h6>
                        <form  method ="POST" action="{{ route('login') }}" class="pt-3">
                           
                            @csrf

                            <div class="form-group">
                                <input type="email"  name="u_email" required="required" autofocus="autofocus" class="form-control form-control-lg" id="exampleInputEmail1"
                                    placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" name="u_pwd"  required="required" class="form-control form-control-lg"
                                    id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="mt-3">
                                <input type="submit" name="Usr-login" class="btn btn-success btn-block" value="Login">

                            </div>
                            <div class="my-2 d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <label class="form-check-label text-muted">
                                        <input type="checkbox" class="form-check-input">
                                        Keep me signed in
                                    </label>
                                </div>
                                <a href="forgot-password.php" class="auth-link text-black">Forgot password?</a>
                            </div>
                            
                            <div class="text-center mt-4 font-weight-light">
                                Don't have an account? <a href="/register" class="text-primary">Create</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>


@include('layout/frontend/footer')
  