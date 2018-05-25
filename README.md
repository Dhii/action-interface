# Dhii - Action Interface

[![Build Status](https://travis-ci.org/Dhii/action-interface.svg?branch=develop)](https://travis-ci.org/Dhii/action-interface)
[![Code Climate](https://codeclimate.com/github/Dhii/action-interface/badges/gpa.svg)](https://codeclimate.com/github/Dhii/action-interface)
[![Test Coverage](https://codeclimate.com/github/Dhii/action-interface/badges/coverage.svg)](https://codeclimate.com/github/Dhii/action-interface/coverage)
[![Latest Stable Version](https://poser.pugx.org/dhii/action-interface/version)](https://packagist.org/packages/dhii/action-interface)
[![Latest Unstable Version](https://poser.pugx.org/dhii/action-interface/v/unstable)](https://packagist.org/packages/dhii/action-interface)
[![This package complies with Dhii standards](https://img.shields.io/badge/Dhii-Compliant-green.svg?style=flat-square)][Dhii]

## Details
Interfaces for runnable actions.

### Interfaces
- [`ActionInterface`] - Something that can be run.
- [`ActionAwareInterface`] - Something that is aware of an action.
- [`ActionFactoryInterface`] - Something that can make an action.
- [`ActionFactoryAwareInterface`] - Something is aware of an action factory.
- [`ActionExceptionInterface`] - An exception related to actions.
- [`ActionAwareExceptionInterface`] - An exception that relates to a specific action.
- [`CouldNotRunExceptionInterface`] - An exception that occurs when an action cannot be run.

## Example
```php
use Dhii\Action\ActionInterface;

/** @var ActionInterface $action */
$action->run(); // Does something
```

[Dhii]: https://github.com/Dhii/dhii

[`ActionInterface`]:                            src/ActionInterface.php
[`ActionAwareInterface`]:                       src/ActionAwareInterface.php
[`ActionFactoryInterface`]:                     src/ActionFactoryInterface.php
[`ActionFactoryAwareInterface`]:                src/ActionFactoryAwareInterface.php
[`ActionExceptionInterface`]:                   src/Exception/ActionExceptionInterface.php
[`ActionAwareExceptionInterface`]:              src/Exception/CouldNotRunExceptionInterface.php
[`CouldNotRunExceptionInterface`]:              src/Exception/CouldNotRunExceptionInterface.php
