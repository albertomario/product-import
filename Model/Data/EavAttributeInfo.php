<?php

namespace BigBridge\ProductImport\Model\Data;

/**
 * Data from eav_attribute
 *
 * @author Patrick van Bergen
 */
class EavAttributeInfo
{
    const SCOPE_STORE_VIEW = 0;
    const SCOPE_GLOBAL = 1;
    const SCOPE_WEBSITE = 2;

    const FRONTEND_SELECT = 'select';

    /** @var  string */
    public $attributeCode;

    /** @var  int */
    public $attributeId;

    /** @var  bool */
    public $isRequired;

    /** @var string  */
    public $backendType;

    /** @var  string */
    public $frontendInput;

    /** @var array  */
    public $optionValues;

    /** @var  string */
    public $tableName;

    /** @var int */
    public $scope;

    public function __construct(string $attributeCode, int $attributeId, bool $isRequired, string  $backendType, string $tableName, $frontendInput, array $optionValues, int $scope)
    {
        $this->attributeCode = $attributeCode;
        $this->attributeId = $attributeId;
        $this->isRequired = $isRequired;
        $this->backendType = $backendType;
        $this->tableName = $tableName;
        $this->frontendInput = $frontendInput;
        $this->optionValues = $optionValues;
        $this->scope = $scope;
    }
}