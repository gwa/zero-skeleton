<?php
namespace Gwa\Wordpress\Template\MyTheme\Controller;

use Gwa\Wordpress\Zero\Controller\AbstractController;

/**
 * Displays the homepage.
 */
class Index extends AbstractController
{
    /**
     * {@inheritdoc}
     */
    public function getContext()
    {
        return [
            'posts' => $this->getPosts(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getTemplates()
    {
        return ['index.twig'];
    }
}
