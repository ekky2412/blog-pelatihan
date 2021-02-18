<div class="container mt-3">
    <div class="justify-content-md-center col-6 bg-dark text-light p-3">
        <h1>Daftar</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama" id="nama" value="<?= set_value('nama'); ?>">
                <?= form_error('nama', '<small class="pl-3 text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" name="email" id="email" value="<?= set_value('email'); ?>">
                <?= form_error('email', '<small class="pl-3 text-danger">', '</small>'); ?>

            </div>
            <div class="form-group">
                <label for="password1">Password</label>
                <input type="password" class="form-control" name="password1" id="password1">
                <?= form_error('password1', '<small class="pl-3 text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="password2">Konfirmasi Password</label>
                <input type="password" class="form-control" name="password2" id="password2">
                <?= form_error('password2', '<small class="pl-3 text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Daftar</button>
            </div>
        </form>
    </div>
</div>