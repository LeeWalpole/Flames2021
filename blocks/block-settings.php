<?php 
$bg_color = get_sub_field('bg_color');
switch ($bg_color) { ?>
<?php case 'black':
    $data_theme = "dark";
    $bg_color = "bg-black"; 
    $bg_color_only = "black"; 
    ?>
<?php break; case 'offblack':
    $data_theme = "dark";
    $bg_color = "bg-offblack"; 
    $bg_color_only = "bg-offblack"; 
    ?>
<?php break; case 'white':
    $data_theme = "light";
    $bg_color = "bg-white"; 
    $bg_color_only = "bg-white"; 
    ?>
<?php break; case 'offwhite':
    $data_theme = "light";
    $bg_color = "bg-offwhite"; 
    $bg_color_only = "bg-offwhite"; 
    ?>
<?php break; default: 
}
?>

<?php 
$featured_media = get_sub_field('featured_media');
$acf_data_direction = get_sub_field('data_direction');
$data_direction = $acf_data_direction ?: "ltr";
$block_class = get_sub_field('block_class');
// $block_layout = get_row_layout(); $block_layout.$i+1; $i = 0; // to create unique block IDs incase not populated //
$block_id = get_sub_field('block_id') ?: "";
?>