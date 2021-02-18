<div class="container mt-3">
    <div class="justify-content-md-center col-6 bg-dark text-light p-3">
    <h1>Login</h1>
    <form action="<?=base_url()?>Utama/prosesLogin" method="post">
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" class="form-control" name="email" id="email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
        <small>Belum ada akun? Daftar <a href="<?= base_url() ?>Utama/daftar">disini</a></small>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
    </div>
</div>