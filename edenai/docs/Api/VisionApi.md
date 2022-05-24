# edenai\VisionApi

All URIs are relative to *https://api.edenai.run/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**explicitContentDetection**](VisionApi.md#explicitContentDetection) | **POST** /pretrained/vision/explicit_content_detection | 
[**faceDetection**](VisionApi.md#faceDetection) | **POST** /pretrained/vision/face_detection | 
[**objectDetection**](VisionApi.md#objectDetection) | **POST** /pretrained/vision/object_detection | 


# **explicitContentDetection**
> \edenai\Model\InlineResponse20016 explicitContentDetection($files, $providers)



Explicit Content Detection detects adult only content in videos, who is generally inappropriate for people under the age of 18 and includes nudity, sexual activity and pornography ...  **AVAILABLE PROVIDERS**   |Name|Value|Version| |----|-----|-------| |**Microsoft Azure**|`microsoft`| `v3.2`  |**Amazon Web Services**|`amazon`| `boto3 (v1.15.18)`  |**Google Cloud**|`google`| `v1`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\VisionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$files = "/path/to/file.txt"; // \SplFileObject | File Image to analyse (ex: pdf, jpg, jpeg, png, tiff)
$providers = "providers_example"; // string | Provider to compare (ex: [ 'amazon', 'microsoft', 'google'])

try {
    $result = $apiInstance->explicitContentDetection($files, $providers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VisionApi->explicitContentDetection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | **\SplFileObject**| File Image to analyse (ex: pdf, jpg, jpeg, png, tiff) |
 **providers** | **string**| Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;google&#39;]) |

### Return type

[**\edenai\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **faceDetection**
> \edenai\Model\InlineResponse20017 faceDetection($files, $providers)



Face Detection is a computer technology being used in a variety of applicationsthat identifies human faces in digital images.  **AVAILABLE PROVIDERS**   |Name|Value|Version| |----|-----|-------| |**Microsoft Azure**|`microsoft`| `v3.2`  |**Google Cloud**|`google`| `v1`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\VisionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$files = "/path/to/file.txt"; // \SplFileObject | File Image to analyse (ex: pdf, jpg, jpeg, png, tiff)
$providers = "providers_example"; // string | Provider to compare (ex: [ 'amazon', 'microsoft','google'])

try {
    $result = $apiInstance->faceDetection($files, $providers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VisionApi->faceDetection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | **\SplFileObject**| File Image to analyse (ex: pdf, jpg, jpeg, png, tiff) |
 **providers** | **string**| Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;,&#39;google&#39;]) |

### Return type

[**\edenai\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **objectDetection**
> \edenai\Model\InlineResponse20018 objectDetection($files, $providers)



Object Detection is a computer vision technique that allows us to identify and locate objects in an image or video  **AVAILABLE PROVIDERS**   |Name|Value|Version| |----|-----|-------| |**Microsoft Azure**|`microsoft`| `v3.2`  |**Amazon Web Services**|`amazon`| `boto3 (v1.15.18)`  |**Google Cloud**|`google`| `v1`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\VisionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$files = "/path/to/file.txt"; // \SplFileObject | File Image to analyse (ex: pdf, jpg, jpeg, png, tiff)
$providers = "providers_example"; // string | Provider to compare (ex: [ 'amazon', 'microsoft','google'])

try {
    $result = $apiInstance->objectDetection($files, $providers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VisionApi->objectDetection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | **\SplFileObject**| File Image to analyse (ex: pdf, jpg, jpeg, png, tiff) |
 **providers** | **string**| Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;,&#39;google&#39;]) |

### Return type

[**\edenai\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

