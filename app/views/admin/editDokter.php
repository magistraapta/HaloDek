<div class="container mt-5">
      <!-- Content Wrapper. Contains page content -->


    <!-- Main content -->
    <section class="content">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><?= $data['title']; ?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?= BASEURL; ?>/admin/updateDokter" method="POST">
              <input type="hidden" name="id" value="<?= $data['dokter']['id']; ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label >Nama</label>
                    <input type="text" class="form-control" placeholder="nama dokter" name="nama" value="<?=$data['dokter']['nama']?>">
                  </div>
                  <div class="form-group">
                    <label >Spesialis</label>
                    <input type="text" class="form-control" placeholder="spesialisasi dokter" name="spesialis" value="<?=$data['dokter']['spesialis']?>">
                  </div>
                  <div class="form-group">
                    <div class="row">
                    <label for="deskripsi">Deskripsi</label>
                    </div>
                    <textarea name="deskripsi" id="deskripsi" cols="50" rows="5" value="<?=$data['dokter']['deskripsi']?>"><?=$data['dokter']['deskripsi']?></textarea>
                  </div>
                  <div class="form-group">
                    <label >Harga</label>
                    <input type="text" class="form-control" placeholder="tarif dokter" name="harga" value="<?=$data['dokter']['harga']?>">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-nav-primary">Submit</button>
                </div>
              </form>
            </div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>