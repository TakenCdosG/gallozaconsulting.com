<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

 ?>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat:300,400,700');
	* {-webkit-font-smoothing: antialiased;}
	body *{
		font-family: 'Montserrat', sans-serif;
	}
	.container{
		width:663px !important;
		max-width: 99% !important;
	}
	.header{
		
	}
	.header img{
		max-width: 79%;
		height: auto;
		width:508px;
		margin:60px auto;
		display: block;
	}
	.bar{
		background: #262f6b;
		padding: 25px 0;
	}
	h2{
		font-size: 23px;
		color: #262f6b;
		text-align: center;
	}
	.bar h2{
		font-weight: 300;
		text-align: center;
		color: #fff;
		margin: 0;
		font-size: 33px;
	}
	.contact-data{
		font-size: 20px ;
		font-weight: 300;
		color: #262f6b;
		text-align: center;
		margin: 30px 0;
		padding: 0 15px;
	}
	.contact-data a, contact-data a:hover{
		color:#262f6b !important;
		text-decoration:none;
	}
	.info{
		text-align: justify;
		font-size: 18px;
		color: #262f6b;
		font-weight: 300;
	}
	.info p{
		margin-bottom:25px;
		
	}
	form{
		width:308px !important;
		margin:0 auto !important;
		max-width:100% !important;
	}
	input, textarea{
		padding:10px !important;
		width:308px !important;
		width:100% !important;
		height:35px !important;
		margin:10px auto !important;
		border:1px solid #a1a1a1 !important;
		color:#262f6b !important;	
		font-size:16px !important;
		line-height:1 !important;
		font-weight:300 !important;
		border-radius: 0 !important;
	}
	textarea{
		height:103px !important;
	}
	input[type="submit"]{
		background:#262f6b !important;
		color:#fff !important;
		font-weight: 600 !important;
		width:auto !important;
		border:none !important;
		height:auto !important;
		padding:10px 20px !important;	
	}
	hr{
		border-color:#aaa;
		margin-bottom:25px;
	}
	i{
		color:#007bb6;	
		font-size:24px !important;
	}
	#mc_embed_signup form{
		padding:0 !important;	
	}
	#mc_embed_signup .mc-field-group{
		width:100% !important;
		padding:0 !important;
	}
	#mc_embed_signup div#mce-responses{
		padding:0 !important;
		margin:0 !important;
		width:100% !important;
	}
	#mc_embed_signup div.response{
		padding:0 !important;
		width:100% !important;	
	}
	#mce-responses *{
		color: #262f6b !important;
		font-weight: 300 !important;
	}
	::-webkit-input-placeholder { /* Chrome/Opera/Safari */
		color: #262f6b;
	}
	::-moz-placeholder { /* Firefox 19+ */
		color: #262f6b;
	}
	:-ms-input-placeholder { /* IE 10+ */
		color: #262f6b;
	}
	:-moz-placeholder { /* Firefox 18- */
		color: #262f6b;
	}
	.signup .button{
		position:absolute !important;
		top:0 !important;
		right:0 !important;
		margin:0 !important;
		height: 35px !important;
		background: #9b9da0 !important;
	}
	form.signup{
		width:421px !important;
	}
	.signup input[type="email"]{
		width:304px !important;
		max-width:100%;	
		float:left;
		margin:0 !important;
	}
</style>

<div class="header">
	<img src="http://gallozaconsulting.com/wp-content/uploads/2017/05/logo.png"/>
</div>
<div class="bar">
	<h2>BUSINESS CATALYST</h2>
</div>
<div class="contact-data">
	<p><a href="tel:2037154974">203.715.4974</a>  |  <a href="mailto:Jacob@GallozaConsulting.com"><u>Jacob Galloza</u></a>  |  Connect with us: <a href="https://www.linkedin.com/in/jacob-galloza-3b56a68/" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
</p>
</div>
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="info">
				<p>
					Galloza Consulting is committed to change, serving as the catalyst to get your business on track and poised for expansion.  We understand that even successful businesses have stumbling blocks.  That’s why we use our depth of experience to help identify areas where you can improve business and financial processes and, ultimately, your bottom line.
				</p>
				<p>
					By examining your business through a unique lens of financial analysis, organizational design and change management, we’re able to uncover potential areas for growth.  We recognize that the best businesses thrive by making tough decisions at the right time.  To that end, we’ll serve as your most trusted advisor, empowering you to solve your challenges now and for the future.
				</p>
			</div>			
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h2 style="margin-top:0;">Interested in working with Galloza Consulting? Contact</h2>
<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
#mc_embed_signup{ }
/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="//GallozaConsulting.us15.list-manage.com/subscribe/post?u=3640654b8a52e20a5076801c3&amp;id=1a27e7292b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">



<div class="mc-field-group">

<input type="text" value="" name="FNAME" class="required" id="mce-FNAME" placeholder="First Name">
</div>
<div class="mc-field-group">

<input type="text" value="" name="LNAME" class="required" id="mce-LNAME" placeholder="Last Name">
</div>

<div class="mc-field-group">

<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email Address">
</div>

<div class="mc-field-group">
<input type="text" value="" name="PHONE" class="" id="mce-PHONE" placeholder="Phone">
</div>

<div class="mc-field-group">
<input type="text" value="" name="COMPANY" class="required" id="mce-COMPANY" placeholder="Company">
</div>

<div class="mc-field-group">
<input type="text" value="" name="URL" class="" id="mce-URL" placeholder="Url">
</div>

<div class="mc-field-group">

<textarea value="" name="COMMENTS" class="" id="mce-COMMENTS" placeholder="Comments"></textarea>
</div>
<div id="mce-responses" class="clear">
<div class="response" id="mce-error-response" style="display:none"></div>
<div class="response" id="mce-success-response" style="display:none"></div>
</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_3640654b8a52e20a5076801c3_1a27e7292b" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="SUBMIT" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[4]='COMPANY';ftypes[4]='text';fnames[5]='URL';ftypes[5]='text';fnames[6]='PHONE';ftypes[6]='text';fnames[3]='COMMENTS';ftypes[3]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->
			<hr/>
			<h2>Stay tuned for news, updates and alerts including the upcoming launch of our new website.</h2>
<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="//GallozaConsulting.us15.list-manage.com/subscribe/post?u=3640654b8a52e20a5076801c3&amp;id=d0f3e33b0f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate signup" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">


<div class="mc-field-group">
<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div id="mce-responses" class="clear">
<div class="response" id="mce-error-response" style="display:none"></div>
<div class="response" id="mce-success-response" style="display:none"></div>
</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_3640654b8a52e20a5076801c3_d0f3e33b0f" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="SIGN UP" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->

		</div>
		
	</div>
</div>
<div style="height:50px"></div>