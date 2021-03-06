<?php

namespace System\Database;

/**
 * Base class for database engine.
 *
 * @author    Grzegorz `Grze_chu` Borkowski <mail@grze.ch>
 * @copyright Copyright (C) 2011-2015, Grzegorz `Grze_chu` Borkowski <mail@grze.ch>
 * @license   The GNU Lesser General Public License, version 3.0 <http://www.opensource.org/licenses/LGPL-3.0>
 */
abstract class Engine
{
    /**
     * Engine config.
     *
     * @var array
     */
    protected $config = array();

    /**
     * Engine handler.
     *
     * @var mixed
     */
    protected $handler;

    /**
     * @see \System\Database\EngineInterface::__construct()
     */
    public function __construct($config)
    {
        $this->config = $config;
    }

    /**
     * @see \System\Database\EngineInterface::handler()
     */
    public function handler()
    {
        return $this->handler;
    }
}
