<?php

use Spatie\Menu\Link;

use function App\Shared\Helpers\admin_url;
use function App\Shared\Helpers\cms_footer;
use function App\Shared\Helpers\nav_links;
use function Codefy\Framework\Helpers\config;
use function Qubus\Security\Helpers\t__;

//phpcs:disable
?>

    <footer class="bg-dark py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0 text-white">
                        <?=t__(msgid: 'Copyright', domain: 'devflow');?> &copy; <?=config()->string(key: 'app.name');?> <?=date('Y');?>
                    </div>
                </div>

                <div class="col-auto">
                    <?php foreach (nav_links(type: 'secondary') as $page) : ?>
                        <?=Link::to(url: $page['route'], text: $page['title'])->addClass(class: 'link-light small');?>
                        <span class="text-white mx-1">&middot;</span>
                    <?php endforeach; ?>
                    <a class="link-light small" href="<?=admin_url();?>"><?=t__(msgid: 'Admin', domain: 'devflow');?></a>
                </div>
            </div>
        </div>
    </footer>

<!-- JQuery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<!-- Run PHPageBuilder script.js files -->
<script type="text/javascript">
    document.querySelectorAll("script").forEach(function(scriptTag) {
        scriptTag.dispatchEvent(new Event('run-script'));
    });
</script>
<script src="<?=phpb_theme_asset(path: 'js/script.js');?>"></script>
<?php cms_footer(); ?>
</html>
