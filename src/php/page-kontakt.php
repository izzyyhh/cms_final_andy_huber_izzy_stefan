<?php 
    get_header();
    echo "<div class='wrapper'><main>";
    echo "<section>";
    if(have_posts()){
        while(have_posts()){
            the_post();
            the_title("<h2>", "</h2>");
            the_content();
        }
    } else{
        echo "<p>Ich kann derzeit nicht kontaktiert werden.</p>";
    }
    echo "</section>";
    echo "</main></div>";
    wp_reset_postdata();
    get_footer();
?>