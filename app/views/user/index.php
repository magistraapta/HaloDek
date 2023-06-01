<div class="container m-5">
    <button class="btn-primary"><a href="<?=BASEURL?>/user/tambah" class="text-decoration-none text-white">tambah</a></button>
<ul class="list-group list-group-light">
    <?php foreach ($data['user'] as $user) :?>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <div>
                <div class="fw-bold"><?= $user['username']; ?></div>
                <div class="text-muted"><?= $user['email']; ?></div>
            </div>
            <span class="badge rounded-pill badge-success">Active</span>
        </li>
    <?php endforeach ?>
</ul>
</div>


