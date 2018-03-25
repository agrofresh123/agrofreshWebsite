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

  					address:" A-406, Anjani Paradise, Kanungo Estate,Mira Road - East, Thane - 401107.",

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

	$('#allPro').easyResponsiveTabs({
		type: 'default', //Types: default, vertical, accordion
		width: 'auto', //auto or any width like 600px
		fit: true, // 100% fit in a container
		closed: 'accordion', // Start closed if in accordion view
		tabidentify: 'hor_1', // The tab groups identifier
		activate: function (event) { // Callback function if tab is switched
			var $tab = $(this);
			var $info = $('#nested-tabInfo');
			var $name = $('span', $info);

			$name.text($tab.text());

			$info.show();
		}
	});

	$('#subPro1').easyResponsiveTabs({
		type: 'vertical',
		width: 'auto',
		//fit: true,
		tabidentify: 'ver_1', // The tab groups identifier
		//activetab_bg: '#00a859', // background color for active tabs in this group
		//inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
		//active_border_color: '#c1c1c1', // border color for active tabs heads in this group
		//active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
	});
	
	$('#subPro2').easyResponsiveTabs({
		type: 'vertical',
		width: 'auto',
		//fit: true,
		tabidentify: 'ver_1', // The tab groups identifier
		//activetab_bg: '#F5F5F5', // background color for active tabs in this group
		//inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
		//active_border_color: '#c1c1c1', // border color for active tabs heads in this group
		//active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
	});
	
	$('#subPro3').easyResponsiveTabs({
		type: 'vertical',
		width: 'auto',
		//fit: true,
		tabidentify: 'ver_1', // The tab groups identifier
		//activetab_bg: '#F5F5F5', // background color for active tabs in this group
		//inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
		//active_border_color: '#c1c1c1', // border color for active tabs heads in this group
		//active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
	});
	
	$('#subPro4').easyResponsiveTabs({
		type: 'vertical',
		width: 'auto',
		//fit: true,
		tabidentify: 'ver_1', // The tab groups identifier
		//activetab_bg: '#F5F5F5', // background color for active tabs in this group
		//inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
		//active_border_color: '#c1c1c1', // border color for active tabs heads in this group
		//active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
	});
	
	$('#subPro5').easyResponsiveTabs({
		type: 'vertical',
		width: 'auto',
		//fit: true,
		tabidentify: 'ver_1', // The tab groups identifier
		//activetab_bg: '#F5F5F5', // background color for active tabs in this group
		//inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
		//active_border_color: '#c1c1c1', // border color for active tabs heads in this group
		//active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
	});
});
</script>
<script>
	$(document).ready(function () {
		$('.toggle li').click(function () {
			$('div.panel').slideUp('500');
			$('li').children('span').html('+');	
			var text = $(this).children('div.panel');

			if (text.is(':hidden')) {
				text.slideDown('500');
				$(this).children('span').html('-');		
			} else {
				text.slideUp('500');
				$(this).children('span').html('+');		
			}

		});
	});
	$(document).ready(function(){
		 $("html, body").animate({ scrollTop: ($('.resp-tabs-list.hor_1').offset().top - 155) }, 1000);
	});

  </script>
<?php
    }?>
<script src="<?php echo base_url();?>assets/js/jquery.validate.js"></script>
<script src="<?php echo base_url();?>assets/js/view.appointment.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins.js"></script>
<script src="<?php echo base_url();?>assets/js/calling.js"></script>
<script>
$(document).on('click', '.inner-dropdown li a ', function(){
//	location.reload();
	
	//location.href = location.href;
	setTimeout(function(){ location.reload(); }, 1000);

});
</script>
