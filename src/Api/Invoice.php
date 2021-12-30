<?php
/*
 * Contact.php
 * @author Martin Appelmann <hello@martin-appelmann.de>
 * @copyright 2021 Martin Appelmann
 */

namespace Exlo89\LaravelSevdeskApi\Api;

use Exlo89\LaravelSevdeskApi\Api\Utils\ApiClient;
use Exlo89\LaravelSevdeskApi\Api\Utils\Routes;

/**
 * Sevdesk Contact Api
 *
 * @see https://5677.extern.sevdesk.dev/apiOverview/index.html#/doc-contacts
 */
class Invoice extends ApiClient {


    // =========================== all ====================================

    /**
     * Return all organisation contacts by default. If you want organisations
     * and persons use $depth = 1.
     *
     * @return mixed
     */
    public function all() {
        return $this->_get(Routes::INVOICE);
    }



    // =========================== get ====================================

    /**
     * Return a single contact.
     *
     * @param $invoiceId
     *
     * @return mixed
     */
    public function get($invoiceId) {
        return $this->_get(Routes::INVOICE . '/' . $invoiceId)[0];
    }

    // ========================== create ==================================

    /**
     * Create contact.
     *
     * @param array $parameters
     *
     * @return mixed
     */
    public function create(array $parameters = []) {
        return $this->_post(Routes::SAVE_INVOICE, $parameters);
    }

    // ========================== update ==================================

    /**
     * Update an existing invoice.
     *
     * @param $invoiceId
     * @param array $parameters
     *
     * @return mixed
     */
    public function update($invoiceId, array $parameters = []) {
        return $this->_put(Routes::INVOICE . '/' . $invoiceId, $parameters);
    }

    /**
     * Book an Invoice
     *
     * @param $invoiceId
     * @param array $parameters
     *
     * @return mixed
     */
    public function bookAmount($invoiceId, array $parameters = []) {
        return $this->_put(Routes::INVOICE . '/' . $invoiceId . '/bookAmount', $parameters);
    }

    // ========================== delete ==================================

    /**
     * Delete an existing invoice.
     *
     * @param $invoiceId
     *
     * @return mixed
     */
    public function delete($invoiceId) {
        return $this->_delete(Routes::INVOICE . '/' . $invoiceId);
    }
}
