<div class="detail mt-5 rounded-3">
    <div class="container bg-light p-5">
        <div class="row ">
            <div class="col ">
                <div class="d-flex align-items-center">
                    <div class="">
                    <h2><?= $data['dokter']['nama']; ?></h2>
                    <p><?= $data['dokter']['spesialis']; ?></p>
                </div>
                </div>
                    <div class="col-8 mt-4">
                        <p><?= $data['dokter']['deskripsi']; ?></p>
                    </div>
                    <div class="mt-5">
                        <button class="btn-primary">Make an appointment</button>
                    </div>
                </div>
        </div>
    </div>
</div>