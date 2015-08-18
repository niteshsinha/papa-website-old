<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php

/*
 * minishowcase : the super-easy gallery
 * by victor zambrano <minishowcase@frwrd.net>
 *
 * minishowcase is a small and simple php/javascript online photo gallery,
 * powered by AJAX that lets you put easily your images in an online gallery,
 * without having to configure databases or changing and customising code 
 * (though you may do it if you feel so inclined) allowing you to have an
 * up-and-running gallery in a few minutes.
 *
 *
 * DISCLAIMER: THIS SOFTWARE IS GIVEN 'AS IS' IN THE HOPE THAT IT WILL
 * BE USEFUL, BUT WITHOUT ANY WARRANTY; WITHOUT EVEN THE IMPLIED
 * WARRANTY OF MERCHANTABILITY OR FITNESS FOR A PARTICULAR PURPOSE;
 *
 *
 * LICENSE: This work is licensed under the
 * ####  Creative Commons Attribution-Share Alike 2.5 License.  ####
 * You should have received a copy of the license with this software.
 * To view a copy of this license, visit
 * http://creativecommons.org/licenses/by-sa/2.5/ or send a letter to
 * Creative Commons, 543 Howard Street, 5th Floor,
 * San Francisco, California, 94105, USA.
 *
 *
 * For more information on minishowcase, please visit:
 * http://minishowcase.frwrd.net
 *
 */

	## error reporting ##
	error_reporting(E_ALL);
 	
	## setting: debug flag ##
	//$debug_main_flag = true; // NOT IN USE
	
	## setting: include header/footer ##
	## set to TRUE to embed the add_header.php and/or add_footer.php files
	$include_header = false;
	$include_footer = false;
	
	
	#### DO NOT CHANGE FROM HERE ####################################
	#### UNLESS YOU KNOW WHAT YOU'RE DOING, OF COURSE ###############
	
	## import init file
	require_once("libraries/general.bootstrap.php");

	/*## DO NOT REMOVE THIS CODE, PLEASE :) ##
	include("config/version.php");
	print("<!-- \n\tminishowcase $version\n\tby victor zambrano\n\thttp://minishowcase.frwrd.net/\n -->\n");*/
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $locale_string?>" lang="<?php echo $locale_string?>">

<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
    
    <title>Collection of Great Indian Classical Artisians in Black & White-By: Rakesh Sinha : Gallery</title>
<meta name="description" content="Collection of great indian classical musicians,artists and dancers in their life size black and white photograph captured during their live concerts">
<meta name="keywords" content="indian classical musicians artisans dancers black white potraits enlargements exhibitions photo photojournalist theatre culture live memorable award">
	<link rel="shortcut icon" href="images/favicon.ico"/>
	
	<!-- START CPAINT:JSRS ( http://cpaint.sourceforge.net/ ) -->
	<script type="text/javascript" src="libraries/cpaint2.inc.compressed.js"></script>
	<!-- END CPAINT:JSRS -->
	
	<!-- START AJAX SCRIPTS -->
	<script src="libraries/script.loader.php?load=init" type="text/javascript"></script>
	<script src="libraries/ajax.functions.js" type="text/javascript"></script>
	<!-- END AJAX SCRIPTS -->
	
	<?php if($settings['preview_mode'] == 1
		&& file_exists("extensions/slimbox/" )) { ?>
	<!-- START SLIMBOX -->
	<script type="text/javascript" src="extensions/slimbox/js/mootools.r83.js"></script>
	<script type="text/javascript" src="extensions/slimbox/js/slimbox.js"></script>
	
	<link rel="stylesheet" href="extensions/slimbox/css/slimbox.css" type="text/css" media="screen" />
	<!-- END SLIMBOX -->
	
	<?php } else if($settings['preview_mode'] == 2
		&& file_exists("extensions/thickbox_2/" )) { ?>
	<!-- START THICKBOX_2 -->
	<script type="text/javascript" src="extensions/thickbox_2/jquery.js"></script>
	<script type="text/javascript" src="extensions/thickbox_2/thickbox.js"></script>
	
	<link rel="stylesheet" href="extensions/thickbox_2/thickbox.css" type="text/css" media="screen" />
	<!-- END THICKBOX_2 -->
	<?php } ?>
	
	<!-- START GALLERY CSS -->
	<link rel="stylesheet" href="libraries/script.loader.php?load=gallery" type="text/css" media="screen" />
	<!-- END GALLERY CSS -->
	
	<?php if ($include_header | $include_footer) { ?>
	<!-- START HEADER/FOOTER CSS -->
	<link rel="stylesheet" href="styles/includes.css" type="text/css" media="screen" />
	<!-- END HEADER/FOOTER CSS -->
	<?php } ?>
	
	<!-- START SCRIPTS/STYLESHEETS FOR IE PC -->
	<!--[if IE]>
		<link href="styles/gallery_ie.css" rel="stylesheet" type="text/css" media="screen" />
		<!--[if gte IE 5.5]>
			<style type="text/css">
				div#msc_image {
					/* IE5.5+/Win - this is more specific
					than the IE 5.0 version */
					left: expression( ( ignoreMe2 = document.documentElement.scrollLeft ? document.documentElement.scrollLeft : document.body.scrollLeft ) + 'px' );
					top: expression( ( ignoreMe = document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop ) + 'px' );
					right: auto;
					bottom: auto;
				}
			</style>
		<![endif]-->
	<![endif]-->
	<!-- END SCRIPTS/STYLESHEETS FOR IE PC -->
	
	<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	
	
