# edenai\OCRApi

All URIs are relative to *https://api.edenai.run/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**asyncOcrTablesJobIds**](OCRApi.md#asyncOcrTablesJobIds) | **GET** /pretrained/async/ocr/tables/get_jobs | 
[**asyncOcrTablesLaunch**](OCRApi.md#asyncOcrTablesLaunch) | **POST** /pretrained/async/ocr/tables/launch_job | 
[**asyncOcrTablesResults**](OCRApi.md#asyncOcrTablesResults) | **GET** /pretrained/async/ocr/tables/get_results/{public_id} | 
[**ocr**](OCRApi.md#ocr) | **POST** /pretrained/ocr/ocr | 
[**ocrInvoice**](OCRApi.md#ocrInvoice) | **POST** /pretrained/ocr/ocr_invoice | 
[**ocrTables**](OCRApi.md#ocrTables) | **POST** /pretrained/ocr/ocr_tables | 


# **asyncOcrTablesJobIds**
> \edenai\Model\InlineResponse2001 asyncOcrTablesJobIds()



Get all past jobs ids

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\OCRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->asyncOcrTablesJobIds();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OCRApi->asyncOcrTablesJobIds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\edenai\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **asyncOcrTablesLaunch**
> \edenai\Model\InlineResponse204 asyncOcrTablesLaunch($language, $files, $providers, $webhook_receiver, $users_webhook_parameters, $show_original_responses)



The Async OCR Table API allows customers to analyze multi-page documents containing tables and return structured representation of said tables in the form of a Json object  **SUPPORTED LANGUAGE**  |Name|Type|Value| |----|----|-----| |**German**|`string`|`de-DE`| |**Spanish**|`string`|`es-ES`| |**French**|`string`|`fr-FR`| |**Portuguese (Portugal)**|`string`|`pt-PT`| |**English (US)**|`string`|`en-US`| |**Italian**|`string`|`it-IT`|  **AVAILABLE PROVIDERS**   |Name|Value|Version| |----|-----|-------| |**Google Cloud**|`google`| `DocumentAI v1 beta3`  |**Microsoft Azure**|`microsoft`| `rest API 3.0`  |**Amazon Web Services**|`amazon`| `boto3 (v1.15.18)`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\OCRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$language = "language_example"; // string | Language code expected (ex: fr-FR (French), en-US (English), es-ES (Spanish), nl-NL Dutch (Netherlands))
$files = "/path/to/file.txt"; // \SplFileObject | File to analyse
$providers = "providers_example"; // string | Provider to compare (ex: [ 'amazon', 'google'])
$webhook_receiver = "webhook_receiver_example"; // string | Webhook receiver should be a valid https URL (ex : https://your.listner.com/endpoint)
$users_webhook_parameters = "users_webhook_parameters_example"; // string | Json data that consist of additional parameters that will be sent back to the webhook receiver (ex: api key for security).
$show_original_responses = false; // bool | Weither or not to show the provider original response

try {
    $result = $apiInstance->asyncOcrTablesLaunch($language, $files, $providers, $webhook_receiver, $users_webhook_parameters, $show_original_responses);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OCRApi->asyncOcrTablesLaunch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language** | **string**| Language code expected (ex: fr-FR (French), en-US (English), es-ES (Spanish), nl-NL Dutch (Netherlands)) |
 **files** | **\SplFileObject**| File to analyse |
 **providers** | **string**| Provider to compare (ex: [ &#39;amazon&#39;, &#39;google&#39;]) |
 **webhook_receiver** | **string**| Webhook receiver should be a valid https URL (ex : https://your.listner.com/endpoint) | [optional]
 **users_webhook_parameters** | **string**| Json data that consist of additional parameters that will be sent back to the webhook receiver (ex: api key for security). | [optional]
 **show_original_responses** | **bool**| Weither or not to show the provider original response | [optional] [default to false]

### Return type

[**\edenai\Model\InlineResponse204**](../Model/InlineResponse204.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **asyncOcrTablesResults**
> \edenai\Model\InlineResponse2002 asyncOcrTablesResults($public_id)



Get the status, or result of your async job

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\OCRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$public_id = "public_id_example"; // string | 

try {
    $result = $apiInstance->asyncOcrTablesResults($public_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OCRApi->asyncOcrTablesResults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **public_id** | **string**|  |

### Return type

[**\edenai\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ocr**
> \edenai\Model\InlineResponse2005 ocr($files, $providers, $language)



Optical Character Recognition or optical character reader (OCR) is the electronic or mechanical conversion of images of typed, handwritten or printed text into machine-encoded text, whether from a scanned document, a photo of a document  **SUPPORTED LANGUAGE**  |Name|Type|Value| |----|----|-----| |**Swedish**|`string`|`sw-SW`| |**Dutch (Netherlands)**|`string`|`nl-NL`| |**Greek**|`string`|`gr-GR`| |**Portuguese (Portugal)**|`string`|`pt-PT`| |**Japanese**|`string`|`ja-JP`| |**Polish**|`string`|`pl-PO`| |**Hungarian**|`string`|`hu-HU`| |**Arabic**|`string`|`ar-XA`| |**Finnish**|`string`|`fn-FN`| |**Czech**|`string`|`cz-CZ`| |**Korean**|`string`|`ko-KR`| |**Russian**|`string`|`ru-RU`| |**Danish**|`string`|`da-DK`| |**Chinese-Simplified**|`string`|`zh-CN`| |**French**|`string`|`fr-FR`| |**Turkish**|`string`|`tr-TR`| |**Chinese-Traditional**|`string`|`zh-TW`| |**German**|`string`|`de-DE`| |**Spanish**|`string`|`es-ES`| |**English (US)**|`string`|`en-US`| |**Italian**|`string`|`it-IT`|  **AVAILABLE PROVIDERS**   |Name|Value|Version| |----|-----|-------| |**Google Cloud**|`google`| `v1`  |**Microsoft Azure**|`microsoft`| `v3.2`  |**Amazon Web Services**|`amazon`| `boto3 (v1.15.18)`  |**Tesseract**|`tesseract`| `latest`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\OCRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$files = "/path/to/file.txt"; // \SplFileObject | File to analyse (ex: pdf, jpg, jpeg, png, tiff)
$providers = "providers_example"; // string | Providers to compare (ex: [ 'amazon', 'microsoft', 'ibm', 'google'])
$language = "language_example"; // string | Language code expected (ex: fr-FR)

try {
    $result = $apiInstance->ocr($files, $providers, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OCRApi->ocr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | **\SplFileObject**| File to analyse (ex: pdf, jpg, jpeg, png, tiff) |
 **providers** | **string**| Providers to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;, &#39;google&#39;]) |
 **language** | **string**| Language code expected (ex: fr-FR) |

### Return type

[**\edenai\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ocrInvoice**
> \edenai\Model\InlineResponse2006 ocrInvoice($files, $providers, $language)



The OCR Invoice API enables customers to take invoices in a variety of formats and return structured data to automate the invoice processing.  **SUPPORTED LANGUAGE**  |Name|Type|Value| |----|----|-----| |**German**|`string`|`de-DE`| |**Danish**|`string`|`da-DK`| |**Spanish**|`string`|`es-ES`| |**French**|`string`|`fr-FR`| |**Portuguese (Portugal)**|`string`|`pt-PT`| |**English (US)**|`string`|`en-US`| |**Italian**|`string`|`it-IT`|  **AVAILABLE PROVIDERS**   |Name|Value|Version| |----|-----|-------| |**Mindee**|`mindee`| `v2`  |**Dataleon**|`dataleon`| `v3.1.0`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\OCRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$files = "/path/to/file.txt"; // \SplFileObject | File Image to analyse (ex: pdf, jpg, jpeg, png)
$providers = "providers_example"; // string | Provider to compare (ex: [ 'mindee', 'microsoft'])
$language = "language_example"; // string | Language code of invoice (ex: fr-FR (French), en-US (English), es-ES (Spanish))

try {
    $result = $apiInstance->ocrInvoice($files, $providers, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OCRApi->ocrInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | **\SplFileObject**| File Image to analyse (ex: pdf, jpg, jpeg, png) |
 **providers** | **string**| Provider to compare (ex: [ &#39;mindee&#39;, &#39;microsoft&#39;]) |
 **language** | **string**| Language code of invoice (ex: fr-FR (French), en-US (English), es-ES (Spanish)) |

### Return type

[**\edenai\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ocrTables**
> \edenai\Model\InlineResponse2006 ocrTables($files, $providers, $language)



The OCR Table API allows customers to analyze documents containing tables and return structured representation of said tables in the form of a Json object  **SUPPORTED LANGUAGE**  |Name|Type|Value| |----|----|-----| |**German**|`string`|`de-DE`| |**Spanish**|`string`|`es-ES`| |**French**|`string`|`fr-FR`| |**Portuguese (Portugal)**|`string`|`pt-PT`| |**English (US)**|`string`|`en-US`| |**Italian**|`string`|`it-IT`|  **AVAILABLE PROVIDERS**   |Name|Value|Version| |----|-----|-------| |**Google Cloud**|`google`| `DocumentAI v1 beta3`  |**Microsoft Azure**|`microsoft`| `rest API 3.0`  |**Amazon Web Services**|`amazon`| `boto3 (v1.15.18)`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\OCRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$files = "/path/to/file.txt"; // \SplFileObject | File to analyse (ex: pdf, jpg, jpeg, png, tiff)
$providers = "providers_example"; // string | Providers to compare (ex: [ 'amazon', 'microsoft', 'google'])
$language = "language_example"; // string | Language code expected (ex: fr-FR)

try {
    $result = $apiInstance->ocrTables($files, $providers, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OCRApi->ocrTables: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | **\SplFileObject**| File to analyse (ex: pdf, jpg, jpeg, png, tiff) |
 **providers** | **string**| Providers to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;google&#39;]) |
 **language** | **string**| Language code expected (ex: fr-FR) |

### Return type

[**\edenai\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

