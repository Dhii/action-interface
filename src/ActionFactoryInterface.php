<?php

namespace Dhii\Action;

use Dhii\Factory\FactoryInterface;

/**
 * Creates actions.
 *
 * @since [*next-version*]
 */
interface ActionFactoryInterface extends FactoryInterface
{
    const K_ACTION = 'action';

    /**
     * {@inheritdoc}
     *
     * @since [*next-version*]
     *
     * @return ActionInterface The new action.
     */
    public function make($config = null);
}
