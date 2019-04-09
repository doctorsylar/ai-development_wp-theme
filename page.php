<?php

get_header();
?>
<main>
    <?php
    the_post();
    the_content();
    ?>
</main>
<?php
get_footer();