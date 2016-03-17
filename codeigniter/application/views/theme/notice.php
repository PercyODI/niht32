<?php
if(empty($notice)) {
    return '';
}
?>

<div class="<?= $notice['type'] ?>"><?= $notice['message'] ?></div>