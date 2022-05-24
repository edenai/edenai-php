# edenai\AutoMLTextDataApi

All URIs are relative to *https://api.edenai.run/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**automlTextDataDelete**](AutoMLTextDataApi.md#automlTextDataDelete) | **DELETE** /automl/text/project/{project_id}/train/{train_id} | 
[**automlTextDataLaunchPrediction**](AutoMLTextDataApi.md#automlTextDataLaunchPrediction) | **POST** /automl/text/project/{project_id}/train/{train_id}/prediction | 
[**automlTextDataPredictionDetail**](AutoMLTextDataApi.md#automlTextDataPredictionDetail) | **GET** /automl/text/project/{project_id}/train/{train_id}/prediction/{predict_id} | 
[**automlTextDataPredictionResults**](AutoMLTextDataApi.md#automlTextDataPredictionResults) | **GET** /automl/text/project/{project_id}/train/{train_id}/prediction/{predict_id}/results | 
[**automlTextDataTrain**](AutoMLTextDataApi.md#automlTextDataTrain) | **POST** /automl/text/project/{project_id}/train | 
[**automlTextDataTrainDetail**](AutoMLTextDataApi.md#automlTextDataTrainDetail) | **GET** /automl/text/project/{project_id}/train/{train_id} | 
[**automlTextProjectCreate**](AutoMLTextDataApi.md#automlTextProjectCreate) | **POST** /automl/text/project | 
[**automlTextProjectDelete**](AutoMLTextDataApi.md#automlTextProjectDelete) | **DELETE** /automl/text/project/{project_id} | 
[**automlTextProjectDetail**](AutoMLTextDataApi.md#automlTextProjectDetail) | **GET** /automl/text/project/{project_id} | 
[**automlTextProjectList**](AutoMLTextDataApi.md#automlTextProjectList) | **GET** /automl/text/project | 
[**automlTextProjectUpdate**](AutoMLTextDataApi.md#automlTextProjectUpdate) | **PUT** /automl/text/project/{project_id} | 


# **automlTextDataDelete**
> automlTextDataDelete($project_id, $train_id)



AutoML Text Data Delete

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\AutoMLTextDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = "project_id_example"; // string | 
$train_id = "train_id_example"; // string | 

try {
    $apiInstance->automlTextDataDelete($project_id, $train_id);
} catch (Exception $e) {
    echo 'Exception when calling AutoMLTextDataApi->automlTextDataDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **train_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **automlTextDataLaunchPrediction**
> automlTextDataLaunchPrediction($project_id, $train_id, $files)



**SUPPORTED FILES**  The API takes a csv file with no header and only one column, where each line contains a document to classify.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\AutoMLTextDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = "project_id_example"; // string | 
$train_id = "train_id_example"; // string | 
$files = "/path/to/file.txt"; // \SplFileObject | 

try {
    $apiInstance->automlTextDataLaunchPrediction($project_id, $train_id, $files);
} catch (Exception $e) {
    echo 'Exception when calling AutoMLTextDataApi->automlTextDataLaunchPrediction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **train_id** | **string**|  |
 **files** | **\SplFileObject**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **automlTextDataPredictionDetail**
> automlTextDataPredictionDetail($predict_id, $project_id, $train_id)



**SUPPORTED FILES**  The API takes a csv file with no header and only one column, where each line contains a document to classify.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\AutoMLTextDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$predict_id = "predict_id_example"; // string | 
$project_id = "project_id_example"; // string | 
$train_id = "train_id_example"; // string | 

try {
    $apiInstance->automlTextDataPredictionDetail($predict_id, $project_id, $train_id);
} catch (Exception $e) {
    echo 'Exception when calling AutoMLTextDataApi->automlTextDataPredictionDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **predict_id** | **string**|  |
 **project_id** | **string**|  |
 **train_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **automlTextDataPredictionResults**
> automlTextDataPredictionResults($predict_id, $project_id, $train_id)



**SUPPORTED FILES**  The API takes a csv file with no header and only one column, where each line contains a document to classify.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\AutoMLTextDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$predict_id = "predict_id_example"; // string | 
$project_id = "project_id_example"; // string | 
$train_id = "train_id_example"; // string | 

try {
    $apiInstance->automlTextDataPredictionResults($predict_id, $project_id, $train_id);
} catch (Exception $e) {
    echo 'Exception when calling AutoMLTextDataApi->automlTextDataPredictionResults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **predict_id** | **string**|  |
 **project_id** | **string**|  |
 **train_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **automlTextDataTrain**
> automlTextDataTrain($project_id, $provider, $training_name)



**AVAILABLE PROVIDERS**  |Name|Value| |-------------------------------|---------------| |[**Google Cloud Services**](https://www.edenai.co/catalog/google-cloud-natural-language)|`google`| |[**Amazon Web Services**](https://www.edenai.co/catalog/amazon-comprehend)|`amazon`|

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\AutoMLTextDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = "project_id_example"; // string | 
$provider = "provider_example"; // string | 
$training_name = "training_name_example"; // string | 

try {
    $apiInstance->automlTextDataTrain($project_id, $provider, $training_name);
} catch (Exception $e) {
    echo 'Exception when calling AutoMLTextDataApi->automlTextDataTrain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **provider** | **string**|  |
 **training_name** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **automlTextDataTrainDetail**
> automlTextDataTrainDetail($project_id, $train_id)



AutoML Text Data Train Detail

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\AutoMLTextDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = "project_id_example"; // string | 
$train_id = "train_id_example"; // string | 

try {
    $apiInstance->automlTextDataTrainDetail($project_id, $train_id);
} catch (Exception $e) {
    echo 'Exception when calling AutoMLTextDataApi->automlTextDataTrainDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **train_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **automlTextProjectCreate**
> automlTextProjectCreate($project_name, $project_description, $files, $type, $language)



**SUPPORTED FILES**  The API takes csv files separated using ','. The csv must contain a header and exactly two columns, named `docs` and `labels` In case a document might have several labels, please separate your labels using '|'     **SUPPORTED LANGUAGE**  |Name|Type|Value| |---------------------------|-------------------------------|---------------| | **English (US)**|*`string`*|`en`| | **French**      |*`string`*|`fr`| | **German**      |*`string`*|`de`| | **Italian**     |*`string`*|`it`| | **Portuguese**  |*`string`*|`pt`| | **Arabic**      |*`string`*|`ar`| | **Chinese-Simplified**|*`string`*|`zh`| | **Chinese-Traditional**|*`string`*|`zh-TW`| | **Korean**      |*`string`*|`ko`| | **Japanese**    |*`string`*|`ja`| | **Hindi**       |*`string`*|`hi`| | **Spanish**     |*`string`*|`es`|    **AVAILABLE CLASSIFICATION TYPES**  |Type|Value|Description| |---------------------------|-------------------------------|---------------| | **Single Label Classification**|`single_label_classification`|Each document belongs to one category (label)| | **Multi Label Classification**|`multi_label_classification`|Documents might have several labels|

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\AutoMLTextDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_name = "project_name_example"; // string | 
$project_description = "project_description_example"; // string | 
$files = "/path/to/file.txt"; // \SplFileObject | 
$type = "type_example"; // string | 
$language = "language_example"; // string | 

try {
    $apiInstance->automlTextProjectCreate($project_name, $project_description, $files, $type, $language);
} catch (Exception $e) {
    echo 'Exception when calling AutoMLTextDataApi->automlTextProjectCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_name** | **string**|  |
 **project_description** | **string**|  |
 **files** | **\SplFileObject**|  |
 **type** | **string**|  |
 **language** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **automlTextProjectDelete**
> automlTextProjectDelete($project_id)



AutoML Text Project Delete

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\AutoMLTextDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = "project_id_example"; // string | 

try {
    $apiInstance->automlTextProjectDelete($project_id);
} catch (Exception $e) {
    echo 'Exception when calling AutoMLTextDataApi->automlTextProjectDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **automlTextProjectDetail**
> automlTextProjectDetail($project_id)



AutoML Text Project Detail

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\AutoMLTextDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = "project_id_example"; // string | 

try {
    $apiInstance->automlTextProjectDetail($project_id);
} catch (Exception $e) {
    echo 'Exception when calling AutoMLTextDataApi->automlTextProjectDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **automlTextProjectList**
> automlTextProjectList()



AutoML Text Project List

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\AutoMLTextDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->automlTextProjectList();
} catch (Exception $e) {
    echo 'Exception when calling AutoMLTextDataApi->automlTextProjectList: ', $e->getMessage(), PHP_EOL;
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

# **automlTextProjectUpdate**
> automlTextProjectUpdate($project_id, $project_name, $project_description, $type, $language)



AutoML Text Project Update

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\AutoMLTextDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = "project_id_example"; // string | 
$project_name = "project_name_example"; // string | 
$project_description = "project_description_example"; // string | 
$type = "type_example"; // string | 
$language = "language_example"; // string | 

try {
    $apiInstance->automlTextProjectUpdate($project_id, $project_name, $project_description, $type, $language);
} catch (Exception $e) {
    echo 'Exception when calling AutoMLTextDataApi->automlTextProjectUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **project_name** | **string**|  |
 **project_description** | **string**|  |
 **type** | **string**|  |
 **language** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

