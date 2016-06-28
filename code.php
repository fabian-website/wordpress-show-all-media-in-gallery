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
									