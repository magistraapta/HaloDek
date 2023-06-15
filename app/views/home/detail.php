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
                        <form action="<?=BASEURL?>/appointment/processAppointment" method="post">
                            <input type="hidden" name="user_id" value="<?=$_SESSION['account']['username']?>">
                            <input type="hidden" name="dokter_id" value="<?=$data['dokter']['nama']?>">

                            <div class="col-4 form-outline datetimepicker">
                                <input type="date" class="form-control" id="datetimepickerExample" name="date">
                                <label for="datetimepickerExample" class="form-label">Select Date and Time</label>
                                <select class="form-select my-2" name="time" aria-label="Default select example">
                                    <option selected>Pilih waktu temu</option>
                                    <option value="19.00">19.00</option>
                                    <option value="20.00">20.00</option>
                                    <option value="21.00">21.00</option>
                                </select>
                            </div>

                            <button class="btn btn-primary" type="submit">Make an appointment</button>
                        </form>
                    </div>
                </div>
        </div>
    </div>
</div>