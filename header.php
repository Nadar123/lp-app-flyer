
<?php 
$lp_main_logo = get_field('lp_main_logo', 'option');
?>
<!doctype html>

<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	  <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
    <meta charset="<?php bloginfo('charset'); ?>">

    <link href="//www.google-analytics.com" rel="dns-prefetch" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head();?>
</head>
<body <?php echo body_class(); ?>>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = 'https://connect.facebook.net/he_IL/sdk.js#xfbml=1&version=v3.1';
		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>

	<header class="header" role="banner">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<a class="logo-wrapper" href="<?php echo home_url(); ?>" role="logo">
						<img class="logo" src="<?php echo $lp_main_logo['url'];?>" alt="">
					</a>
				</div>
			</div>
		</div>
  </header>

 
