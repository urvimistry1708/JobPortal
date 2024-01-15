<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from flow.mysmartjobboard.com/registration/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 May 2019 10:24:13 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, height=device-height,
                                   initial-scale=1.0, maximum-scale=1.0,
                                   target-densityDpi=device-dpi">
	
<meta name="robots" content="noindex,nofollow">
<meta property="og:type" content="website" />
<meta property="og:site_name" content="SmartJobBoard" />
<meta property="og:url" content="<?php echo base_url();  ?>flow.mysmartjobboard.com/registration/" />
<meta property="og:title" content="Registration | SmartJobBoard" />
<meta property="og:description" content="" />
<meta property="og:image" content="<?php echo base_url();  ?>flow.mysmartjobboard.com/templates/FlowDND/assets/images/logo.svg" />
            <!-- Global Site Tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110320771-1"></script>

   <!--      
	<style type="text/css"
		#background-image {
 background-image: url('<?php echo base_url(); ?>user_assets/img/img6.jpg');
 background-blend-mode: screen;

background-size: cover;
}


	</style> -->
	
</head>
<body class="body__inner">
	<?php  $this->load->view('user/templates/useraccount-header');?>
    
	<div id="loading"></div>

	<div class="modal fade" id="message-modal" tabindex="-1" role="dialog" aria-labelledby="message-modal-label">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
					<h4 class="modal-title" id="message-modal-label">Modal title</h4>
				</div>
				<div class="modal-body">

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					
				</div>
			</div>
		</div>
	</div>

	<div class="flash-messages">
		                
	</div>

    
			<!-- <img src="<?php echo base_url(); ?>user_assets/img/slider-2.jpg">		 -->
			
		
			<div class="page-row page-row-expanded" style="
 background-image: url('<?php echo base_url(); ?>user_assets/img/imgreg.png');background-size: cover;">
				<div class="container container--small   ">
										
						<div class="form form__modal registration-choose">

	<h1 class="title__primary title__primary-small title__centered title__bordered">Login</h1>
	
	<p>Choose account type:</p>
    <div class="registration-choose__groups">
                   <a class="btn btn__orange jobseeker-group" href="login?name=jobseeker"><img src="<?php echo base_url(); ?>user_assets/img/avatar.png" height="40" width="40"><br><br>Job Seeker</a>
                    <a class="btn btn__orange employer-group" href="login?name=employer"><img src="<?php echo base_url(); ?>user_assets/img/building.png" height="40" width="40"><br><br>Employer</a>
            </div>

</div>				
</div>
</div>

			

	<div class="page-row hidden-print">
    
    
                       <?php  $this->load->view('user/templates/useraccount-footer');?>
       

    </div>




</div>

	<script src="https://cdn.smartjobboard.com/5.0.36/templates/FlowDND/assets/scripts.js"></script>
	<script>
		document.addEventListener("touchstart", function() { }, false);

		var langSettings = {
			thousands_separator : ',',
			decimal_separator : '.',
			decimals : '2',
			currencySign: '$',
			showCurrencySign: 1,
			currencySignLocation: '0'
		};
	</script>

	<script language="JavaScript" type="text/javascript" src="<?php echo base_url();  ?>flow.mysmartjobboard.com/system/ext/jquery/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
			<script type="text/javascript" src="<?php echo base_url();  ?>flow.mysmartjobboard.com/system/ext/jquery/bootstrap-datepicker/i18n/bootstrap-datepicker.en.min.js?v=5.0.36"></script>
	
	<script language="javascript" type="text/javascript">

		// Set global javascript value for page
		window.SJB_GlobalSiteUrl = '<?php echo base_url();  ?>flow.mysmartjobboard.com/';
		window.SJB_UserSiteUrl   = '<?php echo base_url();  ?>flow.mysmartjobboard.com/';

	</script>

	 <script src="https://www.google.com/recaptcha/api.js?onload=recaptchaOnLoad&amp;render=explicit" async defer></script>                <script>
                    var recaptchaLoaded = false;
                    function recaptchaOnLoad() {
                        if (typeof captchaCompleted != 'undefined') {
                            return;
                        }
                        recaptchaLoaded = true;
                        $('.with-captcha').each(function() {
                            var form = $(this);
                            if (form.data('captcha-inited')) {
                                return true;
                            }
                            form.data('captcha-inited', true);
                            var recaptcha = $('<div class="recaptcha-container form-group"></div>');
                            form.find('input[type="submit"]')
                                .after(recaptcha);
                            recaptcha.uniqueId();
                            var id = grecaptcha.render(recaptcha.attr('id'), {
                                'sitekey': '6LcKwyAUAAAAANWAgSImC3RWxGe4Dz0A2qeuwwl3',
                                'size': 'invisible',
                                'badge': 'inline',
                                'callback': function() {
                                    form.data('captcha-triggered', true);
                                    form.submit();
                                }
                            });
                    
                            form.submit(function(e) {
                                if (!$(this).data('captcha-triggered')) {
                                    e.preventDefault();
                                    e.stopImmediatePropagation();
                                    grecaptcha.execute(id);
                                }
                            });
                    
                            var handlers = $._data(this, 'events')['submit'];
                            // take out the handler we just inserted from the end
                            var handler = handlers.pop();
                            // move it at the beginning
                            handlers.splice(0, 0, handler);
                            
                            $('.with-captcha :submit').each(function() {
                                if ($(this).prop('disabled') && $(this).data('pre-captcha-disabled')) {
                                    $(this).prop('disabled', false);
                                }
                            });
                        });
                    }
                    
                    function newRecaptchaForm() {
                        if (recaptchaLoaded) { // preventing node inserted before recaptcha load
                            recaptchaOnLoad();
                        }
                    }
                    document.documentElement.addEventListener('DOMNodeInserted', newRecaptchaForm, false);
                </script> 
    <script>
        $('.navbar__link').on('click', function(e) {
            if ($(this).attr('href') == '' || $(this).attr('href') == '<?php echo base_url();  ?>' ||
                    $(this).attr('href') == 'https://' || $(this).attr('href') == '#') {
                e.preventDefault();
            }
        });

        $('.dropdown > a').on('touchstart', function (e) {
            var link = $(this);

            if (link.hasClass('hover') || $(document).width() < 993) {
                link.addClass('hover');
                return true;
            } else {
                link.addClass('hover');
                $('.dropdown > a').not(this).removeClass('hover');
                e.preventDefault();
                return false;
            }
        });

        $(document).on('click', function (e) {
            var dropdown = $('.navbar__link.hover').closest('.navbar__item');

            if (!dropdown.is(e.target) && dropdown.has(e.target).length === 0) {
                dropdown.find('.navbar__link.hover').removeClass('hover');
            }
        });
    </script>
 

    

	<script>
		function message(title, content) {
			var modal = $('#message-modal');
			modal.find('.modal-title').html(title);
			modal.find('.modal-body').html(content);
			modal.modal('show');
		}

		$(document).ready(function() {
			$('table').each(function() {
				$(this).wrap('<div class="table-responsive"/>')
			});
		});
	</script>
</body>

<!-- Mirrored from flow.mysmartjobboard.com/registration/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 May 2019 10:24:13 GMT -->
</html>