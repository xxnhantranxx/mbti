<?php
/**
 * Plugin Name: Bee
 * Plugin URI: https://agency.io/plugins/bee
 * Description: This is a simple WordPress plugin for optimize wordpress speed and performance.
 * Version: 1.0.0
 * Author: Kevin Dang <kevindng1997@gmail.com>
 * Author URI: https://danglong.name.vn
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Đăng ký menu cấu hình
function bee_theme_options_menu() {
    add_menu_page(
        'Social Chat', // Tiêu đề hiển thị trên menu
        'Social Chat', // Tên liên kết menu
        'manage_options', // Quyền truy cập cần thiết để xem liên kết menu
        'my-theme-options', // Slug của trang liên kết menu
        'bee_theme_options_page', // Callback function để hiển thị nội dung trang liên kết menu
        'dashicons-admin-comments', // Icon đại diện cho liên kết menu (tùy chọn)
        75 // Vị trí của liên kết menu trong menu quản lý (tùy chọn)
    );
}
add_action('admin_menu', 'bee_theme_options_menu');

// Hiển thị trang cấu hình
function bee_theme_options_page() {
    if (!current_user_can('manage_options')) {
        wp_die('Bạn không có quyền truy cập trang này.');
    }

    if (isset($_POST['bee_theme_options_submit'])) {
        $facebook_link = sanitize_text_field($_POST['facebook_link']);
        $zalo_link = sanitize_text_field($_POST['zalo_link']);

        update_option('bee_theme_options_facebook_link', $facebook_link);
        update_option('bee_theme_options_zalo_link', $zalo_link);

        echo '<div class="notice notice-success"><p>Cập nhật thành công.</p></div>';
    }

    $facebook_link = get_option('bee_theme_options_facebook_link');
    $zalo_link = get_option('bee_theme_options_zalo_link');
    ?>
    <div class="wrap">
        <h1>Social Chat</h1>
        <form method="post" action="">
            <table class="form-table">
                <tr>
                    <th scope="row"><label for="facebook_link">Facebook:</label></th>
                    <td><input style="width:100%" type="text" id="facebook_link" name="facebook_link" value="<?php echo esc_attr($facebook_link); ?>"></td>
                </tr>
                <tr>
                    <th scope="row"><label for="zalo_link">Zalo:</label></th>
                    <td><input style="width:100%" type="text" id="zalo_link" name="zalo_link" value="<?php echo esc_attr($zalo_link); ?>"></td>
                </tr>
            </table>
            <p><input type="submit" name="bee_theme_options_submit" value="Cập nhật" class="button button-primary"></p>
        </form>
    </div>
    <?php
}


