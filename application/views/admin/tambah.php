<div class="container mt-3">
    <div class="justify-content-md-center col-6 bg-dark text-light p-3">
        <h1>Tambah Data</h1>
        <form action="<?= base_url()?>admin/tambahProses" method="post">
            <div class="form-group">
                <label for="judul">Judul Berita</label>
                <input type="text" class="form-control" name="judul" id="judul">

            </div>
            <div class="form-group">
                <label for="pesan">Isi Berita</label>
                <textarea class="form-control" name="pesan" id="pesan" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Tambah</button>
                <a class="btn btn-danger" href="<?=base_url()?>admin">Batal</a>
            </div>
        </form>
    </div>
</div>