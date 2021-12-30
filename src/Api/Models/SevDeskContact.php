<?php

namespace Exlo89\LaravelSevdeskApi\Api\Models;

class SevDeskContact extends SevDeskObject {

    /**
     * @var int|null
     */
    public ?int $id;

    /**
     * @var string|null
     */
    public ?string $objectName;

    /**
     * @var string|null
     */
    public ?string $create;

    /**
     * @var string|null
     */
    public ?string $update;

    /**
     * @var string|null
     */
    public ?string $name = "";

    /**
     * @var string|null
     */
    public ?string $customerNumber;

    /**
     * @var array|null
     */
    public ?array $parent;

    /**
     * @var string|null
     */
    public ?string $surename;

    /**
     * @var string|null
     */
    public ?string $familyname;

    /**
     * @var string|null
     */
    public ?string $titel;

    /**
     * @var array|null
     */
    public ?array $category;

    /**
     * @var string|null
     */
    public ?string $description;

    /**
     * @var string|null
     */
    public ?string $academicTitle;

    /**
     * @var string|null
     */
    public ?string $gender;

    /**
     * @var array|null
     */
    public ?array $sevClient;

    /**
     * @var string|null
     */
    public ?string $name2;

    /**
     * @var string|null
     */
    public ?string $birthday;

    /**
     * @var string|null
     */
    public ?string $vatNumber;

    /**
     * @var string|null
     */
    public ?string $bankAccount;

    /**
     * @var string|null
     */
    public ?string $bankNumber;

    /**
     * @var int|null
     */
    public ?int $defaultCashbackTime;

    /**
     * @var float|null
     */
    public ?float $defaultCashbackPercent;

    /**
     * @var int|null
     */
    public ?int $defaultTimeToPay;

    /**
     * @var bool
     */
    public bool $taxNumber;

    /**
     * @var string|null
     */
    public ?string $exemptVat;

    /**
     * @var string|null
     */
    public ?string $taxType;

    /**
     * @var object|null
     */
    public ?object $taxSet;

    /**
     * @var float|null
     */
    public ?float $defaultDiscountAmount;

    /**
     * @var bool|null
     */
    public ?bool $defaultDiscountPercentage;

    /**
     *
     */
    public function __construct() {
        parent::__construct();
        $this->defaultDiscountPercentage = FALSE;
    }
}
