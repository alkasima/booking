@include('layout/frontend/header')
@include('layout/frontend/menu')

<div class="intro-section site-blocks-cover innerpage" style="background-image: url('{{ asset('assets/images/bus1.jpg') }}');">
    <div class="container">
        <div class="row align-items-center text-center border">
            <div class="col-lg-12 mt-5" data-aos="fade-up">
                <h1>New here? Register</h1>
                <p class="text-white text-center">
                    <a href="index.php">Home</a>
                    <span class="mx-2">/</span>
                    <span>Contact Us</span>
                </p>
            </div>
        </div>
    </div>
</div>


<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <!-- <div class="brand-logo">
                <img src="../../images/logo-dark.svg" alt="logo">
              </div> -->
                        <h4>New here?</h4>
                        <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                        <form  method="POST" action="{{ route('register') }}" class="pt-3">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="u_fname" class="form-control form-control-lg"
                                    id="exampleInputUsername1" placeholder="Enter First Name" required>
                            </div>
                            @error('u_fname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                            <div class="form-group">
                                <input type="text"  name="u_lname"class="form-control form-control-lg"
                                    id="exampleInputUsername1" placeholder="Enter Last Name" required>
                            </div>
                            <div class="form-group">
                                <input type="number" name="u_phone" class="form-control form-control-lg"
                                    id="exampleInputUsername1" placeholder="Enter Phone Number" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1"
                                    placeholder="Enter Email" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="u_address" class="form-control form-control-lg" id="exampleInputEmail1"
                                    placeholder="Enter Address" required>
                            </div>
                            <div class="form-group" style ="display:none">
                                    <div class="form-label-group">
                                    <input type="text" class="form-control" id="exampleInputEmail1" value="User" name="u_category">
                                    <label for="inputEmail">User Category</label>
                                    </div>
                            </div>

                            <div class="form-group">
                                <input type="password" name="password" class="form-control form-control-lg"
                                    id="exampleInputPassword1"  placeholder="Password" required>
                            </div>
                            <div class="mb-4">
                                <div class="form-check">
                                    <label class="form-check-label text-muted">
                                        <input type="checkbox" class="form-check-input">
                                        I agree to all Terms & Conditions
                                    </label>
                                </div>
                            </div>
                            <div class="mt-3">
                            <button type="submit" name="add_user" class="btn btn-success">Create Account</button>

                            </div>

                            <div class="text-center mt-4 font-weight-light">
                                Already have an account? <a href="/login" class="text-primary">Login</a>
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
