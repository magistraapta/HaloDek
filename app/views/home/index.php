

<section class="sales">
  <div class="container ">
    <div class="row ">
      <div class="col-lg-7 col-12  d-flex ">
        <img src="<?= BASEURL?>/assets/images/banner.png" height="400" alt="Telepatia service by BuildWith Angga">
      </div>
      <div class="col-lg-5  col-12 copywriting d-flex align-items-center  ">
          <div>
              <h1 class="header ">
                  Experienced Healthcare Professionals
              </h1>
              <p class="description">
              We are committed to providing you with the highest quality care possible. We are also committed to making your experience as comfortable and convenient as possible.
              </p>
              <p class="button">
                  <a href="#" class="btn btn-primary me-2">
                  Get Started
                  </a>
                  <a href="#" class="btn btn-secondary">
                  Testimonials
                  </a>
              </p>
          </div>
      </div>
    </div>
  </div>
</section>

<div class=" container brands d-flex  align-items-center">
  <div class="header col-2 ">
      <h4>Trusted By <br> The Goverments</h4>
  </div>
  
  <div class="logo d-flex col-2  justify-content-between">
      <img src="<?= BASEURL?>/assets/images/mentri.png" height="50" alt="brands">
      <img src="<?= BASEURL?>/assets/images/bpjs.png" height="50" alt="brands">
  </div>
</div>


<div class="services">
  <div class="container">
      <div class="header">
          <h4 class="align-center">Our Service</h4>
      </div>
      <div class="row d-flex justify-content-between">
        <?php foreach (array_slice($data['dokter'], 0, 3) as $dok) : ?>
          <div class="doctor col-3">
            <a href="<?= BASEURL?>/home/detail/<?=$dok['id']?>" class="text-decoration-none">
              <h3 class="text-capitalize"><?= $dok['nama']; ?></h3>
              <p class="text-capitalize"><?= $dok['spesialis']; ?></p>
            </a>
              <h5 class="mt-4">Rp.<?= $dok['harga']; ?>/sesi</h5>
          </div>
          <?php endforeach ?>
          
      </div>
  </div>
</div>


 <!-- Option 1: Bootstrap Bundle with Popper -->
