TempaSonataThemeBundle
=========================

Tempa themes bundle for SonataAdminBundle

Themes are taken from http://bootswatch.com/

### **INSTALLATION**:

First add the dependency to your `composer.json` file:

    "require": {
        ...
        "tempa/sonata-theme-bundle": "dev-master"
    },

Then install the bundle with the command:

    php composer.phar update

Enable the bundle in your application kernel:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Tempa\SonataThemeBundle\TempaSonataThemeBundle('SonataAdminBundle'),
    );
}
```

Now the bundle is enabled.

### **CONFIGURATION**:

    tempa_sonata_theme:
        theme: default


### **AVAILABLE THEMES** ##

- amelia
- cerulean
- cosmo
- cyborg
- default
- journal
- readable
- slate
- spacelab
- spruce
- superhero
- symplex
- united