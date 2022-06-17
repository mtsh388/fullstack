<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="<?= base_url('assets/img/yayasan.jpg') ?>" type="image/x-icon">
    <title><?= $title; ?></title>
    <link href="<?= base_url() ?>assets/css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="bg-success">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5 mb-3">
                                <div class="card-header border-0 text-center">
                                    <img src="<?= base_url() ?>assets/img/yayasan.png" alt="" class="rounded pt-4" width="50%">
                                    <?= $this->session->flashdata('pesan'); ?>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="<?= base_url() ?>auth/registration">
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control <?= (form_error('nama_depan')) ? 'is-invalid' : '' ?>" id="nama_depan" name="nama_depan" type="text" placeholder="Nama Depan" value="<?= set_value('nama_depan') ?>" />
                                                    <label for="inputFirstName">Nama Depan</label>
                                                    <?= form_error('nama_depan', '<div class="invalid-feedback">', '</div>'); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input class="form-control <?= (form_error('nama_belakang')) ? 'is-invalid' : '' ?>" id="nama_belakang" name="nama_belakang" type="text" placeholder="Nama Belakang" value="<?= set_value('nama_belakang') ?>" />
                                                    <label for="inputLastName">Nama Belakang</label>
                                                    <?= form_error('nama_belakang', '<div class="invalid-feedback">', '</div>'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control <?= (form_error('username')) ? 'is-invalid' : '' ?>" id="username" name="username" type="text" placeholder="username" value="<?= set_value('username') ?>" />
                                            <label for="inputEmail">Username</label>
                                            <?= form_error('username', '<div class="invalid-feedback">', '</div>'); ?>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control <?= (form_error('no_hp')) ? 'is-invalid' : '' ?>" id="no_hp" name="no_hp" type="text" placeholder="WhatsApp" value="<?= set_value('no_hp') ?>" />
                                            <label for="inputEmail">WhatsApp</label>
                                            <?= form_error('no_hp', '<div class="invalid-feedback">', '</div>'); ?>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control <?= (form_error('email')) ? 'is-invalid' : '' ?>" id="email" name="email" type="email" placeholder="Email" value="<?= set_value('email') ?>" />
                                            <label for="inputEmail">Email</label>
                                            <?= form_error('email', '<div class="invalid-feedback">', '</div>'); ?>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control <?= (form_error('password1')) ? 'is-invalid' : '' ?>" id="password1" name="password1" type="password" placeholder="Create a password" />
                                                    <label for="inputPassword">Password</label>
                                                    <?= form_error('password1', '<div class="invalid-feedback">', '</div>'); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control <?= (form_error('password2')) ? 'is-invalid' : '' ?>" id="password2" name="password2" type="password" placeholder="Confirm password" />
                                                    <label for="inputPasswordConfirm">Confirm Password</label>
                                                    <?= form_error('password2', '<div class="invalid-feedback">', '</div>'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">Create Account</button></div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="<?= base_url('auth') ?>">Sudah punya akun? Silahkan login</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Yayasan Insani Taqwin Indonesia 2021</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url() ?>assets/js/scripts.js"></script>
</body>

</html>