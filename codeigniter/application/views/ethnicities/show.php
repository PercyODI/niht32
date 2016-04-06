<h1> Test of the Ethncities </h1>
<?php

// print_r($table);

foreach($table as $row) {
    echo "<a href=" . base_url('ethnicities/show/' . $row->id) . "><div>";
    echo $row->id . " : " . $row->name . "<br><hr><br>";
    echo "</div></a>";
}