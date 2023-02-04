<?php

namespace MusahMusah\LaravelMultipaymentGateways\Exceptions;

use Exception;

class InvalidPaymentWebhookSignature extends Exception
{
    /**
     * A custom exception that is thrown when the signature is invalid
     *
     * @param  string  $configNotFoundName
     * @return self
     */
    public static function invalidSignature(string $configNotFoundName): self
    {
        return new self("The signature for `{$configNotFoundName}` is invalid. Please ensure that the `signing_secret` config key is entered correctly.");
    }
}
