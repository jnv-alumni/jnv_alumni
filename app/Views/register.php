<?php 
  use App\Libraries\RegFormUtils as RegForm;
  $session = session();

  require_once APPPATH ."/Views/frame/header.php";
  require_once APPPATH ."/Views/frame/navbar.php";
?>  


  <!-- PAGE HEADER -->
  <header id="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-6 m-auto text-center">
          <h1>Silver Jubilee Registration </h1>
          <p> You will receive a permanent registration ID as an alumnus/alumna by filling out this form and paying a registration fee. Please ensure that you provide accurate information in the fields mentioned below.</p>
        </div>
      </div>
    </div>
  </header>

  <!-- CONTACT SECTION -->
  <section id="contact" class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <h4>Get In Touch</h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, odio!</p>
              <h4>Address</h4>
              <p>550 Main st, Boston MA</p>
              <h4>Email</h4>
              <p>test@test.com</p>
              <h4>Phone</h4>
              <p>(555) 555-5555</p>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="card bg-light p-2">
            <div class="card-body">
              <h3 class="text-center">Registration</h3>
              <hr>
              <?= form_open("/register") ?>
              <?= csrf_field() ?>
              <div class="form-row">
                    <div class="form-group col-lg">
                        <label for="email" class="font-weight-normal">Email <span class="text-danger">*</span></label>
                        <input type="text" name="<?= RegForm::email_name() ?>" id="email" value="<?= set_value(RegForm::email_name()) ?>" class="form-control form-control-sm" placeholder="Valid email id">
                        <?= '<span class="text-danger small font-italic">'. validation_show_error(RegForm::email_name()) .'</span>' ?>
                    </div>
                    <div class="form-group col-lg">
                        <label for="full_name" class="font-weight-normal">Full Name <span class="text-danger">*</span></label>
                        <input type="text" name="<?= RegForm::fullname_name() ?>" id="full_name" value="<?= set_value(RegForm::fullname_name()) ?>" class="form-control form-control-sm" placeholder="May include Dr./Shri/Md./Mr./Miss etc.">
                        <?= '<span class="text-danger small font-italic">'. validation_show_error(RegForm::fullname_name()) .'</span>' ?>
                    </div>
              </div>
              <div class="form-row">
                    <div class="form-group col-lg">
                        <label for="mobile" class="font-weight-normal">Mobile No. </label>
                        <input type="text" name="<?= RegForm::mobile_name() ?>" id="mobile" value="<?= set_value(RegForm::mobile_name()) ?>" class="form-control form-control-sm" placeholder="10 Digits">
                        <?= '<span class="text-danger small font-italic">'. validation_show_error(RegForm::mobile_name()) .'</span>' ?>
                    </div>
                    <div class="form-group col-lg">
                        <label for="alt_mobile" class="font-weight-normal">Alternate Mobile No. (if any) </label>
                        <input type="text" name="<?= RegForm::altmobile_name() ?>" id="alt_mobile" value="<?= set_value(RegForm::altmobile_name()) ?>" class="form-control form-control-sm" placeholder="10 Digits">
                        <?= '<span class="text-danger small font-italic">'. validation_show_error(RegForm::altmobile_name()) .'</span>' ?>
                    </div>
              </div>
              <div class="form-row">
                    <div class="form-group col-lg">
                        <label for="gender" class="font-weight-normal">Gender <span class="text-danger">*</span></label>
                        <select name="<?= RegForm::gender_name() ?>" id="gender" value="<?= set_value(RegForm::gender_name()) ?>" class="form-control form-control-sm"></select>
                        <?= '<span class="text-danger small font-italic">'. validation_show_error(RegForm::gender_name()) .'</span>' ?>
                    </div>      
                    <div class="form-group col-lg">
                        <label for="adm_year" class="font-weight-normal">Batch (Year of Admission into class 6th) <span class="text-danger">*</span></label>
                        <select name="<?= RegForm::batch_name() ?>" id="adm_year" value="<?= set_value(RegForm::batch_name()) ?>" class="form-control form-control-sm"></select>
                        <?= '<span class="text-danger small font-italic">'. validation_show_error(RegForm::batch_name()) .'(If lateral entry please mention class 6th year)</span>' ?>
                    </div>
              </div>
              <div class="form-row font-weight-bold mb-2 border-top pt-2">
                    <div class="col text-center">
                        <span class="col col-form-label col-form-label-sm">Duration of Time at JNV Darrang</span>
                    </div>
              </div>
              <div class="form-row">
                <div class="form-group col-lg">
                  <label for="from_year" class="font-weight-normal">From Year <span class="text-danger">*</span></label>
                  <select name="<?= RegForm::fromyr_name() ?>" id="from_year" value="<?= set_value(RegForm::fromyr_name()) ?>" class="form-control form-control-sm"></select>
                  <?= '<span class="text-danger small font-italic">'. validation_show_error(RegForm::fromyr_name()) .'</span>' ?>
                </div>
                <div class="form-group col-lg">
                  <label for="to_year" class="font-weight-normal">To Year <span class="text-danger">*</span></label>
                  <select name="<?= RegForm::toyr_name() ?>" id="to_year" value="<?= set_value(RegForm::toyr_name()) ?>" class="form-control form-control-sm"></select>
                  <?= '<span class="text-danger small font-italic">'.validation_show_error(RegForm::toyr_name()).'</span>' ?>
                </div>
              </div>

              <div class="form-row font-weight-bold mb-2 border-top pt-2">
                    <div class="col text-center">
                        <span class="col col-form-label col-form-label-sm"> Adress Details</span>
                    </div>
              </div>
              <div class="form-row">
                <div class="form-group col">
                  <input type="text" name="<?= RegForm::vill_name() ?>" id="vill_ward" value="<?= set_value(RegForm::vill_name()) ?>" class="form-control form-control-sm" placeholder="Vill/Town/City *">
                  <?= '<span class="text-danger small font-italic">'.validation_show_error(RegForm::vill_name()).'</span>' ?>
                </div>
                <div class="form-group col">
                  <input type="text" name="<?= RegForm::poffice_name() ?>" id="poffice" value="<?= set_value(RegForm::poffice_name()) ?>" class="form-control form-control-sm" placeholder="Post Office *">
                  <?= '<span class="text-danger small font-italic">'.validation_show_error(RegForm::poffice_name()).'</span>' ?>
                </div>
                <div class="form-group col">
                  <input type="text" name="<?= RegForm::pin_name() ?>" id="pin" value="<?= set_value(RegForm::pin_name()) ?>" class="form-control form-control-sm" placeholder="Pin *">
                  <?= '<span class="text-danger small font-italic">'. validation_show_error(RegForm::pin_name()) .'</span>' ?>
                </div>
              </div>
              <div class="form-row">
                  <div class="form-group col">
                    <input type="text" name="<?= RegForm::locality_name() ?>" id="locality" value="<?= set_value(RegForm::locality_name()) ?>" class="form-control form-control-sm" placeholder="Locality (Optional)">
                    <?= '<span class="text-danger small font-italic">'. validation_show_error(RegForm::locality_name()) .'</span>' ?>
                  </div>
                  <div class="form-group col">
                    <input type="text" name="<?= RegForm::dist_name() ?>" id="district" value="<?= set_value(RegForm::dist_name()) ?>" class="form-control form-control-sm" placeholder="District *">
                    <?= '<span class="text-danger small font-italic">'. validation_show_error(RegForm::dist_name()) .'</span>' ?>
                  </div>
                  <div class="form-group col">
                    <input type="text" name="<?= RegForm::state_name() ?>" id="state" value="<?= set_value(RegForm::state_name()) ?>" class="form-control form-control-sm" placeholder="State *">
                    <?= '<span class="text-danger small font-italic">'. validation_show_error(RegForm::state_name()) .'</span>' ?>
                  </div>
              </div>
              <div class="form-row">
                <div class="form-group col">
                    <textarea name="<?= RegForm::addressline_name() ?>" id="address_line" class="form-control form-control-sm" placeholder="More Address details (if any)"><?= set_value(RegForm::addressline_name()) ?></textarea>
                    <?= '<span class="text-danger small font-italic">'. validation_show_error(RegForm::addressline_name()) .'</span>' ?>
                </div>
              </div>
              <div class="form-row border-top pt-2">
                <div class="form-group col-lg-4"><label for="current_occup" class="font-weight-normal">I am currently engaged as</label></div>
                <div class="form-group col-lg-8"><select name="<?= RegForm::curr_occup_name() ?>" id="current_occup" value="<?php empty(set_value(RegForm::curr_occup_name()))?"--SELECT--":set_value(RegForm::curr_occup_name()) ?>" class="form-control form-control-sm"></select></div>
                <?= '<span class="text-danger small font-italic">'. validation_show_error(RegForm::curr_occup_name()) .'</span>' ?>
              </div>

              <div class="form-row">
                <div class="form-group col">
                    <textarea name="<?= RegForm::feedback_name() ?>" id="feedback" class="form-control form-control-sm" placeholder="Your suggestions, feedback, and ideas are greatly welcomed and valued."><?= set_value(RegForm::feedback_name()) ?></textarea>
                    <?= '<span class="text-danger small font-italic">'. validation_show_error(RegForm::feedback_name()) .'</span>' ?>
                </div>
              </div>

              <div class="form-row py-3">
                <div class="col-lg-1"></div>
                <div class="col-lg-10"><button type="submit" class="btn btn-danger btn-block">REGISTER AND PAY REGISTRATION FEE</button></div>
                <div class="col-lg-1"></div>
              </div>
              <?= form_close() ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- STAFF -->
  <section id="staff" class="py-5 text-center bg-dark text-white">
    <div class="container">
      <h1>Our Staff</h1>
      <hr>
      <div class="row">
        <div class="col-md-3">
          <img src="img/person1.jpg" alt="" class="img-fluid rounded-circle mb-2">
          <h4>Jane Doe</h4>
          <small>Marketing Manager</small>
        </div>
        <div class="col-md-3">
          <img src="img/person2.jpg" alt="" class="img-fluid rounded-circle mb-2">
          <h4>Sara Williams</h4>
          <small>Business Manager</small>
        </div>
        <div class="col-md-3">
          <img src="img/person3.jpg" alt="" class="img-fluid rounded-circle mb-2">
          <h4>John Doe</h4>
          <small>CEO</small>
        </div>
        <div class="col-md-3">
          <img src="img/person4.jpg" alt="" class="img-fluid rounded-circle mb-2">
          <h4>Steve Smith</h4>
          <small>Web Developer</small>
        </div>
      </div>
    </div>
  </section>

<?php 
  require_once APPPATH ."/Views/frame/footer.php";
  require_once APPPATH ."/Views/frame/sweetAlert.php";
  require_once APPPATH ."/Views/load_dropdowns.php";
?>