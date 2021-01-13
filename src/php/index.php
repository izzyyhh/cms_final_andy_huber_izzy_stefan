<?php 
    get_header();
    
    echo "<div class='wrapper'><main>";

    if(have_posts()){
        while(have_posts()){
            the_post();
            the_content("<p>", "</p>");
        }
    } else{
        echo "<p>nichts da :(</p>";
    }

    if(is_front_page()){
        #leistungen
        $leistungen_query = new WP_Query("category_name=leistungen && posts_per_page=3");
        if($leistungen_query->have_posts()){
            echo "<section id='leistungen' class='leistungen'>";
            echo "<h2>Leistungen</h2>";
            echo "<nav><ul>";

            while($leistungen_query->have_posts()){
                $leistungen_query->the_post();
                echo "<li><a href='#'>";
                the_title("<p>", "</p>");

                if(has_post_thumbnail()){
                    the_post_thumbnail();
                }
                echo "</a></li>";
            }

            echo "</ul></nav></section>";
        } else{
            echo "<p>keine Leistungen</p>";
        }
        
        #news
        $news_query = new WP_Query("category_name=news && posts_per_page=3");
        if($news_query->have_posts()){
            echo "<section id='news' class='news'>";
            echo "<h2>News</h2>";
            echo "<ul>";

            while($news_query->have_posts()){
                echo "<li><p>";
                $news_query->the_post();

                $exc = get_the_excerpt();
                $marked = get_post_custom_values("marked");

                foreach($marked as $mark){
                    $exc = str_replace($mark, "<mark>" . $mark . "</mark>", $exc);
                }
                
                echo $exc;
                echo "<a href='". get_the_permalink() . "'> [mehr erfahren]</a>";
                echo "</p></li>";
            }
            echo "</ul></section>";
        } else{
            echo "<p>keine Referenzen</p>";
        }

        #referenzen
        $referenzen_query = new WP_Query("category_name=referenzen && posts_per_page=3");
        if($referenzen_query->have_posts()){
            echo "<section id='references' class='references'>";
            echo "<h2>Referenzen</h2>";
            echo "<div class='references_grid'>";

            while($referenzen_query->have_posts()){
                $referenzen_query->the_post();
                $author = get_post_custom_values("autor")[0];
                $cite = get_post_custom_values("zitat")[0];
                $author_info = get_post_custom_values("autor-info")[0];
                $author_img_src = get_field("bild")["url"];
                $cite_type = get_post_custom_values("zitat-typ")[0];
                
                switch($cite_type){
                    case "yellow":
                        echo get_yellow_template($author, $cite, $author_info, $author_img_src);
                    break;
                    
                    case "green":
                        echo get_green_template($author, $cite, $author_info, $author_img_src);
                    break;
                    
                    case "blue":
                        echo get_blue_template($author, $cite, $author_info, $author_img_src);
                        
                    break;
                }
            }

            echo "</div></section>";
            
        } else {
            echo "<p>Keine Referenzen</p>";
        }
    }
function get_yellow_template($author, $cite, $author_info, $author_img){

$template = <<<EOD
<div class="yellow img-tina">
<img src='$author_img' alt='$author'>
</div>
<div class="yellow cite-ubuntu">
<p>$author<br class="mobile-break">$author_info</p>
</div>
<div class="yellow cite-redesign">
<p>$cite</p>
</div>
EOD;

return $template;
}

function get_green_template($author, $cite, $author_info, $author_img){
$qotation_url = get_template_directory_uri() . "/images/quotation_mark.svg";
$template = <<<EOD
<div class="darkblue cite-quotes">
<img src='$qotation_url' alt='Anführungszeichen'>
</div>
<div class="green img-vorstand">
<img src='$author_img' alt='$author'>
</div>
<div class="green cite-vorstand">
<cite>$author<br>$author_info</cite>
<blockquote>Das Store-Konzept von Alex Mayer hat unsere größten Erwartungen übertroffen.</blockquote>
</div>
EOD;

return $template;
}

function get_blue_template($author, $cite, $author_info, $author_img){

$template = <<<EOD
<div class="lightblue cite-cutters">
<p>$author<br class="mobile-break">$author_info</p>
</div>
<div class="lightblue cite-webkunst">
<p>$cite</p>
</div>
<div class="lightblue img-thomas">
<img src='$author_img' alt='$author'>
</div>
EOD;

return $template;
}

?>

<!-- <section id="references" class="references">
    <h2>Referenzen</h2>
    <div class="refs-grid">
        <div class="yellow author-img"><img src="../images/dina-meyer.jpg" alt="dina meyer"></div> 
        <div class="yellow author">Tina Ubuntu <span class="author-info">CEO headless Ltd.</span></div>
        <div class="yellow cite">Alex‘ Redesign hat maßgeblich mitgeholfen, unseren Umsatz um 20% in die Hohe zu treiben!</div>
        <div class="blue author-img"><img src="../images/thomas-meyer.jpg" alt="dina meyer"></div>
        <div class="blue author">Thomas Herzog <span class="author-info">Cutters Finest</span></div>
        <div class="blue cite"></div>
        <div class="quotations-img"><img src="../images/quotation_mark.svg" alt="quotes"></div>
        <div class="green author-img"><img src="../images/vorstand.jpg" alt="vorstand"></div>
        <div class="green author">Vorstand Müller AG <span class="author-info">KR Ernst Anker, Dr. Florian Eisner</span></div>
        <div class="green cite"></div>
    </div>
</section> -->
<?php
    
    wp_reset_postdata();
    echo"</main></div>";
    get_footer();
?>