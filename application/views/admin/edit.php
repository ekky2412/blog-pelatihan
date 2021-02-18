<div class="container mt-3">
    <div class="justify-content-md-center col-6 bg-dark text-light p-3">
        <h1>Edit Data</h1>
        <form action="<?= base_url()?>admin/editProses" method="post">
            <div class="form-group">
                <label for="judul">Judul Berita</label>
                <input type="text" class="form-control" name="judul" id="judul" value="<?=$data['judul']?>">

            </div>
            <div class="form-group">
                <label for="pesan">Isi Berita</label>
                <textarea class="form-control" name="pesan" id="pesan" cols="30" rows="10"><?= $data['pesan']?></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-warning">Edit</button>
                <a class="btn btn-danger" href="<?=base_url()?>admin">Batal</a>
            </div>
        </form>
    </div>
</div>