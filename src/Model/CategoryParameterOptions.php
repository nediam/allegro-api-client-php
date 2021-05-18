<?php
/**
 * CategoryParameterOptions
 *
 * PHP version 5
 *
 * @category Class
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Allegro REST API
 *
 * https://developer.allegro.pl/about
 *
 * The version of the OpenAPI document: latest
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AllegroApi\Model;

use \ArrayAccess;
use \AllegroApi\ObjectSerializer;

/**
 * CategoryParameterOptions Class Doc Comment
 *
 * @category Class
 * @description A list of the different options which can be used with this parameter.
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CategoryParameterOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CategoryParameterOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'variants_allowed' => 'bool',
        'variants_equal' => 'bool',
        'ambiguous_value_id' => 'string',
        'depends_on_parameter_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'variants_allowed' => null,
        'variants_equal' => null,
        'ambiguous_value_id' => null,
        'depends_on_parameter_id' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'variants_allowed' => 'variantsAllowed',
        'variants_equal' => 'variantsEqual',
        'ambiguous_value_id' => 'ambiguousValueId',
        'depends_on_parameter_id' => 'dependsOnParameterId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'variants_allowed' => 'setVariantsAllowed',
        'variants_equal' => 'setVariantsEqual',
        'ambiguous_value_id' => 'setAmbiguousValueId',
        'depends_on_parameter_id' => 'setDependsOnParameterId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'variants_allowed' => 'getVariantsAllowed',
        'variants_equal' => 'getVariantsEqual',
        'ambiguous_value_id' => 'getAmbiguousValueId',
        'depends_on_parameter_id' => 'getDependsOnParameterId'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['variants_allowed'] = isset($data['variants_allowed']) ? $data['variants_allowed'] : null;
        $this->container['variants_equal'] = isset($data['variants_equal']) ? $data['variants_equal'] : null;
        $this->container['ambiguous_value_id'] = isset($data['ambiguous_value_id']) ? $data['ambiguous_value_id'] : null;
        $this->container['depends_on_parameter_id'] = isset($data['depends_on_parameter_id']) ? $data['depends_on_parameter_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets variants_allowed
     *
     * @return bool|null
     */
    public function getVariantsAllowed()
    {
        return $this->container['variants_allowed'];
    }

    /**
     * Sets variants_allowed
     *
     * @param bool|null $variants_allowed Parameters with this option enabled can be used for offer variants creation.
     *
     * @return $this
     */
    public function setVariantsAllowed($variants_allowed)
    {
        $this->container['variants_allowed'] = $variants_allowed;

        return $this;
    }

    /**
     * Gets variants_equal
     *
     * @return bool|null
     */
    public function getVariantsEqual()
    {
        return $this->container['variants_equal'];
    }

    /**
     * Sets variants_equal
     *
     * @param bool|null $variants_equal All offer variants must have the same values in parameters with this option enabled.
     *
     * @return $this
     */
    public function setVariantsEqual($variants_equal)
    {
        $this->container['variants_equal'] = $variants_equal;

        return $this;
    }

    /**
     * Gets ambiguous_value_id
     *
     * @return string|null
     */
    public function getAmbiguousValueId()
    {
        return $this->container['ambiguous_value_id'];
    }

    /**
     * Sets ambiguous_value_id
     *
     * @param string|null $ambiguous_value_id Indicates what value in the dictionary is defined as an ambiguous one. Only parameters with dictionaries might have this option defined.
     *
     * @return $this
     */
    public function setAmbiguousValueId($ambiguous_value_id)
    {
        $this->container['ambiguous_value_id'] = $ambiguous_value_id;

        return $this;
    }

    /**
     * Gets depends_on_parameter_id
     *
     * @return string|null
     */
    public function getDependsOnParameterId()
    {
        return $this->container['depends_on_parameter_id'];
    }

    /**
     * Sets depends_on_parameter_id
     *
     * @param string|null $depends_on_parameter_id Values in the dictionary depend on the parameter referenced by this field. Only parameters with dictionaries can have this option defined.
     *
     * @return $this
     */
    public function setDependsOnParameterId($depends_on_parameter_id)
    {
        $this->container['depends_on_parameter_id'] = $depends_on_parameter_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


