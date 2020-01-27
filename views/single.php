<?php
//Since this is a single item we do not need a loop
echo '<article>';
echo $content->current()->details;
echo '</article>'; 