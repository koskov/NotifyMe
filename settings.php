
	<?php
		include_once 'sidebar.php';
	?>


<div class="right">
	<!-- Wide card with share menu button -->
	<style>
	.demo-card-wide.mdl-card {
	  width: 100%;
	}
	.demo-card-wide > .mdl-card__title {
	  color: #fff;
	  height: 100px;
	  background: url('../img/panel_big.png') center / cover;
	}
	.demo-card-wide > .mdl-card__menu {
	  color: #fff;
	}
	</style>

	<div class="demo-card-wide mdl-card mdl-shadow--2dp">
	  <div class="mdl-card__title">
	    <h2 class="mdl-card__title-text">Notification settings</h2>
	  </div>
	  <div class="mdl-card__supporting-text">
	    Please enter the email address and the phone number you would like to receive notifications to.<br>


	  </div>
	  <div class="mdl-card__supporting-text">
	  		<div class="mdl-textfield mdl-js-textfield">
		    	<input class="mdl-textfield__input" type="text" id="sample3">
		    	<label class="mdl-textfield__label" for="sample3">Email address</label>
		    </div> 
		    <br>
		    <div class="mdl-textfield mdl-js-textfield">
		    	<input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="sample2">
		    	<label class="mdl-textfield__label" for="sample2">Phone Number</label>
		    	<span class="mdl-textfield__error">Input is not a number!</span>
		  	</div>
	  </div>
	  <div class="mdl-card__actions mdl-card--border">
	    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
	      Save
	    </a>
	  </div>
	</div>
</div>




