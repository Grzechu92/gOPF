<?php
	namespace reCaptcha\reCaptcha;
	
	/**
	 * reCaptcha exception class
	 * 
	 * @author Grzegorz `Grze_chu` Borkowski <mail@grze.ch>
	 * @copyright Copyright (C) 2011-2013, Grzegorz `Grze_chu` Borkowski <mail@grze.ch>
	 * @license The GNU Lesser General Public License, version 3.0 <http://www.opensource.org/licenses/LGPL-3.0>
	 */
	class Exception extends \Exception {
		/**
		 * @see \Exception::__construct()
		 */
		public function __construct($message) {
			$this->message = 'reCaptcha error: '.$message;
		}
	}
?>