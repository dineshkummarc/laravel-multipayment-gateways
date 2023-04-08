<?php

namespace MusahMusah\LaravelMultipaymentGateways\Traits\Paystack;

use GuzzleHttp\Exception\GuzzleException;
use MusahMusah\LaravelMultipaymentGateways\Exceptions\HttpMethodFoundException;
use MusahMusah\LaravelMultipaymentGateways\Services\HttpClientWrapper;

trait BankTrait
{
    /**
     * Hit Paystack's API to get all the Banks
     *
     *
     * @throws GuzzleException|HttpMethodFoundException
     */
    public function getBanks(): array
    {
        return paystack()->httpClient()->get('bank');
    }

    /**
     * Hit Paystack's API to resolve a bank account
     *
     *
     * @throws GuzzleException|HttpMethodFoundException
     */
    public function resolveAccountNumber(array $payload): array
    {
        return paystack()->httpClient()->get('bank/resolve', $payload);

    }
}
