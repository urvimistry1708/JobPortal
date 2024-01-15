<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from flow.mysmartjobboard.com/registration/?user_group_id=JobSeeker by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 May 2019 10:24:17 GMT -->
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
<meta property="og:url" content="http://flow.mysmartjobboard.com/registration/?user_group_id=JobSeeker" />
<meta property="og:title" content="Registration | SmartJobBoard" />
<meta property="og:description" content="" />
<meta property="og:image" content="http://flow.mysmartjobboard.com/templates/FlowDND/assets/images/logo.svg" />
            <!-- Global Site Tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110320771-1"></script>
        
	<style type="text/css"></style>
	
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

    
												
			<div class="page-row page-row-expanded" style="background-color: lightgrey;">
				<div class="container container--small   ">
										
						<h1 class="title__primary title__primary-small title__centered title__bordered">Create Company Profile</h1>
	<div class="social-registration">
		<span class="social-registration__buttons">
							<a href="http://flow.mysmartjobboard.com/login/?network=linkedin&amp;user_group_id=JobSeeker" class="social-registration__linkedin" title="Sign in with LinkedIn">
					Sign in with LinkedIn
				</a>
					</span>
	</div>

<div class="text-center form-group cloud">
			I already have a Company Profile.
		<a class="link" href="loginUser">Sign me in</a>
</div>

<form class="form with-captcha" method="post" id="company_profile" name="company_profile" action="" enctype="multipart/form-data">
    <input type="hidden" name="action" value="register" />
    <input type="hidden" name="return_url" value="" />
    <div class="form-group form-group__half companyname " data-field="CompanyName">
                <label class="form-label">Company Name *</label>
                <input id="companyname" type="text" value="" class="form-control " name="companyname" />
                 <span id="err_companyname" class="text-danger"></span>
            </div>
                        <div class="form-group form-group__half companyemail " data-field="companyemail">
                <label class="form-label">Email *</label>
                <input type="email" id="companyemail" value="" class="form-control" name="companyemail"/>
                <span id="err_companyemail" class="text-danger"></span>
            </div>
                              
                                <div class="form-group form-group__half password " data-field="password">
                <label class="form-label">Password *</label>
                <input type="password" id="password" name="password" class="form-control" />
                 <span id="errpass" class="text-danger"></span>
            </div>
              <div class="form-group form-group__half establishdate " data-field="establishdate">
                <label class="form-label">Establish Date </label>
                <input id="establishdate" type="date" value="" class="form-control " name="establishdate" />
     <span id="err_establishdate" class="text-danger"></span>
            </div>
                                
                                   
                                <div class="form-group form-group__half website " data-field="WebSite">
                <label class="form-label">Website </label>
                <input id="website" type="text" value="" class="form-control " name="website" />
                <span id="err_website" class="text-danger"></span>

            </div>
                                <div class="form-group form-group__half phone " data-field="Phone">
                <label class="form-label">Phone </label>
                <input id="contact" type="text" value="" class="form-control " name="contact" />
                <span id="err_contact" class="text-danger"></span>

            </div>
             <div class="form-group form-group__half rating " data-field="rating">
             <label class="form-label">Company Rating</label><br>
                         <input type="radio"  name="rating" value="1"> 
                          <font style="color: rgba(39, 39, 39, 0.5);">1 </font>
                         <input type="radio"  name="rating" value="2">  
                          <font style="color: rgba(39, 39, 39, 0.5);">2 </font>
                         <input type="radio"  name="rating" value="3">   
                         <font style="color: rgba(39, 39, 39, 0.5);">3 </font>
                         <input type="radio"  name="rating" value="4"> 
                          <font style="color: rgba(39, 39, 39, 0.5);">4 </font>
                         <input type="radio"  name="rating" value="5">  
                          <font style="color: rgba(39, 39, 39, 0.5);">5 </font>
                     </div>
                     <div class="form-group form-group__half iso " data-field="iso">
         <label class="form-label">
        ISO Certified? </label><br>
        <input type="checkbox" id="iso" name="iso" value="1">    
    </div>
         <div class="form-group__half country_id" data-field="country_id">
                <label class="form-label">Country </label>
                <!-- <input id="address" type="text" value="" class="form-control" name="address" /> -->
                 <select class="form-control" id="country_id" name="country_id" onchange="getStatee()">
                                    <option value="" class="form-control"></option>
                                        
                                        <?php 
                                        foreach($countryList as $tagData){ 
                                        ?>
                                        <option class="form-control" value="<?php echo $tagData['country_id']; ?>"><?php echo $tagData['country_name']; ?></option>
                                    <?php } ?>
                                    </select>
                                    <span id="errjcountry" class="text-danger"></span>


            </div>
                <div class="form-group__half state_id" data-field="state_id">
                <label class="form-label">State </label>
                <!-- <input id="address" type="text" value="" class="form-control" name="address" /> -->
                  <select class="form-control" id="state_id" name="state_id" onchange="getCityy()">
                                    <option value=""></option>
                                    </select>
                                    <span id="errjstate"  class="text-danger"></span>


            </div>
            
                
