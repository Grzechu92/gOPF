<?php
	namespace gOPF\gODI;
	
	class Insert extends Statement {
		use \gOPF\gODI\Traits\ValuesTrait;
		
		public function build() {
			$parts = array(
				'INSERT INTO '.$this->table,
				'SET '.implode($this->values, ', ')
			);
			
			return trim(implode(' ', $parts));
		}
		
		public function make() {
			return $this->execute(false);
		}
	}
?>