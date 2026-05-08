<?php

use App\Shared\Services\Registry;

use function Qubus\Security\Helpers\t__;

return [
    'hidden' => true,
    'category' => t__('Theme', Registry::getInstance()->get('bootstrap-business')['id']),
];
