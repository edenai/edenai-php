# edenai\TranslationApi

All URIs are relative to *https://api.edenai.run/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**automaticTranslation**](TranslationApi.md#automaticTranslation) | **POST** /pretrained/translation/automatic_translation | 
[**languageDetection**](TranslationApi.md#languageDetection) | **POST** /pretrained/translation/language_detection | 


# **automaticTranslation**
> \edenai\Model\InlineResponse20014 automaticTranslation($text, $source_language, $target_language, $providers)



Machine translation refers to the translation of a text into another language using rules, statics or ml technics.  **SUPPORTED LANGUAGE**  |Name|Type|Value| |----|----|-----| |**Arabic (Saudi Arabia)**|`string`|`ar-SA`| |**English (GB)**|`string`|`en-GB`| |**Japanese**|`string`|`ja-JP`| |**English (US)**|`string`|`en-US`| |**Portuguese (Portugal)**|`string`|`pt-PT`| |**Indonesian**|`string`|`id-ID`| |**Malay**|`string`|`ms-MY`| |**German**|`string`|`de-DE`| |**Portuguese (Brazil)**|`string`|`pt-BR`| |**Turkish**|`string`|`tr-TR`| |**Korean**|`string`|`ko-KR`| |**Dutch (Netherlands)**|`string`|`nl-NL`| |**French**|`string`|`fr-FR`| |**Russian**|`string`|`ru-RU`| |**Italian**|`string`|`it-IT`| |**Spanish**|`string`|`es-ES`|  **AVAILABLE PROVIDERS**   |Name|Value|Version| |----|-----|-------| |**Microsoft Azure**|`microsoft`| `v3.0`  |**Amazon Web Services**|`amazon`| `boto3 (v1.15.18)`  |**Google Cloud**|`google`| `v3`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\TranslationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$text = "text_example"; // string | Text to translate
$source_language = "source_language_example"; // string | Language code of text (ex: fr (French), en (English), es (Spanish))
$target_language = "target_language_example"; // string | Language code of text (ex: fr (French), en (English), es (Spanish))
$providers = "providers_example"; // string | Provider to compare (ex: [ 'amazon', 'microsoft', 'ibm', 'google'])

try {
    $result = $apiInstance->automaticTranslation($text, $source_language, $target_language, $providers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationApi->automaticTranslation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **text** | **string**| Text to translate |
 **source_language** | **string**| Language code of text (ex: fr (French), en (English), es (Spanish)) |
 **target_language** | **string**| Language code of text (ex: fr (French), en (English), es (Spanish)) |
 **providers** | **string**| Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;, &#39;google&#39;]) |

### Return type

[**\edenai\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **languageDetection**
> \edenai\Model\InlineResponse20015 languageDetection($text, $providers)



Language Detection or language guessing is the algorithm of determining which natural language given content is in.  **AVAILABLE PROVIDERS**   |Name|Value|Version| |----|-----|-------| |**Microsoft Azure**|`microsoft`| `v3.1`  |**Amazon Web Services**|`amazon`| `boto3 (v1.15.18)`  |**IBM Watson**|`ibm`| `v1 (2021-08-01)`  |**Google Cloud**|`google`| `v1`  |**Lettria**|`lettria`| `v5.5.2`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\TranslationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$text = "text_example"; // string | Text to analyze
$providers = "providers_example"; // string | Provider to compare (ex: [ 'amazon', 'microsoft', 'ibm','google'])

try {
    $result = $apiInstance->languageDetection($text, $providers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationApi->languageDetection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **text** | **string**| Text to analyze |
 **providers** | **string**| Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;,&#39;google&#39;]) |

### Return type

[**\edenai\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

