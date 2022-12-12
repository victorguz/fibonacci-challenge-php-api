# fibonacci-challenge-php-api

La prueba consiste en crear una aplicación mediante PHP la cual al consultar una API REST que deberás crear, devolverá un número y tu nombre al introducirlos como parámetros.

## Instalación

La siguiente guía de instalación se realizó para el sistema operativo Windows 10. Para realizar la instalación en otros sistemas operativos por favor consulte en las respectivas páginas de instalación de las herramientas o sus alternativas.

1. Descargue e instale [XAMPP](https://www.apachefriends.org/) con la configuración por defecto (indispensablemente seleccionar Apache y PHP al instalar).
2. Configure la extención gmp en php.ini (ubicado normalmente en `C:\xampp\php`) quitando el ```;``` en la linea que dice ```extension=gmp```
3. Descargue el proyecto y muevalo a la carpeta htdocs ubicada en `C:\xampp\htdocs` .
4. Trasladese a la ruta elegida para el proyecto a traves de localhost (probablemente http://localhost:80/) para ver el proyecto en funcionamiento.

## Manual de uso

1. El Sistema cuenta con dos formularios donde se explica la funcionalidad de cada uno.
2. El primer formulario consiste en realizar el calculo con un ciclo for, mientras que el segundo utiliza la formula de recurrencia.
3. Al hacer click en el botón **"Calcular"** se va a mostrar el número de fibonacci que corresponde a la posición indicada en el formulario.
4. Para volver a realizar un calculo es necesario volver a la pantalla inicial ubicada en la raiz del proyecto. O bien puede cambiar el campo "position" del queryParam en la ruta del navegador por el número que desee calcular.
5. Los calculos máximos fueron probados con Intel Core i7, 16gb RAM y 2gb SSD.
6. En caso del primer método el almacenamiento del disco duro/ram es necesario para realizar cálculos más grandes, ya que se almacenan en memoria.
7. En caso del segundo cálculo sería necesario implementar una librería para calcular números más grandes y con formulas complejas, pues el resultado está limitado al tamaño del campo numérico de PHP.
8. Para más información contactar al autor [@Victorguz](mailto:victorguzber@gmail.com)
