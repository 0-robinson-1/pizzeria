<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit83fa5c6dc9b98c603406cde6edb07c6e
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit83fa5c6dc9b98c603406cde6edb07c6e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit83fa5c6dc9b98c603406cde6edb07c6e', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit83fa5c6dc9b98c603406cde6edb07c6e::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
