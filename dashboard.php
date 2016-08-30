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
	    <h2 class="mdl-card__title-text">Welcome</h2>
	  </div>
	  <div class="mdl-card__supporting-text">
	    Currently you have 2 domains that are being monitored and 1 unread notification.
	  </div>
	  <div class="mdl-card__actions mdl-card--border">
	    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
	      Domain List
	    </a>
	    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
	      Notifications
	    </a>
	  </div>
	</div>
</div>