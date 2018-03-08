<?php $this->load->view('front/inc/top');?>
<?php if ($pagename=='products') {
    ?>
  <div id="preloader" class="pre3">
    <div class="preloader-container">
      <img src="<?php echo base_url(); ?>assets/images/logo.png" class="preload-logo1" alt=""><br>
      <br>
      <br>
      <img src="<?php echo base_url(); ?>assets/images/Preloader_2.gif" alt="" class="preload-gif"> </div>
  </div>
<?php
}?>
<div class="mcare-main-container content-wrap content <?php echo $bodyclass;?>">
<?php $this->load->view('front/inc/header');?>
<?php $this->load->view('front/'.$pagename);?>
<?php $this->load->view('front/inc/footer');?>
</body>
<?php $this->load->view('front/enquiry');?>
<?php  $this->load->view('front/inc/script');?>
</html>
