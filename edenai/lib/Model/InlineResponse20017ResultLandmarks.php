<?php
/**
 * InlineResponse20017ResultLandmarks
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
 * InlineResponse20017ResultLandmarks Class Doc Comment
 *
 * @category Class
 * @description object
 * @package  edenai
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20017ResultLandmarks implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_17_result_landmarks';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'left_eye' => 'float[]',
        'right_eye' => 'float[]',
        'left_of_left_eyebrow' => 'float[]',
        'right_of_left_eyebrow' => 'float[]',
        'left_of_right_eyebrow' => 'float[]',
        'right_of_right_eyebrow' => 'float[]',
        'midpoint_between_eyes' => 'float[]',
        'nose_tip' => 'float[]',
        'upper_lip' => 'float[]',
        'lower_lip' => 'float[]',
        'mouth_left' => 'float[]',
        'mouth_right' => 'float[]',
        'mouth_center' => 'float[]',
        'nose_bottom_right' => 'float[]',
        'nose_bottom_left' => 'float[]',
        'nose_bottom_center' => 'float[]',
        'left_eye_top_boundary' => 'float[]',
        'left_eye_right_corner' => 'float[]',
        'left_eye_bottom_boundary' => 'float[]',
        'left_eye_left_corner' => 'float[]',
        'right_eye_top_boundary' => 'float[]',
        'right_eye_right_corner' => 'float[]',
        'right_eye_bottom_boundary' => 'float[]',
        'right_eye_left_corner' => 'float[]',
        'left_eyebrow_upper_midpoint' => 'float[]',
        'right_eyebrow_upper_midpoint' => 'float[]',
        'left_ear_tragion' => 'float[]',
        'right_ear_tragion' => 'float[]',
        'forehead_glabella' => 'float[]',
        'chin_gnathion' => 'float[]',
        'chin_left_gonion' => 'float[]',
        'chin_right_gonion' => 'float[]',
        'left_cheek_center' => 'float[]',
        'right_cheek_center' => 'float[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'left_eye' => null,
        'right_eye' => null,
        'left_of_left_eyebrow' => null,
        'right_of_left_eyebrow' => null,
        'left_of_right_eyebrow' => null,
        'right_of_right_eyebrow' => null,
        'midpoint_between_eyes' => null,
        'nose_tip' => null,
        'upper_lip' => null,
        'lower_lip' => null,
        'mouth_left' => null,
        'mouth_right' => null,
        'mouth_center' => null,
        'nose_bottom_right' => null,
        'nose_bottom_left' => null,
        'nose_bottom_center' => null,
        'left_eye_top_boundary' => null,
        'left_eye_right_corner' => null,
        'left_eye_bottom_boundary' => null,
        'left_eye_left_corner' => null,
        'right_eye_top_boundary' => null,
        'right_eye_right_corner' => null,
        'right_eye_bottom_boundary' => null,
        'right_eye_left_corner' => null,
        'left_eyebrow_upper_midpoint' => null,
        'right_eyebrow_upper_midpoint' => null,
        'left_ear_tragion' => null,
        'right_ear_tragion' => null,
        'forehead_glabella' => null,
        'chin_gnathion' => null,
        'chin_left_gonion' => null,
        'chin_right_gonion' => null,
        'left_cheek_center' => null,
        'right_cheek_center' => null
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
        'left_eye' => 'LEFT_EYE',
        'right_eye' => 'RIGHT_EYE',
        'left_of_left_eyebrow' => 'LEFT_OF_LEFT_EYEBROW',
        'right_of_left_eyebrow' => 'RIGHT_OF_LEFT_EYEBROW',
        'left_of_right_eyebrow' => 'LEFT_OF_RIGHT_EYEBROW',
        'right_of_right_eyebrow' => 'RIGHT_OF_RIGHT_EYEBROW',
        'midpoint_between_eyes' => 'MIDPOINT_BETWEEN_EYES',
        'nose_tip' => 'NOSE_TIP',
        'upper_lip' => 'UPPER_LIP',
        'lower_lip' => 'LOWER_LIP',
        'mouth_left' => 'MOUTH_LEFT',
        'mouth_right' => 'MOUTH_RIGHT',
        'mouth_center' => 'MOUTH_CENTER',
        'nose_bottom_right' => 'NOSE_BOTTOM_RIGHT',
        'nose_bottom_left' => 'NOSE_BOTTOM_LEFT',
        'nose_bottom_center' => 'NOSE_BOTTOM_CENTER',
        'left_eye_top_boundary' => 'LEFT_EYE_TOP_BOUNDARY',
        'left_eye_right_corner' => 'LEFT_EYE_RIGHT_CORNER',
        'left_eye_bottom_boundary' => 'LEFT_EYE_BOTTOM_BOUNDARY',
        'left_eye_left_corner' => 'LEFT_EYE_LEFT_CORNER',
        'right_eye_top_boundary' => 'RIGHT_EYE_TOP_BOUNDARY',
        'right_eye_right_corner' => 'RIGHT_EYE_RIGHT_CORNER',
        'right_eye_bottom_boundary' => 'RIGHT_EYE_BOTTOM_BOUNDARY',
        'right_eye_left_corner' => 'RIGHT_EYE_LEFT_CORNER',
        'left_eyebrow_upper_midpoint' => 'LEFT_EYEBROW_UPPER_MIDPOINT',
        'right_eyebrow_upper_midpoint' => 'RIGHT_EYEBROW_UPPER_MIDPOINT',
        'left_ear_tragion' => 'LEFT_EAR_TRAGION',
        'right_ear_tragion' => 'RIGHT_EAR_TRAGION',
        'forehead_glabella' => 'FOREHEAD_GLABELLA',
        'chin_gnathion' => 'CHIN_GNATHION',
        'chin_left_gonion' => 'CHIN_LEFT_GONION',
        'chin_right_gonion' => 'CHIN_RIGHT_GONION',
        'left_cheek_center' => 'LEFT_CHEEK_CENTER',
        'right_cheek_center' => 'RIGHT_CHEEK_CENTER'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'left_eye' => 'setLeftEye',
        'right_eye' => 'setRightEye',
        'left_of_left_eyebrow' => 'setLeftOfLeftEyebrow',
        'right_of_left_eyebrow' => 'setRightOfLeftEyebrow',
        'left_of_right_eyebrow' => 'setLeftOfRightEyebrow',
        'right_of_right_eyebrow' => 'setRightOfRightEyebrow',
        'midpoint_between_eyes' => 'setMidpointBetweenEyes',
        'nose_tip' => 'setNoseTip',
        'upper_lip' => 'setUpperLip',
        'lower_lip' => 'setLowerLip',
        'mouth_left' => 'setMouthLeft',
        'mouth_right' => 'setMouthRight',
        'mouth_center' => 'setMouthCenter',
        'nose_bottom_right' => 'setNoseBottomRight',
        'nose_bottom_left' => 'setNoseBottomLeft',
        'nose_bottom_center' => 'setNoseBottomCenter',
        'left_eye_top_boundary' => 'setLeftEyeTopBoundary',
        'left_eye_right_corner' => 'setLeftEyeRightCorner',
        'left_eye_bottom_boundary' => 'setLeftEyeBottomBoundary',
        'left_eye_left_corner' => 'setLeftEyeLeftCorner',
        'right_eye_top_boundary' => 'setRightEyeTopBoundary',
        'right_eye_right_corner' => 'setRightEyeRightCorner',
        'right_eye_bottom_boundary' => 'setRightEyeBottomBoundary',
        'right_eye_left_corner' => 'setRightEyeLeftCorner',
        'left_eyebrow_upper_midpoint' => 'setLeftEyebrowUpperMidpoint',
        'right_eyebrow_upper_midpoint' => 'setRightEyebrowUpperMidpoint',
        'left_ear_tragion' => 'setLeftEarTragion',
        'right_ear_tragion' => 'setRightEarTragion',
        'forehead_glabella' => 'setForeheadGlabella',
        'chin_gnathion' => 'setChinGnathion',
        'chin_left_gonion' => 'setChinLeftGonion',
        'chin_right_gonion' => 'setChinRightGonion',
        'left_cheek_center' => 'setLeftCheekCenter',
        'right_cheek_center' => 'setRightCheekCenter'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'left_eye' => 'getLeftEye',
        'right_eye' => 'getRightEye',
        'left_of_left_eyebrow' => 'getLeftOfLeftEyebrow',
        'right_of_left_eyebrow' => 'getRightOfLeftEyebrow',
        'left_of_right_eyebrow' => 'getLeftOfRightEyebrow',
        'right_of_right_eyebrow' => 'getRightOfRightEyebrow',
        'midpoint_between_eyes' => 'getMidpointBetweenEyes',
        'nose_tip' => 'getNoseTip',
        'upper_lip' => 'getUpperLip',
        'lower_lip' => 'getLowerLip',
        'mouth_left' => 'getMouthLeft',
        'mouth_right' => 'getMouthRight',
        'mouth_center' => 'getMouthCenter',
        'nose_bottom_right' => 'getNoseBottomRight',
        'nose_bottom_left' => 'getNoseBottomLeft',
        'nose_bottom_center' => 'getNoseBottomCenter',
        'left_eye_top_boundary' => 'getLeftEyeTopBoundary',
        'left_eye_right_corner' => 'getLeftEyeRightCorner',
        'left_eye_bottom_boundary' => 'getLeftEyeBottomBoundary',
        'left_eye_left_corner' => 'getLeftEyeLeftCorner',
        'right_eye_top_boundary' => 'getRightEyeTopBoundary',
        'right_eye_right_corner' => 'getRightEyeRightCorner',
        'right_eye_bottom_boundary' => 'getRightEyeBottomBoundary',
        'right_eye_left_corner' => 'getRightEyeLeftCorner',
        'left_eyebrow_upper_midpoint' => 'getLeftEyebrowUpperMidpoint',
        'right_eyebrow_upper_midpoint' => 'getRightEyebrowUpperMidpoint',
        'left_ear_tragion' => 'getLeftEarTragion',
        'right_ear_tragion' => 'getRightEarTragion',
        'forehead_glabella' => 'getForeheadGlabella',
        'chin_gnathion' => 'getChinGnathion',
        'chin_left_gonion' => 'getChinLeftGonion',
        'chin_right_gonion' => 'getChinRightGonion',
        'left_cheek_center' => 'getLeftCheekCenter',
        'right_cheek_center' => 'getRightCheekCenter'
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
        $this->container['left_eye'] = isset($data['left_eye']) ? $data['left_eye'] : null;
        $this->container['right_eye'] = isset($data['right_eye']) ? $data['right_eye'] : null;
        $this->container['left_of_left_eyebrow'] = isset($data['left_of_left_eyebrow']) ? $data['left_of_left_eyebrow'] : null;
        $this->container['right_of_left_eyebrow'] = isset($data['right_of_left_eyebrow']) ? $data['right_of_left_eyebrow'] : null;
        $this->container['left_of_right_eyebrow'] = isset($data['left_of_right_eyebrow']) ? $data['left_of_right_eyebrow'] : null;
        $this->container['right_of_right_eyebrow'] = isset($data['right_of_right_eyebrow']) ? $data['right_of_right_eyebrow'] : null;
        $this->container['midpoint_between_eyes'] = isset($data['midpoint_between_eyes']) ? $data['midpoint_between_eyes'] : null;
        $this->container['nose_tip'] = isset($data['nose_tip']) ? $data['nose_tip'] : null;
        $this->container['upper_lip'] = isset($data['upper_lip']) ? $data['upper_lip'] : null;
        $this->container['lower_lip'] = isset($data['lower_lip']) ? $data['lower_lip'] : null;
        $this->container['mouth_left'] = isset($data['mouth_left']) ? $data['mouth_left'] : null;
        $this->container['mouth_right'] = isset($data['mouth_right']) ? $data['mouth_right'] : null;
        $this->container['mouth_center'] = isset($data['mouth_center']) ? $data['mouth_center'] : null;
        $this->container['nose_bottom_right'] = isset($data['nose_bottom_right']) ? $data['nose_bottom_right'] : null;
        $this->container['nose_bottom_left'] = isset($data['nose_bottom_left']) ? $data['nose_bottom_left'] : null;
        $this->container['nose_bottom_center'] = isset($data['nose_bottom_center']) ? $data['nose_bottom_center'] : null;
        $this->container['left_eye_top_boundary'] = isset($data['left_eye_top_boundary']) ? $data['left_eye_top_boundary'] : null;
        $this->container['left_eye_right_corner'] = isset($data['left_eye_right_corner']) ? $data['left_eye_right_corner'] : null;
        $this->container['left_eye_bottom_boundary'] = isset($data['left_eye_bottom_boundary']) ? $data['left_eye_bottom_boundary'] : null;
        $this->container['left_eye_left_corner'] = isset($data['left_eye_left_corner']) ? $data['left_eye_left_corner'] : null;
        $this->container['right_eye_top_boundary'] = isset($data['right_eye_top_boundary']) ? $data['right_eye_top_boundary'] : null;
        $this->container['right_eye_right_corner'] = isset($data['right_eye_right_corner']) ? $data['right_eye_right_corner'] : null;
        $this->container['right_eye_bottom_boundary'] = isset($data['right_eye_bottom_boundary']) ? $data['right_eye_bottom_boundary'] : null;
        $this->container['right_eye_left_corner'] = isset($data['right_eye_left_corner']) ? $data['right_eye_left_corner'] : null;
        $this->container['left_eyebrow_upper_midpoint'] = isset($data['left_eyebrow_upper_midpoint']) ? $data['left_eyebrow_upper_midpoint'] : null;
        $this->container['right_eyebrow_upper_midpoint'] = isset($data['right_eyebrow_upper_midpoint']) ? $data['right_eyebrow_upper_midpoint'] : null;
        $this->container['left_ear_tragion'] = isset($data['left_ear_tragion']) ? $data['left_ear_tragion'] : null;
        $this->container['right_ear_tragion'] = isset($data['right_ear_tragion']) ? $data['right_ear_tragion'] : null;
        $this->container['forehead_glabella'] = isset($data['forehead_glabella']) ? $data['forehead_glabella'] : null;
        $this->container['chin_gnathion'] = isset($data['chin_gnathion']) ? $data['chin_gnathion'] : null;
        $this->container['chin_left_gonion'] = isset($data['chin_left_gonion']) ? $data['chin_left_gonion'] : null;
        $this->container['chin_right_gonion'] = isset($data['chin_right_gonion']) ? $data['chin_right_gonion'] : null;
        $this->container['left_cheek_center'] = isset($data['left_cheek_center']) ? $data['left_cheek_center'] : null;
        $this->container['right_cheek_center'] = isset($data['right_cheek_center']) ? $data['right_cheek_center'] : null;
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
     * Gets left_eye
     *
     * @return float[]
     */
    public function getLeftEye()
    {
        return $this->container['left_eye'];
    }

    /**
     * Sets left_eye
     *
     * @param float[] $left_eye left_eye
     *
     * @return $this
     */
    public function setLeftEye($left_eye)
    {
        $this->container['left_eye'] = $left_eye;

        return $this;
    }

    /**
     * Gets right_eye
     *
     * @return float[]
     */
    public function getRightEye()
    {
        return $this->container['right_eye'];
    }

    /**
     * Sets right_eye
     *
     * @param float[] $right_eye right_eye
     *
     * @return $this
     */
    public function setRightEye($right_eye)
    {
        $this->container['right_eye'] = $right_eye;

        return $this;
    }

    /**
     * Gets left_of_left_eyebrow
     *
     * @return float[]
     */
    public function getLeftOfLeftEyebrow()
    {
        return $this->container['left_of_left_eyebrow'];
    }

    /**
     * Sets left_of_left_eyebrow
     *
     * @param float[] $left_of_left_eyebrow left_of_left_eyebrow
     *
     * @return $this
     */
    public function setLeftOfLeftEyebrow($left_of_left_eyebrow)
    {
        $this->container['left_of_left_eyebrow'] = $left_of_left_eyebrow;

        return $this;
    }

    /**
     * Gets right_of_left_eyebrow
     *
     * @return float[]
     */
    public function getRightOfLeftEyebrow()
    {
        return $this->container['right_of_left_eyebrow'];
    }

    /**
     * Sets right_of_left_eyebrow
     *
     * @param float[] $right_of_left_eyebrow right_of_left_eyebrow
     *
     * @return $this
     */
    public function setRightOfLeftEyebrow($right_of_left_eyebrow)
    {
        $this->container['right_of_left_eyebrow'] = $right_of_left_eyebrow;

        return $this;
    }

    /**
     * Gets left_of_right_eyebrow
     *
     * @return float[]
     */
    public function getLeftOfRightEyebrow()
    {
        return $this->container['left_of_right_eyebrow'];
    }

    /**
     * Sets left_of_right_eyebrow
     *
     * @param float[] $left_of_right_eyebrow left_of_right_eyebrow
     *
     * @return $this
     */
    public function setLeftOfRightEyebrow($left_of_right_eyebrow)
    {
        $this->container['left_of_right_eyebrow'] = $left_of_right_eyebrow;

        return $this;
    }

    /**
     * Gets right_of_right_eyebrow
     *
     * @return float[]
     */
    public function getRightOfRightEyebrow()
    {
        return $this->container['right_of_right_eyebrow'];
    }

    /**
     * Sets right_of_right_eyebrow
     *
     * @param float[] $right_of_right_eyebrow right_of_right_eyebrow
     *
     * @return $this
     */
    public function setRightOfRightEyebrow($right_of_right_eyebrow)
    {
        $this->container['right_of_right_eyebrow'] = $right_of_right_eyebrow;

        return $this;
    }

    /**
     * Gets midpoint_between_eyes
     *
     * @return float[]
     */
    public function getMidpointBetweenEyes()
    {
        return $this->container['midpoint_between_eyes'];
    }

    /**
     * Sets midpoint_between_eyes
     *
     * @param float[] $midpoint_between_eyes midpoint_between_eyes
     *
     * @return $this
     */
    public function setMidpointBetweenEyes($midpoint_between_eyes)
    {
        $this->container['midpoint_between_eyes'] = $midpoint_between_eyes;

        return $this;
    }

    /**
     * Gets nose_tip
     *
     * @return float[]
     */
    public function getNoseTip()
    {
        return $this->container['nose_tip'];
    }

    /**
     * Sets nose_tip
     *
     * @param float[] $nose_tip nose_tip
     *
     * @return $this
     */
    public function setNoseTip($nose_tip)
    {
        $this->container['nose_tip'] = $nose_tip;

        return $this;
    }

    /**
     * Gets upper_lip
     *
     * @return float[]
     */
    public function getUpperLip()
    {
        return $this->container['upper_lip'];
    }

    /**
     * Sets upper_lip
     *
     * @param float[] $upper_lip upper_lip
     *
     * @return $this
     */
    public function setUpperLip($upper_lip)
    {
        $this->container['upper_lip'] = $upper_lip;

        return $this;
    }

    /**
     * Gets lower_lip
     *
     * @return float[]
     */
    public function getLowerLip()
    {
        return $this->container['lower_lip'];
    }

    /**
     * Sets lower_lip
     *
     * @param float[] $lower_lip lower_lip
     *
     * @return $this
     */
    public function setLowerLip($lower_lip)
    {
        $this->container['lower_lip'] = $lower_lip;

        return $this;
    }

    /**
     * Gets mouth_left
     *
     * @return float[]
     */
    public function getMouthLeft()
    {
        return $this->container['mouth_left'];
    }

    /**
     * Sets mouth_left
     *
     * @param float[] $mouth_left mouth_left
     *
     * @return $this
     */
    public function setMouthLeft($mouth_left)
    {
        $this->container['mouth_left'] = $mouth_left;

        return $this;
    }

    /**
     * Gets mouth_right
     *
     * @return float[]
     */
    public function getMouthRight()
    {
        return $this->container['mouth_right'];
    }

    /**
     * Sets mouth_right
     *
     * @param float[] $mouth_right mouth_right
     *
     * @return $this
     */
    public function setMouthRight($mouth_right)
    {
        $this->container['mouth_right'] = $mouth_right;

        return $this;
    }

    /**
     * Gets mouth_center
     *
     * @return float[]
     */
    public function getMouthCenter()
    {
        return $this->container['mouth_center'];
    }

    /**
     * Sets mouth_center
     *
     * @param float[] $mouth_center mouth_center
     *
     * @return $this
     */
    public function setMouthCenter($mouth_center)
    {
        $this->container['mouth_center'] = $mouth_center;

        return $this;
    }

    /**
     * Gets nose_bottom_right
     *
     * @return float[]
     */
    public function getNoseBottomRight()
    {
        return $this->container['nose_bottom_right'];
    }

    /**
     * Sets nose_bottom_right
     *
     * @param float[] $nose_bottom_right nose_bottom_right
     *
     * @return $this
     */
    public function setNoseBottomRight($nose_bottom_right)
    {
        $this->container['nose_bottom_right'] = $nose_bottom_right;

        return $this;
    }

    /**
     * Gets nose_bottom_left
     *
     * @return float[]
     */
    public function getNoseBottomLeft()
    {
        return $this->container['nose_bottom_left'];
    }

    /**
     * Sets nose_bottom_left
     *
     * @param float[] $nose_bottom_left nose_bottom_left
     *
     * @return $this
     */
    public function setNoseBottomLeft($nose_bottom_left)
    {
        $this->container['nose_bottom_left'] = $nose_bottom_left;

        return $this;
    }

    /**
     * Gets nose_bottom_center
     *
     * @return float[]
     */
    public function getNoseBottomCenter()
    {
        return $this->container['nose_bottom_center'];
    }

    /**
     * Sets nose_bottom_center
     *
     * @param float[] $nose_bottom_center nose_bottom_center
     *
     * @return $this
     */
    public function setNoseBottomCenter($nose_bottom_center)
    {
        $this->container['nose_bottom_center'] = $nose_bottom_center;

        return $this;
    }

    /**
     * Gets left_eye_top_boundary
     *
     * @return float[]
     */
    public function getLeftEyeTopBoundary()
    {
        return $this->container['left_eye_top_boundary'];
    }

    /**
     * Sets left_eye_top_boundary
     *
     * @param float[] $left_eye_top_boundary left_eye_top_boundary
     *
     * @return $this
     */
    public function setLeftEyeTopBoundary($left_eye_top_boundary)
    {
        $this->container['left_eye_top_boundary'] = $left_eye_top_boundary;

        return $this;
    }

    /**
     * Gets left_eye_right_corner
     *
     * @return float[]
     */
    public function getLeftEyeRightCorner()
    {
        return $this->container['left_eye_right_corner'];
    }

    /**
     * Sets left_eye_right_corner
     *
     * @param float[] $left_eye_right_corner left_eye_right_corner
     *
     * @return $this
     */
    public function setLeftEyeRightCorner($left_eye_right_corner)
    {
        $this->container['left_eye_right_corner'] = $left_eye_right_corner;

        return $this;
    }

    /**
     * Gets left_eye_bottom_boundary
     *
     * @return float[]
     */
    public function getLeftEyeBottomBoundary()
    {
        return $this->container['left_eye_bottom_boundary'];
    }

    /**
     * Sets left_eye_bottom_boundary
     *
     * @param float[] $left_eye_bottom_boundary left_eye_bottom_boundary
     *
     * @return $this
     */
    public function setLeftEyeBottomBoundary($left_eye_bottom_boundary)
    {
        $this->container['left_eye_bottom_boundary'] = $left_eye_bottom_boundary;

        return $this;
    }

    /**
     * Gets left_eye_left_corner
     *
     * @return float[]
     */
    public function getLeftEyeLeftCorner()
    {
        return $this->container['left_eye_left_corner'];
    }

    /**
     * Sets left_eye_left_corner
     *
     * @param float[] $left_eye_left_corner left_eye_left_corner
     *
     * @return $this
     */
    public function setLeftEyeLeftCorner($left_eye_left_corner)
    {
        $this->container['left_eye_left_corner'] = $left_eye_left_corner;

        return $this;
    }

    /**
     * Gets right_eye_top_boundary
     *
     * @return float[]
     */
    public function getRightEyeTopBoundary()
    {
        return $this->container['right_eye_top_boundary'];
    }

    /**
     * Sets right_eye_top_boundary
     *
     * @param float[] $right_eye_top_boundary right_eye_top_boundary
     *
     * @return $this
     */
    public function setRightEyeTopBoundary($right_eye_top_boundary)
    {
        $this->container['right_eye_top_boundary'] = $right_eye_top_boundary;

        return $this;
    }

    /**
     * Gets right_eye_right_corner
     *
     * @return float[]
     */
    public function getRightEyeRightCorner()
    {
        return $this->container['right_eye_right_corner'];
    }

    /**
     * Sets right_eye_right_corner
     *
     * @param float[] $right_eye_right_corner right_eye_right_corner
     *
     * @return $this
     */
    public function setRightEyeRightCorner($right_eye_right_corner)
    {
        $this->container['right_eye_right_corner'] = $right_eye_right_corner;

        return $this;
    }

    /**
     * Gets right_eye_bottom_boundary
     *
     * @return float[]
     */
    public function getRightEyeBottomBoundary()
    {
        return $this->container['right_eye_bottom_boundary'];
    }

    /**
     * Sets right_eye_bottom_boundary
     *
     * @param float[] $right_eye_bottom_boundary right_eye_bottom_boundary
     *
     * @return $this
     */
    public function setRightEyeBottomBoundary($right_eye_bottom_boundary)
    {
        $this->container['right_eye_bottom_boundary'] = $right_eye_bottom_boundary;

        return $this;
    }

    /**
     * Gets right_eye_left_corner
     *
     * @return float[]
     */
    public function getRightEyeLeftCorner()
    {
        return $this->container['right_eye_left_corner'];
    }

    /**
     * Sets right_eye_left_corner
     *
     * @param float[] $right_eye_left_corner right_eye_left_corner
     *
     * @return $this
     */
    public function setRightEyeLeftCorner($right_eye_left_corner)
    {
        $this->container['right_eye_left_corner'] = $right_eye_left_corner;

        return $this;
    }

    /**
     * Gets left_eyebrow_upper_midpoint
     *
     * @return float[]
     */
    public function getLeftEyebrowUpperMidpoint()
    {
        return $this->container['left_eyebrow_upper_midpoint'];
    }

    /**
     * Sets left_eyebrow_upper_midpoint
     *
     * @param float[] $left_eyebrow_upper_midpoint left_eyebrow_upper_midpoint
     *
     * @return $this
     */
    public function setLeftEyebrowUpperMidpoint($left_eyebrow_upper_midpoint)
    {
        $this->container['left_eyebrow_upper_midpoint'] = $left_eyebrow_upper_midpoint;

        return $this;
    }

    /**
     * Gets right_eyebrow_upper_midpoint
     *
     * @return float[]
     */
    public function getRightEyebrowUpperMidpoint()
    {
        return $this->container['right_eyebrow_upper_midpoint'];
    }

    /**
     * Sets right_eyebrow_upper_midpoint
     *
     * @param float[] $right_eyebrow_upper_midpoint right_eyebrow_upper_midpoint
     *
     * @return $this
     */
    public function setRightEyebrowUpperMidpoint($right_eyebrow_upper_midpoint)
    {
        $this->container['right_eyebrow_upper_midpoint'] = $right_eyebrow_upper_midpoint;

        return $this;
    }

    /**
     * Gets left_ear_tragion
     *
     * @return float[]
     */
    public function getLeftEarTragion()
    {
        return $this->container['left_ear_tragion'];
    }

    /**
     * Sets left_ear_tragion
     *
     * @param float[] $left_ear_tragion left_ear_tragion
     *
     * @return $this
     */
    public function setLeftEarTragion($left_ear_tragion)
    {
        $this->container['left_ear_tragion'] = $left_ear_tragion;

        return $this;
    }

    /**
     * Gets right_ear_tragion
     *
     * @return float[]
     */
    public function getRightEarTragion()
    {
        return $this->container['right_ear_tragion'];
    }

    /**
     * Sets right_ear_tragion
     *
     * @param float[] $right_ear_tragion right_ear_tragion
     *
     * @return $this
     */
    public function setRightEarTragion($right_ear_tragion)
    {
        $this->container['right_ear_tragion'] = $right_ear_tragion;

        return $this;
    }

    /**
     * Gets forehead_glabella
     *
     * @return float[]
     */
    public function getForeheadGlabella()
    {
        return $this->container['forehead_glabella'];
    }

    /**
     * Sets forehead_glabella
     *
     * @param float[] $forehead_glabella forehead_glabella
     *
     * @return $this
     */
    public function setForeheadGlabella($forehead_glabella)
    {
        $this->container['forehead_glabella'] = $forehead_glabella;

        return $this;
    }

    /**
     * Gets chin_gnathion
     *
     * @return float[]
     */
    public function getChinGnathion()
    {
        return $this->container['chin_gnathion'];
    }

    /**
     * Sets chin_gnathion
     *
     * @param float[] $chin_gnathion chin_gnathion
     *
     * @return $this
     */
    public function setChinGnathion($chin_gnathion)
    {
        $this->container['chin_gnathion'] = $chin_gnathion;

        return $this;
    }

    /**
     * Gets chin_left_gonion
     *
     * @return float[]
     */
    public function getChinLeftGonion()
    {
        return $this->container['chin_left_gonion'];
    }

    /**
     * Sets chin_left_gonion
     *
     * @param float[] $chin_left_gonion chin_left_gonion
     *
     * @return $this
     */
    public function setChinLeftGonion($chin_left_gonion)
    {
        $this->container['chin_left_gonion'] = $chin_left_gonion;

        return $this;
    }

    /**
     * Gets chin_right_gonion
     *
     * @return float[]
     */
    public function getChinRightGonion()
    {
        return $this->container['chin_right_gonion'];
    }

    /**
     * Sets chin_right_gonion
     *
     * @param float[] $chin_right_gonion chin_right_gonion
     *
     * @return $this
     */
    public function setChinRightGonion($chin_right_gonion)
    {
        $this->container['chin_right_gonion'] = $chin_right_gonion;

        return $this;
    }

    /**
     * Gets left_cheek_center
     *
     * @return float[]
     */
    public function getLeftCheekCenter()
    {
        return $this->container['left_cheek_center'];
    }

    /**
     * Sets left_cheek_center
     *
     * @param float[] $left_cheek_center left_cheek_center
     *
     * @return $this
     */
    public function setLeftCheekCenter($left_cheek_center)
    {
        $this->container['left_cheek_center'] = $left_cheek_center;

        return $this;
    }

    /**
     * Gets right_cheek_center
     *
     * @return float[]
     */
    public function getRightCheekCenter()
    {
        return $this->container['right_cheek_center'];
    }

    /**
     * Sets right_cheek_center
     *
     * @param float[] $right_cheek_center right_cheek_center
     *
     * @return $this
     */
    public function setRightCheekCenter($right_cheek_center)
    {
        $this->container['right_cheek_center'] = $right_cheek_center;

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


