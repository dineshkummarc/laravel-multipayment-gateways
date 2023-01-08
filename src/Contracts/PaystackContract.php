<?php

namespace MusahMusah\LaravelMultipaymentGateways\Contracts;

use GuzzleHttp\Exception\GuzzleException;
use MusahMusah\LaravelMultipaymentGateways\Exceptions\HttpMethodFoundException;

interface PaystackContract
{
    /**
     * Resolve the authorization URL / Endpoint
     *
     * @param $queryParams
     * @param $formParams
     * @param $headers
     * @return void
     */
    public function resolveAuthorization(&$queryParams, &$formParams, &$headers): void;

    /**
     * Set the access token for the request
     *
     * @return string
     */
    public function resolveAccessToken(): string;

    /**
     * Decode the response
     *
     * @return mixed
     */
    public function decodeResponse(): mixed;

    /**
     * Get the response
     *
     * @return mixed
     */
    public function getResponse(): mixed;

    /**
     * Get the data from the response
     *
     * @return mixed
     */
    public function getData(): mixed;

    /**
     * Get the authorization URL from paystack
     *
     * @return string
     */
    public function getAuthorizationUrl(): string;

    /**
     * Hit Paystack's API to Verify that the transaction is valid
     *
     * @param  string  $reference
     * @return array|object
     *
     * @throws GuzzleException
     * @throws HttpMethodFoundException
     */
    public function verifyTransaction(string $reference): array|object;

    /**
     * Hit Paystack's API to get all the Banks
     *
     * @return mixed
     *
     * @throws GuzzleException|HttpMethodFoundException
     */
    public function getBanks(): mixed;

    /**
     * Hit Paystack's API to resolve a bank account
     *
     * @param  string  $accountNumber
     * @param  string  $bankCode
     * @return mixed
     *
     * @throws GuzzleException
     * @throws HttpMethodFoundException
     */
    public function resolveAccountNumber(string $accountNumber, string $bankCode): mixed;

    /**
     * Hit Paystack's API to create a Transfer Recipient
     *
     * @param  string  $name
     * @param  string  $accountNumber
     * @param  string  $bankCode
     * @return mixed
     *
     * @throws GuzzleException
     * @throws HttpMethodFoundException
     */
    public function createTransferRecipient(string $name, string $accountNumber, string $bankCode): mixed;

    /**
     * Hit Paystack's API to create bulk transfers recipients
     *
     * @param  array  $recipients
     * @return mixed
     *
     * @throws GuzzleException
     * @throws HttpMethodFoundException
     */
    public function createBulkTransferRecipients(array $recipients): mixed;

    /**
     * Hit Paystack's API to initiate a Transfer
     *
     * @param  int  $amount
     * @param  string  $reference
     * @param  string  $recipient
     * @param  string  $reason
     * @return mixed
     *
     * @throws GuzzleException
     * @throws HttpMethodFoundException
     */
    public function initiateTransfer(int $amount, string $reference, string $recipient, string $reason): mixed;

    /**
     * Hit Paystack's API to initiate a Bulk Transfer
     *
     * @param  array  $transfers
     * @return mixed
     *
     * @throws GuzzleException
     * @throws HttpMethodFoundException
     */
    public function initiateBulkTransfer(array $transfers): mixed;

    /**
     * Hit Paystack's API to finalize a Transfer
     */
    public function finalizeTransfer(string $transferCode, string $otp): mixed;

    /**
     * Hit Paystack's API to verify a Transfer
     */
    public function verifyTransfer(string $reference): mixed;

    /**
     * Hit Paystack's API to fetch a Transfer
     */
    public function fetchTransfer(string $transferCode): mixed;

    /**
     * Hit Paystack's API to fetch all Transfers
     */
    public function fetchTransfers(): mixed;
}