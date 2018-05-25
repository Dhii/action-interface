<?php

namespace Dhii\Action;

/**
 * Something that can have an action retrieved from it.
 *
 * @since [*next-version*]
 */
interface ActionAwareInterface
{
    /**
     * Retrieves the action associated with this instance.
     *
     * @since [*next-version*]`
     *
     * @return ActionInterface|null The action, if any.
     */
    public function getAction();
}
