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
 * @property double $RepairScore
 * @property \DTS\eBaySDK\Trading\Types\ProductSafetyType $ProductSafety
 * @property \DTS\eBaySDK\Trading\Types\HazmatType $Hazmat
 * @property \DTS\eBaySDK\Trading\Types\DocumentsType $Documents
 * @property \DTS\eBaySDK\Trading\Types\ResponsiblePersonsType $ResponsiblePersons
 * @property \DTS\eBaySDK\Trading\Types\ManufacturerType $Manufacturer
 * @property \DTS\eBaySDK\Trading\Types\EnergyEfficiencyLabelType $EnergyEfficiencyLabel
 */
class RegulatoryType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'Manufacturer' => [
            'type' => 'DTS\eBaySDK\Trading\Types\ManufacturerType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Manufacturer'
        ],
        'EnergyEfficiencyLabel' => [
            'type' => 'DTS\eBaySDK\Trading\Types\EnergyEfficiencyLabelType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EnergyEfficiencyLabel'
        ],
        'Hazmat' => [
            'type' => 'DTS\eBaySDK\Trading\Types\HazmatType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Hazmat'
        ],
        'Documents' => [
            'type' => 'DTS\eBaySDK\Trading\Types\DocumentsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Documents'
        ],
        'ProductSafety' => [
            'type' => 'DTS\eBaySDK\Trading\Types\ProductSafetyType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ProductSafety'
        ],
        'ResponsiblePersons' => [
            'type' => 'DTS\eBaySDK\Trading\Types\ResponsiblePersonsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ResponsiblePersons'
        ],
        'RepairScore' => [
            'type' => 'double',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RepairScore'
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
