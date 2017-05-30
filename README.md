#Kata FizzBuzz
Imagínate el siguiente escenario. Tienes 11 años y en los últimos 5 minutos del final de la lección, tu profesor de matemáticas decide hacer la clase mas divertida, introduciendo un juego. El explica que irá señalando a cada compañero de clase en orden y preguntándole el siguiente número de la secuencia, comenzando por el número uno. La parte divertida es que, si el número es divisible por 3, tienes que decir "Fizz" en vez del número. Y si es divisible por 5, debes decir "Buzz".
Las matemáticas no es tu fuerte y tienes miedo de que te llegue el turno y no sepas qué decir. Así que, con el fin de evitar la vergüenza delante de toda la clase, tienes que obtener la lista completa impresa para saber qué decir. Tu clase tiene unos 33 alumnos y se pueden llegar a hacer unas tres rondas antes de que suene el timbre para el recreo. La siguiente clase de matemáticas es el jueves. ¡Codifícalo! :)

##Enunciado
Escribe un programa que imprima los números del 1 al 100, pero aplicando las siguientes normas: Devuelve Fizz si el número es divisible por 3. Devuelve Buzz si el número es divisible por 5. Devuelve FizzBuzz si el número es divisible por 3 y por 5.
Salida de ejemplo:
1 2 Fizz 4 Buzz Fizz 7 8 Fizz Buzz 11 Fizz 13 14 FizzBuzz 16 17 Fizz 19 Buzz

## Base para el desarrollo de katas
Configuración básica para empezar a hacer una kata y aprender a hacer 
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


- [DocDrive](https://docs.google.com/document/d/1Dr-xABjtVLwlNa19uiT8je9MhihCftDb5NPiRAxcNAM/edit?usp=sharing)
- [PHPUnit](https://phpunit.de/manual/current/en/writing-tests-for-phpunit.html)
    - [Chuleta](http://otroblogmas.com/wp-content/uploads/2011/06/PHPUnit-Cheat-Sheet.pdf)
- [Prophecy](https://github.com/phpspec/prophecy) para mocks
- [TDD](http://librosweb.es/libro/tdd/) 
    - [Chuleta](http://cv.jesuslc.com/slides/tdd/assets/player/KeynoteDHTMLPlayer.html)  
- [Git](https://git-scm.com/)
    - [Chuleta](http://blog.juanluisgarciaborrego.com/apuntes-git/)
