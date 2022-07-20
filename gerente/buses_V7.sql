CREATE TABLE usuario (
  usuarioid SERIAL PRIMARY KEY NOT NULL,
  tipo INTEGER NOT NULL,
  nombres VARCHAR(100) NOT NULL,
  apellidos VARCHAR(100) NOT NULL,
  correo VARCHAR(100) NOT NULL,
  contrasena VARCHAR(100) NOT NULL
);

CREATE TABLE pasajero (
  cedulaP INTEGER PRIMARY KEY NOT NULL,
  nombres VARCHAR(100) NOT NULL,
  apellidos VARCHAR(100) NOT NULL,
  asiento INTEGER NOT NULL,
  boletoid INTEGER
);

CREATE TABLE boleto (
  boletoid SERIAL PRIMARY KEY NOT NULL,
  tipo_cuenta INTEGER NOT NULL,
  nombre_titular VARCHAR(100) NOT NULL,
  numero_cuenta INTEGER NOT NULL,
  codigo_cvc INTEGER NOT NULL,
  fecha_compra DATE NOT NULL,
  usuarioid INTEGER,
  viajesid INTEGER
);

CREATE TABLE viajes (
  viajesid SERIAL PRIMARY KEY NOT NULL,
  fotoViaje VARCHAR(100) NOT NULL,
  fechaViaje TIMESTAMP NOT NULL,
  costoViaje INTEGER NOT NULL,
  provinciaSalida INTEGER,
  provinciaLlegada INTEGER,
  placaB VARCHAR(20),
  estadosid INTEGER
);

CREATE TABLE provincia (
  provinciaid SERIAL PRIMARY KEY NOT NULL,
  descripcion VARCHAR(100) NOT NULL
);

CREATE TABLE buses (
  placaB VARCHAR(20) PRIMARY KEY NOT NULL,
  modelo VARCHAR(100) NOT NULL,
  asientos INTEGER NOT NULL,
  imagenbus VARCHAR(100) NOT NULL,
  estado INTEGER NOT NULL
);

CREATE TABLE empleados (
  cedulaE INTEGER PRIMARY KEY NOT NULL,
  nombres VARCHAR(100) NOT NULL,
  apellidos VARCHAR(100) NOT NULL,
  estados INTEGER NOT NULL,
  imagenempleado VARCHAR(100) NOT NULL,
  rolesid INTEGER
);

CREATE TABLE viajes_Empleados (
  VEid SERIAL PRIMARY KEY NOT NULL,
  cedulaE INTEGER,
  viajesid INTEGER
);

CREATE TABLE roles (
  rolesid SERIAL PRIMARY KEY NOT NULL,
  descripcion VARCHAR(100)
);

CREATE TABLE estados (
  estadosid SERIAL PRIMARY KEY NOT NULL,
  descripcion VARCHAR(100) NOT NULL
);

ALTER TABLE pasajero ADD FOREIGN KEY (boletoid) REFERENCES boleto (boletoid);

ALTER TABLE boleto ADD FOREIGN KEY (usuarioid) REFERENCES usuario (usuarioid);

ALTER TABLE boleto ADD FOREIGN KEY (viajesid) REFERENCES viajes (viajesid);

ALTER TABLE viajes ADD FOREIGN KEY (provinciaSalida) REFERENCES provincia (provinciaid);

ALTER TABLE viajes ADD FOREIGN KEY (provinciaLlegada) REFERENCES provincia (provinciaid);

ALTER TABLE viajes ADD FOREIGN KEY (placaB) REFERENCES buses (placaB);

ALTER TABLE viajes ADD FOREIGN KEY (estadosid) REFERENCES estados (estadosid);

ALTER TABLE empleados ADD FOREIGN KEY (rolesid) REFERENCES roles (rolesid);

ALTER TABLE viajes_Empleados ADD FOREIGN KEY (cedulaE) REFERENCES empleados (cedulaE);

ALTER TABLE viajes_Empleados ADD FOREIGN KEY (viajesid) REFERENCES viajes (viajesid);

--ROLES
INSERT INTO roles(descripcion) VALUES ('Conductor'),('Oficial');

--ESTADOS
INSERT INTO estados(descripcion) VALUES ('Activo');

INSERT INTO estados(descripcion) VALUES ('Inactivo');

INSERT INTO estados(descripcion) VALUES ('En Proceso');

--PROVINCIAS
INSERT INTO provincia(descripcion) VALUES('Azuay');
INSERT INTO provincia(descripcion) VALUES('Bolivar');
INSERT INTO provincia(descripcion) VALUES('Cañar');
INSERT INTO provincia(descripcion) VALUES('Carchi');
INSERT INTO provincia(descripcion) VALUES('Chimborazo');
INSERT INTO provincia(descripcion) VALUES('Cotopaxi');
INSERT INTO provincia(descripcion) VALUES('El Oro');
INSERT INTO provincia(descripcion) VALUES('Esmeraldas');
INSERT INTO provincia(descripcion) VALUES('Guayanas');
INSERT INTO provincia(descripcion) VALUES('Imbabura');
INSERT INTO provincia(descripcion) VALUES('Loja');
INSERT INTO provincia(descripcion) VALUES('Los Rios');
INSERT INTO provincia(descripcion) VALUES('Manabi');
INSERT INTO provincia(descripcion) VALUES('Morona Santiago');
INSERT INTO provincia(descripcion) VALUES('Napo');
INSERT INTO provincia(descripcion) VALUES('Sucumbios');
INSERT INTO provincia(descripcion) VALUES('Pastaza');
INSERT INTO provincia(descripcion) VALUES('Pichincha');
INSERT INTO provincia(descripcion) VALUES('Santa Elena');
INSERT INTO provincia(descripcion) VALUES('Santo Domingo');
INSERT INTO provincia(descripcion) VALUES('Francisco de Orellana');
INSERT INTO provincia(descripcion) VALUES('Tungurahua');
INSERT INTO provincia(descripcion) VALUES('Zamora Chinchipe');
