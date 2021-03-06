<?php

namespace System\Driver;

/**
 * Interface which describes how to write drivers for framework modules.
 *
 * @author    Grzegorz `Grze_chu` Borkowski <mail@grze.ch>
 * @copyright Copyright (C) 2011-2015, Grzegorz `Grze_chu` Borkowski <mail@grze.ch>
 * @license   The GNU Lesser General Public License, version 3.0 <http://www.opensource.org/licenses/LGPL-3.0>
 */
interface DriverInterface extends CrudInterface
{
    /**
     * Saves data into driver.
     *
     * @param AdapterInterface $adapter Driver adapter
     */
    public function __construct(AdapterInterface $adapter);
}
