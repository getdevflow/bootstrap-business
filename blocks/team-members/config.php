<?php

use App\Shared\Services\Registry;

use function Qubus\Security\Helpers\t__;

return [
    'category' => t__('Theme', Registry::getInstance()->get('bootstrap-business')['id']),
    'title' => t__('Team Members', Registry::getInstance()->get('bootstrap-business')['id']),
    'icon' => 'fa fa-arrows-down-to-people',
];
