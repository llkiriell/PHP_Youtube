# PHP_Youtube
Ejemplo básico de uso del APIv3 de Youtube para obtener datos de Canal y/o de un video en específico.

## Requerimientos
1. Materialize.css
2. Habilitar php_openssl.dll
3. API Key de YouTube

## Configuración
### 1. Instalando _Materialize.css_
Este framework sólo es necesario para la parte de la vista principal(estilos). En caso se quiera ver directamente el funcionamientos del ejemplo, ir al directorio test.

Se debe descargar de la página oficial [Materialize.css](http://materializecss.com/getting-started.html "Descarga el .zip"), el .zip que contiene todos los archivos necesarios para el funcionamiento del framework.

![descarga](https://k60.kn3.net/0/7/8/4/9/D/DB8.png)

Una vez descargado, llevar su contenido a la ruta __libs/materialize__:

![colocacion](https://k61.kn3.net/2/B/9/C/6/4/96A.png)

Se descomprimirá en la ruta especificada quedando de la siguiente forma:

![descompresion](https://k61.kn3.net/E/5/3/8/5/0/ABE.png)

Posteriormente, y estando seguros de que los archivos estén conformes, podemos borrar el .zip. 

### 2. Habilitar php_openssl.dll
Es necesario habilitar _php_openssl.dll_, tanto en php.ini de PHP, como en el servidor APACHE.

![openssl](https://k60.kn3.net/7/C/A/6/4/9/3CF.png)

En ambos se debe quitar el punto y coma (;) para dejar descomentada la extensión:
~~~
extension=php_openssl.dll
~~~

### 3. Generar el API Key
Se debe crear un [nuevo proyecto](https://console.developers.google.com 'Pincha aquí para ir') y una credencial para obtener la API key. Si ya se tiene la KEY, se deberá ir al fichero __src/constants.php__.

Aquí se encuentran las constantes que se usaron o podrían usarse más adelante. Reemplazar su API KEY en la linea respectiva, así como también el ID del canal de youtube que se desea consultar. Recuerde que la solicitud de datos será con respecto a un canal, no ha un usuario.

Por ejemplo:

~~~
 define('API_KEY_YOUTUBE','hojihnkmokf_joilmfrofjirjig08833unc');
 define('CHANNEL_ID','DFJpuifhD');
~~~

Si no sabes cómo obtener una API KEY puede guiarse de este [video](https://youtu.be/AcUauzCn7RE). 

## Fuentes consultadas:

- [Introduccion a la APIv3 Youtube](https://developers.google.com/youtube/v3/getting-started).
- [Referencia: Channels: list](https://developers.google.com/youtube/v3/docs/channels/list).
- [Referencia: Search: list](https://developers.google.com/youtube/v3/docs/search/list).
- [Materialize.css](http://materializecss.com/cards.html).
- [Youtube Data API v3 : How to use Youtube api v3 to extract data from youtube](https://youtu.be/AcUauzCn7RE).
