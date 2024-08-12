# 1.1 Informe forense de Oliver en grupo 6

**Nombre del auditor:** Oliver Espinoza

**Fecha de informe (dd/mm/yyyy):** 12/08/2024

Este informe de el modulo de analisis forense 

![Title](https://raw.githubusercontent.com/meowrawr-ui/meowrawr-ui.github.io/main/markdown_assets/meowrawr.jpg)
![Main site](https://raw.githubusercontent.com/meowrawr-ui/meowrawr-ui.github.io/main/markdown_assets/meowrawrsite.png)

# 1.2 Indice

* 1.1 Informe forense de Oliver en grupo 6
* 1.2 Indice
* 2.1 Resumen ejecutivo
* 2.2 Introduccion
* 2.2.1 Antecedentes del caso 
* 2.2.2 Objetivos del analisis
* 2.3 Metodologia
* 2.3.1 Herramientas utilizadas
* 2.3.2 Procedimientos de adquisicion
* 2.3.3 Tecnicas de analisis
* 2.4 Hallazgos
* 2.4.1 Evidencia digital (archivos, registros, etc.)
* 2.4.2 Analisis de la red
* 2.4.3 Analisis de sistemas
* 2.5 Analisis
* 2.5.1 Interpretacion de los hallazgos
* 2.5.2 Linea de tiempo de los eventos
* 2.5.3 Posibles vectores de ataque
* 2.6 Conclusiones
* 2.6.1 Resumen de los hallazgos clave
* 2.6.2 Respuestas a las preguntas iniciales
* 2.7 Recomendaciones
* 2.7.1 Acciones a corto plazo
* 2.7.2 Acciones a largo plazo
* 2.7.3 Mejoras en los procesos de seguridad
* 2.8 Anexos
* 2.8.1 Logs completos
* 2.8.2 Capturas de pantalla
* 2.8.3 Reportes de herramientas
* 2.8.3 Evidencia digital adicional

# 2.1 Resumen ejecutivo
# 2.2 Introduccion
Al volcado de disco completo del servidor, se han calculado los siguientes hashes:

MD5: 248f6d89d0b02452a3637e3106260922

SHA1: 487943cdbd3aef91fd7f09dc899e02c4eef3c4d6

SHA256: 669fcf3afc1d34b264f23ed7a194ce66857cd0135a941ddbcb2ca4b7b46cb8d0

Estos fueron hechos inmediatamente despues de la adquicision, con esto podemos asegurar su integridad y reproductividad de pasos en el analisis

## 2.2.1 Antecedentes del caso

En el modulo de analisis forense, como estudiante de ciberseguridad se nos pide practicar como accionariamos en un caso real

Este caso prueba el servidor donde se aloja este proyecto de sitio web, https://vilxdryad.eu.org/ en mi Raspberry Pi 3B+

## 2.2.2 Objetivos del analisis

Analisar disco, registros y trafico del servidor en busca de actividad sospechosa

# 2.3 Metodologia

El procedimiento de como se realiza este analisis, consta de:

## 2.3.1 Herramientas utilizadas

Utilizar rclone para volcado de disco completo

HashCalc para calculo de MD5, SHA1 y SHA256 del volcado de disco.

Autopsy para analisis del disco

journalctl para volcado de logs de usuario/sistema

`date && ls -lat /var/log/httpd/` para ver fechas de modificacion de archivos, en orden de ultimo archivo eliminado

## 2.3.2 Procedimientos de adquisicion

Entre a servidor remoto con SSH, descargue y configure rclone descargandolo desde el repositorio de Arch Linux ARM con:

`sudo pacman -Syy rclone`

Lo configure para usar mi Google Drive con el nombre `drive`, y hice el volcado con:

`nohup sudo rclone rcat drive:disk.raw < /dev/mmcblk0`

## 2.3.3 Tecnicas de analisis

Utilizando Autopsy para analizar el disk dump

![Autopsy](https://raw.githubusercontent.com/meowrawr-ui/meowrawr-ui.github.io/main/markdown_assets/autopsy.png)

# 2.4 Hallazgos

¡Que Autopsy es increible!  Mucho mas practico que analizar usando un editor hex :)

## 2.4.1 Evidencia digital (archivos, registros, etc.)

Reporte de journalctl (Mas abajo un extracto)

Logs de sistema

## 2.4.2 Analisis de la red

Desafortunadamente, este es un error comun del paquete tshark que viene para Arch Linux, no hay tiempo para compilar por ahora
```
[draigarial@draigarial-rpi ~]$ tshark -i enu1u1u1 -c 50
tshark: symbol lookup error: /usr/lib/libwsutil.so.15: undefined symbol: g_string_free_and_steal
```

NMap tambien por ahora :3
```
[draigarial@draigarial-rpi ~]$ nmap -v vilxdryad.eu.org
nmap: symbol lookup error: nmap: undefined symbol: libssh2_userauth_banner
```

## 2.4.3 Analisis de sistemas

Autopsy mostrando de manera clara y rapida detalles de todo el sistema de archivos puede ayudar a encontrar malware en el arranque y payloads que puedan albergarse en

Logs de sistema me reportan las veces que se accedio al sitio web 

# 2.5 Analisis
## 2.5.1 Interpretacion de los hallazgos

Muchos errores de query MySQL, pueden indicar ataque de inyeccion SQL:  Probablemente fui yo mientras probaba el login

![Disk dump hashes calculated in HashCalc](https://raw.githubusercontent.com/meowrawr-ui/meowrawr-ui.github.io/main/markdown_assets/mysqlerrors.png)

## 2.5.2 Linea de tiempo de los eventos

Zona horaria: GMT-4

Ingreso a servidor usando SSH 11:34 a.m.

Volcado de disco con rclone 1:11 p.m.

Analisis de volcado con Autopsy 1.24 p.m.

Copia de logs de sistema en /var/log y sudo journalctl 1:37 p.m.

Error utilizando tshark (CLI de wireshark) 1:54 p.m.

Error utilizando NMAP 1:57 p.m.

## 2.5.3 Posibles vectores de ataque

OWASP Zap presenta problemas que podrian ayudar a un atacante, como la fuga de informacion sensible en HTTP header:

![Autopsy](https://raw.githubusercontent.com/meowrawr-ui/meowrawr-ui.github.io/main/informe8.1_oli/owasp.png)

# 2.6 Conclusiones

El respaldo y analisis constante de archivos de sistemas puede ayudar a prevenir perdidas en un sistema

## 2.6.1 Resumen de los hallazgos clave

Autopsy muestra con gran detalle el estado del sistema de archivos EXT4 del servidor

OWASP Zap muestra vulnerabilidades actuales en servidor

## 2.6.2 Respuestas a las preguntas iniciales

Autopsy es una mejor manera de analizar datos en disco que un editor de texto

# 2.7 Recomendaciones

## 2.7.1 Acciones a corto plazo

Dejar funcionando tshark y NMAP para escaneos 

## 2.7.2 Acciones a largo plazo

Seguir inspeccionando logs y reporte de OWASP Zap

## 2.7.3 Mejoras en los procesos de seguridad

Seguir pasos de los reportes de OWASP Zap

# 2.8 Anexos

## 2.8.1 Logs completos

No es algo que deberia subir publicamente a GitHub :)  Pero aqui estan los logs que copie a home

```
[draigarial@draigarial-rpi ~]$ tree log
log
|-- audit
|-- btmp
|-- httpd
|   |-- access_log
|   |-- dragon-access_log
|   |-- dragon-error_log
|   |-- draigarial-access_log
|   |-- draigarial-error_log
|   |-- error_log
|   |-- unknown-access_log
|   |-- unknown-error_log
|   |-- vilxdrad-access_log
|   `-- vilxdryad-error_log
|-- journal
|   |-- ed435415de2942d5a2fef3bbca8895f6
|   |   |-- system.journal
|   |   |-- system@0005f4eeaf5ff477-237ad09529c03c52.journal~
|   |   |-- system@75c71b3fbe6f41ab9d6a266043c41e3d-0000000000056234-0005f4eeaf551f1f.journal
|   |   |-- user-1000.journal
|   |   `-- user-1000@a2194ced42cb44b282319e1cc1b48748-00000000000504be-00061eea1f123102.journal
|   `-- remote
|-- lastlog
|-- letsencrypt
|   |-- letsencrypt.log
|   |-- letsencrypt.log.1
|   |-- letsencrypt.log.10
|   |-- letsencrypt.log.100
|   |-- letsencrypt.log.101
|   |-- letsencrypt.log.102
|   |-- letsencrypt.log.103
|   |-- letsencrypt.log.104
...
```

Tambien hice un volcado de los logs de journalctl con `sudo journalctl > journalctl.log`

## 2.8.2 Capturas de pantalla

![Disk dump hashes calculated in HashCalc](https://raw.githubusercontent.com/meowrawr-ui/meowrawr-ui.github.io/main/markdown_assets/diskdumphash.png)



![Last modified log list](https://raw.githubusercontent.com/meowrawr-ui/meowrawr-ui.github.io/main/markdown_assets/lastmodlog.png)

## 2.8.3 Reportes de herramientas

sudo journalctl > journalctl.log:
```
Aug 05 08:50:55 draigarial-rpi dbus-daemon[337]: [system] Activating via systemd: service name='org.freedesktop.home1' unit='dbus-org.freedesktop.home1.service' requested by ':1.187' (uid=0 pid=16499 comm="sudo mysql -uroot")
```

## 2.8.3 Evidencia digital adicional

Ninguna que reportar por ahora, se espera reparar NMap y Wireshark-cli en mi sistema
