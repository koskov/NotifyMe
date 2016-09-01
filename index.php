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
	    <h2 class="mdl-card__title-text">NotifyMe - keep your domains safe</h2>
	  </div>
	  <div class="mdl-card__supporting-text">
	    <p>
	    	<b>What is NotifyMe?</b>
	    </p>
	    <p>
	    	Get instant notifications about your domain names changes*:
	    	<ul>
	    		<li>Domain status changes</li>	    		
	    		<li>Registrant WHOIS contact changes</li>
	    		<li>Admin WHOIS contact changes</li>
	    		<li>DNS changes</li>
	    		<li>Expiration date changes</li>
	    	</ul>
	    </p>
	    <p>
	    	<b>Why do you need it?</b>
	    </p>
	    <p>
	    	There are a few reasons why people lose their domain names. The most common are:
	    	<ul>
	    		<li>Domain expiration</li>
	    		<li>Domain hijacking</li>
	    	</ul>
			Prevent your domain names from expiration or being hijacked. If domain status or domain contacts have been changed, it is possible that the domain name is being stolen at the moment. The sooner you know about it, the better chance you have to prevent the steal or to recover it (if domain was hijacked).**
	    </p>
	  <div class="mdl-card__supporting-text">
	    <p>
	    	<i>* - it may take up to 24 hours for us to detect the change due to delays in registry-registrar reporting and due to the unstable nature of registrar whois service</i>
	    </p>
	    <p>
	    	<i>** - NotifyMe does not guarantee that monitored domains are 100% safe. You need to use other ways of domain protection, like strong passwords to your registrar accounts, 2FA, etc.</i>
	    </p>
	  </div>  
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