</head>

<body>
	<a id="hash" name="null"></a>
	
	<!-- MY WORK**************** -->
	<!--the topmost navbar-->
<div id="navbar">
	<div class="menu">
		<ul>
			<li><a href="contact.html">Contact</a></li>
    	    <li><a href="news.html">News Room</a></li>  
            <li><a href="exhibitions.html">Exhibitions</a></li> 
            <li class="active"><a href="gallery.php">Gallery</a></li>         
        	<li><a href="index.html">Home</a></li>	
	    </ul>
	</div>
</div>
<!--end of navbar-->

	<?php
		if ($include_header
			&& file_exists("add_header.php")) {
			include("add_header.php");
		}
	?>
	<!-- MY WORK******************** -->
	<!--main wrapper-->
<div id="wrapper">
	<div id="logo">	
    	<a href="index.html"><img src="images/logo.png" alt="Rakesh Sinha" /></a>
    </div>
    
    <!--content area-->
    <div id="contentT">
    </div>
    <div id="content">
    	<div id="infoarea" >
    	
        	<!-- for gallery-->
			<div id="global_container">
				<div id="debug">
                	<p>[DEBUG] <span id="debug_content"> <?php echo $_SERVER["HTTP_USER_AGENT"];?> </span> </p>
				</div>
                
				<!-- tooltip -->
				<div id="tooltip"></div>
                <!-- tooltip ends-->
                
				<!-- alert container -->
				<div id="alert">
					<span id="msg"><!-- Alert goes here --></span>
					<p><a id="dismiss" href="javascript:;" onclick="hideDiv('alert');"><?php echo $lang['alert_dismiss']?>...</a></p>
				</div>
				<!-- alert container ends-->
	
				<div id="msc_container">
					<!-- menu div -->
					<div id="msc_menu">
						<h1><?php echo $lang['menu_title']?></h1>
						<!-- menu items div --><div id="galleries_menu"></div><!-- menu items div ends-->
					</div>
					<!-- menu div ends-->
                    
					<!-- thumbs div -->
					<div id="msc_thumbs">
						
                        <!-- top menu -->
						<div id="top_menu" class="<?php echo ($settings['use_select_menu'])?'menu_bg':'';?>">
                        
                        
                      		<div style="margin: 0 auto;">
                            	<h4><p>This is just a glimpse of my work. See below for detailed list.</p></h4>
                            </div>	
                            
                            
							<!-- galleries menu -->
							<div id="galleries_select">&nbsp;</div>
                            <!-- galleries menu ends-->
                            
							<!-- tools menu -->
							<div id="tools_menu">
								<span id="tools_slideshow"></span>
								<span id="tools_permalink"></span>
							</div>
                            <!-- tools menu ends-->
						
                        </div>
                        <!-- top menu ends-->
			
						<!-- gallery info div -->
						<div id="gallery_data">
							<div id="gallery_title"></div>
						</div>
                        <!-- gallery info div ends-->
			
						<!-- gallery description div -->
						<div id="gallery_description">
							<?php
								if (file_exists("galleries/".$settings['info_file']))
								{
									echo get_include_contents("galleries/".$settings['info_file']);
								}
							?>
            			</div>
                        <!-- gallery description div ends-->
			
						<!-- thumbs wrapper -->
						<div id ="thumbs_div">
			
							<!-- gallery block nav div -->
							<div id="gallery_nav">
								<div id="gallery_block"></div>
							</div>
                            <!-- gallery block nav div ends-->
				
							<!-- thumbs loader data -->
							<div id="thumbs_load"></div>
                            <!-- thumbs loader data ends-->
				
							<!-- thumbs container -->
							<div id="thumbs_cont"></div>
                            <!-- thumbs container ends-->
				
							<div id="gallery_nav2">
								<div id="gallery_block2"></div>
							</div>
				
						</div>
                        <!-- thumbs wrapper ends-->
			
						<!-- footer div -->
						<!--<div id="msc_foot">
							<span id="footer_cont"><?php echo $settings['gallery_footer']?></span>
						</div> -->
                        <!-- footer div ends-->
			
					</div>
					<!-- thumbs div ends-->
	
				</div>
				<!-- msc_container div ends-->

				<!-- image container -->
				<div id="msc_image">
		
					<div id="image_url"></div>
		
					<!-- image div -->
					<div id="image_div">
						<div id="image_container">
							<div id="image_menu">
								<span id="close_win">
									<a href="javascript:;" onclick="closeImageWin();">&#171; Back to Gallery View<?php //echo $lang['lightbox_back']?></a>
								</span>
					
								<div id="nav_container">
									<div id="prev">
										<a id="a_prev" href="javascript:;" onclick="prevImage()">
	                                        <img src="./themes/<?php echo $selected_theme?>/<?php echo $theme_image_prev?>" alt="" />
                                    	</a>
									</div>
						
                        			<div id="next">
										<a id="a_next" href="javascript:;" onclick="nextImage()">
                                        	<img src="./themes/<?php echo $selected_theme?>/<?php echo $theme_image_next?>" alt="" />
                                      	</a>
									</div>
                                    
									<div id="nav_thumbs"></div>
                                </div>
							</div>
				
							<div id="image_header">
								<div id="timer">
                                	<span id="time">[ <?php echo $settings['slideshow_seconds']?>]</span> | 
                                	<span>
                                		<a id="toggle_show" href="javascript:;" onclick="startSlideshow()">
											<?php echo $lang['slideshow_pause']?>
											<?php echo $lang['slideshow_name']?>
                                     	</a>
                             		</span>
                          		</div>
					
                    			<div id="image_title"></div>
					
								<div id="mainimg_desc" class="imagen_desc"></div>
							</div>
				
							<div id="img">
								<img id="mainimg" class="imagen" src="images/spacer.gif" alt="" />
							</div>
						</div>
					</div>
					<!-- image div ends-->
		
					<!-- image bg -->
					<div id="image_bg"></div>
				</div>
				<!-- image container ends-->
                
                <div style=" clear:both;"></div>
			</div>
		
        	<?php
			if ($include_footer && file_exists("add_footer.php"))
			{ 
				include("add_footer.php");
			}
			?>
	 		<?php
			/**** DEBUG INFO ****/
			if ($settings['gallery_debug'])
			{
				echo ('<div id="debug_information">');
				phpinfo(INFO_CONFIGURATION);
				phpinfo(INFO_CONFIGURATION);
				phpinfo(INFO_ENVIRONMENT);
				phpinfo(INFO_VARIABLES);
				echo ('</div>');
			}
			?>
			
            <div style="margin: 0 auto;"> 
                <p><a href="imgs/complete_list.pdf"><b>The Detailed List can be found here.</b></a></p>
             </div>
            
	<!-- MY WORk********************* -->
		</div><!-- close div infoarea -->
	</div><!-- close div content -->
 	<div id="contentB">
