<div class="container">
    <div class="row">
        <h5 class="my-4">Daftar Appointment</h5>
        <div class="col">
        <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light">
                    <tr>
                    <th>Nama Customer</th>
                    <th>Nama Dokter</th>
                    <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['appointment'] as $app) :?> 
                        <tr>
                    <td>
                        <div class="d-flex align-items-center">
                        
                            <div class="ms-3">
                                <p class="fw-bold mb-1 text-capitalize"><?= $app['user_id']; ?></p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="fw-normal mb-1"><?= $app['dokter_id']; ?></p>
                    </td>
                    <td>
                        <a href="<?=BASEURL?>/appointment/hapus/<?=$app['id']?>" class="btn btn-danger">Delete</a>
                    </td>
                    </tr> 
                    <?php endforeach ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>