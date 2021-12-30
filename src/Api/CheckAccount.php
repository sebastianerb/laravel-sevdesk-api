<?php
/*
 * Contact.php
 * @author Sebastian Erb <mail@sebastianerb.com>
 * @copyright 2021 Sebastian Erb
 */

namespace Exlo89\LaravelSevdeskApi\Api;

use Exlo89\LaravelSevdeskApi\Api\Utils\ApiClient;
use Exlo89\LaravelSevdeskApi\Api\Utils\Routes;

/**
 * Sevdesk CheckAccount Api
 *
 * @see https://5677.extern.sevdesk.dev/apiOverview/index.html#/doc-contacts
 */
class CheckAccount extends ApiClient
{


    // =========================== all ====================================

    /**
     * Return all organisation contacts by default. If you want organisations and persons use $depth = 1.
     *
     * @return mixed
     */
    public function all()
    {
        return $this->_get(Routes::CHECKACCOUNT);
    }

}
