<?php
$site_logo = get_option('lasoon_logo')? get_option('lasoon_logo'): LASOON_PUBLIC_PATH.'assets/images/logo.png';
$launch_date = get_option('lasoon_launch_date')? get_option('lasoon_launch_date'): '';
$contact_enable = get_option('lasoon_contact_us')?:'Unable';
$counter_style = get_option('lasoon_countdown_enable') === 'Unable'? '': 'style=display:none;';
$layout_select = get_option('lasoon_blog_layout')?:'layout-1';
$head_animate = get_option('lasoon_heading_animation')?:'line_up'; 
$counter_animate = get_option('lasoon_shape_animation')?:'dash_circle';


$id = ($body_classes === 'snow-rain')?"id=particles-js":"";

// Side bar variables
$about_us = (get_option('lasoon_about_show'))?:"Unable";
$git = (get_option('lasoon_git_show'))?:"Unable";

/* code for find launch time */
$timezone_string = wp_timezone_string();
date_default_timezone_set($timezone_string);

$countDownDate = new DateTime(esc_attr($launch_date));
$now = new DateTime();
$diff = $countDownDate->diff($now);

$iniday = esc_html($diff->days); 
$inihour = esc_html($diff->h);
$iniminute = esc_html($diff->i);
$iniasecond = esc_html($diff->s);
?>
<!DOCTYPE html>
<html lang="zxx" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php echo esc_html($title, 'lasoon'); ?></title>
	<meta name="author" content="<?php echo esc_attr( $author ); ?>" />
	<meta name="description" content="<?php echo esc_attr( $description ); ?>" />
	<meta name="keywords" content="<?php echo esc_attr( $keywords ); ?>" />
	<meta name="robots" content="<?php echo esc_attr( $robots ); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo LASOON_PUBLIC_PATH; ?>assets/css/lasoon-public.css">
	<link href="https://fonts.googleapis.com/css2?family=Inter&family=Montserrat:wght@800&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body class="<?php echo esc_attr($body_classes);?>" <?php echo esc_attr($id)?:'';?>>
	<div class="page-wrap">
		<header class="header site-header">
			<div class="page-logo">
				<a href="index.html" class="logo"><img src="<?php echo esc_url($site_logo); ?>" alt="site logo"></a>
			</div>
			<?php if(esc_attr(get_option('lasoon_sidebar')) === 'Unable'){ ?>
				<div class="menu-bar">
					<div class="sidebar-btn toggle">
						<span></span>
						<span></span>
						<span></span>
					</div>
					<nav class="sidebar">
						<div class="close-btn">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 26 26" id="Слой_1" version="1.1" viewBox="0 0 26 26" xml:space="preserve" width="30" height="30"><path d="M14.0605469,13L24.7802734,2.2802734c0.2929688-0.2929688,0.2929688-0.7675781,0-1.0605469  s-0.7675781-0.2929688-1.0605469,0L13,11.9394531L2.2802734,1.2197266c-0.2929688-0.2929688-0.7675781-0.2929688-1.0605469,0  s-0.2929688,0.7675781,0,1.0605469L11.9394531,13L1.2197266,23.7197266c-0.2929688,0.2929688-0.2929688,0.7675781,0,1.0605469  C1.3662109,24.9267578,1.5576172,25,1.75,25s0.3837891-0.0732422,0.5302734-0.2197266L13,14.0605469l10.7197266,10.7197266  C23.8662109,24.9267578,24.0576172,25,24.25,25s0.3837891-0.0732422,0.5302734-0.2197266  c0.2929688-0.2929688,0.2929688-0.7675781,0-1.0605469L14.0605469,13z" fill="#fff"/></svg>
						</div>
						<div class="main_side">
							<?php 
							if($about_us === "Unable"){ ?>
								<div class="page-about-us">
									<h2 class="nav-title"><?php echo esc_html(get_option('lasoon_about_head')?:'About Us'); ?></h2>
									<p><?php  echo wp_kses_post(get_option('lasoon_about_desc')?:'Lorem ipsum'); ?> </p>
								</div>
							<?php }
							if($git === "Unable"){ ?>
								<div class="page-get-touch">
									<div class="get-touch-wrap">
										<h3 class="nav-title"><?php echo esc_html(get_option('lasoon_git_head')?:'Get In Touch'); ?></h3>
										<p><?php  echo wp_kses_post(get_option('lasoon_git_desc')?:'Lorem ipsum'); ?></p>

										<div class="page-contact-detail <?php echo esc_attr($layout_select); ?>">
											<div class="detail-wrap">
												<ul class="navbar-contact-detail">
													<li class="icons">
														<div class="detail-icon">
															<svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M35.9297 27.7109L34.2422 34.8125C34.0312 35.8672 33.1875 36.5703 32.1328 36.5703C14.4141 36.5 0 22.0859 0 4.36719C0 3.3125 0.632812 2.46875 1.6875 2.25781L8.78906 0.570312C9.77344 0.359375 10.8281 0.921875 11.25 1.83594L14.5547 9.5C14.9062 10.4141 14.6953 11.4688 13.9219 12.0312L10.125 15.125C12.5156 19.9766 16.4531 23.9141 21.375 26.3047L24.4688 22.5078C25.0312 21.8047 26.0859 21.5234 27 21.875L34.6641 25.1797C35.5781 25.6719 36.1406 26.7266 35.9297 27.7109Z" fill="#000000"/></svg>
														</div>
														<div class="navitem  phone-col">
															<?php $git_contact = get_option('lasoon_git_contact')?:'+01 23 567 8899'; ?>
															<span class="detail-title"><?php echo esc_html__('phone', 'lasoon'); ?></span>
															<div class="deatil-text"><a href="tel:<?php echo str_replace(' ', '', $git_contact); ?>"><?php echo esc_html($git_contact); ?></a></div>
														</div>
													</li>
													<li class="icons">
														<div class="detail-icon">
															<svg width="37" height="37" viewBox="0 0 36 27" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M32.625 0C34.4531 0 36 1.54688 36 3.375C36 4.5 35.4375 5.48438 34.5938 6.11719L19.3359 17.5781C18.4922 18.2109 17.4375 18.2109 16.5938 17.5781L1.33594 6.11719C0.492188 5.48438 0 4.5 0 3.375C0 1.54688 1.47656 0 3.375 0H32.625ZM15.2578 19.4062C16.875 20.6016 19.0547 20.6016 20.6719 19.4062L36 7.875V22.5C36 25.0312 33.9609 27 31.5 27H4.5C1.96875 27 0 25.0312 0 22.5V7.875L15.2578 19.4062Z" fill="#000000" class="email-icon"/></svg>
														</div>
														<div class="navitem email-col">
															<?php $git_email =  get_option('lasoon_git_email')?:'info@site.com'; ?>
															<span class="detail-title"> <?php echo esc_html__('email', 'lasoon'); ?> </span>
															<div class="deatil-text"><a href="mailto:<?php echo esc_attr($git_email); ?>"><?php echo esc_attr($git_email); ?></a>
															</div>					 
														</div>
													</li>
													<li class="icons">
														<div class="detail-icon">
															<svg width="37" height="37" viewBox="0 0 27 37" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.8125 35.6562C8.15625 31.0859 0 20.1875 0 14C0 6.54688 5.97656 0.5 13.5 0.5C20.9531 0.5 27 6.54688 27 14C27 20.1875 18.7734 31.0859 15.1172 35.6562C14.2734 36.7109 12.6562 36.7109 11.8125 35.6562ZM13.5 18.5C15.9609 18.5 18 16.5312 18 14C18 11.5391 15.9609 9.5 13.5 9.5C10.9688 9.5 9 11.5391 9 14C9 16.5312 10.9688 18.5 13.5 18.5Z" fill="#000000"/></svg>
														</div>
														<div class="navitem address-col">
															<span class="detail-title"><?php echo esc_html__('Address', 'lasoon'); ?></span>
															<div class="deatil-text"><a href="#"><?php  echo wp_kses_post(get_option('lasoon_git_address')?:'2358 Cyan St, NY'); ?></a></div>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							<?php }
							if(esc_attr($contact_enable) === 'Unable' ){ ?>
								<div class="page-contact-us <?php echo esc_attr($layout_select); ?>">
									<h4 class="nav-title"><?php echo esc_html__('Contact Us', 'lasoon'); ?></h4>
									<div class="contact-us-form">
										<form class="lasoon_contact_form" method="post" enctype="multipart/form-data">
											<input type="text" id="fname" name="name" class="input-group" placeholder="Name" required><br>
											<input type="email" id="email" name="email" class="input-group" placeholder="Email" required>
											<textarea id="message" name="message" class="input-group" placeholder="Message" cols="40" rows="5"></textarea><br>
											<button type="submit" class="message-button lasson_sbmt" data-target="myPopup"><?php echo esc_html__('send message', 'lasoon'); ?></button>
										</form>
									</div>
								</div>
							<?php } 
							if(esc_attr($layout_select) === 'layout_2') { ?>
								<div class="page-social-icons navbar-social layout-two">
									<div class="social-icons">
										<ul class="icon-list">
											<?php
											$links_arr = array('facebook', 'twitter','instagram', 'linkedin', 'pinterest','whatsapp','snapchat', 'wechat',  'youtube', 'skype', 'behance', 'dribble', 'github', 'google');
											foreach($links_arr as $links){
												if($link = lcm_get_url_of_social_icon($links)){ 
													?>
													<li class="icon-item">
														<a href="<?php echo $link; ?>"><img src="<?php echo LASOON_PUBLIC_PATH; ?>assets/images/<?php echo $links; ?>.svg" alt="<?php echo esc_html__('this is social icons.', 'lasoon'); ?>"></a>
													</li>
												<?php }	
											}   ?>
										</ul>
									</div>
								</div>
							<?php } ?>
						</div>
					</nav>
				</div>
			<?php } ?>
		</header>
		<!--Header Section End here -->

		<!--Page Main Section Start here -->
		<section class="Slider page-background">
			<div class="Slider-content <?php echo esc_attr($layout_select); ?>">
				<div class="Slider-content-inner">
					<div class="page-main-content">
						<div class="wrapper">
							<h1 class="main-title <?php echo esc_attr($head_animate);?>" data-text="<?php echo esc_html__(get_option('lasoon_heading_text', 'lasoon'))?:esc_html__("we're coming soon", 'lasoon'); ?>"><?php echo esc_html(get_option('lasoon_heading_text'))?:esc_html__("we're coming soon", 'lasoon'); ?></h1>
						</div>
						<?php 
						if(get_option('lasoon_subtitle_enable') && esc_attr(get_option('lasoon_subtitle_enable')) === 'Unable'){
							$head_subtitle = '<p class="page-description">'.get_option('lasoon_heading_subtitle')?:'Lorem ipsum'.'</p>';
							echo wp_kses_post($head_subtitle); 
						}
						?>
					</div>
					<!--Timer Section -->
					<div class="page-timer layout  <?php echo esc_attr($counter_shape?:'dash_circle'); ?>" <?php echo esc_attr($counter_style); ?>>
						<div id="end"></div>
						<div class="timer-wrap">
							<div class="timer-days timer-col counter-shape bo-ma <?php echo esc_attr($counter_shape?:'dash_circle');?>" id="days">
								<div class="counter-content">
									<div id="day" class="counter-time"><?php echo esc_html($iniday?:'NaN'); ?></div>
									<div class="timer-text" ><?php echo esc_html__('days', 'lasoon'); ?></div>
								</div>
							</div>
							<div class="timer-hour  timer-col counter-shape <?php echo esc_attr($counter_shape?:'dash_circle');?>" id="hour">
								<div class="counter-content">
									<div id="hours" class="counter-time"><?php echo esc_html($inihour?:'NaN'); ?></div>
									<div class="timer-text" ><?php echo esc_html__('hours', 'lasoon'); ?></div>
								</div>
							</div>
							<div class="timer-minute  timer-col counter-shape bo-ma <?php echo esc_attr($counter_shape?:'dash_circle');?>" id="minute">
								<div class="counter-content">
									<div id="minutes" class="counter-time"><?php echo esc_html($iniminute?:'NaN'); ?></div>
									<div class="timer-text"><?php echo esc_html__('minutes', 'lasoon'); ?></div>
								</div>
							</div>
							<div class="timer-second  timer-col counter-shape <?php echo esc_attr($counter_shape?:'dash_circle');?>" id="second">
								<div class="counter-content">
									<div id="seconds" class="counter-time"><?php echo esc_html($iniasecond?:'NaN'); ?></div>
									<div class="timer-text" ><?php echo esc_html__('seconds', 'lasoon'); ?></div>
								</div>
							</div>
						</div>
					</div>

					<!--Email Subscription -->
					<div class="page-email-subscription <?php echo esc_attr($layout_select); ?>">
						<form class="subscribe_form" method="post">
							<div class="input-group">
								<input type="email" class="form-control layout-form" name="sub_email" placeholder="Enter your email address">
								<div class="input-group-btn">
									<?php if(esc_attr($layout_select) === 'layout_1' || esc_attr($layout_select) === 'layout_4' ){ ?>
										<button class="email-btn" type="submit"><svg width="25" height="25" viewBox="0 0 36 27" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M32.625 0C34.4531 0 36 1.54688 36 3.375C36 4.5 35.4375 5.48438 34.5938 6.11719L19.3359 17.5781C18.4922 18.2109 17.4375 18.2109 16.5938 17.5781L1.33594 6.11719C0.492188 5.48438 0 4.5 0 3.375C0 1.54688 1.47656 0 3.375 0H32.625ZM15.2578 19.4062C16.875 20.6016 19.0547 20.6016 20.6719 19.4062L36 7.875V22.5C36 25.0312 33.9609 27 31.5 27H4.5C1.96875 27 0 25.0312 0 22.5V7.875L15.2578 19.4062Z" fill="#ffffff"/></svg>
										</button>
									<?php } else { ?>
										<button class="btn-default" type="submit"><?php echo esc_html__('submit', 'lasoon'); ?></button>
									<?php } ?>
								</div>
							</div>
						</form>
					</div>



					<?php function lcm_get_url_of_social_icon($id){
						return get_option($id.'_social_link')? esc_url(get_option($id.'_social_link')): '';
					} ?>
					<!--Social sharing icon -->				
					<div class="page-social-icons <?php echo esc_attr($layout_select); ?>">
						<div class="social-icons">
							<ul class="icon-list">
								<?php
								$links_arr = array('facebook', 'twitter','instagram', 'linkedin', 'pinterest','whatsapp','snapchat', 'wechat',  'youtube', 'skype', 'behance', 'dribble', 'github', 'google');
								foreach($links_arr as $links){
									if($link = lcm_get_url_of_social_icon($links)){ 
										?>
										<li class="icon-item">
											<a href="<?php echo esc_url($link); ?>"><img src="<?php echo LASOON_PUBLIC_PATH; ?>assets/images/<?php echo $links; ?>.svg" alt="<?php echo esc_html__('this is a social icons.', 'lasoon'); ?>"></a>
										</li>
										<?php 
									}	
								}
								?>
							</ul>
						</div>
					</div>
					<!--Copyright text -->
					<div class="page-footer-text">
						<span class="copyright"><?php echo wp_kses_post(get_option('lasoon_footer_copyright')?:'Copyright 2022 &copy; The_Krishna . All Right Reserved'); ?></span>
					</div>
				</div>	
			</div>
			<?php if(esc_attr(get_option('lasoon_background_type')) === 'Unable'){
				$back_1_image = get_option('lasoon_back_1_image')?:LASOON_PUBLIC_PATH."assets/images/background-image.jpg";
				$back_2_image = get_option('lasoon_back_2_image')?:'';
				$back_3_image = get_option('lasoon_back_3_image')?:'';

				if($back_1_image){
					?>
					<div class="Slider-slide show" style="background-image: url('<?php echo esc_url($back_1_image); ?>');"></div>
				<?php }
				if($back_2_image){
					?>
					<div class="Slider-slide" style="background-image: url('<?php echo esc_url($back_2_image); ?>');"></div>
				<?php }
				if($back_3_image){ ?>
					<div class="Slider-slide" style="background-image: url('<?php echo esc_url($back_3_image); ?>');"></div>

					<?php
				}
			} else {

				?>
				<div class="page-background-video">
					<?php 
					$video_type = get_option('lasoon_background_video_type')?:"Disable";
					if(esc_attr($video_type) === 'Unable'){
						$back_video = get_option('lasoon_back_video')?:LASOON_PUBLIC_PATH."assets/video/section-video.mp4";
						?>

						<video controls autoplay muted loop id="bg_video">
							<source src="<?php echo esc_url($back_video); ?>" type="video/mp4">
							</video>
						<?php } else { ?>
							<!--Set the video using iframe -->
							<div id="bg-iframe-video">	
								<?php $back_video_embedd = get_option('lasoon_embed_url')?:'<iframe src="https://player.vimeo.com/video/305795958?background=1&autoplay=1&;title=0&;byline=0&;portrait=0&;loop=1&;autopause=0&;muted=1"  frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" "></iframe>';

								if($video_type && $video_type === 'Disable'){
									$back_video_embedd = html_entity_decode( esc_html( $back_video_embedd ) );
									echo '<div id="player">'.$back_video_embedd.'</div>';
								}    ?>
							</div>
						<?php } ?>
					</div>
				<?php }  ?>
			</section>
			<!--page Main Section End here -->
			<?php 

			if($_POST && isset($_POST['sub_email'])){
				$sub_email_arr = get_option('subscription_email_list');
				if(!is_array($sub_email_arr)){$sub_email_arr = array($_POST['sub_email']);}
				if(!in_array(sanitize_email($_POST['sub_email']), $sub_email_arr)){
					$sub_email_arr[] = sanitize_email($_POST['sub_email']);
				}
				update_option('subscription_email_list', $sub_email_arr);
			} else if($_POST && isset($_POST['name'])) {
				$name =  $_POST['name']?sanitize_text_field($_POST['name']):'';
				$email =  $_POST['email']?sanitize_email($_POST['email']):'';
				$message =  $_POST['message']?sanitize_text_field($_POST['message']):'';

				$admin =get_option('admin_email');
				$subject = $name.esc_html__(' Contact Us Form', 'lasoon');

				if(wp_mail($admin, $subject, $message) )
				{
					$notice = "your mail is successfully  sent!";
				} else {
					$notice = "your mail is not sent! please check your mail.";
				}
				?>

				<div id="myPopup" class="popup">
					<div class="popup-header">
						<?php echo esc_html__('Contact Us', 'lasoon'); ?>
						<div class="close toggle-btn" data-target="myPopup"><?php echo esc_html__('close', 'lasoon'); ?></div>
					</div>
					<div class="popup-body">
						<?php echo esc_html($notice); ?>
					</div>
					<div class="popup-footer">
						<button class="toggle-btn button" data-target="myPopup"><?php echo esc_html__('Got it !' ,'lasoon'); ?></button>
					</div>
				</div>
				<script type="text/javascript">
					$(".sidebar").fadeOut().removeClass("show");
				</script>
				<?php
			}
			?>
		</div>
		<?php
		if ($body_classes === 'fire_ball') { ?>
			<canvas id="canvas"></canvas>

		<?php } elseif ($body_classes === 'magical_particles') { ?>
			<canvas id='canv'></canvas>			

		<?php } elseif ($body_classes === 'lighting_ball') { ?>
			<canvas id='particles'></canvas>			

		<?php } 
		wp_footer(); 
		?>

		<script type="text/javascript">
                   	// The data/time we want to countdown to
			var launch_date = "<?php echo esc_attr($launch_date); ?>";
			var countDownDate = new Date(launch_date).getTime();

   					 // Run myfunc every second
			var myfunc = setInterval(function() {

				var now = new Date().getTime();
				var timeleft = countDownDate - now;

   					 // Calculating the days, hours, minutes and seconds left
				var days = Math.floor(timeleft / (1000 * 60 * 60 * 24));
				var hours = Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
				var minutes = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
				var seconds = Math.floor((timeleft % (1000 * 60)) / 1000);

   					 // Result is output to the specific element
				document.getElementById("day").innerHTML = days;
				document.getElementById("hours").innerHTML = hours;
				document.getElementById("minutes").innerHTML = minutes;
				document.getElementById("seconds").innerHTML = seconds;

    				// Display the message when countdown is over
				if (timeleft < 0) {
					clearInterval(myfunc);
					document.getElementById("day").innerHTML = "0"
					document.getElementById("hours").innerHTML = "0" 
					document.getElementById("minutes").innerHTML = "0"
					document.getElementById("seconds").innerHTML = "0"
					document.getElementById("end").innerHTML = "TIME UP!!";
					document.getElementById("end").style.display = "block";
				}
			}, 1000);
		</script>
	</body>
	</html>