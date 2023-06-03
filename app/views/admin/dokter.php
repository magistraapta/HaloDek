<div class="container mt-5">
    <h4>List Dokter</h4>
    <div class="row">
        <div class="col">
            <a href="<?=BASEURL?>/admin/tambah" class="btn btn-nav-primary my-2">tambah</a>
            <ul class="list-group list-group-light">
                <?php foreach ($data['dokter'] as $dok) :?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <div class="fw-bold"><?= $dok['nama']; ?></div>
                            <div class="text-muted"><?= $dok['spesialis']; ?></div>
                        </div>
                        <div>
                            <a href="<?=BASEURL?>/admin/hapus/<?=$dok['id']?>" class="btn btn-danger">Delete</a>
                            <a href="<?=BASEURL?>/admin/edit/<?=$dok['id']?>" class="btn btn-success">Edit</a>
                        </div>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>