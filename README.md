# WordPress: Show all uploaded images in one gallery

Here's a short tutorial how you can display all uploaded images in one WordPress gallery.

Simply put this code in each file you want to show the gallery like page.php in your theme-file.

```
<?php $args = array(
    'post_type' => 'attachment',
    'post_status' => 'published',
    'posts_per_page' =>-1,
    'numberposts' => null,
);

$attachments = get_posts($args);

$bilder = "";
if ($attachments) {
    foreach ($attachments as $attachment) {
        $id = $attachment->ID;
        $bilder = $bilder . $id . ", ";
    }   
} 
echo do_shortcode('[gallery include="'.$bilder.'" columns="3"]');
?>
```									

You can change the value of columns in the line of the "do_shortcode" statement (line 24)

More infomation:

https://developer.wordpress.org/reference/functions/do_shortcode/

https://codex.wordpress.org/Class_Reference/WP_Query
