<!--Scripts To Include-->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.11.2.min.js"></script>
<script src="<?php echo base_url();?>assets/js/modernizr.custom-resmenu.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/modernizr.custom.79639.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery-migrate-1.2.1.js"></script>
<script src="<?php echo base_url();?>assets/js/common.js?random=<?php echo time();?>"></script>
<script src="<?php echo base_url();?>assets/js/jquery.toaster.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.ba-cond.min.js" type="text/javascript"></script>
<!-- Contact Form -->
<?php if ($pagename=='contact') {
    ?>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
  <!-- Gmap3 JS -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/gmap3.min.js"></script>
  <script type="text/javascript">
  	/*map api*/
  	/* Google Map Loading */
  				$('.crest_gmap3').gmap3({
  					marker:{
  					address:" Narendra Park, naya nagar, mira road, maharashtra",
  					options:{
  				icon:
  			      new google.maps.MarkerImage('images/marker-map.png',   //icon url
  			      new google.maps.Size(72, 103),    //sets the icon size
  			      new google.maps.Point(0, 0),    //sets the origin point of the icon
  			      new google.maps.Point(30, 60)),    //sets the anchor point for the icon
  			  }},
  				 map:{
  				    options:{
  				     zoom:13,
  				     navigationControl: true,
  				     scrollwheel: false,
  				     streetViewControl: true,
  				     styles: [{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#e0efef"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"hue":"#1900ff"},{"color":"#c0e8e8"}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":100},{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"visibility":"on"},{"lightness":700}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#7dcdcd"}]}]
  				    }
  				 }
  	});
  		</script>
    <?php
}?>
<?php if ($pagename=='products') {
        ?>
  <script src="<?php echo base_url(); ?>assets/js/jquery.easyResponsiveTabs.js"></script>
  <script type="text/javascript">
  $(document).ready(function () {
  </script>
<?php
    }?>
<script src="<?php echo base_url();?>assets/js/jquery.validate.js"></script>
<script src="<?php echo base_url();?>assets/js/view.appointment.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins.js"></script>
<script src="<?php echo base_url();?>assets/js/calling.js"></script>