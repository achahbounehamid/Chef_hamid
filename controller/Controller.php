<?php
abstract class Controller //ne peut pas être instanciée directement
{
    private static $loader;//les methodes loader et twig assurent que les membres de classe nécessaires sont initialisés correctement avant leur utilisation
    private static $twig;//

    private static function setLoader()//crée une instance de la classe pour charger les fichiers de modèles Twig à partir du répertoire './view'
    {
        self::$loader = new \Twig\Loader\FilesystemLoader('./view');
    }

    private static function setTwig()//crée une instance de la classe Twig_Environment en utilisant le chargeur précédemment créé, et en désactivant le cache.
    {
        self::$twig = new \Twig\Environment(self::getLoader(),['cache' => false,]);
    }

    protected static function getLoader()//renvoie l'instance de Twig_FileSystemLoader, en initialisant les membres de classe $loader et $twig si nécessaire.
    {
        if (self::$loader === null) {
            self::setLoader();
        }
        return self::$loader;
    }

    protected static function getTwig()// renvoie l'instance de Twig_Environment, en initialisant également les membres de classe $loader et $twig si nécessaire.
    {
        if (self::$twig === null) {
            self::setTwig();
        }
        return self::$twig;
    }
}