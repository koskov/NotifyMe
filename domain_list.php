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
    background: url('../img/panel1.png') center / cover;
  }
  .demo-card-wide > .mdl-card__menu {
    color: #fff;
  }
  </style>

  <div class="demo-card-wide mdl-card ">
    <div class="mdl-card__title">
      <h2 class="mdl-card__title-text">Domain List</h2>
    </div>
    <br>
    <main class="mdl-layout__content">
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                  Refresh list
                </button>
    </main>
    <br>
    <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp" style=" width:100%; ">
  <thead>
    <tr>
      <th class="mdl-data-table__cell--non-numeric">Domain name</th>
      <th>Status</th>
      <th>Enabled</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">TestDomain.com</td>
      <td>No issues</td>
      <td>
        Yes

      </td>
      <td>
          <main class="mdl-layout__content">
          <a href="/details.php" target="_blank">
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                  Details
                </button>
          </a>
          </main>
      </td>
    </tr>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">DomainTest.com</td>
      <td>No issues</td>
      <td>
        Yes
      
      </td>
      <td>
          <main class="mdl-layout__content">
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                  Details
                </button>
          </main>
      </td>
    </tr>
    
  </tbody>
</table>
  </div>  
</div>