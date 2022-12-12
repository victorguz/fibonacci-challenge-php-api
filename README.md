# fibonacci-challenge-php-api

La prueba consiste en crear una aplicación mediante PHP la cual al consultar una API REST que deberás crear, devolverá un número y tu nombre al introducirlos como parámetros.

## Instalación

La siguiente guía de instalación se realizó para el sistema operativo Windows 10. Para realizar la instalación en otros sistemas operativos por favor consulte en las respectivas páginas de instalación de las herramientas o sus alternativas.

1. Descargue e instale [XAMPP](https://www.apachefriends.org/) con la configuración por defecto (indispensablemente seleccionar Apache y PHP al instalar).
2. Descargue e instale [Composer](https://getcomposer.org/download/) con la configuración por defecto (preferiblemente para todos los usuarios), permita añadir php.exe al PATH.
3. Descargue el proyecto y muevalo a la carpeta htdocs ubicada en ```C:\xampp\htdocs``` . 
4. Ahora vaya a la ruta del proyecto (en caso de que haya pasado los archivos dentro de su carpeta dirijase a la raíz de esta carpeta), abra su consola de comandos preferida o el PowerShell de Windows y utilice el comando ```composer install``` para descargar las dependencias necesarias para ejecutarlo.
5. Una vez descargadas las dependencias podrá acceder a su localhost (probablemente http://localhost:80/) y ver el proyecto en funcionamiento.

## Manual de uso

1. Digite los números en el formulario que aparece en la pantalla.
2. El primer número es la base para empezar la secuencia de fibonacci.
3. El segundo es el número límite al que puede llegar.
4. Una vez haya digitado un número presione el botón **Calcular**.
5. El sistema retornará el resultado de 