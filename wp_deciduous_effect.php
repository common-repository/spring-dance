<?php
/*
Plugin Name: 落叶效果
Description: 为您的wordpress添加一个漂亮的落叶效果！
Author: 赵彤刚
Author URI:  https://blog.heheda.top/
Version:     1.0.0
License URI: https://blog.heheda.top/
*/
function deciduous_effect()
{
    wp_enqueue_script('deciduous-effect', plugins_url('/js/su.js', __FILE__), false);

?>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('body').wpSuperSnow({
                    flakes: ['<?php echo plugins_url('', __FILE__); ?>/img/008.png', '<?php echo plugins_url('', __FILE__); ?>/img/007.png', '<?php echo plugins_url('', __FILE__); ?>/img/006.png', '<?php echo plugins_url('', __FILE__); ?>/img/004.png', '<?php echo plugins_url('', __FILE__); ?>/img/002.png', '<?php echo plugins_url('', __FILE__); ?>/img/001.png', '<?php echo plugins_url('', __FILE__); ?>/img/003.png', '<?php echo plugins_url('', __FILE__); ?>/img/002.png', '<?php echo plugins_url('', __FILE__); ?>/img/001.png'],
                    totalFlakes: '100',
                    zIndex: '9999999',
                    maxSize: '30',
                    maxDuration: '20',
                    useFlakeTrans: true
                });
            });
        </script>
<?php
    }
    
add_action('wp_footer', 'deciduous_effect');
?>