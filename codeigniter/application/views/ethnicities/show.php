<h3><i class="fa fa-angle-right"></i>Activities Testing</h3>
<?php

foreach($table as $row) {
    ?>
<div class="col-md-4 col-sm-4 mb">
    <div class="darkblue-panel pn">
        <div class="darkblue-header">
            <h5><?= $row->name ?></h5>
        </div>
        <?= $row->id ?>
        <?php 
            for($i = 0; $i < 25; $i++) {
                echo $row->name . "<br>";
            }
        ?>
        <footer>
            <div class="pull-left">
                <h5><?= $row->date_time ?></h5>
            </div>
        </footer>
    </div>
</div>
    <?php
}

?>