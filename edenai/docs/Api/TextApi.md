# edenai\TextApi

All URIs are relative to *https://api.edenai.run/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**keywordExtraction**](TextApi.md#keywordExtraction) | **POST** /pretrained/text/keyword_extraction | 
[**namedEntityRecognition**](TextApi.md#namedEntityRecognition) | **POST** /pretrained/text/named_entity_recognition | 
[**questionAnswering**](TextApi.md#questionAnswering) | **POST** /pretrained/text/qestion-answer | 
[**search**](TextApi.md#search) | **POST** /pretrained/text/search | 
[**sentimentAnalysis**](TextApi.md#sentimentAnalysis) | **POST** /pretrained/text/sentiment_analysis | 
[**syntaxAnalysis**](TextApi.md#syntaxAnalysis) | **POST** /pretrained/text/syntax_analysis | 
[**textSummarization**](TextApi.md#textSummarization) | **POST** /pretrained/text/text_summarization | 


# **keywordExtraction**
> \edenai\Model\InlineResponse2007 keywordExtraction($language, $text, $providers)



Keyword extraction (also known as keyword detection or keyword analysis) is a text analysis technique that consists of automatically extracting the mostimportant words and expressions in a text.  **SUPPORTED LANGUAGE**  |Name|Type|Value| |----|----|-----| |**Swedish**|`string`|`sw-SW`| |**English (US)**|`string`|`en-US`| |**Portuguese (Portugal)**|`string`|`pt-PT`| |**German**|`string`|`de-DE`| |**French**|`string`|`fr-FR`| |**Italian**|`string`|`it-IT`| |**Finnish**|`string`|`fn-FN`| |**Spanish**|`string`|`es-ES`|  **AVAILABLE PROVIDERS**   |Name|Value|Version| |----|-----|-------| |**Microsoft Azure**|`microsoft`| `v3.1`  |**Amazon Web Services**|`amazon`| `boto3 (v1.15.18)`  |**IBM Watson**|`ibm`| `v1 (2021-08-01)`  |**Lettria**|`lettria`| `v5.5.2`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\TextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$language = "language_example"; // string | Language code of text (ex: fr-FR (French), en-US (English), es-ES (Spanish))
$text = "text_example"; // string | Text to analyze
$providers = "providers_example"; // string | Provider to compare (ex: [ 'amazon', 'microsoft', 'ibm'])

try {
    $result = $apiInstance->keywordExtraction($language, $text, $providers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextApi->keywordExtraction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language** | **string**| Language code of text (ex: fr-FR (French), en-US (English), es-ES (Spanish)) |
 **text** | **string**| Text to analyze |
 **providers** | **string**| Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;]) |

### Return type

[**\edenai\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **namedEntityRecognition**
> \edenai\Model\InlineResponse2008 namedEntityRecognition($language, $text, $providers)



Named Entity Recognition (also called entity identification or entity extraction) is an information extraction technique that automatically identifies named entities in a text and classifies them into predefined categories.  **SUPPORTED LANGUAGE**  |Name|Type|Value| |----|----|-----| |**Japanese**|`string`|`ja-JP`| |**Swedish**|`string`|`sw-SW`| |**English (US)**|`string`|`en-US`| |**Portuguese (Portugal)**|`string`|`pt-PT`| |**German**|`string`|`de-DE`| |**Chinese-Traditional**|`string`|`zh-TW`| |**Arabic**|`string`|`ar-XA`| |**Korean**|`string`|`ko-KR`| |**French**|`string`|`fr-FR`| |**Dutch (Netherlands)**|`string`|`nl-NL`| |**Chinese-Simplified**|`string`|`zh-CN`| |**Italian**|`string`|`it-IT`| |**Finnish**|`string`|`fn-FN`| |**Spanish**|`string`|`es-ES`|  **AVAILABLE PROVIDERS**   |Name|Value|Version| |----|-----|-------| |**Amazon Web Services**|`amazon`| `boto3 (v1.15.18)`  |**IBM Watson**|`ibm`| `v1 (2021-08-01)`  |**Google Cloud**|`google`| `v1`  |**Lettria**|`lettria`| `v5.5.2`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\TextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$language = "language_example"; // string | Language code of text (ex: fr-FR (French), en-US (English), es-ES (Spanish))
$text = "text_example"; // string | Text to analyze
$providers = "providers_example"; // string | Provider to compare (ex: [ 'amazon', 'microsoft', 'ibm','google'])

try {
    $result = $apiInstance->namedEntityRecognition($language, $text, $providers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextApi->namedEntityRecognition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language** | **string**| Language code of text (ex: fr-FR (French), en-US (English), es-ES (Spanish)) |
 **text** | **string**| Text to analyze |
 **providers** | **string**| Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;,&#39;google&#39;]) |

### Return type

[**\edenai\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **questionAnswering**
> \edenai\Model\InlineResponse2009 questionAnswering($texts, $question, $providers, $examples_context, $examples, $temperature)



Given a question, a set of documents, and some examples, the API generates an answer to the question based on the information in the set of documents.  **AVAILABLE PROVIDERS**   |Name|Value|Version| |----|-----|-------| |**OpenAI Davinci**|`openai_davinci`| `v1`  |**OpenAI Ada**|`openai_ada`| `v1`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\TextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$texts = "texts_example"; // string | List of texts to analyze
$question = "question_example"; // string | Question about the text content
$providers = "providers_example"; // string | Providers to compare (ex: ['openai'])
$examples_context = "examples_context_example"; // string | example text serving as context
$examples = "examples_example"; // string | List of question/answer pairs (ex: [['When was Barack Obama elected president?', 'in 2009.'],])
$temperature = 0.0; // float | Higher values mean the model will take more risks and value 0 (argmax sampling) works better for scenarios with a well-defined answer.

try {
    $result = $apiInstance->questionAnswering($texts, $question, $providers, $examples_context, $examples, $temperature);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextApi->questionAnswering: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **texts** | **string**| List of texts to analyze |
 **question** | **string**| Question about the text content |
 **providers** | **string**| Providers to compare (ex: [&#39;openai&#39;]) |
 **examples_context** | **string**| example text serving as context |
 **examples** | **string**| List of question/answer pairs (ex: [[&#39;When was Barack Obama elected president?&#39;, &#39;in 2009.&#39;],]) |
 **temperature** | **float**| Higher values mean the model will take more risks and value 0 (argmax sampling) works better for scenarios with a well-defined answer. | [optional] [default to 0.0]

### Return type

[**\edenai\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **search**
> \edenai\Model\InlineResponse20010 search($texts, $query, $providers)



Given a query and a set of documents or labels, the model ranks each document based on its semantic similarity to the provided query.  **AVAILABLE PROVIDERS**   |Name|Value|Version| |----|-----|-------| |**OpenAI Davinci**|`openai_davinci`| `v1`  |**OpenAI Ada**|`openai_ada`| `v1`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\TextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$texts = "texts_example"; // string | Texts to search
$query = "query_example"; // string | Your query
$providers = "providers_example"; // string | Providers to compare (ex: ['openai_davinci'])

try {
    $result = $apiInstance->search($texts, $query, $providers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextApi->search: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **texts** | **string**| Texts to search |
 **query** | **string**| Your query |
 **providers** | **string**| Providers to compare (ex: [&#39;openai_davinci&#39;]) |

### Return type

[**\edenai\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sentimentAnalysis**
> \edenai\Model\InlineResponse20011 sentimentAnalysis($language, $text, $providers)



Sentiment analysis API extracts sentiment in a given string of text.Sentiment analysis, also called 'opinion mining',uses natural language processing, text analysis and computational linguistics to identify and detect subjective information from the input text.  **SUPPORTED LANGUAGE**  |Name|Type|Value| |----|----|-----| |**Japanese**|`string`|`ja-JP`| |**English (US)**|`string`|`en-US`| |**Portuguese (Portugal)**|`string`|`pt-PT`| |**German**|`string`|`de-DE`| |**Chinese-Traditional**|`string`|`zh-TW`| |**Arabic**|`string`|`ar-XA`| |**Korean**|`string`|`ko-KR`| |**Dutch (Netherlands)**|`string`|`nl-NL`| |**French**|`string`|`fr-FR`| |**Chinese-Simplified**|`string`|`zh-CN`| |**Italian**|`string`|`it-IT`| |**Spanish**|`string`|`es-ES`|  **AVAILABLE PROVIDERS**   |Name|Value|Version| |----|-----|-------| |**Microsoft Azure**|`microsoft`| `v3.1`  |**Amazon Web Services**|`amazon`| `boto3 (v1.15.18)`  |**IBM Watson**|`ibm`| `v1 (2021-08-01)`  |**Lettria**|`lettria`| `v5.5.2`  |**Connexun**|`connexun`| `v1.0`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\TextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$language = "language_example"; // string | Language code of text (ex: fr-FR (French), en-US (English), es-ES (Spanish))
$text = "text_example"; // string | Text to analyze
$providers = "providers_example"; // string | Provider to compare (ex: [ 'amazon', 'microsoft', 'ibm', 'google'])

try {
    $result = $apiInstance->sentimentAnalysis($language, $text, $providers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextApi->sentimentAnalysis: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language** | **string**| Language code of text (ex: fr-FR (French), en-US (English), es-ES (Spanish)) |
 **text** | **string**| Text to analyze |
 **providers** | **string**| Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;, &#39;google&#39;]) |

### Return type

[**\edenai\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **syntaxAnalysis**
> \edenai\Model\InlineResponse20012 syntaxAnalysis($language, $text, $providers)



Syntax analysis consists principaly in highlighting the structure of a text.  **SUPPORTED LANGUAGE**  |Name|Type|Value| |----|----|-----| |**Japanese**|`string`|`ja-JP`| |**Swedish**|`string`|`sw-SW`| |**English (US)**|`string`|`en-US`| |**Portuguese (Portugal)**|`string`|`pt-PT`| |**German**|`string`|`de-DE`| |**Chinese-Traditional**|`string`|`zh-TW`| |**Arabic**|`string`|`ar-XA`| |**Korean**|`string`|`ko-KR`| |**French**|`string`|`fr-FR`| |**Dutch (Netherlands)**|`string`|`nl-NL`| |**Chinese-Simplified**|`string`|`zh-CN`| |**Italian**|`string`|`it-IT`| |**Finnish**|`string`|`fn-FN`| |**Spanish**|`string`|`es-ES`|  **AVAILABLE PROVIDERS**   |Name|Value|Version| |----|-----|-------| |**Amazon Web Services**|`amazon`| `boto3 (v1.15.18)`  |**IBM Watson**|`ibm`| `v1 (2021-08-01)`  |**Lettria**|`lettria`| `v5.5.2`  |**Google Cloud**|`google`| `v1`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\TextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$language = "language_example"; // string | Language code of text (ex: fr-FR (French), en-US (English), es-ES (Spanish))
$text = "text_example"; // string | Text to analyze
$providers = "providers_example"; // string | Provider to compare (ex: [ 'amazon', 'microsoft', 'ibm','google'])

try {
    $result = $apiInstance->syntaxAnalysis($language, $text, $providers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextApi->syntaxAnalysis: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language** | **string**| Language code of text (ex: fr-FR (French), en-US (English), es-ES (Spanish)) |
 **text** | **string**| Text to analyze |
 **providers** | **string**| Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;,&#39;google&#39;]) |

### Return type

[**\edenai\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **textSummarization**
> \edenai\Model\InlineResponse20013 textSummarization($text, $providers)



Text summarization is a technique for extracting the most important sentences from a text in order to create a smaller version of the text.  **SUPPORTED LANGUAGE**  |Name|Type|Value| |----|----|-----|   **AVAILABLE PROVIDERS**   |Name|Value|Version| |----|-----|-------| |**Connexun**|`connexun`| `v1.0`  |**Microsoft Azure**|`microsoft`| `v3.1`  |**MeaningCloud**|`meaningcloud`| `v1.0`  |**OpenAI Ada**|`openai_ada`| `v1`  |**OpenAI Davinci**|`openai_davinci`| `v1`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\TextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$text = "text_example"; // string | Text to summarize
$providers = "providers_example"; // string | Provider to compare (ex: [ 'DataVoice','OpenAI', 'Microsoft'])

try {
    $result = $apiInstance->textSummarization($text, $providers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextApi->textSummarization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **text** | **string**| Text to summarize |
 **providers** | **string**| Provider to compare (ex: [ &#39;DataVoice&#39;,&#39;OpenAI&#39;, &#39;Microsoft&#39;]) |

### Return type

[**\edenai\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

