<?php
class producto
{

	private $pdo;
    
    public $idProductosConsumo;
    public $nombreProducto;
    public $precioProducto;
    

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

			$stm = $this->pdo->prepare("SELECT * FROM productos_consumo");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($idProducto)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM productos_consumo WHERE idProductosConsumo = ?");
			          

			$stm->execute(array($idProducto));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($idProducto)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM productos_consumo WHERE idProductosConsumo = ?");			          

			$stm->execute(array($idProducto));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE productos_consumo SET 
							idProductosConsumo   	      = ?,
							nombeProducto         = ?, 
                            precioProducto        = ?
							
                        	
				    WHERE idProductosConsumo = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
				    	$data->idProductosConsumo, 
                        $data->nombeProducto,                        
                        $data->precioProductol,
                        
                       
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(producto $data)
	{
		try 
		{
		$sql = "INSERT INTO productos_consumo (idProductosConsumo ,nombeProducto,precioProducto) 
		        VALUES (?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
						$data->idProductosConsumo, 
                        $data->nombeProducto,                        
                        $data->precioProducto,
                   
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}