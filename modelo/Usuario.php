<?php


private $pdo;

class Usuario {

    private $idUsuario;
    private $nombre;
    private $apellido;
    private $correo;
    private $telefono
    private $contraseña;
    private $idFuncionIndustria;
    
    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getNombre() {
        return $this->nombre;
    }

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM usuario");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($idUsuario)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM usuario WHERE idUsuario = ?");
			          
    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

			$stm->execute(array($idUsuario));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function logear($idUsuario)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM usuario WHERE correo = ? AND contraseña = ?");
			          

			$stm->execute(array($idUsuario));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($idUsuario)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM usuario WHERE idUsuario = ?");			          

			$stm->execute(array($idUsuario));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE usuario SET 
							idUsuario  	             = ?,
							nombreUsuario            = ?, 
							apellidoUsuario          = ?,
                        	correo                   = ?,
                        	telefono                 = ?,
                            contraseña               = ?,
                            idFuncionIndustria       = ?
						
				    WHERE idUsuario = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
				    	$data->idUsuario , 
                        $data->nombre,                        
                        $data->apellido,
                        $data->correo,
                        $data->telefono, 
                        $data->contraseña, 
                        $data->idFuncionIndustria, 
                       
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(usuario $data)
	{
		try 
		{
		$sql = "INSERT INTO usuario (idUsuario ,nombreUsuario, apellidoUsuario ,correo , telefono, contraseña, idFuncionIndustria  ) 
		        VALUES (?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
						$data->idUsuario, 
                        $data->nombre,                        
                        $data->apellido,
                        $data->correo,
                        $data->telefono,
                        $data->contraseña,
                        $data->idFuncionIndustria
                   
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
=======
    function setContraseña($contraseña) {
        $this->contraseña = $contraseña;
    }



}
