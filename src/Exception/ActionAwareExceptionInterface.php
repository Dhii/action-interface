<?php

namespace Dhii\Action\Exception;

use Dhii\Action\ActionAwareInterface;

/**
 * An exception related to a specific action.
 *
 * @since [*next-version*]
 */
interface ActionAwareExceptionInterface extends ActionExceptionInterface, ActionAwareInterface
{
}
