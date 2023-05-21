<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitde0e901fced605040ca9efa5d16373d9
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
    );

    public static $classMap = array (
        'AltoRouter' => __DIR__ . '/..' . '/altorouter/altorouter/AltoRouter.php',
        'Category' => __DIR__ . '/../..' . '/class/Category.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'ConnexionController' => __DIR__ . '/../..' . '/controller/ConnexionController.php',
        'Controller' => __DIR__ . '/../..' . '/controller/Controller.php',
        'Favorites' => __DIR__ . '/../..' . '/class/Favorites.php',
        'Ingredient' => __DIR__ . '/../..' . '/class/Ingredient.php',
        'Model' => __DIR__ . '/../..' . '/model/model.php',
        'RecipeModel' => __DIR__ . '/../..' . '/model/RecipeModel.php',
        'Recipes' => __DIR__ . '/../..' . '/class/Recipes.php',
        'RecipesController' => __DIR__ . '/../..' . '/controller/RecipesController.php',
        'User' => __DIR__ . '/../..' . '/class/User.php',
        'UserModel' => __DIR__ . '/../..' . '/model/UserModel.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitde0e901fced605040ca9efa5d16373d9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitde0e901fced605040ca9efa5d16373d9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitde0e901fced605040ca9efa5d16373d9::$classMap;

        }, null, ClassLoader::class);
    }
}
