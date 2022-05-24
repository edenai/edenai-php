<?php
/**
 * InlineResponse2006Results
 *
 * PHP version 5
 *
 * @category Class
 * @package  edenai
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Eden AI API Documentation
 *
 * <a href=\"https://app.edenai.run/user/login\" target=\"_blank\"><img src=\"/static/images/welcome.png\"></a>. # Welcome  Eden AI simplifies the use and integration of AI technologies by providing a unique API connected to the best AI engines and combined with a powerful management platform. The platform covers a wide range of AI technologies: * Vision:  <a href=\"https://www.edenai.co/vision\" target=\"_blank\">www.edenai.co/vision</a>. * Text & NLP: <a href=\"https://www.edenai.co/text\" target=\"_blank\">www.edenai.co/text</a>. * Speech & Audio: <a href=\"https://www.edenai.co/speech\" target=\"_blank\">www.edenai.co/speech</a>. * OCR: <a href=\"https://www.edenai.co/ocr\" target=\"_blank\">www.edenai.co/ocr</a>. * Machine Translation: <a href=\"https://www.edenai.co/translation\" target=\"_blank\">www.edenai.co/translation</a>. * Prediction: <a href=\"https://www.edenai.co/prediction\" target=\"_blank\">www.edenai.co/prediction</a>.  For all the proposed technologies, we provide a single endpoint:  the service provider is only a parameter that can be changed very easily. All the engines available on Eden AI are listed here: www.edenai.co/catalog  # Support & community  ### 1- Support If you have any problems, please contact us at this email address: contact@edenai.co. We will be happy to help you in the use of Eden AI.   ### 2- Community  You can interact personally with other people actively using and working with Eden AI and join our  <a href=\"https://join.slack.com/t/edenai/shared_invite/zt-t68c2pr9-4lDKQ_qEqmLiWNptQzB_6w\" target=\"_blank\">Slack community</a>.  We are always updating our docs, so a good way to always stay up to date is to watch our documentation repo on Github: <a href=\"https://github.com/edenai\" target=\"_blank\">https://github.com/edenai</a>.  ### 3- Blog  We also regularly publish various articles with Eden AI news and technical articles on the different AI engines that exist. You can find these articles here: <a href=\"https://www.edenai.co/blog\" target=\"_blank\">https://www.edenai.co/blog</a>.   # Authentication  ## Create account ![Register](/static/images/register.png)  To create an account, please go to this link: <a href=\"https://app.edenai.run/user/login\" target=\"_blank\">app.edenai.run/user/login</a>. You can create an account with your email address or by using your account on available platforms (Gmail, Github, etc.).   By creating an account with your email address, you will receive a confirmation email with a link to click. Check your spam if needed and contact us if you have any problem: contact@edenai.co  ![Login](/static/images/login.png) ## API key  By going to your account page on the platform: <a href=\"https://app.edenai.run/admin/account\" target=\"_blank\">https://app.edenai.run/admin/account</a>, you will have access to your API key to start using the different AI engines offered by Eden AI.   ![api_key](/static/images/api_key.png)  ## Sandbox API key  By going to your account page on the platform: <a href=\"https://app.edenai.run/admin/account\" target=\"_blank\">https://app.edenai.run/admin/account</a>, you will also have access to your **Sandbox** API key that will allow you to make free calls and get dummy responses in order to implement and debug Eden AI without consuming credits.   ![api_key](/static/images/sandbox_api_key.png)  # Portal Guide  Eden AI provides a web portal that allows you to do several tasks:  ![portal](/static/images/portal.png)  ### 1- Benchmark and test The platform allows you to easily compare competing engines without having to code. By uploading your data, you have access to the prediction results of the different engines. This gives you a first overview of the performance of AI engines.   ![benchmark](/static/images/benchmark.png)  ### 2- Cost management The <a href=\"https://app.edenai.run/admin/cost-management\" target=\"_blank\">cost management page</a> also allows you to centralize the costs associated with the different engines with various filters to simplify the analysis.   This page also allows you to define monthly budget limits not to be exceeded to secure the use of different AI engines.   ![cost-management](/static/images/cost_management.png) ### 3- Account The <a href=\"https://app.edenai.run/admin/account\" target=\"_blank\">account page</a> allows you to change your information and password. It also gives you access to your API key that you can renew if needed.   This page also allows you to add a credit card and to buy with credits to use all the engines offered by Eden AI.   ![account](/static/images/account.png)   # API Guide  Eden AI API has different endpoints that refer to different AI services. The connected providers are thus parameters that the user can easily change.
 *
 * OpenAPI spec version: v1
 * Contact: contact@edenai.co
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.27
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace edenai\Model;

use \ArrayAccess;
use \edenai\ObjectSerializer;

/**
 * InlineResponse2006Results Class Doc Comment
 *
 * @category Class
 * @package  edenai
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2006Results implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_6_results';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'word_text' => 'string',
        'left' => 'float',
        'top' => 'float',
        'width' => 'float',
        'hight' => 'float',
        'customer_information' => '\edenai\Model\InlineResponse2006CustomerInformation',
        'merchant_information' => '\edenai\Model\InlineResponse2006MerchantInformation',
        'invoice_total' => 'string',
        'subtotal' => 'string',
        'date' => 'string',
        'due_date' => 'string',
        'invoice_number' => 'string',
        'taxes' => 'string',
        'locale' => '\edenai\Model\InlineResponse2006Locale',
        'item_lines' => '\edenai\Model\InlineResponse2006ItemLines[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'word_text' => null,
        'left' => null,
        'top' => null,
        'width' => null,
        'hight' => null,
        'customer_information' => null,
        'merchant_information' => null,
        'invoice_total' => null,
        'subtotal' => null,
        'date' => null,
        'due_date' => null,
        'invoice_number' => null,
        'taxes' => null,
        'locale' => null,
        'item_lines' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'word_text' => 'word_text',
        'left' => 'left',
        'top' => 'top',
        'width' => 'width',
        'hight' => 'hight',
        'customer_information' => 'customer_information',
        'merchant_information' => 'merchant_information',
        'invoice_total' => 'invoice_total',
        'subtotal' => 'subtotal',
        'date' => 'date',
        'due_date' => 'due_date',
        'invoice_number' => 'invoice_number',
        'taxes' => 'taxes',
        'locale' => 'locale',
        'item_lines' => 'item_lines'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'word_text' => 'setWordText',
        'left' => 'setLeft',
        'top' => 'setTop',
        'width' => 'setWidth',
        'hight' => 'setHight',
        'customer_information' => 'setCustomerInformation',
        'merchant_information' => 'setMerchantInformation',
        'invoice_total' => 'setInvoiceTotal',
        'subtotal' => 'setSubtotal',
        'date' => 'setDate',
        'due_date' => 'setDueDate',
        'invoice_number' => 'setInvoiceNumber',
        'taxes' => 'setTaxes',
        'locale' => 'setLocale',
        'item_lines' => 'setItemLines'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'word_text' => 'getWordText',
        'left' => 'getLeft',
        'top' => 'getTop',
        'width' => 'getWidth',
        'hight' => 'getHight',
        'customer_information' => 'getCustomerInformation',
        'merchant_information' => 'getMerchantInformation',
        'invoice_total' => 'getInvoiceTotal',
        'subtotal' => 'getSubtotal',
        'date' => 'getDate',
        'due_date' => 'getDueDate',
        'invoice_number' => 'getInvoiceNumber',
        'taxes' => 'getTaxes',
        'locale' => 'getLocale',
        'item_lines' => 'getItemLines'
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
        return self::$swaggerModelName;
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
        $this->container['word_text'] = isset($data['word_text']) ? $data['word_text'] : null;
        $this->container['left'] = isset($data['left']) ? $data['left'] : null;
        $this->container['top'] = isset($data['top']) ? $data['top'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['hight'] = isset($data['hight']) ? $data['hight'] : null;
        $this->container['customer_information'] = isset($data['customer_information']) ? $data['customer_information'] : null;
        $this->container['merchant_information'] = isset($data['merchant_information']) ? $data['merchant_information'] : null;
        $this->container['invoice_total'] = isset($data['invoice_total']) ? $data['invoice_total'] : null;
        $this->container['subtotal'] = isset($data['subtotal']) ? $data['subtotal'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['due_date'] = isset($data['due_date']) ? $data['due_date'] : null;
        $this->container['invoice_number'] = isset($data['invoice_number']) ? $data['invoice_number'] : null;
        $this->container['taxes'] = isset($data['taxes']) ? $data['taxes'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['item_lines'] = isset($data['item_lines']) ? $data['item_lines'] : null;
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
     * Gets word_text
     *
     * @return string
     */
    public function getWordText()
    {
        return $this->container['word_text'];
    }

    /**
     * Sets word_text
     *
     * @param string $word_text word_text
     *
     * @return $this
     */
    public function setWordText($word_text)
    {
        $this->container['word_text'] = $word_text;

        return $this;
    }

    /**
     * Gets left
     *
     * @return float
     */
    public function getLeft()
    {
        return $this->container['left'];
    }

    /**
     * Sets left
     *
     * @param float $left left
     *
     * @return $this
     */
    public function setLeft($left)
    {
        $this->container['left'] = $left;

        return $this;
    }

    /**
     * Gets top
     *
     * @return float
     */
    public function getTop()
    {
        return $this->container['top'];
    }

    /**
     * Sets top
     *
     * @param float $top top
     *
     * @return $this
     */
    public function setTop($top)
    {
        $this->container['top'] = $top;

        return $this;
    }

    /**
     * Gets width
     *
     * @return float
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param float $width width
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets hight
     *
     * @return float
     */
    public function getHight()
    {
        return $this->container['hight'];
    }

    /**
     * Sets hight
     *
     * @param float $hight hight
     *
     * @return $this
     */
    public function setHight($hight)
    {
        $this->container['hight'] = $hight;

        return $this;
    }

    /**
     * Gets customer_information
     *
     * @return \edenai\Model\InlineResponse2006CustomerInformation
     */
    public function getCustomerInformation()
    {
        return $this->container['customer_information'];
    }

    /**
     * Sets customer_information
     *
     * @param \edenai\Model\InlineResponse2006CustomerInformation $customer_information customer_information
     *
     * @return $this
     */
    public function setCustomerInformation($customer_information)
    {
        $this->container['customer_information'] = $customer_information;

        return $this;
    }

    /**
     * Gets merchant_information
     *
     * @return \edenai\Model\InlineResponse2006MerchantInformation
     */
    public function getMerchantInformation()
    {
        return $this->container['merchant_information'];
    }

    /**
     * Sets merchant_information
     *
     * @param \edenai\Model\InlineResponse2006MerchantInformation $merchant_information merchant_information
     *
     * @return $this
     */
    public function setMerchantInformation($merchant_information)
    {
        $this->container['merchant_information'] = $merchant_information;

        return $this;
    }

    /**
     * Gets invoice_total
     *
     * @return string
     */
    public function getInvoiceTotal()
    {
        return $this->container['invoice_total'];
    }

    /**
     * Sets invoice_total
     *
     * @param string $invoice_total invoice_total
     *
     * @return $this
     */
    public function setInvoiceTotal($invoice_total)
    {
        $this->container['invoice_total'] = $invoice_total;

        return $this;
    }

    /**
     * Gets subtotal
     *
     * @return string
     */
    public function getSubtotal()
    {
        return $this->container['subtotal'];
    }

    /**
     * Sets subtotal
     *
     * @param string $subtotal subtotal
     *
     * @return $this
     */
    public function setSubtotal($subtotal)
    {
        $this->container['subtotal'] = $subtotal;

        return $this;
    }

    /**
     * Gets date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param string $date date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return string
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param string $due_date due_date
     *
     * @return $this
     */
    public function setDueDate($due_date)
    {
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets invoice_number
     *
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoice_number'];
    }

    /**
     * Sets invoice_number
     *
     * @param string $invoice_number invoice_number
     *
     * @return $this
     */
    public function setInvoiceNumber($invoice_number)
    {
        $this->container['invoice_number'] = $invoice_number;

        return $this;
    }

    /**
     * Gets taxes
     *
     * @return string
     */
    public function getTaxes()
    {
        return $this->container['taxes'];
    }

    /**
     * Sets taxes
     *
     * @param string $taxes taxes
     *
     * @return $this
     */
    public function setTaxes($taxes)
    {
        $this->container['taxes'] = $taxes;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return \edenai\Model\InlineResponse2006Locale
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param \edenai\Model\InlineResponse2006Locale $locale locale
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets item_lines
     *
     * @return \edenai\Model\InlineResponse2006ItemLines[]
     */
    public function getItemLines()
    {
        return $this->container['item_lines'];
    }

    /**
     * Sets item_lines
     *
     * @param \edenai\Model\InlineResponse2006ItemLines[] $item_lines item_lines
     *
     * @return $this
     */
    public function setItemLines($item_lines)
    {
        $this->container['item_lines'] = $item_lines;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


