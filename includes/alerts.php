<?php

if (isset($alertMessages) && isset($alertType)) :
    ;

    ?>

<div class=" alert alert-<?php echo $alertType; ?> alert-dismissable fade show text-center" role="alert">
    <?php echo $alertMessages; ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
<?php endif; ?>
