<?php

namespace Dhii\Action;

use Dhii\Action\Exception\CouldNotRunExceptionInterface;
use Dhii\Action\Exception\RunExceptionInterface;

/**
 * A runnable action.
 *
 * @since [*next-version*]
 */
interface ActionInterface
{
    /**
     * Runs the action.
     *
     * @since [*next-version*]
     *
     * @throws CouldNotRunExceptionInterface If the action could not be run.
     * @throws RunExceptionInterface         If an exception has occurred while running.
     */
    public function run();
}
