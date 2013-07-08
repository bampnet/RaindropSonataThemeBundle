<?php

namespace Tempa\SonataThemeBundle\Twig;

class Extension extends \Twig_Extension
{
    protected $theme;

    public function setTheme($theme) {
        $this->theme = $theme;
    }

    public function getGlobals() {
        return array(
            'tempa_sonata_theme' => $this->theme
        );
    }

    public function getName() {
        return 'tempa_theme_extension';
    }
}