<?php if (isset($_SESSION)) : ?>
    <div class="<?= $_SESSION['type'] ?>" role="alert">
        <?= $_SESSION['message'] ?>
    </div>
    <?php
    unset($_SESSION['message']);
    unset($_SESSION['type']);
    ?>
<?php endif; ?>