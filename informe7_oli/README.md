# Introducción
Implementador y evaluador Oliver Espinoza expone consideraciones de seguridad sobre aplicacion de venta web, tanto cumplidas como por realizar, y sugiere pasos a seguir para enrobustecer su seguridad.

# Resumen ejecutivo
La aplicacion web es vulnerable, como primer paso es crucial aplicar HTTPS para evitar filtracion de datos de usuarios, y usar herramientas de pentesting a aplicacion web, como OpenVAS-scanner.

# Metodología
La aplicacion fue evaluada bajo las siguientes aristas de practicas seguras requeridas:

## Caracteristicas de seguridad cumplidas
* Principio de minimos privilegios para acceso a DB en formularios
* Uso de Prepared Statements en PHP para Queries seguras a DB ante inyecciones SQL
* Sanitizacion de caracteres de escape a Queries a traves de mysqli_real_escape_string_quote() (Prepared Statements es suficiente, pero por si acaso)
## Caracteristicas de seguridad por implementar
* HTTPS!
* Hashing con salt de contraseñas en tabla diferente a la de usuarios, con permisos especiales de acceso
* Autenticacion multifactor

## Resultados de analisis estatico
* Code walkthough (Por hacer)

## Resultados de analisis dinamico
* OpenVAS-scanner pass report (Por hacer)

# Conclusiones
Es primera prioridad que al conseguir hosting, se consiga un certificado HTTPS para el, y protejer a usuarios posibles filtraciones de la base de datos, aplicando salting de manera segura a hash de contraseñas, como realizar pentesting para mitigar posibles vulnerabilidades.

# Recomendaciones
* Instalar Certbot para conseguir y renovar certificado para tener aplicacion en HTTPS, siguiendo estas instrucciones en web server: https://letsencrypt.org/getting-started/
* Realizar escaneo de vulnerabilidades usando OpenVAS-scanner:  Probar compilar desde MSYS64 en Windows:  https://github.com/greenbone/openvas-scanner

# Apéndices

Certificate Authority para certificado SSL para tener HTTPS https://letsencrypt.org/

Requisitos para compilar OpenVAS: https://github.com/greenbone/openvas-scanner/blob/main/INSTALL.md

# Referencias
* Certbot:  https://certbot.eff.org/
* Plantilla de este informe:  https://www.hacknoid.com/hacknoid/presentar-informe-ethical-hacking-plantilla-descargable/

# Glosario
* Certificate authority:  Con el se puede verificar credeciales de servidores, como respaldo de que son quienes dicen ser
* Prepared Statements (PHP):  Prepara una plantilla de Query al que despues se le entregan sus valores:  Su naturaleza proteje de malversar el Query, protejiendo de inyecciones SQL.  Tambien puede acelerar la ejecucion de multiples Queries que usen la misma plantilla.