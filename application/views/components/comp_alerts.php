<!-- alert messages -->
<?php
foreach ($page_alerts as $alert):
  ?>   
  <div class="alert alert-<?php echo $alert['status']; ?><?php if ($alert['dismissible']): ?> alert-dismissible fade in<?php endif; ?>" role="alert">
    <?php if ($alert['dismissible']): ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    <?php endif; ?>
    <?php echo $alert['message'] ?>
  </div>
<?php endforeach; ?>

