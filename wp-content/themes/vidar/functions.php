<?php
add_action('after_setup_theme', 'ribs_setup');
function ribs_setup(){
	load_theme_textdomain('ribs', get_template_directory() . '/languages');
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	global $content_width;
	if ( ! isset( $content_width ) ) $content_width = 640;
	register_nav_menus(
		array( 'main-menu' => __( 'Main Menu', 'ribs' ) )
	);
}
add_action('comment_form_before', 'ribs_enqueue_comment_reply_script');
function ribs_enqueue_comment_reply_script()
{
	if(get_option('thread_comments')) { wp_enqueue_script('comment-reply'); }
}
add_filter('the_title', 'ribs_title');
function ribs_title($title) {
	if ($title == '') {
		return 'Untitled';
	} else {
		return $title;
	}
}
add_filter('wp_title', 'ribs_filter_wp_title');
function ribs_filter_wp_title($title)
{
	return $title . esc_attr(get_bloginfo('name'));
}
add_filter('comment_form_defaults', 'ribs_comment_form_defaults');
function ribs_comment_form_defaults( $args )
{
	$req = get_option( 'require_name_email' );
	$required_text = sprintf( ' ' . __('Required fields are marked %s', 'ribs'), '<span class="required">*</span>' );
	$args['comment_notes_before'] = '<p class="comment-notes">' . __('Your email is kept private.', 'ribs') . ( $req ? $required_text : '' ) . '</p>';
	$args['title_reply'] = __('Post a Comment', 'ribs');
	$args['title_reply_to'] = __('Post a Reply to %s', 'ribs');
	return $args;
}
add_action( 'init', 'ribs_add_shortcodes' );
function ribs_add_shortcodes() {
	add_shortcode('wp_caption', 'fixed_img_caption_shortcode');
	add_shortcode('caption', 'fixed_img_caption_shortcode');
	add_filter('img_caption_shortcode', 'ribs_img_caption_shortcode_filter',10,3);
	add_filter('widget_text', 'do_shortcode');
}
function ribs_img_caption_shortcode_filter($val, $attr, $content = null)
{
	extract(shortcode_atts(array(
				'id' => '',
				'align' => '',
				'width' => '',
				'caption' => ''
			), $attr));
	if ( 1 > (int) $width || empty($caption) )
		return $val;
	$capid = '';
	if ( $id ) {
		$id = esc_attr($id);
		$capid = 'id="figcaption_'. $id . '" ';
		$id = 'id="' . $id . '" aria-labelledby="figcaption_' . $id . '" ';
	}
	return '<figure ' . $id . 'class="wp-caption ' . esc_attr($align) . '" style="width: '
		. (10 + (int) $width) . 'px">' . do_shortcode( $content ) . '<figcaption ' . $capid
		. 'class="wp-caption-text">' . $caption . '</figcaption></figure>';
}
add_action( 'widgets_init', 'ribs_widgets_init' );
function ribs_widgets_init() {
	register_sidebar( array (
			'name' => __('Sidebar Widget Area', 'ribs'),
			'id' => 'primary-widget-area',
			'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
			'after_widget' => "</li>",
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );
}
$preset_widgets = array (
	'primary-aside'  => array( 'search', 'pages', 'categories', 'archives' ),
);
function ribs_get_page_number() {
	if (get_query_var('paged')) {
		print ' | ' . __( 'Page ' , 'ribs') . get_query_var('paged');
	}
}
function ribs_catz($glue) {
	$current_cat = single_cat_title( '', false );
	$separator = "\n";
	$cats = explode( $separator, get_the_category_list($separator) );
	foreach ( $cats as $i => $str ) {
		if ( strstr( $str, ">$current_cat<" ) ) {
			unset($cats[$i]);
			break;
		}
	}
	if ( empty($cats) )
		return false;
	return trim(join( $glue, $cats ));
}
function ribs_tag_it($glue) {
	$current_tag = single_tag_title( '', '',  false );
	$separator = "\n";
	$tags = explode( $separator, get_the_tag_list( "", "$separator", "" ) );
	foreach ( $tags as $i => $str ) {
		if ( strstr( $str, ">$current_tag<" ) ) {
			unset($tags[$i]);
			break;
		}
	}
	if ( empty($tags) )
		return false;
	return trim(join( $glue, $tags ));
}
function ribs_commenter_link() {
	$commenter = get_comment_author_link();
	if ( ereg( '<a[^>]* class=[^>]+>', $commenter ) ) {
		$commenter = preg_replace( '/(<a[^>]* class=[\'"]?)/', '\\1url ' , $commenter );
	} else {
		$commenter = preg_replace( '/(<a )/', '\\1class="url "' , $commenter );
	}
	$avatar_email = get_comment_author_email();
	$avatar = str_replace( "class='avatar", "class='photo avatar", get_avatar( $avatar_email, 80 ) );
	echo $avatar . ' <span class="fn n">' . $commenter . '</span>';
}
function ribs_custom_comments($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;
	$GLOBALS['comment_depth'] = $depth;
?>
<li id="comment-<?php comment_ID() ?>" <?php comment_class() ?>>
<div class="comment-author vcard"><?php ribs_commenter_link() ?></div>
<div class="comment-meta"><?php printf(__('Posted %1$s at %2$s', 'ribs' ), get_comment_date(), get_comment_time() ); ?><span class="meta-sep"> | </span> <a href="#comment-<?php echo get_comment_ID(); ?>" title="<?php _e('Permalink to this comment', 'ribs' ); ?>"><?php _e('Permalink', 'ribs' ); ?></a>
<?php edit_comment_link(__('Edit', 'ribs'), ' <span class="meta-sep"> | </span> <span class="edit-link">', '</span>'); ?></div>
<?php if ($comment->comment_approved == '0') { echo '\t\t\t\t\t<span class="unapproved">'; _e('Your comment is awaiting moderation.', 'ribs'); echo '</span>\n'; } ?>
<div class="comment-content">
<?php comment_text() ?>
</div>
<?php
	if($args['type'] == 'all' || get_comment_type() == 'comment') :
		comment_reply_link(array_merge($args, array(
					'reply_text' => __('Reply','ribs'),
					'login_text' => __('Login to reply.', 'ribs'),
					'depth' => $depth,
					'before' => '<div class="comment-reply-link">',
					'after' => '</div>'
				)));
	endif;
?>
<?php }
function ribs_custom_pings($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;
?>
<li id="comment-<?php comment_ID() ?>" <?php comment_class() ?>>
<div class="comment-author"><?php printf(__('By %1$s on %2$s at %3$s', 'ribs'),
		get_comment_author_link(),
		get_comment_date(),
		get_comment_time() );
	edit_comment_link(__('Edit', 'ribs'), ' <span class="meta-sep"> | </span> <span class="edit-link">', '</span>'); ?></div>
<?php if ($comment->comment_approved == '0') { echo '\t\t\t\t\t<span class="unapproved">'; _e('Your trackback is awaiting moderation.', 'ribs'); echo '</span>\n'; } ?>
<div class="comment-content">
<?php comment_text() ?>
</div>
<?php }

// Register new thumb sizes for NEWS
/*
if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'home-large', 460, 344, true ); //(cropped)
	add_image_size( 'home-medium', 460, 144, true ); //(cropped)
	add_image_size( 'home-small', 220, 180, true ); //(cropped)
	add_image_size( 'home-project', 640, 306, true ); //(cropped)
	add_image_size( 'news-thumb', 340, 164, true ); //(cropped)

}
*/

// Make uploaded images SCALE responsive
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}

//add class to image
function add_image_class($class){
	$class .= ' scale-with-grid';
	return $class;
}
add_filter('get_image_tag_class','add_image_class');

