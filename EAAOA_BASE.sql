INSERT INTO docentes (matricula_doc, nombre, apellido, correo, contraseña)
VALUES 
('11111', 'Ana', 'Ruiz', 'ana.ruiz@ejem.com', '11111'),
('22222', 'Luis', 'Moreno', 'luis.moreno@ejem.com', '22222');


INSERT INTO alumnos (matricula_al, nombre, apellido, carrera, fecha_titulacion, nivel_estudios)
VALUES 
('00001', 'Cristian', 'Sosa', 'ITS', '2024-06-24', 'Licenciatura'),
('00002', 'Sofia', 'Zul', 'IMA', '2024-12-23', 'Licenciatura');

INSERT INTO tesis (titulo, descripcion, estatus, fecha_inicio, fecha_termino, fecha_examen, matricula_al, matricula_doc)
VALUES 
('Aplicaciones de POO', 'Tesis sobre como la programacion orientada objetos se aplica en la industria', 'Aprobada', '2024-01-28', '2024-06-07', '2024-06-20', '00001', '11111'),
('Programacion y ambiente', 'Propone una aplicacion diferente de la programacion para resolver problemas ambientales ', 'Aprobada', '2024-08-10', '2024-10-07', '2024-12-05', '00002', '22222');

INSERT INTO empleados (nombre, apellido, turno, contraseña, id_tesis, matricula_doc, matricula_al)
VALUES 
('Jose', 'Palomo', 'Matutino', 'Jose1234', '1', '11111', '00001'),
('Karla', 'Santos', 'Vespertino', 'Karla1234', '2', '22222', '00002');

INSERT INTO proyecto (nombre, estatus, fecha_inicio, objetivo, actividades_realizadas, alumnos_participantes, calificacion, proyectos_hechos, matricula_al, matricula_doc)
VALUES
('Proyecto 1', 'Concluido', '2024-02-12', 'Aplicacion del sistema creado y analisis de resultados', '3', 'Cristian Sosa, Sofia Zul', '88', '1', '00001', '11111');

