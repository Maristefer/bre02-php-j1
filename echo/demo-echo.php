<?php
$animals = ["Chat", "Chien", "Caribou"];
$numbers = [42, -24, 57];
?>

<ul>
    <?php foreach($animals as $animal) { ?>
        <li>
            <?php echo $animal ?>
        </li>
    <?php } ?>
</ul>

<ul>
    <?php foreach($numbers as $number) { ?>
    
        <?php if($number < 0) { ?>
            
            <li style="color:red;">
                <?php echo $number; ?>
            </li>
            
        <?php } else { ?>
            <li>
                <?php echo $number; ?>
            </li>
        <?php } ?>
    
    <?php } ?>
</ul>