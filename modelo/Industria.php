<?php
class industria
{

	private $pdo;
    
    public $idFuncionIndustria;
    public $nombreFuncion;
    public $categoria;
    

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

			$stm = $this->pdo->prepare("SELECT * FROM funcion_industria");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($idFuncionIndustria)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM funcion_industria WHERE idFuncionIndustria = ?");
			          

			$stm->execute(array($idFuncionIndustria));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($idFuncionIndustria)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM funcion_industria WHERE idFuncionIndustria = ?");			          

			$stm->execute(array($idFuncionIndustria));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE funcion_industria SET 
							idFuncionIndustria  	      = ?,
							nombreFuncion         = ?, 
                            categoria       = ?
							
                        	
				    WHERE idFuncionIndustria = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
				    	$data->idFuncionIndustria, 
                        $data->nombreFuncion,                        
                        $data->precioProductol,
                        
                       
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(industria $data)
	{
		try 
		{
		$sql = "INSERT INTO funcion_industria (idFuncionIndustria ,nombreFuncion,categoria) 
		        VALUES (?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
						$data->idFuncionIndustria, 
                        $data->nombreFuncion,                        
                        $data->categoria,
                   
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}