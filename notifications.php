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
      <h2 class="mdl-card__title-text">Notifications</h2>
    </div>
    <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp" style="width:100%; ">
        <thead>
          <tr>
            <th class="mdl-data-table__cell--non-numeric">Domain name</th>
            <th>Subject</th>
            <th>Date</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="mdl-data-table__cell--non-numeric">TestDomain.com</td>
            <td>Status change</td>
            <td>August 18, 2016</td>
            <td>
               <main class="mdl-layout__content">
                      <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                        Read
                      </button>
              </main>
            </td>
          </tr>
         
          
        </tbody>
    </table>
  </div>  


</div>
