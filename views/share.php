<div class="group2 col-sm-6 col-md-6">
    <span class="pull-right">
        <a href="#" onclick="share('https://twitter.com/intent/tweet?text=<?php echo $content->shareTwitter();  ?>');return false;" rel="nofollow" target="_blank" class="fa fa-twitter-square fa-2x"></a>
        <a href="#" onclick="share('https://www.facebook.com/sharer/sharer.php?u=<?php echo $content->shareFacebook(); ?>');return false;" rel="nofollow" target="_blank" class="fa fa-facebook-square fa-2x"></a>
        <a href="#" onclick="share('mailto:?<?php echo $content->shareEmail(); ?>');return false;" rel="nofollow" target="_blank" class="fa fa-envelope-square fa-2x"></a>
    </span>
</div>