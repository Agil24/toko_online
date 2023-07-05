<!DOCTYPE html>
<html lang="en">

<body style="background-color: #FFFFFF;">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-7 col-lg-7 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-center justify-content-center">
                            <div class="p-5 text-center">
                                <span class="fa-stack fa-5x">
                                    <i class="fas fa-circle fa-stack-2x" style="color: #8B4513;"></i>
                                    <i class="fas fa-birthday-cake fa-stack-1x fa-inverse" style="color: #FFFFFF;"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body p-5 rounded-lg">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                                </div>
                                <?php echo $this->session->flashdata('pesan') ?>
                                <form method="post" action="<?php echo base_url('auth/login') ?>" class="user">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user form-control-lg" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan username" name="username">
                                        <?php echo form_error('username', '<div class="text-danger small ml-2">', '</div>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user form-control-lg" id="exampleInputPassword" placeholder="Masukkan password" name="password">
                                        <?php echo form_error('password', '<div class="text-danger small ml-2">', '</div>'); ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block btn-lg" style="background-color: #8B4513;">Login</button>
                                    <hr>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?php echo base_url('registrasi/index') ?>">Belum Punya Akun? Daftar!</a><br>
                                    <p>or sign up with:</p>
                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-facebook-f"></i>
                                    </button>

                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-google"></i>
                                    </button>

                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-twitter"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</body>

</html>