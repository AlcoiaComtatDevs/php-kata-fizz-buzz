# Base para el desarrollo de katas

Configuración básica para empezar a hacer una kata o aprender a hacer 
tests en PHP

## Instalación
Tan solo es necesario descargar las dependencias con [composer](https://getcomposer.org/):

```
$ ./composer.phar install 
$ ./vendor/bin/phpunit
```

Para usar [PHP-CS-Fixer](http://cs.sensiolabs.org/) tan solo:

```
$ ./vendor/bin/php-cs-fixer fix src --rules=@PSR2
```

## Documentación
- [PHPUnit](https://phpunit.de/manual/current/en/writing-tests-for-phpunit.html)
    - [Chuleta](http://otroblogmas.com/wp-content/uploads/2011/06/PHPUnit-Cheat-Sheet.pdf)
- [Prophecy](https://github.com/phpspec/prophecy) para mocks
- [TDD](http://librosweb.es/libro/tdd/) 
    - [Chuleta](http://cv.jesuslc.com/slides/tdd/assets/player/KeynoteDHTMLPlayer.html)  
- [Git](https://git-scm.com/)
    - [Chuleta](http://blog.juanluisgarciaborrego.com/apuntes-git/)
