<div class="container p-4">
    <?php
    foreach ($data as $d) {
    ?>
        <div class="row">
            <div class="card w-100">
                <div class="card-body">
                    <h5 class="card-title"><?= $d['judul'] ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">Oleh : <?= $d['author']?> </h6>
                    <p class="card-text"><?= $d['pesan'] ?></p>
                    <a href="<?=base_url()?>/Utama/berita/<?=$d['id']?>" class="card-link btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>