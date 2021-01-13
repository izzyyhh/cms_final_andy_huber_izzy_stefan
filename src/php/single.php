<?php
    get_header();
    echo "<section class='single-post'>";

    if(have_posts()){
        while(have_posts()){
            the_post();
            the_title("<h1>", "</h1>");
            the_content("<p>", "</p>");
        }
    } else{
        echo "<p>nichts da :(</p>";
    }
    
    echo "</section>";
?>

<?php
    wp_reset_postdata();
    get_footer();
?>