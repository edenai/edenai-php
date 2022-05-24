<?php
/**
 * SpeechApi
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

namespace edenai\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use edenai\ApiException;
use edenai\Configuration;
use edenai\HeaderSelector;
use edenai\ObjectSerializer;

/**
 * SpeechApi Class Doc Comment
 *
 * @category Class
 * @package  edenai
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SpeechApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation asyncSpeechToText
     *
     * @param  string $language Language code expected (ex: fr-FR (French), en-US (English), es-ES (Spanish), nl-NL Dutch (Netherlands)) (required)
     * @param  \SplFileObject $files File to analyse (ex: mp3, wav, m4a) (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;,&#39;google&#39;, &#39;threescribe]) (required)
     * @param  string $webhook_receiver Webhook reciever should be a valid https URL (ex : https://your.listner.com/endpoint) (optional)
     * @param  string $users_webhook_parameters Json data that consist of additional parameters that will be sent back to the webhook receiver (ex: api key for security).                    **NOTE : The data will be returned back as a string that should be decoded into a json object!** (optional)
     * @param  string $vocab Speechmatics allows to add a custom vocab dictionnary (json format) for better recognition, you can add it via this parameter.                     It has to be a list of dictionaries : {&#39;content&#39;(Required) : &#39;string&#39;, &#39;sounds_like&#39;(Optional) : &#39;list of strings&#39;} (optional)
     *
     * @throws \edenai\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \edenai\Model\InlineResponse2003
     */
    public function asyncSpeechToText($language, $files, $providers, $webhook_receiver = null, $users_webhook_parameters = null, $vocab = null)
    {
        list($response) = $this->asyncSpeechToTextWithHttpInfo($language, $files, $providers, $webhook_receiver, $users_webhook_parameters, $vocab);
        return $response;
    }

    /**
     * Operation asyncSpeechToTextWithHttpInfo
     *
     * @param  string $language Language code expected (ex: fr-FR (French), en-US (English), es-ES (Spanish), nl-NL Dutch (Netherlands)) (required)
     * @param  \SplFileObject $files File to analyse (ex: mp3, wav, m4a) (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;,&#39;google&#39;, &#39;threescribe]) (required)
     * @param  string $webhook_receiver Webhook reciever should be a valid https URL (ex : https://your.listner.com/endpoint) (optional)
     * @param  string $users_webhook_parameters Json data that consist of additional parameters that will be sent back to the webhook receiver (ex: api key for security).                    **NOTE : The data will be returned back as a string that should be decoded into a json object!** (optional)
     * @param  string $vocab Speechmatics allows to add a custom vocab dictionnary (json format) for better recognition, you can add it via this parameter.                     It has to be a list of dictionaries : {&#39;content&#39;(Required) : &#39;string&#39;, &#39;sounds_like&#39;(Optional) : &#39;list of strings&#39;} (optional)
     *
     * @throws \edenai\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \edenai\Model\InlineResponse2003, HTTP status code, HTTP response headers (array of strings)
     */
    public function asyncSpeechToTextWithHttpInfo($language, $files, $providers, $webhook_receiver = null, $users_webhook_parameters = null, $vocab = null)
    {
        $returnType = '\edenai\Model\InlineResponse2003';
        $request = $this->asyncSpeechToTextRequest($language, $files, $providers, $webhook_receiver, $users_webhook_parameters, $vocab);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\edenai\Model\InlineResponse2003',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation asyncSpeechToTextAsync
     *
     * 
     *
     * @param  string $language Language code expected (ex: fr-FR (French), en-US (English), es-ES (Spanish), nl-NL Dutch (Netherlands)) (required)
     * @param  \SplFileObject $files File to analyse (ex: mp3, wav, m4a) (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;,&#39;google&#39;, &#39;threescribe]) (required)
     * @param  string $webhook_receiver Webhook reciever should be a valid https URL (ex : https://your.listner.com/endpoint) (optional)
     * @param  string $users_webhook_parameters Json data that consist of additional parameters that will be sent back to the webhook receiver (ex: api key for security).                    **NOTE : The data will be returned back as a string that should be decoded into a json object!** (optional)
     * @param  string $vocab Speechmatics allows to add a custom vocab dictionnary (json format) for better recognition, you can add it via this parameter.                     It has to be a list of dictionaries : {&#39;content&#39;(Required) : &#39;string&#39;, &#39;sounds_like&#39;(Optional) : &#39;list of strings&#39;} (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function asyncSpeechToTextAsync($language, $files, $providers, $webhook_receiver = null, $users_webhook_parameters = null, $vocab = null)
    {
        return $this->asyncSpeechToTextAsyncWithHttpInfo($language, $files, $providers, $webhook_receiver, $users_webhook_parameters, $vocab)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation asyncSpeechToTextAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $language Language code expected (ex: fr-FR (French), en-US (English), es-ES (Spanish), nl-NL Dutch (Netherlands)) (required)
     * @param  \SplFileObject $files File to analyse (ex: mp3, wav, m4a) (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;,&#39;google&#39;, &#39;threescribe]) (required)
     * @param  string $webhook_receiver Webhook reciever should be a valid https URL (ex : https://your.listner.com/endpoint) (optional)
     * @param  string $users_webhook_parameters Json data that consist of additional parameters that will be sent back to the webhook receiver (ex: api key for security).                    **NOTE : The data will be returned back as a string that should be decoded into a json object!** (optional)
     * @param  string $vocab Speechmatics allows to add a custom vocab dictionnary (json format) for better recognition, you can add it via this parameter.                     It has to be a list of dictionaries : {&#39;content&#39;(Required) : &#39;string&#39;, &#39;sounds_like&#39;(Optional) : &#39;list of strings&#39;} (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function asyncSpeechToTextAsyncWithHttpInfo($language, $files, $providers, $webhook_receiver = null, $users_webhook_parameters = null, $vocab = null)
    {
        $returnType = '\edenai\Model\InlineResponse2003';
        $request = $this->asyncSpeechToTextRequest($language, $files, $providers, $webhook_receiver, $users_webhook_parameters, $vocab);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'asyncSpeechToText'
     *
     * @param  string $language Language code expected (ex: fr-FR (French), en-US (English), es-ES (Spanish), nl-NL Dutch (Netherlands)) (required)
     * @param  \SplFileObject $files File to analyse (ex: mp3, wav, m4a) (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;,&#39;google&#39;, &#39;threescribe]) (required)
     * @param  string $webhook_receiver Webhook reciever should be a valid https URL (ex : https://your.listner.com/endpoint) (optional)
     * @param  string $users_webhook_parameters Json data that consist of additional parameters that will be sent back to the webhook receiver (ex: api key for security).                    **NOTE : The data will be returned back as a string that should be decoded into a json object!** (optional)
     * @param  string $vocab Speechmatics allows to add a custom vocab dictionnary (json format) for better recognition, you can add it via this parameter.                     It has to be a list of dictionaries : {&#39;content&#39;(Required) : &#39;string&#39;, &#39;sounds_like&#39;(Optional) : &#39;list of strings&#39;} (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function asyncSpeechToTextRequest($language, $files, $providers, $webhook_receiver = null, $users_webhook_parameters = null, $vocab = null)
    {
        // verify the required parameter 'language' is set
        if ($language === null || (is_array($language) && count($language) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $language when calling asyncSpeechToText'
            );
        }
        if (strlen($language) < 1) {
            throw new \InvalidArgumentException('invalid length for "$language" when calling SpeechApi.asyncSpeechToText, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'files' is set
        if ($files === null || (is_array($files) && count($files) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $files when calling asyncSpeechToText'
            );
        }
        // verify the required parameter 'providers' is set
        if ($providers === null || (is_array($providers) && count($providers) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $providers when calling asyncSpeechToText'
            );
        }
        if (strlen($providers) < 1) {
            throw new \InvalidArgumentException('invalid length for "$providers" when calling SpeechApi.asyncSpeechToText, must be bigger than or equal to 1.');
        }

        if ($webhook_receiver !== null && strlen($webhook_receiver) < 1) {
            throw new \InvalidArgumentException('invalid length for "$webhook_receiver" when calling SpeechApi.asyncSpeechToText, must be bigger than or equal to 1.');
        }

        if ($users_webhook_parameters !== null && strlen($users_webhook_parameters) < 1) {
            throw new \InvalidArgumentException('invalid length for "$users_webhook_parameters" when calling SpeechApi.asyncSpeechToText, must be bigger than or equal to 1.');
        }

        if ($vocab !== null && strlen($vocab) > 1000) {
            throw new \InvalidArgumentException('invalid length for "$vocab" when calling SpeechApi.asyncSpeechToText, must be smaller than or equal to 1000.');
        }
        if ($vocab !== null && strlen($vocab) < 1) {
            throw new \InvalidArgumentException('invalid length for "$vocab" when calling SpeechApi.asyncSpeechToText, must be bigger than or equal to 1.');
        }


        $resourcePath = '/pretrained/audio/speech_recognition_async';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // form params
        if ($language !== null) {
            $formParams['language'] = ObjectSerializer::toFormValue($language);
        }
        // form params
        if ($files !== null) {
            $multipart = true;
            $formParams['files'] = \GuzzleHttp\Psr7\try_fopen(ObjectSerializer::toFormValue($files), 'rb');
        }
        // form params
        if ($providers !== null) {
            $formParams['providers'] = ObjectSerializer::toFormValue($providers);
        }
        // form params
        if ($webhook_receiver !== null) {
            $formParams['webhook_receiver'] = ObjectSerializer::toFormValue($webhook_receiver);
        }
        // form params
        if ($users_webhook_parameters !== null) {
            $formParams['users_webhook_parameters'] = ObjectSerializer::toFormValue($users_webhook_parameters);
        }
        // form params
        if ($vocab !== null) {
            $formParams['vocab'] = ObjectSerializer::toFormValue($vocab);
        }
        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['multipart/form-data']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation asyncSpeechToText_0
     *
     * @param  string $job_id job_id (required)
     *
     * @throws \edenai\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \edenai\Model\InlineResponse2004
     */
    public function asyncSpeechToText_0($job_id)
    {
        list($response) = $this->asyncSpeechToText_0WithHttpInfo($job_id);
        return $response;
    }

    /**
     * Operation asyncSpeechToText_0WithHttpInfo
     *
     * @param  string $job_id (required)
     *
     * @throws \edenai\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \edenai\Model\InlineResponse2004, HTTP status code, HTTP response headers (array of strings)
     */
    public function asyncSpeechToText_0WithHttpInfo($job_id)
    {
        $returnType = '\edenai\Model\InlineResponse2004';
        $request = $this->asyncSpeechToText_0Request($job_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\edenai\Model\InlineResponse2004',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation asyncSpeechToText_0Async
     *
     * 
     *
     * @param  string $job_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function asyncSpeechToText_0Async($job_id)
    {
        return $this->asyncSpeechToText_0AsyncWithHttpInfo($job_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation asyncSpeechToText_0AsyncWithHttpInfo
     *
     * 
     *
     * @param  string $job_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function asyncSpeechToText_0AsyncWithHttpInfo($job_id)
    {
        $returnType = '\edenai\Model\InlineResponse2004';
        $request = $this->asyncSpeechToText_0Request($job_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'asyncSpeechToText_0'
     *
     * @param  string $job_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function asyncSpeechToText_0Request($job_id)
    {
        // verify the required parameter 'job_id' is set
        if ($job_id === null || (is_array($job_id) && count($job_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $job_id when calling asyncSpeechToText_0'
            );
        }

        $resourcePath = '/pretrained/audio/speech_recognition_async/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($job_id !== null) {
            $resourcePath = str_replace(
                '{' . 'job_id' . '}',
                ObjectSerializer::toPathValue($job_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation speechToText
     *
     * @param  string $language Language code expected (ex: fr-FR (French), en-US (English), es-ES (Spanish), nl-NL Dutch (Netherlands)) (required)
     * @param  \SplFileObject $files File to analyse (ex: mp3, wav, m4a) (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;,&#39;google&#39;, &#39;threescribe]) (required)
     * @param  string $vocab Speechmatics allows to add a custom vocab dictionnary (json format) for better recognition, you can add it via this parameter.                     It has to be a list of dictionaries : {&#39;content&#39;(Required) : &#39;string&#39;, &#39;sounds_like&#39;(Optional) : &#39;list of strings&#39;} (optional)
     *
     * @throws \edenai\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \edenai\Model\InlineResponse201
     */
    public function speechToText($language, $files, $providers, $vocab = null)
    {
        list($response) = $this->speechToTextWithHttpInfo($language, $files, $providers, $vocab);
        return $response;
    }

    /**
     * Operation speechToTextWithHttpInfo
     *
     * @param  string $language Language code expected (ex: fr-FR (French), en-US (English), es-ES (Spanish), nl-NL Dutch (Netherlands)) (required)
     * @param  \SplFileObject $files File to analyse (ex: mp3, wav, m4a) (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;,&#39;google&#39;, &#39;threescribe]) (required)
     * @param  string $vocab Speechmatics allows to add a custom vocab dictionnary (json format) for better recognition, you can add it via this parameter.                     It has to be a list of dictionaries : {&#39;content&#39;(Required) : &#39;string&#39;, &#39;sounds_like&#39;(Optional) : &#39;list of strings&#39;} (optional)
     *
     * @throws \edenai\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \edenai\Model\InlineResponse201, HTTP status code, HTTP response headers (array of strings)
     */
    public function speechToTextWithHttpInfo($language, $files, $providers, $vocab = null)
    {
        $returnType = '\edenai\Model\InlineResponse201';
        $request = $this->speechToTextRequest($language, $files, $providers, $vocab);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\edenai\Model\InlineResponse201',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation speechToTextAsync
     *
     * 
     *
     * @param  string $language Language code expected (ex: fr-FR (French), en-US (English), es-ES (Spanish), nl-NL Dutch (Netherlands)) (required)
     * @param  \SplFileObject $files File to analyse (ex: mp3, wav, m4a) (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;,&#39;google&#39;, &#39;threescribe]) (required)
     * @param  string $vocab Speechmatics allows to add a custom vocab dictionnary (json format) for better recognition, you can add it via this parameter.                     It has to be a list of dictionaries : {&#39;content&#39;(Required) : &#39;string&#39;, &#39;sounds_like&#39;(Optional) : &#39;list of strings&#39;} (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function speechToTextAsync($language, $files, $providers, $vocab = null)
    {
        return $this->speechToTextAsyncWithHttpInfo($language, $files, $providers, $vocab)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation speechToTextAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $language Language code expected (ex: fr-FR (French), en-US (English), es-ES (Spanish), nl-NL Dutch (Netherlands)) (required)
     * @param  \SplFileObject $files File to analyse (ex: mp3, wav, m4a) (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;,&#39;google&#39;, &#39;threescribe]) (required)
     * @param  string $vocab Speechmatics allows to add a custom vocab dictionnary (json format) for better recognition, you can add it via this parameter.                     It has to be a list of dictionaries : {&#39;content&#39;(Required) : &#39;string&#39;, &#39;sounds_like&#39;(Optional) : &#39;list of strings&#39;} (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function speechToTextAsyncWithHttpInfo($language, $files, $providers, $vocab = null)
    {
        $returnType = '\edenai\Model\InlineResponse201';
        $request = $this->speechToTextRequest($language, $files, $providers, $vocab);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'speechToText'
     *
     * @param  string $language Language code expected (ex: fr-FR (French), en-US (English), es-ES (Spanish), nl-NL Dutch (Netherlands)) (required)
     * @param  \SplFileObject $files File to analyse (ex: mp3, wav, m4a) (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;,&#39;google&#39;, &#39;threescribe]) (required)
     * @param  string $vocab Speechmatics allows to add a custom vocab dictionnary (json format) for better recognition, you can add it via this parameter.                     It has to be a list of dictionaries : {&#39;content&#39;(Required) : &#39;string&#39;, &#39;sounds_like&#39;(Optional) : &#39;list of strings&#39;} (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function speechToTextRequest($language, $files, $providers, $vocab = null)
    {
        // verify the required parameter 'language' is set
        if ($language === null || (is_array($language) && count($language) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $language when calling speechToText'
            );
        }
        if (strlen($language) < 1) {
            throw new \InvalidArgumentException('invalid length for "$language" when calling SpeechApi.speechToText, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'files' is set
        if ($files === null || (is_array($files) && count($files) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $files when calling speechToText'
            );
        }
        // verify the required parameter 'providers' is set
        if ($providers === null || (is_array($providers) && count($providers) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $providers when calling speechToText'
            );
        }
        if (strlen($providers) < 1) {
            throw new \InvalidArgumentException('invalid length for "$providers" when calling SpeechApi.speechToText, must be bigger than or equal to 1.');
        }

        if ($vocab !== null && strlen($vocab) > 1000) {
            throw new \InvalidArgumentException('invalid length for "$vocab" when calling SpeechApi.speechToText, must be smaller than or equal to 1000.');
        }
        if ($vocab !== null && strlen($vocab) < 1) {
            throw new \InvalidArgumentException('invalid length for "$vocab" when calling SpeechApi.speechToText, must be bigger than or equal to 1.');
        }


        $resourcePath = '/pretrained/audio/speech_to_text';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // form params
        if ($language !== null) {
            $formParams['language'] = ObjectSerializer::toFormValue($language);
        }
        // form params
        if ($files !== null) {
            $multipart = true;
            $formParams['files'] = \GuzzleHttp\Psr7\try_fopen(ObjectSerializer::toFormValue($files), 'rb');
        }
        // form params
        if ($providers !== null) {
            $formParams['providers'] = ObjectSerializer::toFormValue($providers);
        }
        // form params
        if ($vocab !== null) {
            $formParams['vocab'] = ObjectSerializer::toFormValue($vocab);
        }
        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['multipart/form-data']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation textToSpeech
     *
     * @param  string $text Text to transform (required)
     * @param  string $language Language code expected (ex: fr-FR (French), en-US (English), es-ES (Spanish)) (required)
     * @param  string $option Voice gender selected (ex: FEMALE ou MALE) (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;,&#39;google&#39;]) (required)
     *
     * @throws \edenai\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \edenai\Model\InlineResponse2011
     */
    public function textToSpeech($text, $language, $option, $providers)
    {
        list($response) = $this->textToSpeechWithHttpInfo($text, $language, $option, $providers);
        return $response;
    }

    /**
     * Operation textToSpeechWithHttpInfo
     *
     * @param  string $text Text to transform (required)
     * @param  string $language Language code expected (ex: fr-FR (French), en-US (English), es-ES (Spanish)) (required)
     * @param  string $option Voice gender selected (ex: FEMALE ou MALE) (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;,&#39;google&#39;]) (required)
     *
     * @throws \edenai\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \edenai\Model\InlineResponse2011, HTTP status code, HTTP response headers (array of strings)
     */
    public function textToSpeechWithHttpInfo($text, $language, $option, $providers)
    {
        $returnType = '\edenai\Model\InlineResponse2011';
        $request = $this->textToSpeechRequest($text, $language, $option, $providers);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\edenai\Model\InlineResponse2011',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation textToSpeechAsync
     *
     * 
     *
     * @param  string $text Text to transform (required)
     * @param  string $language Language code expected (ex: fr-FR (French), en-US (English), es-ES (Spanish)) (required)
     * @param  string $option Voice gender selected (ex: FEMALE ou MALE) (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;,&#39;google&#39;]) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function textToSpeechAsync($text, $language, $option, $providers)
    {
        return $this->textToSpeechAsyncWithHttpInfo($text, $language, $option, $providers)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation textToSpeechAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $text Text to transform (required)
     * @param  string $language Language code expected (ex: fr-FR (French), en-US (English), es-ES (Spanish)) (required)
     * @param  string $option Voice gender selected (ex: FEMALE ou MALE) (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;,&#39;google&#39;]) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function textToSpeechAsyncWithHttpInfo($text, $language, $option, $providers)
    {
        $returnType = '\edenai\Model\InlineResponse2011';
        $request = $this->textToSpeechRequest($text, $language, $option, $providers);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'textToSpeech'
     *
     * @param  string $text Text to transform (required)
     * @param  string $language Language code expected (ex: fr-FR (French), en-US (English), es-ES (Spanish)) (required)
     * @param  string $option Voice gender selected (ex: FEMALE ou MALE) (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;,&#39;google&#39;]) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function textToSpeechRequest($text, $language, $option, $providers)
    {
        // verify the required parameter 'text' is set
        if ($text === null || (is_array($text) && count($text) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $text when calling textToSpeech'
            );
        }
        if (strlen($text) < 1) {
            throw new \InvalidArgumentException('invalid length for "$text" when calling SpeechApi.textToSpeech, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'language' is set
        if ($language === null || (is_array($language) && count($language) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $language when calling textToSpeech'
            );
        }
        if (strlen($language) < 1) {
            throw new \InvalidArgumentException('invalid length for "$language" when calling SpeechApi.textToSpeech, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'option' is set
        if ($option === null || (is_array($option) && count($option) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $option when calling textToSpeech'
            );
        }
        if (strlen($option) < 1) {
            throw new \InvalidArgumentException('invalid length for "$option" when calling SpeechApi.textToSpeech, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'providers' is set
        if ($providers === null || (is_array($providers) && count($providers) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $providers when calling textToSpeech'
            );
        }
        if (strlen($providers) < 1) {
            throw new \InvalidArgumentException('invalid length for "$providers" when calling SpeechApi.textToSpeech, must be bigger than or equal to 1.');
        }


        $resourcePath = '/pretrained/audio/text_to_speech';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // form params
        if ($text !== null) {
            $formParams['text'] = ObjectSerializer::toFormValue($text);
        }
        // form params
        if ($language !== null) {
            $formParams['language'] = ObjectSerializer::toFormValue($language);
        }
        // form params
        if ($option !== null) {
            $formParams['option'] = ObjectSerializer::toFormValue($option);
        }
        // form params
        if ($providers !== null) {
            $formParams['providers'] = ObjectSerializer::toFormValue($providers);
        }
        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/x-www-form-urlencoded']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
