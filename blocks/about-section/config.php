<?php

use App\Shared\Services\Registry;

use function Qubus\Security\Helpers\t__;

return [
    'category' => t__('Theme', Registry::getInstance()->get('bootstrap-business')['id']),
    'title' => t__('About Section', Registry::getInstance()->get('bootstrap-business')['id']),
    'icon' => 'fa fa-lightbulb',
];
