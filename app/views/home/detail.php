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
                        <form action="<?=BASEURL?>/detail/processAppointment" method="post">
                            <input type="hidden" name="user_id" value="<?=$data['user']['id']?>">
                            <input type="hidden" name="dokter_id" value="<?=$data['dokter']['id']?>">
                            <button class="btn btn-primary" type="submit">Make an appointment</button>
                        </form>
                    </div>
                </div>
        </div>
    </div>
</div>