<div class="form-group__half city_id" data-field="city_id">
                <label class="form-label">City </label>
                <!-- <input id="address" type="text" value="" class="form-control" name="address" /> -->
                  <select class="form-control" id="city_id" name="city_id">
                                    <option value=""></option>
                                       
                                    </select>
                                    <span id="errjcity" class="text-danger"></span>

            </div>
            <div class="form-group__half state_id" data-field="state_id">
                <label class="form-label">Street </label>
                <!-- <input id="address" type="text" value="" class="form-control" name="address" /> -->
                  <input type="text" name="street" id="street" class="form-control" placeholder="Enter street">
                <span class="help-block">  </span>


            </div>


                                <div class="form-group logo " data-field="Logo">
                <label class="form-label">Logo </label>
                <div class="form--move-left profile-logo">

        <input type="file" id="company_image" name="company_image"class="form-control" />
</div>

            </div>
                                <div class="form-group companydescription " data-field="CompanyDescription">
                <label class="form-label">Company Description </label>
                <textarea id='profiledescription' name='profiledescription' class="form-control"></textarea>
            </div>
                                    <div class="form-group  " data-field="terms_opt_in">
                <div class="form--move-left">
                    <div class="inline-block checkbox-field">
                        <input type="checkbox" name="terms"  id="terms" />
                    </div>
                    <span class="form-label inline">
                        <a class="link" target="_blank" href="https://flow.mysmartjobboard.com/terms-of-use/">I agree to the terms of use</a>
                    </span>
                </div>
            </div>
                            <div class="form-group form-group__btns text-center">
        <input type="hidden" name="user_group_id" value="Employer" />
        <input type="submit"   class="btn btn__orange btn__bold" value="Register" />
    </div>
</form>



					
									</div>
			</div>
			

	<div class="page-row hidden-print">
    
       <?php  $this->load->view('user/templates/useraccount-footer');?>
       <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js?<?php echo rand(0,9999);?>"></script>
     <script type="text/javascript" src="<?php echo base_url(); ?>user_assets/js/user/companyprofile.js?<?php echo rand(0,9999);?>"></script>
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

	<script language="JavaScript" type="text/javascript" src="http://flow.mysmartjobboard.com/system/ext/jquery/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
			<script type="text/javascript" src="http://flow.mysmartjobboard.com/system/ext/jquery/bootstrap-datepicker/i18n/bootstrap-datepicker.en.min.js?v=5.0.36"></script>
	
	<script language="javascript" type="text/javascript">

		// Set global javascript value for page
		window.SJB_GlobalSiteUrl = 'http://flow.mysmartjobboard.com/';
		window.SJB_UserSiteUrl   = 'http://flow.mysmartjobboard.com/';

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
	<script type="text/javascript" language="JavaScript">
		function checkField( obj, name ) {
			if (obj.val() != "") {
				var options = {
					data: { isajaxrequest: 'true', type: name },
					success: showResponse
				};
				$("#registr-form").ajaxSubmit( options );
			}
            function showResponse(responseText, statusText, xhr, $form) {
                var labelElement = obj.closest('.form-group').find('.form-label');
                if (!labelElement.data('old-text')) {
                    labelElement.data('old-text', labelElement.text());
                }
                switch(responseText) {
                    case 'NOT_VALID_EMAIL_FORMAT':
                        labelElement.addClass('form-label__error').text('Please enter valid email address');
                        break;
                    case 'NOT_UNIQUE_VALUE':
                        labelElement.addClass('form-label__error').text('This email address is already in use.');
                        break;
                    default:
                        labelElement.removeClass('form-label__error');
                        labelElement.text(labelElement.data('old-text'));
                        break;
                }
            }
		};

        $('.with-captcha').submit(function (e) {
            e.preventDefault();

            if (typeof(tinymce) != 'undefined') {
                tinymce.EditorManager.triggerSave();
            }

            $('body').addClass('loading');
            var self = $(this);
            self.find('input[type="file"]').each(function() {
                if ($(this).prop('disabled')) return;
                if ($(this).fieldValue()[0] == '') {
                    $(this).prop('disabled', true);
                    $(this).data('jquery_form_fix', true);
                }
            });
            $('.field-error').removeClass('field-error');
            self.ajaxSubmit({
                data: {
                    json_redirect: true
                },
                success: function(data) {
                    if (typeof data == 'object') {
                        window.location.href = data.redirect;
                        return;
                    }
                    $('.alert').remove();
                    data = $('<div>' + data + '</div>');
                    if (data.find('.alert-danger').length) {
                        self.before(data.find('.alert'));
                    } else {
                        self.closest('.container').empty().append(data.find('.alert'));
                    }
                    data.find('.field-error').each(function() {
                        $('[data-field="' + $(this).data('field') + '"]').addClass('field-error');
                    });
                    $('html, body').animate({ scrollTop: 0 }, 'slow');
                    $('body').removeClass('loading');
                    self.find('input[type="file"]').each(function() {
                        if ($(this).data('jquery_form_fix')) {
                            $(this).prop('disabled', false);
                            $(this).data('jquery_form_fix', false)
                        }
                    });
                },
                error: function () {
                    $('body').removeClass('loading');
                    self.find('input[type="file"]').each(function() {
                        if ($(this).data('jquery_form_fix')) {
                            $(this).prop('disabled', false);
                            $(this).data('jquery_form_fix', false)
                        }
                    });
                }
            });
        });

    </script>
 
    <script>
        $('.navbar__link').on('click', function(e) {
            if ($(this).attr('href') == '' || $(this).attr('href') == 'http://' ||
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

<!-- Mirrored from flow.mysmartjobboard.com/registration/?user_group_id=JobSeeker by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 May 2019 10:24:17 GMT -->
</html>