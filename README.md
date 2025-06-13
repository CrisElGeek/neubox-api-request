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

Eres libre de utilizar esta implementación para tus proyectos personales, de negocios o por pura diversión, este proyecto esta licenciado bajo [MIT](https://mit-license.org/)
