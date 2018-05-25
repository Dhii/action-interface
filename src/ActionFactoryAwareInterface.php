<?php

namespace Dhii\Action;

/**
 * Something that can have an action factory retrieved.
 *
 * @since [*next-version*]
 */
interface ActionFactoryAwareInterface
{
    /**
     * Retrieves the action factory that is associated with this instance.
     *
     * @since [*next-version*]
     *
     * @return ActionFactoryInterface|null The action factory, if any.
     */
    public function getActionFactory();
}
