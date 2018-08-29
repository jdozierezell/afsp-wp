<?php
/**
 * AsyncDocStatus
 *
 * PHP version 5
 *
 * @category Class
 * @package  DocRaptor
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocRaptor;

use \ArrayAccess;
/**
 * AsyncDocStatus Class Doc Comment
 *
 * @category    Class
 * @description
 * @package     DocRaptor
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AsyncDocStatus implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    static $swaggerTypes = array(
        'status' => 'string',
        'download_url' => 'string',
        'download_id' => 'string',
        'message' => 'string',
        'number_of_pages' => 'int',
        'validation_errors' => 'string'
    );

    /**
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[]
      */
    static $attributeMap = array(
        'status' => 'status',
        'download_url' => 'download_url',
        'download_id' => 'download_id',
        'message' => 'message',
        'number_of_pages' => 'number_of_pages',
        'validation_errors' => 'validation_errors'
    );

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'status' => 'setStatus',
        'download_url' => 'setDownloadUrl',
        'download_id' => 'setDownloadId',
        'message' => 'setMessage',
        'number_of_pages' => 'setNumberOfPages',
        'validation_errors' => 'setValidationErrors'
    );

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'status' => 'getStatus',
        'download_url' => 'getDownloadUrl',
        'download_id' => 'getDownloadId',
        'message' => 'getMessage',
        'number_of_pages' => 'getNumberOfPages',
        'validation_errors' => 'getValidationErrors'
    );


    /**
      * $status The present status of the document. Can be queued, working, completed, and failed.
      * @var string
      */
    protected $status;

    /**
      * $download_url The URL where the document can be retrieved. This URL may only be used a few times.
      * @var string
      */
    protected $download_url;

    /**
      * $download_id The identifier for downloading the document with the download api.
      * @var string
      */
    protected $download_id;

    /**
      * $message Additional information.
      * @var string
      */
    protected $message;

    /**
      * $number_of_pages Number of PDF pages in document.
      * @var int
      */
    protected $number_of_pages;

    /**
      * $validation_errors Error information.
      * @var string
      */
    protected $validation_errors;


    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->status = $data["status"];
            $this->download_url = $data["download_url"];
            $this->download_id = $data["download_id"];
            $this->message = $data["message"];
            $this->number_of_pages = $data["number_of_pages"];
            $this->validation_errors = $data["validation_errors"];
        }
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets status
     * @param string $status The present status of the document. Can be queued, working, completed, and failed.
     * @return $this
     */
    public function setStatus($status)
    {

        $this->status = $status;
        return $this;
    }

    /**
     * Gets download_url
     * @return string
     */
    public function getDownloadUrl()
    {
        return $this->download_url;
    }

    /**
     * Sets download_url
     * @param string $download_url The URL where the document can be retrieved. This URL may only be used a few times.
     * @return $this
     */
    public function setDownloadUrl($download_url)
    {

        $this->download_url = $download_url;
        return $this;
    }

    /**
     * Gets download_id
     * @return string
     */
    public function getDownloadId()
    {
        return $this->download_id;
    }

    /**
     * Sets download_id
     * @param string $download_id The identifier for downloading the document with the download api.
     * @return $this
     */
    public function setDownloadId($download_id)
    {

        $this->download_id = $download_id;
        return $this;
    }

    /**
     * Gets message
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Sets message
     * @param string $message Additional information.
     * @return $this
     */
    public function setMessage($message)
    {

        $this->message = $message;
        return $this;
    }

    /**
     * Gets number_of_pages
     * @return int
     */
    public function getNumberOfPages()
    {
        return $this->number_of_pages;
    }

    /**
     * Sets number_of_pages
     * @param int $number_of_pages Number of PDF pages in document.
     * @return $this
     */
    public function setNumberOfPages($number_of_pages)
    {

        $this->number_of_pages = $number_of_pages;
        return $this;
    }

    /**
     * Gets validation_errors
     * @return string
     */
    public function getValidationErrors()
    {
        return $this->validation_errors;
    }

    /**
     * Sets validation_errors
     * @param string $validation_errors Error information.
     * @return $this
     */
    public function setValidationErrors($validation_errors)
    {

        $this->validation_errors = $validation_errors;
        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\DocRaptor\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\DocRaptor\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
