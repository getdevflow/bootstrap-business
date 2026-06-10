<?php

declare(strict_types=1);

namespace Theme\BootstrapBusiness;

use App\Application\Devflow;
use App\Infrastructure\Services\Theme;
use App\Shared\Services\Registry;
use Qubus\EventDispatcher\ActionFilter\Action;
use Qubus\EventDispatcher\ActionFilter\Filter;
use Qubus\Exception\Exception;
use ReflectionException;

use function App\Shared\Helpers\compare_releases;
use function App\Shared\Helpers\theme_root;
use function App\Shared\Helpers\theme_url;
use function basename;
use function dirname;
use function get_class;
use function Qubus\Security\Helpers\t__;

final class BootstrapBusinessTheme extends Theme
{
    /**
     * @inheritDoc
     * @throws ReflectionException|Exception
     */
    public function meta(): array
    {
        $theme = [
            'name' => t__(msgid: 'Bootstrap Business', domain: 'bootstrap-business'),
            'id' => 'bootstrap-business',
            'slug' => 'BootstrapBusiness',
            'author' => 'Joshua Parker',
            'version' => '2.0.0',
            'description' => t__(
                msgid: 'A multipurpose Bootstrap full website template ported from Start Bootstrap.',
                domain: 'bootstrap-business'
            ),
            'basename' => basename(dirname(__FILE__)),
            'path' => theme_root(__FILE__),
            'url' => theme_url('', __CLASS__),
            'themeUri' => 'https://github.com/getdevflow/bootstrap-business',
            'authorUri' => 'https://joshuaparker.dev/',
            'className' => get_class($this),
            'screenshot' => theme_url('BootstrapBusiness/images/screenshot.png'),
        ];

        Registry::getInstance()->set('bootstrap-business', $theme);

        return $theme;
    }

    /**
     * @inheritDoc
     * @throws Exception
     * @throws ReflectionException
     */
    public function handle(): void
    {
        if (compare_releases(Devflow::release(), '2.3.0', '<')) {
            $this->registerAdminNotice();
            return;
        }

        Filter::getInstance()->addFilter('pagebuilder.support', fn() => true);
    }

    /**
     * @return void
     * @throws ReflectionException
     */
    private function registerAdminNotice(): void
    {
        Action::getInstance()->addAction('admin_notices', function () {
            echo '<div class="alert dismissable alert-danger center sticky">' .
                t__(
                    'You must upgrade your system to at least v2.3 in order to use the new Bootstrap Business theme.',
                    $this->id()
                ) .
            '</div>';
        });
    }
}
