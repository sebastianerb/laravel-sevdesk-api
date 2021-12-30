<?php

namespace Exlo89\LaravelSevdeskApi\Api\Models;

class SevDeskContactAddress extends SevDeskObject {

    /**
     * @var string|null
     */
    public ?string $street;

    /**
     * @var string|null
     */
    public ?string $zip;

    /**
     * @var string|null
     */
    public ?string $city;

    /**
     * @var object|null
     */
    public ?object $country;

    /**
     * @var object|null
     */
    public ?object $contact;

    /**
     * @var object|null
     */
    public ?object $category;

    /**
     * @var object|null
     */
    public ?string $name;

    /**
     * @var object|null
     */
    public ?string $name2;

    /**
     * @var object|null
     */
    public ?string $name3;

    /**
     * @var object|null
     */
    public ?string $name4;

    /**
     *
     */
    public function __construct() {
        parent::__construct();
    }

}
