<a id="portada"></a><h1>1. Portada</h1>
* Título del Informe

**Empresa de Venta de Maquillajes y Manejo de Stock**

* Nombre del Estudiante

**Oliver Espinoza**

* Rol en el Proyecto

**Implementador/Evaluador**

* Nombre del Curso:

**Redes Seguras y Ciberseguridad**

* Grupo de Trabajo: [Nombre del Grupo/Proy ecto]

**Grupo 6/Meowrawr**

* Fecha de Entrega

**10/07/2024**

<a id="indice"></a><h1>2. Índice</h1>
* Lista de contenidos del informe con los números de página correspondientes.

[1. Portada](#portada)

[2. Índice](#indice)

[3. Introducción](#introduccion)

[4. Análisis de Requisitos (Para Analistas](#analistas)

[4.1 Tareas (Para Analistas](#tareasanalistas)

[4.2 Extra Para Analistas:](#extraanalistas)

[5. Implementación de Seguridad (Para Implementadores)](#implementadores)

[5.1 Tareas (Para Implementadores)](#tareasimplementadores)

[5.2 Extra Para Implementadores](#extraimplementadores)

[6. Implementación de Seguridad (Para Implementadores)](#implementadores)

[6.1 Tareas (Para Evaluadores)](#tareasevaluadores)

[6.2 Extra Para Evaluadores](#extraevaluadores)

[7. Conclusión](#conclusion)

[8. Bibliografia](#bibliografia)

[9. Anexos (Opcional)](#anexos)

<a id="introduccion"></a><h1>3. Introducción</h1>
* Objetivo del Informe: Descripción del propósito del informe y del ejercicio individual.
* Contexto: Breve resumen del caso de estudio y el papel específico del estudiante dentro del proyecto.

<a id="analistas"></a><h1>4. Análisis de Requisitos (Para Analistas)</h1>

Vease informe de Alejandra

<a id="implementadores"></a><h1>5. Implementación de Seguridad (Para Implementadores)</h1>

* Implementador: Oliver
* Ejercicio: Implementa controles de seguridad en la tienda en línea, incluyendo protección contra ataques DoS y validación de entradas.
* Tareas:
- Configurar protección contra ataques DoS y sistemas de autenticación.

**Comprar servicios anti-DDoS de CloudFlare para conectar al servidor en la nube, Google Authenticator para MFA**

- Desarrollar validaciones de entrada para evitar inyecciones de código.

**Usar funciones built-in en JavaScript para sanitisar campos de entrada, filtrandolo con**

- Documentar los procedimientos de seguridad aplicados.

**Mantener registro, como en SIEM**

<a id="tareasimplementadores"></a><h2>5.1 Tareas (Para implementadores)</h2>
* Descripción de las Medidas Implementadas:
- Detalles de las características de seguridad añadidas (e.g., autenticación, cifrado).

**Autenticacion multifactor, almacenamiento hasheado y salteado de contraseñas, CloudFlare DDoS services, Amazon AWS, IPS, Hardware Firewall, Proxy inverso, control de acceso, principio de minimo permiso**

- o	Herramientas y tecnologías utilizadas.

**Cloud, WebPay, Google Authenticator, Apache web server, MariaDB, PHP, Arch Linux**

* Procedimiento de Implementación:
- Pasos seguidos para la implementación de cada medida.

**Poner filtrado de campos en sitio, antes de ser enviados a servidor, instalar Arch Linux por Live USB, Implementar API de Google Authenticator y WebPay en sitio, instalar modulo PHP para Apache**

- Capturas de pantalla o fragmentos de código relevantes.

**Sanitisacion de campo en JavaScript**
```
function validateForm() {
let x = document.forms["form"]["email"].value;
const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

if (x == "") {
alert("Email must be filled out");

return false;
} else if (re.test(String(x).toLowerCase()) == false) {
alert("Email must be valid");

return false;
}
return true;
}
```

* Pruebas Realizadas:
- Descripción de las pruebas realizadas para verificar la implementación.

**Reglas IPS actualizadas en Suricata, pentesting via MetaExploit**

- Resultados obtenidos y cualquier ajuste realizado.

**Registrar en SIEM, actualizacion y mejora continua en el proceso**


<a id="extraimplementadores"></a><h2>5.2 Extra para Implementadores:</h2>
1.	Planificación de la Implementación:
- Revisar las recomendaciones de seguridad del analista.
- Elaborar un plan de acción detallado.
2.	Configuración Inicial:
- Configurar entornos de desarrollo y prueba.
- Instalar y configurar herramientas de seguridad (e.g., frameworks de autenticación).
3.	Desarrollo de Medidas de Seguridad:
- Implementar las características de seguridad recomendadas.
- Desarrollar validaciones de entrada y controles de acceso.
4.	Pruebas y Validación:
- Realizar pruebas unitarias y de integración para verificar la seguridad.
- Ajustar la implementación en función de los resultados de las pruebas.
5.	Documentación:
- Documentar el proceso de implementación y las configuraciones realizadas.
- Preparar informes de pruebas con resultados y ajustes realizados.

<a id="evaluadores"></a><h1>6. Evaluación de Seguridad (Para Evaluadores)</h1>
* Evaluadores: Alejandra y Oliver
* Ejercicio: Realiza evaluaciones de seguridad en la tienda en línea para verificar la protección de datos de pago y clientes.
* Tareas:
- Realizar auditorías de seguridad y pruebas de penetración.
- Verificar la seguridad en la autenticación y protección de datos.
- Elaborar un informe con hallazgos y recomendaciones.

<a id="tareasevaluadores"></a><h2>6.1 Tareas (Para evaluadores)</h2>
* Métodos de Evaluación:
- Descripción de las técnicas de evaluación utilizadas (e.g., pruebas de penetración, revisión de código).

**Evaluacion de riesgos, pruebas estaticas, y dinamicas**

- Herramientas empleadas en el proceso de evaluación.

**Test suites**

* Resultados de la Evaluación:
- Hallazgos clave de la evaluación de seguridad.

**Vulnerabilidades conocidas, priorizadas por gravedad**

- Vulnerabilidades identificadas y su gravedad.

**Inyeccion SQL, XSS**

* Recomendaciones:
- Sugerencias para mejorar la seguridad basadas en los resultados.

**Mitigar vulnerabilidades, del mas grave primero**

- Prioridades para la implementación de mejoras.

**La de mayor riesgo**

<a id="extraevaluadores"></a><h2>6.2 Extra para evaluadores</h2>

Para Evaluadores:
1.	Preparación de la Evaluación:
- Revisar la implementación de seguridad y su documentación.
- Configurar herramientas de evaluación y pruebas de seguridad.
2.	Ejecución de Pruebas:
- Realizar pruebas de penetración, revisiones de código y auditorías.
- Documentar las vulnerabilidades encontradas y su impacto.
3.	Análisis de Resultados:
- Analizar los hallazgos de las pruebas.
- Evaluar la efectividad de las medidas de seguridad implementadas.
4.	Elaboración de Recomendaciones:
- Proponer mejoras basadas en los resultados de la evaluación.
- Priorizar las recomendaciones según su impacto y viabilidad.
5.	Documentación:
- Redactar un informe de evaluación detallado.
- Incluir una sección con recomendaciones para mejoras futuras.

<a id="conclusion"></a><h1>7. Conclusión</h1>
* Resumen de Hallazgos: Síntesis de los puntos clave del informe.

**Mitigrar vulnerabilidades para evitar comprometer la organizacion y su reputacion**

* Reflexión Personal: Opinión del estudiante sobre la efectividad de las medidas de seguridad implementadas y/o evaluadas.

**Constante mejora de proceso, las implementadas son suficientes por ahora**

* Recomendaciones Futuras: Sugerencias para futuras implementaciones o evaluaciones en proyectos similares.

**Copiar y pegar**

<a id="bibliografia"></a><h1>8. Bibliografía</h1>
* Lista de referencias utilizadas en el informe, incluyendo artículos, libros, sitios web y documentación técnica.

**Resultados Google**

<a id="anexos"></a><h1>9. Anexos (Opcional)</h1>
* Documentación adicional que soporte el informe, como capturas de pantalla, gráficos, o resultados de pruebas detalladas.
