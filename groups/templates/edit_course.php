<?php
include_once ABSPATH . '/wp-admin/includes/media.php' ;
require_once ABSPATH . '/wp-admin/includes/post.php' ;
require_once BPSP_PLUGIN_DIR . '/groups/templates/helpers/new_course_helpers.php' ;
?>
<?php if( $message ): ?>
<div id="courseware-message" class="updated">
    <?php echo $message; ?>
</div>
<?php endif; ?>
<form action="<?php echo $course_edit_uri; ?>" method="post" id="update-course-form">
    <h5><?php echo $form_title; ?> &mdash; <a href="<?php echo $course_permalink ?>"><?php _e( 'Preview' ); ?></a></h5>
    <div id="update-course-content">
        <div id="update-course-content-title">
             <input type="text" id="course-title" name="course[title]" value="<?php echo $course->post_title; ?>"/>
        <div id="update-course-content-textarea">
            <div id="editor-toolbar">
                <?php
                    echo bpsp_media_buttons();
                    the_editor( $course->post_content, 'course[content]', 'course[title]', false );
                ?>
            </div>
        </div>
        <div id="update-course-content-options">
            <input type="hidden" id="update-course-post-object" name="course[object]" value="group"/>
            <input type="hidden" id="update-course-post-in" name="course[group_id]" value="<?php echo $group_id; ?>">
            <div id="update-course-submit">
                <input type="submit" name="course[submit]" id="update-course-submit" value="<?php echo $submit_title; ?>">
                <a href="<?php echo $course_delete_uri; ?>"><?php echo $course_delete_title; ?></a>
            </div>
        </div>
    </div>
</form>
<script type="text/javascript" >
    var tb_closeImage = "/wp-includes/js/thickbox/tb-close.png";
</script>
<?php
wp_tiny_mce();
?>