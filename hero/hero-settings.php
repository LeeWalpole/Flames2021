<?php 
$bg_color = get_field('bg_color');
switch ($bg_color) { ?>
<?php
    case 'black':
        $data_theme = "dark";
        $bg_color = "bg-black"; ?>
<style>
.prescroll .nav-logo img, .prescroll .nav-bar .hamburger span { 
    filter: brightness(100)!important;
}

.prescroll .nav-bar .hamburger span { 
    background:var(--color-white)!important;
}
</style>
<?php break;
    case 'offblack':
        $data_theme = "dark";
        $bg_color = "bg-offblack"; ?>
        <style>
.prescroll .nav-logo img, .prescroll .nav-bar .hamburger span { 
    filter: brightness(100)!important;
}

.prescroll .nav-bar .hamburger span { 
    background:var(--color-white)!important;
}
</style>
        
        <?php break;
    case 'white':
        $data_theme = "light";
        $bg_color = "bg-white"; ?>
        
        <style>
.prescroll .nav-logo img, .prescroll .nav-bar .hamburger span { 
    filter: brightness(0)!important;
}

.prescroll .nav-bar .hamburger span { 
    background:var(--color-black)!important;
}
</style>
        
        <?php break;
    case 'offwhite':
        $data_theme = "light";
        $bg_color = "bg-offwhite"; ?>
    <style>
.prescroll .nav-bar {
box-shadow: none;
background-color: var(--color-black)!important;
}
</style>
    
    <?php break;
  default:
    // not one of the sites
    echo 'Invalid Booking Site';
}
?>

<?php  /*
$bg_color = get_field('bg_color');
switch ($bg_color) {
    case 'black':
        $data_theme = "dark";
        $bg_color = "bg-black";
    break;
    case 'offblack':
        $data_theme = "dark";
        $bg_color = "bg-offblack";
    break;
    case 'white':
        $data_theme = "light";
        $bg_color = "bg-white";
    break;
    case 'offwhite':
        $data_theme = "light";
        $bg_color = "bg-offwhite";
    break;
  default:
    // not one of the sites
    echo 'Invalid Booking Site';
} */
?>
