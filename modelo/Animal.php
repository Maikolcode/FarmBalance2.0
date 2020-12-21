<?php

class Animal {

	private $pdo;

    private $idAnimal;
    private $nombreAnimal;
    private $semanaVenta;
    private $idProductoConsumo;
    private $costoAlimentacionSemanal;
    private $costoVacunasSemanal;
    private $costohabita;
    private $costoPurgasSemanal;
    
 

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

			$stm = $this->pdo->prepare("SELECT * FROM animal");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($idAnimal)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM animal WHERE idAnimal = ?");
			          

			$stm->execute(array($idAnimal));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($idAnimal)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM animal WHERE idAnimal = ?");			          

			$stm->execute(array($idAnimal));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE animal SET 
							idAnimal  	      = ?,
							nombreAnimal        = ?, 
                            semanaVenta      = ?,
							idProductoConsumo        = ?,
							costoAlimentacionSemanal        = ?,
							costoVacunasSemanal        = ?,
							costohabita        = ?,
							costoPurgasSemanal 	=?
                        	
				    WHERE idAnimal = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
				    	$data->idAnimal, 
                        $data->nombreAnimal,                        
						$data->semanaVenta,
						$data->idProductoConsumo, 
						$data->costoAlimentacionSemanal, 
						$data->costoVacunasSemanal , 
						$data->costohabita , 
						$data->costoPurgasSemanal, 

                       
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Animal $data)
	{
		try 
		{
		$sql = "INSERT INTO animal (idAnimal , nombreAnimal, semanaVenta, idProductoConsumo, costoAlimentacionSemanal, costoVacunasSemana, ostohabita, costoPurgasSemanal ) 
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
					$data->idAnimal, 
					$data->nombreAnimal,                        
					$data->semanaVenta,
					$data->idProductoConsumo, 
					$data->costoAlimentacionSemanal, 
					$data->costoVacunasSemanal , 
					$data->costohabita , 
					$data->costoPurgasSemanal, 
                   
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}