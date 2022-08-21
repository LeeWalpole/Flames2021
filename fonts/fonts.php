<!-- /* Preload Custom Fonts - Assuming this is the right thing to do? */ -->
<link rel="preload" as="font" href="<?php echo get_template_directory_uri(); ?>/fonts/ModernEra-Regular.woff2" type="font/woff2" crossorigin="anonymous">
<link rel="preload" as="font" href="<?php echo get_template_directory_uri(); ?>/fonts/ModernEra-Medium.woff2" type="font/woff2" crossorigin="anonymous">
<link rel="preload" as="font" href="<?php echo get_template_directory_uri(); ?>/fonts/ModernEra-ExtraBold.woff2" type="font/woff2" crossorigin="anonymous">
<?php /*
<?php echo "<style>
@font-face {
	font-family: 'Geomanist';
    src: url('".get_template_directory_uri()."/fonts/Geomanist-Regular.woff2') format('woff2'),
	url('".get_template_directory_uri()."/fonts/Geomanist-Regular.woff') format('woff');
	font-weight: normal;
	font-style: normal;
	font-display:swap;
}
@font-face {
	font-family: 'Geomanist-Bold';
	src: url('".get_template_directory_uri()."/fonts/Geomanist-Bold.woff2') format('woff2'),
	url('".get_template_directory_uri()."/fonts/Geomanist-Bold.woff') format('woff');
	font-weight: normal;
	font-style: normal;
	font-display:swap;
}

@font-face {
	font-family: 'Geomanist-Heavy';
	src: url('".get_template_directory_uri()."/fonts/Geomanist-Black.woff2') format('woff2'),
	url('".get_template_directory_uri()."/fonts/Geomanist-Black.woff') format('woff');
	font-weight: normal;
	font-style: normal;
	font-display:swap;
}
</style>"; ?>
*/?>

<?php /*
@font-face {
    font-family: 'Modern Era';
    src: url('".get_template_directory_uri()."/fonts/ModernEra-MediumItalic.woff2') format('woff2'),
        url('".get_template_directory_uri()."/fonts/ModernEra-MediumItalic.woff') format('woff');
    font-weight: 500;
    font-style: italic;
    font-display: swap;
}

@font-face {
    font-family: 'Modern Era';
    src: url('".get_template_directory_uri()."/fonts/ModernEra-LightItalic.woff2') format('woff2'),
        url('".get_template_directory_uri()."/fonts/ModernEra-LightItalic.woff') format('woff');
    font-weight: 300;
    font-style: italic;
    font-display: swap;
}

@font-face {
    font-family: 'Modern Era';
    src: url('".get_template_directory_uri()."/fonts/ModernEra-Light.woff2') format('woff2'),
        url('".get_template_directory_uri()."/fonts/ModernEra-Light.woff') format('woff');
    font-weight: 300;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: 'Modern Era';
    src: url('".get_template_directory_uri()."/fonts/ModernEra-ExtraBold.woff2') format('woff2'),
        url('".get_template_directory_uri()."/fonts/ModernEra-ExtraBold.woff') format('woff');
    font-weight: bold;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: 'Modern Era';
    src: url('".get_template_directory_uri()."/fonts/ModernEra-ExtraBoldItalic.woff2') format('woff2'),
        url('".get_template_directory_uri()."/fonts/ModernEra-ExtraBoldItalic.woff') format('woff');
    font-weight: bold;
    font-style: italic;
    font-display: swap;
}

@font-face {
    font-family: 'Modern Era';
    src: url('".get_template_directory_uri()."/fonts/ModernEra-Italic.woff2') format('woff2'),
        url('".get_template_directory_uri()."/fonts/ModernEra-Italic.woff') format('woff');
    font-weight: normal;
    font-style: italic;
    font-display: swap;
}

@font-face {
    font-family: 'Modern Era';
    src: url('".get_template_directory_uri()."/fonts/ModernEra-BoldItalic.woff2') format('woff2'),
        url('".get_template_directory_uri()."/fonts/ModernEra-BoldItalic.woff') format('woff');
    font-weight: bold;
    font-style: italic;
    font-display: swap;
}



@font-face {
    font-family: 'Modern Era';
    src: url('".get_template_directory_uri()."/fonts/ModernEra-BlackItalic.woff2') format('woff2'),
        url('".get_template_directory_uri()."/fonts/ModernEra-BlackItalic.woff') format('woff');
    font-weight: 900;
    font-style: italic;
    font-display: swap;
}

@font-face {
    font-family: 'Modern Era';
    src: url('".get_template_directory_uri()."/fonts/ModernEra-Black.woff2') format('woff2'),
        url('".get_template_directory_uri()."/fonts/ModernEra-Black.woff') format('woff');
    font-weight: 900;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: 'Modern Era';
    src: url('".get_template_directory_uri()."/fonts/ModernEra-Medium.woff2') format('woff2'),
        url('".get_template_directory_uri()."/fonts/ModernEra-Medium.woff') format('woff');
    font-weight: 500;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: 'Modern Era';
    src: url('".get_template_directory_uri()."/fonts/ModernEra-Black.woff2') format('woff2'),
        url('".get_template_directory_uri()."/fonts/ModernEra-Black.woff') format('woff');
    font-weight: 900;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: 'Modern Era';
    src: url('".get_template_directory_uri()."/fonts/ModernEra-Bold.woff2') format('woff2'),
        url('".get_template_directory_uri()."/fonts/ModernEra-Bold.woff') format('woff');
    font-weight: bold;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: 'Geometos Neue Extra';
    src: url('".get_template_directory_uri()."/fonts/GeometosNeueExtraBold.woff2') format('woff2'),
        url('".get_template_directory_uri()."/fonts/GeometosNeueExtraBold.woff') format('woff');
    font-weight: bold;
    font-style: normal;
    font-display: swap;
}


@font-face {
    font-family: 'Modern Era';
    src: url('".get_template_directory_uri()."/fonts/ModernEra-Bold.woff2') format('woff2'),
        url('".get_template_directory_uri()."/fonts/ModernEra-Bold.woff') format('woff');
    font-weight: bold;
    font-style: normal;
    font-display: swap;
}

*/ ?>

<!-- /* Critical Font CSS */ -->
<?php echo "<style>
@font-face {
    font-family: 'Modern Era';
    src: url('".get_template_directory_uri()."/fonts/ModernEra-Regular.woff2') format('woff2'),
        url('".get_template_directory_uri()."/fonts/ModernEra-Regular.woff') format('woff');
    font-weight: normal;
    font-style: normal;
    font-display: swap;
}


@font-face {
    font-family: 'Modern Era';
    src: url('".get_template_directory_uri()."/fonts/ModernEra-Medium.woff2') format('woff2'),
        url('".get_template_directory_uri()."/fonts/ModernEra-Medium.woff') format('woff');
    font-weight: 500;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: 'Modern Era';
    src: url('".get_template_directory_uri()."/fonts/ModernEra-ExtraBold.woff2') format('woff2'),
        url('".get_template_directory_uri()."/fonts/ModernEra-ExtraBold.woff') format('woff');
    font-weight: bold;
    font-style: normal;
    font-display: swap;
}


</style>"; 
?>

<style>
/* More Critical Font CSS */
:root {
    --font-1:'Modern Era';
    --font-1b:'Modern Era';
    --font-1bb:'Modern Era';
    --regular:400;
    --medium:500;
    --bold:800;
    --heavy:900; 
}
* {
    font-family: var(--font-1); 
    font-weight:var(--regular);
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    color:var(--color-1b);
}
</style>