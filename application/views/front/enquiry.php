<div class="modal fade" id="app-modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div>
          <div class="content-style-text">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 padding-spacer-right">
              <h4 class="border-title">Get In <span class="theme-color-text">Touch</span></h4>
              <!--Form Start-->
              <form id="appointment" class="appointment-frm" >
                <div class="alert alert-success hidden" id="appSuccess" role="alert">Your message is sent succssfully.</div>
                <div class="alert alert-danger hidden" id="appError" role="alert">Sorry, Your message is not sent successfully.</div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="ion-person"></i></div>
                    <input type="text" class="form-control" name="appointment_name" id="appointment_name" placeholder="Name" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="ion-email"></i></div>
                    <input type="email" class="form-control" name="appointment_email" id="appointment_email" placeholder="Email" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="ion-edit"></i></div>
                    <input type="text" class="form-control" name="appointment_reason" id="appointment_reason" placeholder="Enquiry" required>
                  </div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" rows="3" name="appointment_message" id="appointment_message" placeholder="Message" required></textarea>
                </div>
                <div class="form-group">
                  <button class="mcare-button-dark button2 pull-right mcare-button-med" data-loading-text="Loading..." type="submit" id="sendenquiry">Send Message</button>
                </div>
              </form>
              <!-- Form End -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
