SELECT * 
FROM prestamo AS pr, docente AS dc
WHERE pr.docente_clave = dc.clave
LIMIT 0 , 30


SELECT fecha_prestamo,hora,HoraTermino,nombre, apellidos FROM prestamo INNER JOIN docente ON prestamo.docente_clave = docente.clave