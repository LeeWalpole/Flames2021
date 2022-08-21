<?php
echo substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
?>
<?php
if(substr( $_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2 ) == 'en' ) {  
    //  header( 'Location: https://yoursite.com/de/' );  
    echo "England";    
}else if( substr( $_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2 ) == 'th' ) {  
    //  header( 'Location: https://yoursite.com/fr/' ); 
    echo "Thailand";    
}else {
     header( 'Location:  https://yoursite.com/en/' );
}
?>