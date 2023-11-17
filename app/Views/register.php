<?php 
  use App\Libraries\RegFormUtils as RegForm;
  $session = session();
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
                        <select name="" id="deptt_name" value="" class="form-control form-control-sm"></select>
                        <?= '<span class="text-danger small font-italic">(If lateral entry please mention class 6th year)</span>' ?>
                    </div>
              </div>
              <div class="form-row">
                <div class="form-group col-lg">
                  <label for="alt_mobile" class="font-weight-normal">Duration of Time at JNV Darrang <span class="text-danger">*</span></label>
                  <input type="text" name="" id="alt_mobile" value="" class="form-control form-control-sm" placeholder="From Year">
                  <?= '<span class="text-danger small font-italic"></span>' ?>
                </div>
                <div class="form-group col-lg">
                  <label for="alt_mobile" class="font-weight-normal">&nbsp;</label>
                  <input type="text" name="" id="alt_mobile" value="" class="form-control form-control-sm" placeholder="To Year">
                  <?= '<span class="text-danger small font-italic"></span>' ?>
                </div>
              </div>

              <div class="form-row font-weight-bold mb-2 border-top pt-2">
                    <div class="col text-center">
                        <span class="col col-form-label col-form-label-sm"> Adress Details</span>
                    </div>
              </div>
              <div class="form-row">
                <div class="form-group col">
                  <input type="text" name="" id="vill_ward" value="" class="form-control form-control-sm" placeholder="Vill/Town/City *">
                  <?= '<span class="text-danger small font-italic"></span>' ?>
                </div>
                <div class="form-group col">
                  <input type="text" name="" id="vill_ward" value="" class="form-control form-control-sm" placeholder="Post Office *">
                  <?= '<span class="text-danger small font-italic"></span>' ?>
                </div>
                <div class="form-group col">
                  <input type="text" name="" id="vill_ward" value="" class="form-control form-control-sm" placeholder="Pin *">
                  <?= '<span class="text-danger small font-italic"></span>' ?>
                </div>
              </div>
              <div class="form-row">
                  <div class="form-group col">
                    <input type="text" name="" id="vill_ward" value="" class="form-control form-control-sm" placeholder="Locality (Optional)">
                    <?= '<span class="text-danger small font-italic"></span>' ?>
                  </div>
                  <div class="form-group col">
                    <input type="text" name="" id="vill_ward" value="" class="form-control form-control-sm" placeholder="District *">
                    <?= '<span class="text-danger small font-italic"></span>' ?>
                  </div>
                  <div class="form-group col">
                    <input type="text" name="" id="vill_ward" value="" class="form-control form-control-sm" placeholder="State *">
                    <?= '<span class="text-danger small font-italic"></span>' ?>
                  </div>
              </div>
              <div class="form-row">
                <div class="form-group col">
                    <textarea name="" id="" class="form-control form-control-sm" placeholder="More Address details (if any)"></textarea>
                </div>
              </div>
              <div class="form-row border-top pt-2">
                <div class="form-group col-lg-4"><label for="" class="font-weight-normal">I am currently engaged as</label></div>
                <div class="form-group col-lg-8"><select name="" id="deptt_name" value="" class="form-control form-control-sm"></select></div>
                <?= '<span class="text-danger small font-italic"></span>' ?>
              </div>

              <div class="form-row">
                <div class="form-group col">
                    <textarea name="" id="" class="form-control form-control-sm" placeholder="Your suggestions, feedback, and ideas are greatly welcomed and valued."></textarea>
                </div>
              </div>

              <div class="form-row py-3">
                <div class="col-lg-1"></div>
                <div class="col-lg-10"><button type="submit" class="btn btn-success btn-block">REGISTER AND PAY REGISTRATION FEE</button></div>
                <div class="col-lg-1"></div>
              </div>

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

