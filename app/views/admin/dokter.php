<div class="container mt-5">
    <h4>List Dokter</h4>
    <div class="row">
        <a href="<?=BASEURL?>/admin/tambah" >tambah dokter</a>
        
        <div class="col">
            <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light">
                    <tr>
                    <th>Nama</th>
                    <th>Spesialis</th>
                    <th>Harga</th>
                    <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['dokter'] as $dok) :?> 
                        <tr>
                    <td>
                        <div class="d-flex align-items-center">
                        
                        <div class="ms-3">
                            <p class="fw-bold mb-1 text-capitalize"><?= $dok['nama']; ?></p>
                        </div>
                        </div>
                    </td>
                    <td>
                        <p class="fw-normal mb-1"><?= $dok['spesialis']; ?></p>
                    </td>
                    <td>
                        <p class="fw-normal mb-1"><?= $dok['harga']; ?></p>
                    </td>
                    <td>
                        <a href="<?=BASEURL?>/admin/hapus/<?=$dok['id']?>" class="btn btn-danger">Delete</a>
                        <a href="<?=BASEURL?>/admin/edit/<?=$dok['id']?>" class="btn btn-success">Edit</a>
                    </td>
                    </tr> 
                    <?php endforeach ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>