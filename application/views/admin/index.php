<div class="container">
    <h1>Selamat Datang, <?= $this->session->userdata('nama') ?></h1>
    <div class="row mb-2">
        <h3>Berita Milikmu :</h3>
        <a class="ml-auto btn btn-success" href="<?= base_url() ?>admin/tambah">Tambah Data</a>
    </div>
    <table class="table" id="table">
        <thead>
            <th>Judul Berita</th>
            <th>Isi Berita</th>
            <th>Status Aktif</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php
            foreach ($data as $d) {
            ?>
            <tr>
                <td><?= $d['judul'] ?></td>
                <td><?= $d['pesan'] ?></td>
                <td>
                    <?php
                    if ($d['status_aktif'] == '1') {
                    ?>
                        <a class="btn btn-success" href="<?= base_url() ?>admin/editAktif/<?= $d['id'] ?>/0">Aktif</a>
                    <?php
                    } else {
                    ?>
                    <a class="btn btn-danger" href="<?=base_url()?>admin/editAktif/<?=$d['id']?>/1">Tidak Aktif</a>
                    <?php
                    }
                    ?>
                </td>
                <td>
                    <a class="btn btn-warning" href="<?=base_url()?>admin/edit/<?=$d['id']?>">Edit</a>
                    <a class="btn btn-danger" href="<?=base_url()?>admin/hapus/<?=$d['id']?>" onclick="return confirm('Apakah anda ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>