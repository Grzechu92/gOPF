<?php
	namespace System\Terminal\Command;
	
	class timeCommand extends \System\Terminal\Command implements \System\Terminal\CommandInterface {
		public function execute(\System\Terminal\Session $session) {
			if ($this->getParameter('readable')) {
				$session->buffer(date('H:m:s'));
			} else {
				$session->buffer(time());
			}
		}
	}
?>