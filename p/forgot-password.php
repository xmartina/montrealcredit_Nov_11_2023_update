<?php
include './layout/header.php' ;

?>

<div class="authincation section-padding">
    <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-xl-5 col-md-6">
                <div class="mini-logo text-center my-4">
                    <a href="/"><img src="http://localhost/assets/images/logo/logo.png" alt="" /></a>

                </div>
                <div class="auth-form card">
                    <div class="card-body">
                        <form method="post" id="subsub" name="myform" class="signin_validate row g-3"
                            action="login_process">
                            <h4 class="text-danger" id="register-error"></h4>
                            <div class="col-12">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" name="user_id" />
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" name="log" class="btn btn-primary"
                                    style="background-color:#1F1B44;">
                                    Reset Password
                                </button>
                            </div>
                        </form>
                        <p class="mt-3 mb-0">
                            Don't have an account?
                            <a class="text-primary" href="./join/signup">Register</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
  include './layout/footer.php';

  ?>