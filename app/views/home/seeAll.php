<div class="container ">

<div class="row my-5 d-flex justify-content-center ">
<?php foreach ($data['dokter'] as $dok) : ?>
          <div class="doctor col-3 bg-light rounded-3 my-2 p-4 mx-2">
            <a href="<?= BASEURL?>/home/detail/<?=$dok['id']?>" class="text-decoration-none">
              <h3 class="text-capitalize"><?= $dok['nama']; ?></h3>
              <p class="text-capitalize"><?= $dok['spesialis']; ?></p>
            </a>
              <h5 class="mt-4">Rp.<?= $dok['harga']; ?>/sesi</h5>
          </div>
<?php endforeach ?>
</div>
</div>