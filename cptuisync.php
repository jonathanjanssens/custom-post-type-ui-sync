<?php
/**
 * Plugin Name: CPT UI Sync
 * Author: Jonathan Janssens
 * Description: Save Custom Post Type UI content types to a file so they can be added to source control and you only have to install CPT UI on your dev environment
 */

/**
 * Run after updating a post type and save the export code to a file
 *
 * @param $data
 */
function cptuisync_after_update_post_type($data) {
    ob_start();
    cptui_get_post_type_code(cptui_get_post_type_data());
    $postTypeCode = ob_get_contents();
    ob_clean();

    $postTypeCode = '<?php ' . $postTypeCode;
    file_put_contents(cptuisync_post_types_path(), $postTypeCode);
}
add_action('cptui_after_update_post_type', 'cptuisync_after_update_post_type');

/**
 * Run after updating a taxonomy to save the export code to a file
 *
 * @hooks cptui_after_update_taxonomy
 * @param $data
 */
function cptuisync_after_update_taxonomy($data) {
    ob_start();
    cptui_get_taxonomy_code(cptui_get_taxonomy_data());
    $taxonomyCode = ob_get_contents();
    ob_clean();

    $taxonomyCode = '<?php ' . $taxonomyCode;
    file_put_contents(cptuisync_taxonomy_path(), $taxonomyCode);
}
add_action('cptui_after_update_taxonomy', 'cptuisync_after_update_taxonomy');

/**
 * Get the post types file path
 *
 * @return string
 */
function cptuisync_post_types_path() {
    $directory = cptuisync_directory();
    return $directory . '/post_types.php';
}

/**
 * Get the taxonomies file path
 *
 * @return string
 */
function cptuisync_taxonomy_path() {
    $directory = cptuisync_directory();
    return $directory . '/taxonomies.php';
}

/**
 * Get the directory path to save the files to
 *
 * @filter cptuis.dir
 * @return string
 */
function cptuisync_directory() {
    $defaultDir = get_template_directory() . '/cptui';
    if(!is_dir($defaultDir)) {
        mkdir($defaultDir, null, true);
    }

    return apply_filters('cptuis.dir', $defaultDir);
}

