<footer>

  <div class="main-footer">

    <div class="container">

      <div class="row">

        <div class="main-footer-inner">

          <!--Footer Content-->

          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" id="footer-form">

            <div class="mcare-foot-about footer-box"> <img src="<?php echo base_url();?>assets/images/foot-logo.png" class="foot-logo" alt="">

              <p class="text-content"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus felis orci, maximus id sapien a, bibendum lobortis felis. Duis aliquet lorem in sem elementum, <a href="#">read more...</a> </p>

              <div class="foot-subscribe"> <i class="fa fa-envelope"></i>

                <input type="text" class="subscribe-text" placeholder="Enter Your Email" name="femail" id="femail"/>

                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">

                <button class="subscribe-button" id="fsend">SEND</button>

              </div>

            </div>

          </div>

          <!--Footer Contact Details-->

          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

            <div class="mcare-foot-address footer-box">

              <h4> Reach Us </h4>

              <p class="text-content"> <i class="fa fa-home"></i>A-406, Anjani Paradise, <br />Kanungo Estate,<br />Mira Road - East, Thane - 401107.</p>

              <p class="text-content"> <i class="fa fa-envelope"></i><a href="mailto:freshagroindia@gmail.com">freshagroindia@gmail.com</a> </p>

              <p class="text-content"> <i class="fa fa-phone"></i>+91 9910900751  </p>

              <p class="text-content"> <i class="fa fa-print"></i>+91 9393511216 </p>

            </div>

          </div>

          <!--Latest Tweets-->

          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

            <div class="mcare-foot-tweets footer-box">

              <h4> Latest Tweets </h4>

              <p class="text-content"> <i class="fa fa-twitter"></i><a href="#">@testName</a> Please kindly use our Forum: <a href="#">pixelatic.co.uk.</a><br>

                <span>about a month ago</span> </p>

              <p class="text-content"> <i class="fa fa-twitter"></i><a href="#">@testName</a> Please kindly use our Forum: <a href="#">pixelatic.co.uk.</a><br>

                <span>about a month ago</span> </p>

            </div>

          </div>

          <!--Footer Appointment Form-->

          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

            <div class="mcare-foot-appform footer-box">

              <h4> Send us Enquiry </h4>

              <form class="form-horizontal" id="footerform">

                <div class="input input--kohana control-group">

                  <div class="control-group">

                    <input type="text" class="form-control input__field input__field--kohana" placeholder="" name="foname" id="foname" />

                    <label class="input__label input__label--kohana"> <i class="ion-person icon--kohana"></i> <span class="input__label-content input__label-content--kohana">Full Name</span> </label>

                  </div>

                </div>

                <div class="input input--kohana control-group">

                  <div class="control-group">

                    <input type="text" class="form-control input__field input__field--kohana" placeholder="" name="contact" id="contact" />

                    <label class="input__label input__label--kohana"> <i class="ion-android-call icon--kohana"></i> <span class="input__label-content input__label-content--kohana">Phone Number</span> </label>

                  </div>

                </div>

                <textarea placeholder="Massage" id="fomessage" name="fomessage"></textarea>

                <button type="submit" class="" id="sendfenquiry">Submit</button>

              </form>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

  <!--Sub Footer-->

  <div class="sub-footer">

    <div class="container">

      <div class="row">

        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">

          <p class="text-content copy-content"> © Copyrights <span class="theme-color-text">AGRO FRESH FOOD</span> 2017. All rights reserved. <a href="#">Terms of Use</a> | <a href="#">Privacy Policy</a> </p>

        </div>

        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">

          <ul class="foot-social">

            <li><a href="#"><i class="fa fa-facebook"></i></a></li>

            <li><a href="#"><i class="fa fa-twitter"></i></a></li>

            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>

            <li><a href="#"><i class="fa fa-share-alt"></i></a></li>

            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>

            <li><a href="#"><i class="fa fa-skype"></i></a></li>

          </ul>

        </div>

      </div>

    </div>

  </div>

</footer>

