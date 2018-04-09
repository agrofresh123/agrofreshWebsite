<?php
$hclass= $aclass=$cclass=$gclass="";
$pclass="dropdown";
if ($pagename == 'index') {
    $hclass = 'class="active"';
} elseif ($pagename == 'about') {
    $aclass = 'class="active"';
} elseif ($pagename == 'contact') {
    $cclass = 'class="active"';
} elseif ($pagename == 'gallery') {
    $gclass = 'class="active"';
} elseif ($pagename == 'products') {
    $pclass = 'class="dropdown active"';
}
 ?>

<header id="headerstic" class="clearfix">
  <div class="mcare-header-bg">
    <!--Topbar-->
    <div class="mcare-topbar-info no-pad">
      <div class="container">
        <!--Topbar Left Text-->
        <div class="top-bar-txt no-pad pull-left"> <span class="top-info-email"><a href="mailto:freshagroindia@gmail.com"><i class="ion-email top-info-icon"></i>freshagroindia@gmail.com</a></span> </div>
        <div class="top-bar-txt no-pad pull-left"> <span class="top-info-contact"><i class="ion-android-call top-info-icon"></i>+91 9910900751</span> </div>
        <!--Topbar Right Text-->
        <div class="col-lg-6 col-md-6 pull-right no-pad">
          <div class="top-info-appoint top-bar-txt pull-right morph-button morph-button-modal morph-button-modal-1 morph-button-fixed" data-toggle="modal" data-target="#app-modal">
            <button type="button" class="button button--winona"> <span><i class="ion-ios-briefcase top-info-icon"></i>Make an Enquiry</span> <span><i class="ion-ios-briefcase top-info-icon"></i>Click Here</span> </button>
            <!--content-here-->
          </div>
          <!--Topbar Social Media-->
          <div class="social-wrap-head no-pad pull-right">
            <ul>
              <li><a href="https://www.facebook.com/agrofreshfoods/" target="_blank"> <i class="fa fa-facebook head-social-icon on-reg" id="face-head1" data-original-title="" title=""></i> </a></li>
              <li><a href="javascript:alert('link update soon');"><i class="fa fa-twitter head-social-icon" id="tweet-head1" data-original-title="" title=""></i></a></li>
              <!--li><a href="#"><i class="fa fa-pinterest-p head-social-icon" id="gplus-head1" data-original-title="" title=""></i></a></li><li><a href="#"><i class="fa fa-google-plus head-social-icon" id="link-head1" data-original-title="" title=""></i></a></li-->
              <li><a href="https://www.youtube.com/channel/UCGW5b2mH_4LodfN8nr7II1A" target="_blank"> <i class="fa fa-youtube-play head-social-icon on-reg" id="" data-original-title="" title=""></i> </a></li>
              <li><a href="https://www.linkedin.com/in/agro-fresh-384534141" target="_blank"><i class="fa fa-linkedin head-social-icon" id="" data-original-title="" title=""></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--Topbar End-->
    <!--Top Dropdown panel / Only visible in mobiles and tabs-->
    <div id="panel-top">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-xs-12"> <span class="top-info-email"><a href="mailto:freshagroindia@gmail.com"><i class="ion-email top-info-icon"></i>freshagroindia@gmail.com</a></span> </div>
          <div class="col-sm-6 col-xs-12"> <span class="top-info-contact"><i class="ion-android-call top-info-icon"></i>+91 9910900751</span> </div>
          <div class="col-sm-6 col-xs-12">
            <ul class="social-top-info">
				<li><a href="https://www.linkedin.com/in/agro-fresh-384534141" target="_blank"><i class="fa fa-linkedin head-social-icon" id="link-head2" data-original-title="" title=""></i></a></li>
				<li><a href="https://www.youtube.com/channel/UCGW5b2mH_4LodfN8nr7II1A" target="_blank"><i class="fa fa-youtube-play head-social-icon" id="gplus-head2" data-original-title="" title=""></i></a></li>
				<li><a href="javascript:alert('link update soon');"><i class="fa fa-twitter head-social-icon" id="tweet-head2" data-original-title="" title=""></i></a></li>
				<li><a href="https://www.facebook.com/agrofreshfoods/" target="_blank"><i class="fa fa-facebook head-social-icon on-reg" id="face-head2" data-original-title="" title=""></i></a></li>
            </ul>
          </div>
          <div class="col-sm-6 col-xs-12">
            <div class="top-info-appoint top-bar-txt pull-right morph-button2 morph-button-modal morph-button-modal-1 morph-button-fixed" data-toggle="modal" data-target="#app-modal">
              <button type="button" class="button"><i class="ion-ios-briefcase top-info-icon"></i>Make a Enquiry</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="flip"></div>
    <!--Top info Dropdown End-->
    <!--Top Navigation-->
    <div class="top-nav-wrap">
      <div class="container overflow-visible">
        <div class="row">
          <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              <div class="column res-men-col">
                <div id="dl-menu" class="dl-menuwrapper">
                  <button class="dl-trigger">Open Menu</button>
                  <ul class="dl-menu">
                    <li <?php echo $hclass;?>> <a href="<?php echo base_url();?>">Home</a> </li>
					<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products</a>
                      <ul class="dl-submenu">
                        <li> <a href="#">Frozen Fruits and Vegetables</a>
                          <ul class="dl-submenu">
                            <li><a tabindex="-1" href="products#allPro1|subPro31">Alphonso Mango Slices / Dices</a></li>
                            <li><a tabindex="-1" href="products#allPro1|subPro32">IQF Totapuri Mango Slices / Dices</a></li>
                            <li><a tabindex="-1" href="products#allPro1|subPro33">IQF Guava Dices-Pink</a></li>
                            <li><a tabindex="-1" href="products#allPro1|subPro34">IQF Papaya Dices / Slices</a></li>
                            <li><a tabindex="-1" href="products#allPro1|subPro35">IQF Pineapple Slices / Dices</a></li>
                            <li><a tabindex="-1" href="products#allPro1|subPro36">IQF Pomegranate Arils</a></li>
                            <li><a tabindex="-1" href="products#allPro1|subPro37">IQF Musk Melon Slices / Dices</a></li>
                            <li><a tabindex="-1" href="products#allPro1|subPro38">IQF Mixed Vegetables</a></li>
                            <li><a tabindex="-1" href="products#allPro1|subPro39">IQF Green Peas</a></li>
                            <li><a tabindex="-1" href="products#allPro1|subPro310">IQF Okra</a></li>
                            <li><a tabindex="-1" href="products#allPro1|subPro311">IQF Carrot Dices</a></li>
                            <li><a tabindex="-1" href="products#allPro1|subPro312">IQF Sweet Corn</a></li>
                            <li><a tabindex="-1" href="products#allPro1|subPro313">IQF Baby Corn</a></li>
                          </ul>
                        </li>
                        <li> <a href="#">Frozen Pulp and Puree</a>
                          <ul class="dl-submenu">
                            <li><a tabindex="-1" href="products#allPro2|subPro21">Frozen Alphonso Pulp</a></li>
                            <li><a tabindex="-1" href="products#allPro2|subPro22">Frozen Totapuri Pulp</a></li>
                            <li><a tabindex="-1" href="products#allPro2|subPro23">Frozen White Guava Pulp</a></li>
                          </ul>
                        </li>
                        <li> <a href="#">Aseptic/Canned Pulp and Puree</a>
                          <ul class="dl-submenu">
                            <li><a tabindex="-1" href="products#allPro3|subPro11">Alphonso Mango Pulp</a></li>
                            <li><a tabindex="-1" href="products#allPro3|subPro12">Kesar Mango Pulp</a></li>
                            <li><a tabindex="-1" href="products#allPro3|subPro13">Totapuri Mango Pulp</a></li>
                            <li><a tabindex="-1" href="products#allPro3|subPro14">Guava Pulp - White &amp; Pink</a></li>
                            <li><a tabindex="-1" href="products#allPro3|subPro15">Banana Puree</a></li>
                            <li><a tabindex="-1" href="products#allPro3|subPro16">Papaya Pulp - Red &amp; Yellow</a></li>
                            <li><a tabindex="-1" href="products#allPro3|subPro17">Whole Canned Litchi</a></li>
                          </ul>
                        </li>
                        <li> <a href="#">Aseptic Paste & Concentrate</a>
                          <ul class="dl-submenu">
                            <li><a tabindex="-1" href="products#allPro4|subPro41">Totapuri Mango Concentrate</a></li>
                            <li><a tabindex="-1" href="products#allPro4|subPro42">Guava Pulp - White &amp; Concentrate</a></li>
                            <li><a tabindex="-1" href="products#allPro4|subPro43">Banana Concentrate</a></li>
                            <li><a tabindex="-1" href="products#allPro4|subPro43">Papaya Concentrate - Red &amp; Yellow</a></li>
                            <li><a tabindex="-1" href="products#allPro4|subPro44">Tomato Paste</a></li>
                          </ul>
                        </li>
                        <li> <a href="#">Freez Dried Friuts & Vegetables & Dates</a>
                          <ul class="dl-submenu">
                            <li><a tabindex="-1" href="products#allPro5|subPro51">Freeze Dry Banana Rings</a></li>
                            <li><a tabindex="-1" href="products#allPro5|subPro52">Freeze Dry Chiku Dice &amp; Slice</a></li>
                            <li><a tabindex="-1" href="products#allPro5|subPro53">Freeze Dry Green Peas</a></li>
                            <li><a tabindex="-1" href="products#allPro5|subPro54">Freeze Dry Guava</a></li>
                            <li><a tabindex="-1" href="products#allPro5|subPro55">Freeze Dry Okra Ring & Whole</a></li>
                            <li><a tabindex="-1" href="products#allPro5|subPro56">Freeze Dry Dates</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
					<li> <a href="quality-committment">Quality Committment</a></li>
                    <li> <a href="gallery">Gallery</a></li>
                    <li> <a href="contact">Contact Us</a></li>
                  </ul>
                </div>
                <!-- /dl-menuwrapper -->
              </div>
              <a href="<?php echo base_url();?>">
              <div class="logo"> <img src="<?php echo base_url();?>assets/images/logo.png" alt="logo" class="img-responsive"> </div>
              </a> </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <!--<div class="top-search"><a href="#"><i class="ion-ios-search-strong"></i></a></div>-->
              <!-- /morphsearch -->
              <div class="overlay disable-hover noscroll"></div>
              <ul class="nav navbar-nav navbar-right title-text top-nav">
                <li  <?php echo $hclass;?>><a href="<?php echo base_url();?>"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
                <li <?php echo $pclass;?>> <a href="product" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-product-hunt" aria-hidden="true"></i>Products</a>
                  <ul class="dropdown-menu single-drop reoload">
                    <li class="dropdown"> <a href="#">Frozen Fruits and Vegetables</a>
                      <ul class="dropdown-menu inner-dropdown">
                        <li><a tabindex="-1" href="products#allPro1|subPro31">Alphonso Mango Slices / Dices</a></li>
                        <li><a tabindex="-1" href="products#allPro1|subPro32">IQF Totapuri Mango Slices / Dices</a></li>
                        <li><a tabindex="-1" href="products#allPro1|subPro33">IQF Guava Dices-Pink</a></li>
                        <li><a tabindex="-1" href="products#allPro1|subPro34">IQF Papaya Dices / Slices</a></li>
                        <li><a tabindex="-1" href="products#allPro1|subPro35">IQF Pineapple Slices / Dices</a></li>
                        <li><a tabindex="-1" href="products#allPro1|subPro36">IQF Pomegranate Arils</a></li>
                        <li><a tabindex="-1" href="products#allPro1|subPro37">IQF Musk Melon Slices / Dices</a></li>
                        <li><a tabindex="-1" href="products#allPro1|subPro38">IQF Mixed Vegetables</a></li>
                        <li><a tabindex="-1" href="products#allPro1|subPro39">IQF Green Peas</a></li>
                        <li><a tabindex="-1" href="products#allPro1|subPro310">IQF Okra</a></li>
                        <li><a tabindex="-1" href="products#allPro1|subPro311">IQF Carrot Dices</a></li>
                        <li><a tabindex="-1" href="products#allPro1|subPro312">IQF Sweet Corn</a></li>
                        <li><a tabindex="-1" href="products#allPro1|subPro313">IQF Baby Corn</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"> <a href="#">Frozen Pulp and Puree</a>
                      <ul class="dropdown-menu inner-dropdown">
                        <li><a tabindex="-1" href="products#allPro2|subPro21">Frozen Alphonso Pulp</a></li>
                        <li><a tabindex="-1" href="products#allPro2|subPro22">Frozen Totapuri Pulp</a></li>
                        <li><a tabindex="-1" href="products#allPro2|subPro23">Frozen White Guava Pulp</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"> <a href="#">Aseptic/Canned Pulp and Puree</a>
                      <ul class="dropdown-menu inner-dropdown">
                        <li><a tabindex="-1" href="products#allPro3|subPro11">Alphonso Mango Pulp</a></li>
                        <li><a tabindex="-1" href="products#allPro3|subPro12">Kesar Mango Pulp</a></li>
                        <li><a tabindex="-1" href="products#allPro3|subPro13">Totapuri Mango Pulp</a></li>
                        <li><a tabindex="-1" href="products#allPro3|subPro14">Guava Pulp - White &amp; Pink</a></li>
                        <li><a tabindex="-1" href="products#allPro3|subPro15">Banana Puree</a></li>
                        <li><a tabindex="-1" href="products#allPro3|subPro16">Papaya Pulp - Red &amp; Yellow</a></li>
                        <li><a tabindex="-1" href="products#allPro3|subPro17">Whole Canned Litchi</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"> <a href="#">Aseptic Paste &amp; Concentrate</a>
                      <ul class="dropdown-menu inner-dropdown">
                        <li><a tabindex="-1" href="products#allPro4|subPro41">Totapuri Mango Concentrate</a></li>
                        <li><a tabindex="-1" href="products#allPro4|subPro42">Guava Pulp - White &amp; Concentrate</a></li>
                        <li><a tabindex="-1" href="products#allPro4|subPro43">Banana Concentrate</a></li>
                        <li><a tabindex="-1" href="products#allPro4|subPro43">Papaya Concentrate - Red &amp; Yellow</a></li>
                        <li><a tabindex="-1" href="products#allPro4|subPro44">Tomato Paste</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"> <a href="#">Freez Dried Friuts &amp; Vegetables &amp; Dates</a>
                      <ul class="dropdown-menu inner-dropdown">
                        <li><a tabindex="-1" href="products#allPro5|subPro51">Freeze Dry Banana Rings</a></li>
                        <li><a tabindex="-1" href="products#allPro5|subPro52">Freeze Dry Chiku Dice &amp; Slice</a></li>
                        <li><a tabindex="-1" href="products#allPro5|subPro53">Freeze Dry Green Peas</a></li>
                        <li><a tabindex="-1" href="products#allPro5|subPro54">Freeze Dry Guava</a></li>
                        <li><a tabindex="-1" href="products#allPro5|subPro55">Freeze Dry Okra Ring & Whole</a></li>
                        <li><a tabindex="-1" href="products#allPro5|subPro56">Freeze Dry Dates</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li  <?php echo $aclass;?>> <a href="quality-committment"><i class="fa fa-user" aria-hidden="true"></i>Quality Committment</a></li>
                <li  <?php echo $gclass;?>><a href="gallery"><i class="fa fa-picture-o" aria-hidden="true"></i>Gallery</a></li>
                <li  <?php echo $cclass;?>><a href="contact"><i class="fa fa-map-marker" aria-hidden="true"></i>Contact</a></li>
              </ul>
            </div>
            <!-- /.navbar-collapse -->
          </nav>
        </div>
      </div>
    </div>
    <!--Top Navigation End-->
  </div>
</header>
