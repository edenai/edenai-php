<?php
/**
 * OCRApi
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
 * OCRApi Class Doc Comment
 *
 * @category Class
 * @package  edenai
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OCRApi
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
     * Operation asyncOcrTablesJobIds
     *
     *
     * @throws \edenai\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \edenai\Model\InlineResponse2001
     */
    public function asyncOcrTablesJobIds()
    {
        list($response) = $this->asyncOcrTablesJobIdsWithHttpInfo();
        return $response;
    }

    /**
     * Operation asyncOcrTablesJobIdsWithHttpInfo
     *
     *
     * @throws \edenai\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \edenai\Model\InlineResponse2001, HTTP status code, HTTP response headers (array of strings)
     */
    public function asyncOcrTablesJobIdsWithHttpInfo()
    {
        $returnType = '\edenai\Model\InlineResponse2001';
        $request = $this->asyncOcrTablesJobIdsRequest();

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
                        '\edenai\Model\InlineResponse2001',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation asyncOcrTablesJobIdsAsync
     *
     * 
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function asyncOcrTablesJobIdsAsync()
    {
        return $this->asyncOcrTablesJobIdsAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation asyncOcrTablesJobIdsAsyncWithHttpInfo
     *
     * 
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function asyncOcrTablesJobIdsAsyncWithHttpInfo()
    {
        $returnType = '\edenai\Model\InlineResponse2001';
        $request = $this->asyncOcrTablesJobIdsRequest();

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
     * Create request for operation 'asyncOcrTablesJobIds'
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function asyncOcrTablesJobIdsRequest()
    {

        $resourcePath = '/pretrained/async/ocr/tables/get_jobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



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
     * Operation asyncOcrTablesLaunch
     *
     * @param  string $language Language code expected (ex: fr-FR (French), en-US (English), es-ES (Spanish), nl-NL Dutch (Netherlands)) (required)
     * @param  \SplFileObject $files File to analyse (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;google&#39;]) (required)
     * @param  string $webhook_receiver Webhook receiver should be a valid https URL (ex : https://your.listner.com/endpoint) (optional)
     * @param  string $users_webhook_parameters Json data that consist of additional parameters that will be sent back to the webhook receiver (ex: api key for security). (optional)
     * @param  bool $show_original_responses Weither or not to show the provider original response (optional, default to false)
     *
     * @throws \edenai\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \edenai\Model\InlineResponse204
     */
    public function asyncOcrTablesLaunch($language, $files, $providers, $webhook_receiver = null, $users_webhook_parameters = null, $show_original_responses = 'false')
    {
        list($response) = $this->asyncOcrTablesLaunchWithHttpInfo($language, $files, $providers, $webhook_receiver, $users_webhook_parameters, $show_original_responses);
        return $response;
    }

    /**
     * Operation asyncOcrTablesLaunchWithHttpInfo
     *
     * @param  string $language Language code expected (ex: fr-FR (French), en-US (English), es-ES (Spanish), nl-NL Dutch (Netherlands)) (required)
     * @param  \SplFileObject $files File to analyse (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;google&#39;]) (required)
     * @param  string $webhook_receiver Webhook receiver should be a valid https URL (ex : https://your.listner.com/endpoint) (optional)
     * @param  string $users_webhook_parameters Json data that consist of additional parameters that will be sent back to the webhook receiver (ex: api key for security). (optional)
     * @param  bool $show_original_responses Weither or not to show the provider original response (optional, default to false)
     *
     * @throws \edenai\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \edenai\Model\InlineResponse204, HTTP status code, HTTP response headers (array of strings)
     */
    public function asyncOcrTablesLaunchWithHttpInfo($language, $files, $providers, $webhook_receiver = null, $users_webhook_parameters = null, $show_original_responses = 'false')
    {
        $returnType = '\edenai\Model\InlineResponse204';
        $request = $this->asyncOcrTablesLaunchRequest($language, $files, $providers, $webhook_receiver, $users_webhook_parameters, $show_original_responses);

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
                        '\edenai\Model\InlineResponse204',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation asyncOcrTablesLaunchAsync
     *
     * 
     *
     * @param  string $language Language code expected (ex: fr-FR (French), en-US (English), es-ES (Spanish), nl-NL Dutch (Netherlands)) (required)
     * @param  \SplFileObject $files File to analyse (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;google&#39;]) (required)
     * @param  string $webhook_receiver Webhook receiver should be a valid https URL (ex : https://your.listner.com/endpoint) (optional)
     * @param  string $users_webhook_parameters Json data that consist of additional parameters that will be sent back to the webhook receiver (ex: api key for security). (optional)
     * @param  bool $show_original_responses Weither or not to show the provider original response (optional, default to false)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function asyncOcrTablesLaunchAsync($language, $files, $providers, $webhook_receiver = null, $users_webhook_parameters = null, $show_original_responses = 'false')
    {
        return $this->asyncOcrTablesLaunchAsyncWithHttpInfo($language, $files, $providers, $webhook_receiver, $users_webhook_parameters, $show_original_responses)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation asyncOcrTablesLaunchAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $language Language code expected (ex: fr-FR (French), en-US (English), es-ES (Spanish), nl-NL Dutch (Netherlands)) (required)
     * @param  \SplFileObject $files File to analyse (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;google&#39;]) (required)
     * @param  string $webhook_receiver Webhook receiver should be a valid https URL (ex : https://your.listner.com/endpoint) (optional)
     * @param  string $users_webhook_parameters Json data that consist of additional parameters that will be sent back to the webhook receiver (ex: api key for security). (optional)
     * @param  bool $show_original_responses Weither or not to show the provider original response (optional, default to false)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function asyncOcrTablesLaunchAsyncWithHttpInfo($language, $files, $providers, $webhook_receiver = null, $users_webhook_parameters = null, $show_original_responses = 'false')
    {
        $returnType = '\edenai\Model\InlineResponse204';
        $request = $this->asyncOcrTablesLaunchRequest($language, $files, $providers, $webhook_receiver, $users_webhook_parameters, $show_original_responses);

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
     * Create request for operation 'asyncOcrTablesLaunch'
     *
     * @param  string $language Language code expected (ex: fr-FR (French), en-US (English), es-ES (Spanish), nl-NL Dutch (Netherlands)) (required)
     * @param  \SplFileObject $files File to analyse (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;google&#39;]) (required)
     * @param  string $webhook_receiver Webhook receiver should be a valid https URL (ex : https://your.listner.com/endpoint) (optional)
     * @param  string $users_webhook_parameters Json data that consist of additional parameters that will be sent back to the webhook receiver (ex: api key for security). (optional)
     * @param  bool $show_original_responses Weither or not to show the provider original response (optional, default to false)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function asyncOcrTablesLaunchRequest($language, $files, $providers, $webhook_receiver = null, $users_webhook_parameters = null, $show_original_responses = 'false')
    {
        // verify the required parameter 'language' is set
        if ($language === null || (is_array($language) && count($language) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $language when calling asyncOcrTablesLaunch'
            );
        }
        if (strlen($language) < 1) {
            throw new \InvalidArgumentException('invalid length for "$language" when calling OCRApi.asyncOcrTablesLaunch, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'files' is set
        if ($files === null || (is_array($files) && count($files) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $files when calling asyncOcrTablesLaunch'
            );
        }
        // verify the required parameter 'providers' is set
        if ($providers === null || (is_array($providers) && count($providers) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $providers when calling asyncOcrTablesLaunch'
            );
        }
        if (strlen($providers) < 1) {
            throw new \InvalidArgumentException('invalid length for "$providers" when calling OCRApi.asyncOcrTablesLaunch, must be bigger than or equal to 1.');
        }

        if ($webhook_receiver !== null && strlen($webhook_receiver) < 1) {
            throw new \InvalidArgumentException('invalid length for "$webhook_receiver" when calling OCRApi.asyncOcrTablesLaunch, must be bigger than or equal to 1.');
        }


        $resourcePath = '/pretrained/async/ocr/tables/launch_job';
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
        if ($show_original_responses !== null) {
            $formParams['show_original_responses'] = ObjectSerializer::toFormValue($show_original_responses);
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
     * Operation asyncOcrTablesResults
     *
     * @param  string $public_id public_id (required)
     *
     * @throws \edenai\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \edenai\Model\InlineResponse2002
     */
    public function asyncOcrTablesResults($public_id)
    {
        list($response) = $this->asyncOcrTablesResultsWithHttpInfo($public_id);
        return $response;
    }

    /**
     * Operation asyncOcrTablesResultsWithHttpInfo
     *
     * @param  string $public_id (required)
     *
     * @throws \edenai\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \edenai\Model\InlineResponse2002, HTTP status code, HTTP response headers (array of strings)
     */
    public function asyncOcrTablesResultsWithHttpInfo($public_id)
    {
        $returnType = '\edenai\Model\InlineResponse2002';
        $request = $this->asyncOcrTablesResultsRequest($public_id);

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
                        '\edenai\Model\InlineResponse2002',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 204:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\edenai\Model\InlineResponse204',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation asyncOcrTablesResultsAsync
     *
     * 
     *
     * @param  string $public_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function asyncOcrTablesResultsAsync($public_id)
    {
        return $this->asyncOcrTablesResultsAsyncWithHttpInfo($public_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation asyncOcrTablesResultsAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $public_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function asyncOcrTablesResultsAsyncWithHttpInfo($public_id)
    {
        $returnType = '\edenai\Model\InlineResponse2002';
        $request = $this->asyncOcrTablesResultsRequest($public_id);

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
     * Create request for operation 'asyncOcrTablesResults'
     *
     * @param  string $public_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function asyncOcrTablesResultsRequest($public_id)
    {
        // verify the required parameter 'public_id' is set
        if ($public_id === null || (is_array($public_id) && count($public_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $public_id when calling asyncOcrTablesResults'
            );
        }

        $resourcePath = '/pretrained/async/ocr/tables/get_results/{public_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($public_id !== null) {
            $resourcePath = str_replace(
                '{' . 'public_id' . '}',
                ObjectSerializer::toPathValue($public_id),
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
     * Operation ocr
     *
     * @param  \SplFileObject $files File to analyse (ex: pdf, jpg, jpeg, png, tiff) (required)
     * @param  string $providers Providers to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;, &#39;google&#39;]) (required)
     * @param  string $language Language code expected (ex: fr-FR) (required)
     *
     * @throws \edenai\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \edenai\Model\InlineResponse2005
     */
    public function ocr($files, $providers, $language)
    {
        list($response) = $this->ocrWithHttpInfo($files, $providers, $language);
        return $response;
    }

    /**
     * Operation ocrWithHttpInfo
     *
     * @param  \SplFileObject $files File to analyse (ex: pdf, jpg, jpeg, png, tiff) (required)
     * @param  string $providers Providers to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;, &#39;google&#39;]) (required)
     * @param  string $language Language code expected (ex: fr-FR) (required)
     *
     * @throws \edenai\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \edenai\Model\InlineResponse2005, HTTP status code, HTTP response headers (array of strings)
     */
    public function ocrWithHttpInfo($files, $providers, $language)
    {
        $returnType = '\edenai\Model\InlineResponse2005';
        $request = $this->ocrRequest($files, $providers, $language);

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
                        '\edenai\Model\InlineResponse2005',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation ocrAsync
     *
     * 
     *
     * @param  \SplFileObject $files File to analyse (ex: pdf, jpg, jpeg, png, tiff) (required)
     * @param  string $providers Providers to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;, &#39;google&#39;]) (required)
     * @param  string $language Language code expected (ex: fr-FR) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function ocrAsync($files, $providers, $language)
    {
        return $this->ocrAsyncWithHttpInfo($files, $providers, $language)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation ocrAsyncWithHttpInfo
     *
     * 
     *
     * @param  \SplFileObject $files File to analyse (ex: pdf, jpg, jpeg, png, tiff) (required)
     * @param  string $providers Providers to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;, &#39;google&#39;]) (required)
     * @param  string $language Language code expected (ex: fr-FR) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function ocrAsyncWithHttpInfo($files, $providers, $language)
    {
        $returnType = '\edenai\Model\InlineResponse2005';
        $request = $this->ocrRequest($files, $providers, $language);

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
     * Create request for operation 'ocr'
     *
     * @param  \SplFileObject $files File to analyse (ex: pdf, jpg, jpeg, png, tiff) (required)
     * @param  string $providers Providers to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;, &#39;google&#39;]) (required)
     * @param  string $language Language code expected (ex: fr-FR) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function ocrRequest($files, $providers, $language)
    {
        // verify the required parameter 'files' is set
        if ($files === null || (is_array($files) && count($files) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $files when calling ocr'
            );
        }
        // verify the required parameter 'providers' is set
        if ($providers === null || (is_array($providers) && count($providers) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $providers when calling ocr'
            );
        }
        if (strlen($providers) < 1) {
            throw new \InvalidArgumentException('invalid length for "$providers" when calling OCRApi.ocr, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'language' is set
        if ($language === null || (is_array($language) && count($language) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $language when calling ocr'
            );
        }
        if (strlen($language) < 1) {
            throw new \InvalidArgumentException('invalid length for "$language" when calling OCRApi.ocr, must be bigger than or equal to 1.');
        }


        $resourcePath = '/pretrained/ocr/ocr';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



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
        if ($language !== null) {
            $formParams['language'] = ObjectSerializer::toFormValue($language);
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
     * Operation ocrCv
     *
     * @param  \SplFileObject $files File to analyse (ex: pdf, doc, docs, rtf, png, jpg) (required)
     * @param  string $providers Providers to compare (ex: [ &#39;affinda&#39;, &#39;hrflow&#39;]) (required)
     *
     * @throws \edenai\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \edenai\Model\InlineResponse2005
     */
    public function ocrCv($files, $providers)
    {
        list($response) = $this->ocrCvWithHttpInfo($files, $providers);
        return $response;
    }

    /**
     * Operation ocrCvWithHttpInfo
     *
     * @param  \SplFileObject $files File to analyse (ex: pdf, doc, docs, rtf, png, jpg) (required)
     * @param  string $providers Providers to compare (ex: [ &#39;affinda&#39;, &#39;hrflow&#39;]) (required)
     *
     * @throws \edenai\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \edenai\Model\InlineResponse2005, HTTP status code, HTTP response headers (array of strings)
     */
    public function ocrCvWithHttpInfo($files, $providers)
    {
        $returnType = '\edenai\Model\InlineResponse2005';
        $request = $this->ocrCvRequest($files, $providers);

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
                        '\edenai\Model\InlineResponse2005',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation ocrCvAsync
     *
     * 
     *
     * @param  \SplFileObject $files File to analyse (ex: pdf, doc, docs, rtf, png, jpg) (required)
     * @param  string $providers Providers to compare (ex: [ &#39;affinda&#39;, &#39;hrflow&#39;]) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function ocrCvAsync($files, $providers)
    {
        return $this->ocrCvAsyncWithHttpInfo($files, $providers)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation ocrCvAsyncWithHttpInfo
     *
     * 
     *
     * @param  \SplFileObject $files File to analyse (ex: pdf, doc, docs, rtf, png, jpg) (required)
     * @param  string $providers Providers to compare (ex: [ &#39;affinda&#39;, &#39;hrflow&#39;]) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function ocrCvAsyncWithHttpInfo($files, $providers)
    {
        $returnType = '\edenai\Model\InlineResponse2005';
        $request = $this->ocrCvRequest($files, $providers);

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
     * Create request for operation 'ocrCv'
     *
     * @param  \SplFileObject $files File to analyse (ex: pdf, doc, docs, rtf, png, jpg) (required)
     * @param  string $providers Providers to compare (ex: [ &#39;affinda&#39;, &#39;hrflow&#39;]) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function ocrCvRequest($files, $providers)
    {
        // verify the required parameter 'files' is set
        if ($files === null || (is_array($files) && count($files) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $files when calling ocrCv'
            );
        }
        // verify the required parameter 'providers' is set
        if ($providers === null || (is_array($providers) && count($providers) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $providers when calling ocrCv'
            );
        }
        if (strlen($providers) < 1) {
            throw new \InvalidArgumentException('invalid length for "$providers" when calling OCRApi.ocrCv, must be bigger than or equal to 1.');
        }


        $resourcePath = '/pretrained/ocr/ocr_cv';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // form params
        if ($files !== null) {
            $multipart = true;
            $formParams['files'] = \GuzzleHttp\Psr7\try_fopen(ObjectSerializer::toFormValue($files), 'rb');
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
     * Operation ocrInvoice
     *
     * @param  \SplFileObject $files File Image to analyse (ex: pdf, jpg, jpeg, png) (required)
     * @param  string $providers Provider to compare (ex: [ &#39;mindee&#39;, &#39;microsoft&#39;]) (required)
     * @param  string $language Language code of invoice (ex: fr-FR (French), en-US (English), es-ES (Spanish)) (required)
     *
     * @throws \edenai\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \edenai\Model\InlineResponse2006
     */
    public function ocrInvoice($files, $providers, $language)
    {
        list($response) = $this->ocrInvoiceWithHttpInfo($files, $providers, $language);
        return $response;
    }

    /**
     * Operation ocrInvoiceWithHttpInfo
     *
     * @param  \SplFileObject $files File Image to analyse (ex: pdf, jpg, jpeg, png) (required)
     * @param  string $providers Provider to compare (ex: [ &#39;mindee&#39;, &#39;microsoft&#39;]) (required)
     * @param  string $language Language code of invoice (ex: fr-FR (French), en-US (English), es-ES (Spanish)) (required)
     *
     * @throws \edenai\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \edenai\Model\InlineResponse2006, HTTP status code, HTTP response headers (array of strings)
     */
    public function ocrInvoiceWithHttpInfo($files, $providers, $language)
    {
        $returnType = '\edenai\Model\InlineResponse2006';
        $request = $this->ocrInvoiceRequest($files, $providers, $language);

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
                        '\edenai\Model\InlineResponse2006',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation ocrInvoiceAsync
     *
     * 
     *
     * @param  \SplFileObject $files File Image to analyse (ex: pdf, jpg, jpeg, png) (required)
     * @param  string $providers Provider to compare (ex: [ &#39;mindee&#39;, &#39;microsoft&#39;]) (required)
     * @param  string $language Language code of invoice (ex: fr-FR (French), en-US (English), es-ES (Spanish)) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function ocrInvoiceAsync($files, $providers, $language)
    {
        return $this->ocrInvoiceAsyncWithHttpInfo($files, $providers, $language)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation ocrInvoiceAsyncWithHttpInfo
     *
     * 
     *
     * @param  \SplFileObject $files File Image to analyse (ex: pdf, jpg, jpeg, png) (required)
     * @param  string $providers Provider to compare (ex: [ &#39;mindee&#39;, &#39;microsoft&#39;]) (required)
     * @param  string $language Language code of invoice (ex: fr-FR (French), en-US (English), es-ES (Spanish)) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function ocrInvoiceAsyncWithHttpInfo($files, $providers, $language)
    {
        $returnType = '\edenai\Model\InlineResponse2006';
        $request = $this->ocrInvoiceRequest($files, $providers, $language);

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
     * Create request for operation 'ocrInvoice'
     *
     * @param  \SplFileObject $files File Image to analyse (ex: pdf, jpg, jpeg, png) (required)
     * @param  string $providers Provider to compare (ex: [ &#39;mindee&#39;, &#39;microsoft&#39;]) (required)
     * @param  string $language Language code of invoice (ex: fr-FR (French), en-US (English), es-ES (Spanish)) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function ocrInvoiceRequest($files, $providers, $language)
    {
        // verify the required parameter 'files' is set
        if ($files === null || (is_array($files) && count($files) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $files when calling ocrInvoice'
            );
        }
        // verify the required parameter 'providers' is set
        if ($providers === null || (is_array($providers) && count($providers) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $providers when calling ocrInvoice'
            );
        }
        if (strlen($providers) < 1) {
            throw new \InvalidArgumentException('invalid length for "$providers" when calling OCRApi.ocrInvoice, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'language' is set
        if ($language === null || (is_array($language) && count($language) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $language when calling ocrInvoice'
            );
        }
        if (strlen($language) < 1) {
            throw new \InvalidArgumentException('invalid length for "$language" when calling OCRApi.ocrInvoice, must be bigger than or equal to 1.');
        }


        $resourcePath = '/pretrained/ocr/ocr_invoice';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



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
        if ($language !== null) {
            $formParams['language'] = ObjectSerializer::toFormValue($language);
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
     * Operation ocrTables
     *
     * @param  \SplFileObject $files File to analyse (ex: pdf, jpg, jpeg, png, tiff) (required)
     * @param  string $providers Providers to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;google&#39;]) (required)
     * @param  string $language Language code expected (ex: fr-FR) (required)
     *
     * @throws \edenai\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \edenai\Model\InlineResponse2006
     */
    public function ocrTables($files, $providers, $language)
    {
        list($response) = $this->ocrTablesWithHttpInfo($files, $providers, $language);
        return $response;
    }

    /**
     * Operation ocrTablesWithHttpInfo
     *
     * @param  \SplFileObject $files File to analyse (ex: pdf, jpg, jpeg, png, tiff) (required)
     * @param  string $providers Providers to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;google&#39;]) (required)
     * @param  string $language Language code expected (ex: fr-FR) (required)
     *
     * @throws \edenai\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \edenai\Model\InlineResponse2006, HTTP status code, HTTP response headers (array of strings)
     */
    public function ocrTablesWithHttpInfo($files, $providers, $language)
    {
        $returnType = '\edenai\Model\InlineResponse2006';
        $request = $this->ocrTablesRequest($files, $providers, $language);

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
                        '\edenai\Model\InlineResponse2006',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation ocrTablesAsync
     *
     * 
     *
     * @param  \SplFileObject $files File to analyse (ex: pdf, jpg, jpeg, png, tiff) (required)
     * @param  string $providers Providers to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;google&#39;]) (required)
     * @param  string $language Language code expected (ex: fr-FR) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function ocrTablesAsync($files, $providers, $language)
    {
        return $this->ocrTablesAsyncWithHttpInfo($files, $providers, $language)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation ocrTablesAsyncWithHttpInfo
     *
     * 
     *
     * @param  \SplFileObject $files File to analyse (ex: pdf, jpg, jpeg, png, tiff) (required)
     * @param  string $providers Providers to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;google&#39;]) (required)
     * @param  string $language Language code expected (ex: fr-FR) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function ocrTablesAsyncWithHttpInfo($files, $providers, $language)
    {
        $returnType = '\edenai\Model\InlineResponse2006';
        $request = $this->ocrTablesRequest($files, $providers, $language);

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
     * Create request for operation 'ocrTables'
     *
     * @param  \SplFileObject $files File to analyse (ex: pdf, jpg, jpeg, png, tiff) (required)
     * @param  string $providers Providers to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;google&#39;]) (required)
     * @param  string $language Language code expected (ex: fr-FR) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function ocrTablesRequest($files, $providers, $language)
    {
        // verify the required parameter 'files' is set
        if ($files === null || (is_array($files) && count($files) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $files when calling ocrTables'
            );
        }
        // verify the required parameter 'providers' is set
        if ($providers === null || (is_array($providers) && count($providers) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $providers when calling ocrTables'
            );
        }
        if (strlen($providers) < 1) {
            throw new \InvalidArgumentException('invalid length for "$providers" when calling OCRApi.ocrTables, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'language' is set
        if ($language === null || (is_array($language) && count($language) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $language when calling ocrTables'
            );
        }
        if (strlen($language) < 1) {
            throw new \InvalidArgumentException('invalid length for "$language" when calling OCRApi.ocrTables, must be bigger than or equal to 1.');
        }


        $resourcePath = '/pretrained/ocr/ocr_tables';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



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
        if ($language !== null) {
            $formParams['language'] = ObjectSerializer::toFormValue($language);
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
