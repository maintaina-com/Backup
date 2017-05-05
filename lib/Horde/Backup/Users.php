<?php
/**
 * Copyright 2017 Horde LLC (http://www.horde.org/)
 *
 * See the enclosed file LICENSE for license information (BSD). If you
 * did not receive this file, see http://www.horde.org/licenses/bsd.
 *
 * @author   Jan Schneider <jan@horde.org>
 * @category Horde
 * @license  http://www.horde.org/licenses/bsd BSD
 * @package  Backup
 */

namespace Horde\Backup;

/**
 * An application's list of users with backup data.
 *
 * Each application must extend this class and implement the Iterator
 * methods so that the backup data can be returned on demand.
 *
 * @author    Jan Schneider <jan@horde.org>
 * @category  Horde
 * @copyright 2017 Horde LLC
 * @license   http://www.horde.org/licenses/bsd BSD
 * @package   Backup
 */
abstract class Users implements Iterator
{
    /**
     * A single user's backup data.
     *
     * @return \Horde\Backup\User
     */
    abstract public function current();

    /**
     * A user name.
     *
     * @return string
     */
    abstract public function key();

    /**
     */
    abstract public function next();

    /**
     */
    abstract public function rewind();

    /**
     */
    abstract public function valid();
}
