<?php
namespace Gwa\Wordpress\Template\MyTemplate\Module;

use Gwa\Wordpress\Zero\Module\AbstractThemeModule;

/**
 * Add misc. stuff to global context.
 */
class ThemeContextModule extends AbstractThemeModule
{
    /**
     * @return array
     */
    public function getContext()
    {
        return [
            'rss_link' => $this->getWpBridge()->getBloginfo('atom_url'),
        ];
    }
}
