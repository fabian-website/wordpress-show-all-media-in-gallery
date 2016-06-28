# wordpress-show-all-media-in-gallery

Here's a short tutorial how you can display all uploaded images in one WordPress gallery.

Simply put the uploaded code in each file you want like page.php in your theme-file.

<?php $args = array(
    'post_type' => 'attachment',
    'post_status' => 'published',
    'posts_per_page' =>-1,
    'numberposts' => null,
);

$attachments = get_posts($args);

$post_count = count ($attachments);

$bilder = "";
if ($attachments) {
    foreach ($attachments as $attachment) {
        $test = $attachment->ID;
        $bilder = $bilder . $test . ", ";
    }   
} 
echo do_shortcode('[gallery include="'.$bilder.'" columns="3"]');
?>
									
