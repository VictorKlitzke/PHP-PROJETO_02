<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit97b763ea7fcc5a3a5a3e87813662f8e0
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

        spl_autoload_register(array('ComposerAutoloaderInit97b763ea7fcc5a3a5a3e87813662f8e0', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit97b763ea7fcc5a3a5a3e87813662f8e0', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit97b763ea7fcc5a3a5a3e87813662f8e0::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
