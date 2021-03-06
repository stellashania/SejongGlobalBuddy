<?php
include('layouts/header2.php');
?>

<!-- LOGIN FORM -->
<section class="container mt-5 pt-5">
    <div class="row d-flex justify-content-center align-items-center h-100 pt-3 mx-2">
        <div class="col">
            <div class="card card-registration my-4">
                <div class="row g-0">
                    <div class="col-lg-6 d-none d-lg-block">
                        <img src="assets/img/events/sports2.jpg" alt="Sample photo" class="img-fluid w-100 login-form-img">
                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="card-body p-sm-5 text-black">
                            <h3 class="mb-3 text-uppercase blue-text fw-bold">Login</h3>

                            <form action="login-process.php" method="POST">
                                <!-- Email -->
                                <div class="form-outline mb-3">
                                    <label class="form-label" for="email">Email address</label>
                                    <input type="email" id="email" name="email" class="form-control" required>
                                </div>

                                <!-- Password -->
                                <div class="form-outline mb-3">
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" id="password" name="password" class="form-control" required>
                                </div>

                                <!-- Submit -->
                                <button type="submit" name="submit" class="btn btn-block btn-yellow mb-4 mt-3">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<?php include('layouts/footer.php') ?>