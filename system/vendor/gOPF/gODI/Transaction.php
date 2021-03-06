<?php

namespace gOPF\gODI;

/**
 * gODI transaction component.
 *
 * @author    Grzegorz `Grze_chu` Borkowski <mail@grze.ch>
 * @copyright Copyright (C) 2011-2015, Grzegorz `Grze_chu` Borkowski <mail@grze.ch>
 * @license   The GNU Lesser General Public License, version 3.0 <http://www.opensource.org/licenses/LGPL-3.0>
 */
class Transaction implements \System\Database\TransactionInterface
{
    /**
     * PDO connector.
     *
     * @var \PDO
     */
    private $PDO;

    /**
     * Initializes statement.
     *
     * @param \PDO $PDO PDO connector
     */
    public function __construct(\PDO $PDO)
    {
        $this->PDO = $PDO;
    }

    /**
     * @see \System\Database\TransactionInterface::begin()
     */
    public function begin()
    {
        $this->PDO->beginTransaction();
    }

    /**
     * @see \System\Database\TransactionInterface::commit()
     */
    public function commit()
    {
        $this->PDO->commit();
    }

    /**
     * @see \System\Database\TransactionInterface::revert()
     */
    public function revert()
    {
        $this->PDO->rollBack();
    }

    /**
     * @see \System\Database\TransactionInterface::status()
     */
    public function status()
    {
        return $this->PDO->inTransaction();
    }
}
