<?php
namespace Gwa\Wordpress\Template\MyTheme\Theme;

use Gwa\Wordpress\Zero\Theme\AbstractTheme;

class Theme extends AbstractTheme
{
    protected function doInit()
    {
        $this->registerMenus([
            'header_menu' => 'Header Menu'
        ]);

        $this->setViewsDirectory(realpath(dirname(__DIR__) . '/../views'));
    }

    /**
     * @return array
     */
    protected function getModuleClasses()
    {
        return [
            'Gwa\Wordpress\Zero\Module\IdColumnsModule',
            'Gwa\Wordpress\Zero\Module\CleanUpModule',
        ];
    }
}
