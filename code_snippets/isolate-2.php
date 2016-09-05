<?php $isManager = ($staff->role === 'manager'); ?>

<div class="staff<?php echo $isManager ? ' staff--manager' : null; ?>">
    <div class="staff__title"><?php echo $staff->name; ?></div>
    <div class="staff__role"><?php echo $staff->role; ?></div>
</div>
