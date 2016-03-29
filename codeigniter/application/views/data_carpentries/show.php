<h3><i class="fa fa-angle-right"></i>Data Carpentries Testing</h3>
<?php
if(is_array($table)) {
    foreach($table as $row) {
?>
<div class="col-md-4 col-sm-4 mb">
    <div class="darkblue-panel pn">
        <div class="darkblue-header">
            <h5><?= $row->link ?></h5>
        </div>
        <?= $row->id ?>
        <?= $row->user_id ?>
        <?= $row->author ?>
        <?= $row->link ?>
        <?= $row->type_id ?>
        <?= $row->topic_id ?>
        <footer>
        </footer>
    </div>
</div>
<?php
    } //Foreach
} else {
?>
<div class="col-md-4 col-sm-4 mb">
    <div class="darkblue-panel pn">
        <div class="darkblue-header">
            <h5><?= $table->link ?></h5>
        </div>
        <?= $table->id ?>
        <?= $table->user_id ?>
        <?= $table->author ?>
        <?= $table->link ?>
        <?= $table->type_id ?>
        <?= $table->topic_id ?>
        <footer>
        </footer>
    </div>
</div>
<?php
} // If/else
?>