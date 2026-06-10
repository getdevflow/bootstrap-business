<?php

use function App\Shared\Helpers\cms_body_open;

?>
[block slug="bb-header"]
<body class="d-flex flex-column h-100">
    <?php cms_body_open(); ?>
    <main class="flex-shrink-0">
        [block slug="bb-navbar"]
        <?=$body;?>

    </main>
[block slug="bb-footer"]
</body>
