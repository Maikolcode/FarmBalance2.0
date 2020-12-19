# FarmBalance2.0 


<img src="multimedia/img/primerLogo.svg"></img> 


Código libre y educativo en PHP
--------------------------------------------
Si deseas implementar nuestra base de datos te facilitamos algunos `Querys en MySql`

CREATE SCHEMA IF NOT EXISTS FarmBalance DEFAULT CHARACTER SET utf8;

USE FarmBalance;

--------------------------------------------------------------

CREATE TABLE IF NOT EXISTS FarmBalance.funcion_industria (

  idFuncion_industria INT NOT NULL AUTO_INCREMENT,
  
  nombreFuncion VARCHAR(45) NOT NULL,
  
  categoria VARCHAR(45) NOT NULL,
  
  PRIMARY KEY (idFuncion_industria))
  
ENGINE = InnoDB;

--------------------------------------------------------------


CREATE TABLE IF NOT EXISTS FarmBalance.Usuario (

  idUsuario INT NOT NULL AUTO_INCREMENT,
  
  nombreUsuario VARCHAR(45) NOT NULL,
  
  apellidoUsuario VARCHAR(45) NOT NULL,
  
  correo VARCHAR(45) NOT NULL,
  
  telefono BIGINT(10) NOT NULL,
  
  contrasenia VARCHAR(30) NOT NULL,
  
  idFuncion_industria INT NOT NULL,
  
  PRIMARY KEY (idUsuario),
  
  UNIQUE INDEX correo_UNIQUE (correo) ,
  
  INDEX idFuncion_industrias_idx (idFuncion_industria) ,
  
  CONSTRAINT idFuncion_industria
  
    FOREIGN KEY (idFuncion_industria)
    
    REFERENCES FarmBalance.funcion_industria (idFuncion_industria)
    
    ON DELETE NO ACTION
    
    ON UPDATE NO ACTION)
    
ENGINE = InnoDB;

--------------------------------------------------------------


CREATE TABLE IF NOT EXISTS FarmBalance.productos_consumo (

  idProductos_consumo INT NOT NULL AUTO_INCREMENT,
  
  nombreProducto VARCHAR(45) NOT NULL,
  
  precioProducto INT NOT NULL,
  
  PRIMARY KEY (idProductos_consumo))
  
ENGINE = InnoDB;

--------------------------------------------------------------

CREATE TABLE IF NOT EXISTS FarmBalance.Animal (

  idAnimal INT NOT NULL AUTO_INCREMENT,
  
  idUsuario INT NOT NULL,
  
  nombreAnimal VARCHAR(45) NOT NULL,
 
  pesoAnimal INT NOT NULL,
  
  pesoVenta DOUBLE NOT NULL,
  
  edadAnimal INT NOT NULL,
  
  cantidadAnimal INT NOT NULL,
  
  idProducto_consumo INT NOT NULL,
  
  PRIMARY KEY (idAnimal),
  
  INDEX idUsuario_idx (idUsuario) ,
  
  INDEX idProducto_consumo_idx (idProducto_consumo) ,
  
  CONSTRAINT idUsuario
  
    FOREIGN KEY (idUsuario)
    
    REFERENCES FarmBalance.Usuario (idUsuario)
    
    ON DELETE NO ACTION
    
    ON UPDATE NO ACTION,
    
  CONSTRAINT idProducto_consumo
  
    FOREIGN KEY (idProducto_consumo)
    
    REFERENCES FarmBalance.productos_consumo (idProductos_consumo)
    
    ON DELETE NO ACTION
    
    ON UPDATE NO ACTION)
    
ENGINE = InnoDB;

<img src="multimedia/img/segundoLogo.svg"></img> 
