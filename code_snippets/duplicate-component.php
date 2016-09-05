<div>
    <?php foreach ($managers as $staff) : ?>
        <div class="staff staff--manager">
            <div class="staff__title"><?php echo $staff->name; ?></div>
            <div class="staff__role"><?php echo $staff->role; ?></div>
        </div>
    <?php endforeach; ?>
</div>

<div>
    <?php foreach ($employees as $employee) : ?>
        <div class="staff">
            <div class="staff__title"><?php echo $employee->name; ?></div>
            <div class="staff__role"><?php echo $employee->role; ?></div>
        </div>
    <?php endforeach; ?>
</div>
