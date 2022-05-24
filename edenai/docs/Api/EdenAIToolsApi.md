# edenai\EdenAIToolsApi

All URIs are relative to *https://api.edenai.run/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**search**](EdenAIToolsApi.md#search) | **POST** /tools/search | 


# **search**
> \edenai\Model\InlineResponse20019 search($text, $words)



This is an easy tool to lookup for a list of words in a given text

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\EdenAIToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$text = "text_example"; // string | Text to analyze
$words = "words_example"; // string | (ex: [ 'Happy', 'New', 'Year'])

try {
    $result = $apiInstance->search($text, $words);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdenAIToolsApi->search: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **text** | **string**| Text to analyze |
 **words** | **string**| (ex: [ &#39;Happy&#39;, &#39;New&#39;, &#39;Year&#39;]) |

### Return type

[**\edenai\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

