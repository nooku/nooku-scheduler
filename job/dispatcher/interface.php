<?php
/**
 * Nooku Framework - http://nooku.org/framework
 *
 * @copyright   Copyright (C) 2015 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://github.com/nooku/nooku-scheduler for the canonical source repository
 */

/**
 * Dispatcher interface
 *
 * @author Ercan Ozkaya <https://github.com/ercanozkaya>
 * @package Koowa\Component\Scheduler
 */
interface ComSchedulerJobDispatcherInterface
{
    /**
     * Dispatches the next job in line
     *
     * @return bool
     */
    public function dispatch();

    /**
     * Picks the next job to run based on priority
     *
     * @return null|KDatabaseRowInterface
     */
    public function pickNextJob();

    /**
     * Logs a message for debugging purposes
     *
     * @param $message
     * @param $job KObjectInterface|null
     */
    public function log($message, $job = null);

    /**
     * Returns the logs
     *
     * @return array
     */
    public function getLogs();

    /**
     * Returns the current model after resetting its state
     *
     * @return KModelInterface
     */
    public function getModel();

    /**
     * Sets the model
     *
     * @param $model string|KModelInterface
     * @return $this
     */
    public function setModel($model);
}