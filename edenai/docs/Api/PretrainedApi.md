# edenai\PretrainedApi

All URIs are relative to *https://api.edenai.run/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pretrainedAsyncOcrTablesWebhookCreate**](PretrainedApi.md#pretrainedAsyncOcrTablesWebhookCreate) | **POST** /pretrained/async/ocr/tables/webhook/{provider} | 
[**pretrainedAudioSpeechRecognitionAsyncList**](PretrainedApi.md#pretrainedAudioSpeechRecognitionAsyncList) | **GET** /pretrained/audio/speech_recognition_async | 


# **pretrainedAsyncOcrTablesWebhookCreate**
> pretrainedAsyncOcrTablesWebhookCreate($provider)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\PretrainedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$provider = "provider_example"; // string | 

try {
    $apiInstance->pretrainedAsyncOcrTablesWebhookCreate($provider);
} catch (Exception $e) {
    echo 'Exception when calling PretrainedApi->pretrainedAsyncOcrTablesWebhookCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **provider** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: text/plain; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pretrainedAudioSpeechRecognitionAsyncList**
> pretrainedAudioSpeechRecognitionAsyncList()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\PretrainedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->pretrainedAudioSpeechRecognitionAsyncList();
} catch (Exception $e) {
    echo 'Exception when calling PretrainedApi->pretrainedAudioSpeechRecognitionAsyncList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

