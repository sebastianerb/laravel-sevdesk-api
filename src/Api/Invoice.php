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
class Invoice extends ApiClient
{


    // =========================== all ====================================

    /**
     * Return all organisation contacts by default. If you want organisations and persons use $depth = 1.
     *
     * @param int $depth
     * @return mixed
     */
    public function all(int $depth = 0)
    {
        return $this->_get(Routes::INVOICE, ['depth' => $depth]);
    }



    // =========================== get ====================================

    /**
     * Return a single contact.
     *
     * @param $invoiceId
     * @return mixed
     */
    public function get($invoiceId)
    {
        return $this->_get(Routes::INVOICE . '/' . $invoiceId)[0];
    }

    // ========================== create ==================================

    /**
     * Create contact.
     *
     * @param array $parameters
     * @return mixed
     */
    public function create(array $parameters = [])
    {
        return $this->_post(Routes::SAVE_INVOICE, $parameters);
    }

    // ========================== update ==================================

    /**
     * Update an existing invoice.
     *
     * @param $invoiceId
     * @param array $parameters
     * @return mixed
     */
    public function update($invoiceId, array $parameters = [])
    {
        return $this->_put(Routes::INVOICE . '/' . $invoiceId, $parameters);
    }

    // ========================== delete ==================================

    /**
     * Delete an existing invoice.
     *
     * @param $invoiceId
     * @return mixed
     */
    public function delete($invoiceId)
    {
        return $this->_delete(Routes::INVOICE . '/' . $invoiceId);
    }
}
