<?php
//count report notifications
$sql1 = "SELECT reason , created_at FROM reports WHERE status = 0";
$ress = mysqli_query($conn, $sql1);
$notifications_count = mysqli_num_rows($ress);
?>
<span class="badge badge-danger navbar-badge"><?php echo $notifications_count;?></span>
</a>
<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
<span class="dropdown-item dropdown-header"><?php echo $notifications_count;?> нови оплаквания</span>
<div class="dropdown-divider"></div>

<?php
          if (mysqli_num_rows($ress) > 0) {
            foreach ($ress as $row) {
          ?>
             <a href="#" class="dropdown-item">
              <i class="fas fa-exclamation-circle mr-2"></i> <?php echo $row['reason']; ?>
                <span class="float-right text-muted text-sm"><?php echo $row['created_at']; ?></span>
                </a>
                <div class="dropdown-divider"></div>
          <?php }
          } else { ?>
            Няма нови оплаквания
          <?php } ?>


<div class="dropdown-divider"></div>
<a href="reports" class="dropdown-item dropdown-footer">Виж всички</a>
</div>
</li> <!-- end of count reports notifications -->



?>
