<?php 
$bg_color = get_sub_field('bg_color');
switch ($bg_color) { ?>
<?php case 'black':
    $data_theme = "dark";
    $bg_color = "bg-black"; ?>
<?php break; case 'offblack':
    $data_theme = "dark";
    $bg_color = "bg-offblack"; ?>
<?php break; case 'white':
    $data_theme = "light";
    $bg_color = "bg-white"; ?>
<?php break; case 'offwhite':
    $data_theme = "light";
    $bg_color = "bg-offwhite"; ?>
<?php break; default: 
}
?>
