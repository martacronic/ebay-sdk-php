<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 * @property \DTS\eBaySDK\Trading\Types\StatementsType $Statements
 * @property \DTS\eBaySDK\Trading\Types\PictogramsType $Pictograms
 * @property string $SignalWord
 * @property string $Component
 */
class HazmatType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'SignalWord' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SignalWord'
        ],
        'Component' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Component'
        ],
        'Pictograms' => [
            'type' => 'DTS\eBaySDK\Trading\Types\PictogramsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Pictograms'
        ],
        'Statements' => [
            'type' => 'DTS\eBaySDK\Trading\Types\StatementsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Statements'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
