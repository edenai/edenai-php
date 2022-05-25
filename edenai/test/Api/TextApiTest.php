<?php
/**
 * TextApiTest
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
 * Swagger Codegen version: 2.4.24
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace edenai;

use \edenai\Configuration;
use \edenai\ApiException;
use \edenai\ObjectSerializer;

require 'vendor/autoload.php';
use \Dotenv\Dotenv;


/**
 * TextApiTest Class Doc Comment
 *
 * @category Class
 * @package  edenai
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TextApiTest extends \PHPUnit_Framework_TestCase
{


    protected $config;
    protected $apiInstance;
    protected $text;
    protected $language;
    protected $providers;
    protected $your_api_key;
    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {

        $dotenv = Dotenv::createImmutable(__DIR__);
        $dotenv->load();
        $this->your_api_key=$_ENV['API_KEY'];

        // Configure API key authorization: Bearer
        $this->config = Configuration::getDefaultConfiguration()->setApiKey('Authorization', $this->your_api_key);
        // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
        $this->config = Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');
        $this->text = "ceci est un texte"; // \SplFileObject | File Image to analyse (ex: pdf, jpg, jpeg, png, tiff)
        $this->providers = "['amazon']"; // string | Provider to compare (ex: [ 'amazon', 'microsoft', 'google'])
        $this->language = "fr-FR"; // string | Provider to compare (ex: [ 'amazon', 'microsoft', 'google'])
        $this->apiInstance = new Api\TextApi(
            // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
            // This is optional, `GuzzleHttp\Client` will be used as default.
            new \GuzzleHttp\Client(),
            $this->config
        );
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for keywordExtraction
     *
     * .
     *
     */
    public function testKeywordExtraction()
    {
        $result = $this->apiInstance->keywordExtraction($this->language, $this->text, $this->providers);
        $this->assertNotNull($result);
        $this->assertNotNull($result->getResult()[0]['result']);
        $this->assertNotNull($result->getResult()[0]['result']->getText());
        $this->assertNotNull($result->getResult()[0]['result']->getKeywords());
        $this->assertNotNull($result->getResult()[0]['result']->getImportances());
    }

    /**
     * Test case for namedEntityRecognition
     *
     * .
     *
     */
    public function testNamedEntityRecognition()
    {
        $result = $this->apiInstance->namedEntityRecognition($this->language, $this->text, $this->providers);
        $this->assertNotNull($result);
        $this->assertNotNull($result->getResult()[0]['result']);
        $this->assertNotNull($result->getResult()[0]['result']->getText());
        $this->assertNotNull($result->getResult()[0]['result']->getEntities());
        $this->assertNotNull($result->getResult()[0]['result']->getImportances());
        $this->assertNotNull($result->getResult()[0]['result']->getCategories());
        $this->assertNotNull($result->getResult()[0]['result']->getUrls());
    }

    /**
     * Test case for sentimentAnalysis
     *
     * .
     *
     */
    public function testSentimentAnalysis()
    {
        $result = $this->apiInstance->sentimentAnalysis($this->language, $this->text, $this->providers);
        $this->assertNotNull($result);
        $this->assertNotNull($result->getResult()[0]['result']);
        $this->assertNotNull($result->getResult()[0]['result']->getText());
        $this->assertNotNull($result->getResult()[0]['result']->getSentiments());
        $this->assertNotNull($result->getResult()[0]['result']->getSentimentRate());
    }

    /**
     * Test case for syntaxAnalysis
     *
     * .
     *
     */
    public function testSyntaxAnalysis()
    {
        $result = $this->apiInstance->syntaxAnalysis($this->language, $this->text, $this->providers);
        $this->assertNotNull($result);
        $this->assertNotNull($result->getResult()[0]['result']);
        $this->assertNotNull($result->getResult()[0]['result']->getText());
        $this->assertNotNull($result->getResult()[0]['result']->getKeywords());
        $this->assertNotNull($result->getResult()[0]['result']->getImportances());
        $this->assertNotNull($result->getResult()[0]['result']->getTags());
        $this->assertNotNull($result->getResult()[0]['result']->getLemmas());
        $this->assertNotNull($result->getResult()[0]['result']->getOthers());
    }

    /**
     * Test case for questionAnswering
     *
     * .
     *
     */
    public function testQuestionAnswering()
    {
        $result = $this->apiInstance->questionAnswering('["This is a text"]', 'What is it?', '["openai_ada", "openai_davinci"]', 'In 2017, U.S life expectancy was 78.6 years.', '[["What is human life expectancy in the United States?", "78 years"]]', 0.7);
        $this->assertNotNull($result);
    }

    /**
     * Test case for search
     *
     * .
     *
     */
    public function testSearch()
    {
        $result = $this->apiInstance->search('["Hello World", "Goodbye Mars"]', 'Earth', '["openai_ada", "openai_davinci"]');
        $this->assertNotNull($result);
    }

    /**
     * Test case for textSummarization
     *
     * .
     *
     */
    public function testTextSummarization()
    {
        $result = $this->apiInstance->textSummarization("Washington, D.C., formally the District of Columbia, also known as just Washington or just D.C., is the capital city and only federal district of the United States. It is located on the east bank of the Potomac River, which forms its southwestern and southern border with the U.S. state of Virginia, and shares a land border with the U.S. state of Maryland on its remaining sides. The city was named for George Washington, a Founding Father and the first president of the United States, and the federal district is named after Columbia, a female personification of the nation. As the seat of the U.S. federal government and several international organizations, the city is an important world political capital. It is one of the most visited cities in the U.S., seeing over 20 million visitors in 2016.", '["openai_ada", "openai_davinci"]');
        $this->assertNotNull($result);
    }
}
