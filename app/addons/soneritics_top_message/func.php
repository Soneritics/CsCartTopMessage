<?php
if (!defined('BOOTSTRAP')) { die('Access denied'); }

function soneritics_get_top_message()
{
    $showOnce = \Tygh\Registry::get('addons.soneritics_top_message.show_once') != 'N';
    $message = \Tygh\Registry::get('addons.soneritics_top_message.message');

    if ($showOnce) {
        if (empty($_SESSION['soneritics_top_message'])) {
            $_SESSION['soneritics_top_message'] = true;
        } else {
            $message = '';
        }
    }

    return $message;
}
