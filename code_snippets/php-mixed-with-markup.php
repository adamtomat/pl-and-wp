<?php if (!empty($mobileNumber) || !empty($phoneNumber)) : ?>
    <div class="contact-details--phone">
        <?php if (!empty($phoneNumber)) : ?>
            <span class="contact-details--phone__item">Office: <?php echo $phoneNumber; ?></span>
        <?php endif; ?>

        <?php if (!empty($mobileNumber)) : ?>
            <span class="contact-details--phone__item">Mobile: <?php echo $mobileNumber; ?></span>
        <?php endif; ?>
    </div>
<?php endif; ?>
