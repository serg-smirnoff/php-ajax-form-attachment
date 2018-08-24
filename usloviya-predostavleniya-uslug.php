<!-- ajax send -->
<script src="js/form.js" type="text/javascript"></script>

<!-- arcticModal -->
<script src="js/jquery.arcticmodal-0.3.min.js"></script>
<link rel="stylesheet" href="css/jquery.arcticmodal-0.3.css">

<!-- arcticModal theme -->
<link rel="stylesheet" href="css/themes/simple.css">

<!-- html form -->
<div class="send-to-email-form-inner">
<form name="send-to-email-form" id="send-to-email-form" enctype="multipart/form-data" action="javascript:void(null);" onsubmit="sendform()" method="post">
	<div class="send-to-email-text-field"><input placeholder="Email" type="email" name="send-to-email-text-field" /></div>
	<div class="send-to-email-btn"><input type="submit" name="send-to-email-btn" value="send to e-mail" title="send to e-mail" class="agreement-email" id="phone-head" /></div>
	<div class="clear-both"></div>
</form>
</div>

<!-- modal window -->									
<div style="display: none;">
	<div class="box-modal" id="send-to-email-form-result-modal">
		<div class="box-modal_close arcticmodal-close">close</div>
		<div class="send-to-email-form-result"></div>
	</div>
</div>