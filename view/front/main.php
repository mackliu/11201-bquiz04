<h2>
<?php
$type=$_GET['type']??0;
echo $Type->nav($type);?>
</h2>

<div>
    <?php print_r($Type->items($type));?>
</div>