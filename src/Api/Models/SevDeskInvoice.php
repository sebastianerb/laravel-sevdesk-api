<?php

namespace Exlo89\LaravelSevdeskApi\Api\Models;

/**
 *
 */
class SevDeskInvoice extends SevDeskObject {

    /**
     * The invoice number
     * string or null
     * *required*
     *
     * @var int
     */
    public string $invoiceNumber;

    /**
     * The contact used in the invoice
     * *required*
     *
     * @var object
     */
    public object $contact;

    /**
     * Needs to be provided as timestamp or dd.mm.yyyy
     * *required*
     *
     * @var string
     */
    public string $invoiceDate;

    /**
     * Normally consist of prefix plus the invoice number
     * string or null
     * Default: null
     *
     * @var string
     */
    public string $header;

    /**
     * @var string
     */
    public string $headText;

    /**
     * @var string
     */
    public string $footText;

    /**
     * @var int
     */
    public int $timeToPay;

    /**
     * @var int
     */
    public int $discountTime;

    /**
     * @var int
     */
    public int $discount;

    /**
     * @var string
     */
    public string $payDate;

    /**
     * @var string
     */
    public string $deliveryDate;

    /**
     * @var int
     */
    public int $status;

    /**
     * @var bool
     */
    public bool $smallSettlement;

    /**
     * @var object
     */
    public object $contactPerson;

    /**
     * @var float
     */
    public float $taxRate;

    /**
     * @var string
     */
    public string $taxText;

    /**
     * @var int
     */
    public int $dunningLevel;

    /**
     * @var string
     */
    public string $taxType;

    /**
     * @var object
     */
    public object $paymentMethod;

    /**
     * @var object
     */
    public object $costCentre;

    /**
     * @var string
     */
    public string $sendDate;

    /**
     * @var object
     */
    public object $origin;

    /**
     * Type of the invoice.
     *  Default: "RE"
     *  Enum: "RE" "WKR" "SR" "MA" "TR" "ER"
     *
     * @var string
     */
    public string $invoiceType = "RE";

    /**
     * @var string
     */
    public string $accountIntervall;

    /**
     * @var int
     */
    public int $accountNextInvoice;

    /**
     * @var float
     */
    public float $reminderTotal;

    /**
     * @var float
     */
    public float $reminderDebit;

    /**
     * @var int
     */
    public int $reminderDeadline;

    /**
     * @var float
     */
    public float $reminderCharge;

    /**
     * @var object
     */
    public object $taxSet;

    /**
     * @var string
     */
    public string $address;

    /**
     * @var string
     */
    public string $currency = "EUR";

    /**
     * @var string
     */
    public string $customerInternalNote;

    /**
     * @var bool
     */
    public bool $showNet = TRUE;

    /**
     * @var string
     */
    public string $enshrined;

    /**
     * @var string
     */
    public string $sendType;

    /**
     * @var string
     */
    public string $deliveryDateUntil;

    /**
     * @var object
     */
    public object $datevConnectOnline;

    /**
     * @var string
     */
    public string $sendPaymentReceivedNotificationDate;

    /**
     * @var string
     */
    public string $mapAll = "true";

    /**
     * @var string
     */
    public string $objectName = "Invoice";

    /**
     * @var float
     */
    public float $paidAmount;

    /**
     *
     */
    public function __construct() {
        parent::__construct();
    }

}
