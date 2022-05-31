<?php
/**
 * VisionApi
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
 * VisionApi Class Doc Comment
 *
 * @category Class
 * @package  edenai
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VisionApi
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
     * Operation explicitContentDetection
     *
     * @param  \SplFileObject $files File Image to analyse (ex: pdf, jpg, jpeg, png, tiff) (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;google&#39;]) (required)
     *
     * @throws \edenai\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \edenai\Model\InlineResponse20016
     */
    public function explicitContentDetection($files, $providers)
    {
        list($response) = $this->explicitContentDetectionWithHttpInfo($files, $providers);
        return $response;
    }

    /**
     * Operation explicitContentDetectionWithHttpInfo
     *
     * @param  \SplFileObject $files File Image to analyse (ex: pdf, jpg, jpeg, png, tiff) (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;google&#39;]) (required)
     *
     * @throws \edenai\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \edenai\Model\InlineResponse20016, HTTP status code, HTTP response headers (array of strings)
     */
    public function explicitContentDetectionWithHttpInfo($files, $providers)
    {
        $returnType = '\edenai\Model\InlineResponse20016';
        $request = $this->explicitContentDetectionRequest($files, $providers);

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
                        '\edenai\Model\InlineResponse20016',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation explicitContentDetectionAsync
     *
     * 
     *
     * @param  \SplFileObject $files File Image to analyse (ex: pdf, jpg, jpeg, png, tiff) (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;google&#39;]) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function explicitContentDetectionAsync($files, $providers)
    {
        return $this->explicitContentDetectionAsyncWithHttpInfo($files, $providers)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation explicitContentDetectionAsyncWithHttpInfo
     *
     * 
     *
     * @param  \SplFileObject $files File Image to analyse (ex: pdf, jpg, jpeg, png, tiff) (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;google&#39;]) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function explicitContentDetectionAsyncWithHttpInfo($files, $providers)
    {
        $returnType = '\edenai\Model\InlineResponse20016';
        $request = $this->explicitContentDetectionRequest($files, $providers);

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
     * Create request for operation 'explicitContentDetection'
     *
     * @param  \SplFileObject $files File Image to analyse (ex: pdf, jpg, jpeg, png, tiff) (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;google&#39;]) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function explicitContentDetectionRequest($files, $providers)
    {
        // verify the required parameter 'files' is set
        if ($files === null || (is_array($files) && count($files) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $files when calling explicitContentDetection'
            );
        }
        // verify the required parameter 'providers' is set
        if ($providers === null || (is_array($providers) && count($providers) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $providers when calling explicitContentDetection'
            );
        }
        if (strlen($providers) < 1) {
            throw new \InvalidArgumentException('invalid length for "$providers" when calling VisionApi.explicitContentDetection, must be bigger than or equal to 1.');
        }


        $resourcePath = '/pretrained/vision/explicit_content_detection';
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
     * Operation faceDetection
     *
     * @param  \SplFileObject $files File Image to analyse (ex: pdf, jpg, jpeg, png, tiff) (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;,&#39;google&#39;]) (required)
     *
     * @throws \edenai\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \edenai\Model\InlineResponse20017
     */
    public function faceDetection($files, $providers)
    {
        list($response) = $this->faceDetectionWithHttpInfo($files, $providers);
        return $response;
    }

    /**
     * Operation faceDetectionWithHttpInfo
     *
     * @param  \SplFileObject $files File Image to analyse (ex: pdf, jpg, jpeg, png, tiff) (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;,&#39;google&#39;]) (required)
     *
     * @throws \edenai\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \edenai\Model\InlineResponse20017, HTTP status code, HTTP response headers (array of strings)
     */
    public function faceDetectionWithHttpInfo($files, $providers)
    {
        $returnType = '\edenai\Model\InlineResponse20017';
        $request = $this->faceDetectionRequest($files, $providers);

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
                        '\edenai\Model\InlineResponse20017',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation faceDetectionAsync
     *
     * 
     *
     * @param  \SplFileObject $files File Image to analyse (ex: pdf, jpg, jpeg, png, tiff) (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;,&#39;google&#39;]) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function faceDetectionAsync($files, $providers)
    {
        return $this->faceDetectionAsyncWithHttpInfo($files, $providers)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation faceDetectionAsyncWithHttpInfo
     *
     * 
     *
     * @param  \SplFileObject $files File Image to analyse (ex: pdf, jpg, jpeg, png, tiff) (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;,&#39;google&#39;]) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function faceDetectionAsyncWithHttpInfo($files, $providers)
    {
        $returnType = '\edenai\Model\InlineResponse20017';
        $request = $this->faceDetectionRequest($files, $providers);

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
     * Create request for operation 'faceDetection'
     *
     * @param  \SplFileObject $files File Image to analyse (ex: pdf, jpg, jpeg, png, tiff) (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;,&#39;google&#39;]) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function faceDetectionRequest($files, $providers)
    {
        // verify the required parameter 'files' is set
        if ($files === null || (is_array($files) && count($files) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $files when calling faceDetection'
            );
        }
        // verify the required parameter 'providers' is set
        if ($providers === null || (is_array($providers) && count($providers) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $providers when calling faceDetection'
            );
        }
        if (strlen($providers) < 1) {
            throw new \InvalidArgumentException('invalid length for "$providers" when calling VisionApi.faceDetection, must be bigger than or equal to 1.');
        }


        $resourcePath = '/pretrained/vision/face_detection';
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
     * Operation objectDetection
     *
     * @param  \SplFileObject $files File Image to analyse (ex: pdf, jpg, jpeg, png, tiff) (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;,&#39;google&#39;]) (required)
     *
     * @throws \edenai\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \edenai\Model\InlineResponse20018
     */
    public function objectDetection($files, $providers)
    {
        list($response) = $this->objectDetectionWithHttpInfo($files, $providers);
        return $response;
    }

    /**
     * Operation objectDetectionWithHttpInfo
     *
     * @param  \SplFileObject $files File Image to analyse (ex: pdf, jpg, jpeg, png, tiff) (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;,&#39;google&#39;]) (required)
     *
     * @throws \edenai\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \edenai\Model\InlineResponse20018, HTTP status code, HTTP response headers (array of strings)
     */
    public function objectDetectionWithHttpInfo($files, $providers)
    {
        $returnType = '\edenai\Model\InlineResponse20018';
        $request = $this->objectDetectionRequest($files, $providers);

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
                        '\edenai\Model\InlineResponse20018',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation objectDetectionAsync
     *
     * 
     *
     * @param  \SplFileObject $files File Image to analyse (ex: pdf, jpg, jpeg, png, tiff) (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;,&#39;google&#39;]) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function objectDetectionAsync($files, $providers)
    {
        return $this->objectDetectionAsyncWithHttpInfo($files, $providers)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation objectDetectionAsyncWithHttpInfo
     *
     * 
     *
     * @param  \SplFileObject $files File Image to analyse (ex: pdf, jpg, jpeg, png, tiff) (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;,&#39;google&#39;]) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function objectDetectionAsyncWithHttpInfo($files, $providers)
    {
        $returnType = '\edenai\Model\InlineResponse20018';
        $request = $this->objectDetectionRequest($files, $providers);

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
     * Create request for operation 'objectDetection'
     *
     * @param  \SplFileObject $files File Image to analyse (ex: pdf, jpg, jpeg, png, tiff) (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;,&#39;google&#39;]) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function objectDetectionRequest($files, $providers)
    {
        // verify the required parameter 'files' is set
        if ($files === null || (is_array($files) && count($files) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $files when calling objectDetection'
            );
        }
        // verify the required parameter 'providers' is set
        if ($providers === null || (is_array($providers) && count($providers) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $providers when calling objectDetection'
            );
        }
        if (strlen($providers) < 1) {
            throw new \InvalidArgumentException('invalid length for "$providers" when calling VisionApi.objectDetection, must be bigger than or equal to 1.');
        }


        $resourcePath = '/pretrained/vision/object_detection';
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
