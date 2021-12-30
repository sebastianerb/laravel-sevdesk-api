<?php

namespace Exlo89\LaravelSevdeskApi\Api\Models;

class SevDeskObject {

    /**
     *
     */
    public function __construct() {

    }

    /**
     * @param $array
     *
     * @return $this
     */
    public function fromArray($array): SevDeskObject {
        foreach ($array as $propName => $value) {
            if (property_exists($this, $propName)) {
                if ($value != NULL) {
                    $this->$propName = $value;
                }
            }
        }
        return $this;
    }

}
