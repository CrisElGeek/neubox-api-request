# Peticiones al API de Neubox

Esta es una implementación del API de Neubox en PHP estructurada en una programación orientada a Objetos (POO) donde solo por medio de llenar las variables en el archivo `.env` estará listo para realizar las peticiones al API

## Observaciones

- Para poder utilizar este API necesitas las credenciales que te proveed Neubox de México.
- El desarrollador de este proyecto no garantiza la funcionalidad de esta implementación, el usuario es el responsable por su utilización, el desarrollados no se hace responsable por mal funcionamiento del mismo o cualquier otro tipo de incidencia o problema que pueda causar.

## Funcionalidades

- Obtener disponiblidad de dominios
- Obtener listado de dominios registrados en tu cuenta

## Documentación del API

[https://neubox.com/developers/#introduccion](https://neubox.com/developers/#introduccion)

## Lenguajes y tecnologías

Esta implementación ha sido probada solo en PHP >= 8.0 ![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)


## Variables del entorno

Estas variables se deben agregar al archivo `.env` en el directorio raiz de este script

- *API_HOST*: Host del API de Neubox
- *API_KEY*: API Key de Neubox
- *API_SECRET*: API Secreta de Neubox
- *NEUBOX_USER_EMAIL*: Correo electrónico del usuario de Neubox
- *API_USER_AGENT*: User agent para la peticion al API

Crea el archivo `.env` en el directorio raiz de tu proyecto

## Estatus del proyecto

Este proyecto se encuentra en desarrollo

## Utilización de la implementación

*Eres libre de utilizar esta implementación para tus proyectos personales, de negocios o por pura diversión, este proyecto esta licenciado bajo [MIT](https://mit-license.org/)*

### Via peticion web

Sube este código al directorio raiz de tu dominio, agregar la configuración necesaria en el archivo `.env` y realiza tu petición al la url `http://<tu-dominio>/?a=<tu-solicitud>&q=neubox-api-test`, la varible `a` de la url se refiere al tipo de solicitud que realizaras mientras que la variable `q` es un tipo de token de seguridad para minimizar las peticiones no deseas en caso que tengas en acceso abierto a tu dominio donde realizas las pruebas 

#### Obtener listado de tus dominios en Neubox

- Variable `a`: get-domains

Solo necesitas realizar una petición tipo `POST` a la siguiente URL `http://<tu-dominio>/?q=neubox-api-test&a=get-domains`. No necesitas indicar información adicional, el cuerpo de la petición `POST` irá vacio.

#### Obtener disponibilidad de un dominio

- Variable `a`: search-domains

Realiza la petición tipo `POST` a la URL `http://<tu-dominio>/?q=neubox-api-test&a=search-domains`. Deberás enviar dentro del cuerpo de la petición la variable de texto `domain` con el nombre de dominio que deseas buscar y otra variable llamada `tlds` de tipo array, con el listado de tlds que quieres buscar adicionalmente el dominio

##### Ejemplo

```json
{
	"domain": "quieroestedominio.com",
	"tlds": ["mx","com.mx","org"]
}
``` 
