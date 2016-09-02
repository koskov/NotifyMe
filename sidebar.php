<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.2.0/material.deep_orange-red.min.css">
<link rel="stylesheet" href="/css/style.css">
<script defer src="https://code.getmdl.io/1.2.0/material.min.js"></script>

<head>
  <title>NotifyMe</title>
</head>
<!-- No header, and the drawer stays open on larger screens (fixed drawer). -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer">
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title"><img src="/img/logo.png" alt="NotifyMe" style="margin-left: -1em;"></span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="/dashboard.php">Dashboard</a>
      <a class="mdl-navigation__link" href="/domain_list.php">Domain List</a>
      <a class="mdl-navigation__link" href="/notifications.php"><span class="mdl-badge" data-badge="1">Notifications</span></a>
      <a class="mdl-navigation__link" href="/pricing.php">Pricing</a>
      <a class="mdl-navigation__link" href="/settings.php">Notification Settings</a>
    </nav>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content"><!-- Your content goes here --></div>
  </main>
</div>