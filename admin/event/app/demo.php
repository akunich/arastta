<?php
/**
 * @package     Arastta eCommerce
 * @copyright   2015-2018 Arastta Association. All rights reserved.
 * @copyright   See CREDITS.txt for credits and other copyright notices.
 * @license     GNU GPL version 3; see LICENSE.txt
 * @link        https://arastta.org
 */

class EventAppDemo extends Event
{

    public function preLoadView(&$template, &$data)
    {
        if ($template == 'setting/setting.tpl') {
            //$data['heading_title'] = 'My Custom Title';
        }
    }
}
