<?php

// File generated from our OpenAPI spec

namespace Stripe\Service\V2\Payments;

/**
 * Service factory class for API resources in the Payments namespace.
 *
 * @property OffSessionPaymentService $offSessionPayments
 */
class PaymentsServiceFactory extends \Stripe\Service\AbstractServiceFactory
{
    /**
     * @var array<string, string>
     */
    private static $classMap = [
        'offSessionPayments' => OffSessionPaymentService::class,
    ];

    protected function getServiceClass($name)
    {
        return \array_key_exists($name, self::$classMap) ? self::$classMap[$name] : null;
    }
}
