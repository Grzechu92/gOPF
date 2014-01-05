<?php
	namespace gOPF\gODI;
	use \PDO;
	
	abstract class Statement {
		const INT = PDO::PARAM_INT;
		const STRING = PDO::PARAM_STR;
		const BOOL = PDO::PARAM_BOOL;
		
		private $PDO;
		private $bind = array();
		
		final public function __construct(PDO $PDO) {
			$this->PDO = $PDO;
		}
		
		final public function bind(\gOPF\gODI\Statement\Bind $bind) {
			$this->bind[] = $bind;
		}
		
		final protected function execute() {
			$q = $this->build();
			var_dump($q, $this->bind);
			
			$query = $this->PDO->prepare($q);
			
			foreach ($this->bind as $bind) {
				$query->bindValue($bind->name, $bind->value, $bind->type);
			}
			
			$query->execute();
			return $query->fetchAll(PDO::FETCH_OBJ);
		}
	}
?>