</div>
<!--end of content area-->
</div>
<!--end of wrapper-->

<!--This is the footer-->
<div id="footer">
	
    <div id="footarea" style=" clear: both;">
    
    	<table>
        	<tr>
            	<td>
                	<img src="images/profimage.jpg" /> 
                </td>
                <td style="text-align:justify;">
                <h2>About</h2>
<p>Lucknow based photographer, evolved with Art, Culture & Theatre Photography for more than three decades. In this span prepared a vast & valuable archives of photographs of Great Indian Classical Musicians, Dancers capturing their memorable moods in their live concerts. Exhibited several times B/W enlargements in various music & dance festivals by important organizations, banners & Govt. academics. Well acclaimed by press & media.  An active photojournalist. Awarded <b><u>Rashtriya Yuva Prathisthan Award</u></b> for cultural photography. <b><u>Sanskar Bharti’s Samman</u></b> and <b><u>Bharatyam’s Kala Award.</u></b></p>
                </td>
            </tr>
    	</table>
    	
    </div>
    
    
    <div id="footer_menu">
       	<div class="menu">
   		<ul>
			<li><a href="index.html">Home</a></li>
            <li class="active"><a href="gallery.php">Gallery</a></li>
            <li><a href="exhibitions.html">Exhibitions</a></li>
            <li><a href="news.html">News Room</a></li>
            <li><a href="contact.html">Contact</a></li>
	    </ul>
   		</div>
   </div>
	
    <div style="padding-top: 5px; color:#666; width: 1024px; margin: 0 auto; text-align: center;">
	 &copy; 2015 Rakesh Sinha | Crafted in Lucknow &nbsp <a href="mailto: sinharaakesh@gmail.com"><img src="images/google.png" width="16" height="16" alt="gmail" /></a> <a href="http://www.facebook.com/profile.php?id=100003503781263"><img src="images/facebook.png" width="16" height="16" alt="facebook" /></a>
     </div>
    
</div>
<!--end of footer-->

	
</body>
</html>