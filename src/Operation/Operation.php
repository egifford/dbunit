<?php
/*
 * This file is part of DBUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPUnit\DbUnit\Operation;

use PHPUnit\DbUnit\Database\IConnection;
use PHPUnit\DbUnit\DataSet\IDataSet;

/**
 * Provides a basic interface and functionality for executing database
 * operations against a connection using a specific dataSet.
 */
interface Operation
{
    /**
     * Executes the database operation against the given $connection for the
     * given $dataSet.
     *
     * @param  IConnection $connection
     * @param  IDataSet $dataSet
     * @throws Exception
     */
    public function execute(IConnection $connection, IDataSet $dataSet);
}