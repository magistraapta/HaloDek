<div class="container m-5">
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
