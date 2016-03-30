<h3><i class="fa fa-angle-right"></i>Participating Researchers Testing</h3>
<?php

foreach($table as $row) {
    ?>
<div class="col-md-4 col-sm-4 mb">
    <div class="darkblue-panel pn">
        <div class="darkblue-header">
            <h5><?= $row->id ?></h5>
        </div>
        <?= $row->id ?>
        <?= $row->lab_id ?>
        <?php 
            for($i = 0; $i < 25; $i++) {
                echo $row->id . "<br>";
            }
        ?>
    </div>
</div>
    <?php
}

?>