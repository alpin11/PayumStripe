<?php

declare(strict_types=1);

namespace Prometee\PayumStripe\Request\Api\Resource;

use Payum\Core\Model\ModelAggregateInterface;
use Payum\Core\Model\ModelAwareInterface;
use Payum\Core\Security\TokenAggregateInterface;

interface CreateInterface extends ResourceAwareInterface, OptionsAwareInterface, ModelAwareInterface, ModelAggregateInterface, TokenAggregateInterface
{
    /**
     * @return array
     */
    public function getParameters(): array;

    /**
     * @param array $parameters
     */
    public function setParameters(array $parameters): void;
}
