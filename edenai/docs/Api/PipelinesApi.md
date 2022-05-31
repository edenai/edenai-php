# edenai\PipelinesApi

All URIs are relative to *https://api.edenai.run/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pipelines**](PipelinesApi.md#pipelines) | **POST** /pipelines | 


# **pipelines**
> \edenai\Model\InlineResponse200 pipelines($description, $return_only_last, $text, $files)



Pipelines let you combine different AI APIs from different providers into a single ready to use pipeline that you can run on your data.   **AVAILABLE FEATURES**   |Feature                   |Value|Can be first|Can be followed by| |--------------------------|-----------------------|------------|------------------| |**OCR**                     |`ocr`                  |`True`      |Sentiment Analysis, Syntax Analysis, Keyword Analysis, Named Entity Recognition, Text to speech, Translation,  Language Detection  | |**Translation**             |`automatic_translation`|`True`      |Sentiment Analysis, Syntax Analysis, Keyword Analysis, Named Entity Recognition, Text to speech, Language Detection                | |**Speech recognition**      |`speech_to_text`       |`True`      |Sentiment Analysis, Syntax Analysis, Keyword Analysis, Named Entity Recognition, Text to speech, Translation,  Language Detection  | |**Sentiment Analysis**      |`sentiment_analysis`   |`False`     |None                                                                                                                               | |**Syntax Analysis**         |`syntax_analysis`      |`False`     |None                                                                                                                               | |**Keyword Analysis**        |`keyword_extraction`   |`False`     |None                                                                                                                               | |**Named Entity Recognition**|`language_detection`   |`False`-    |None                                                                                                                               | |**Language Detection**      |`language_detection`   |`False`     |None                                                                                                                               | |**Text to speech**          |`text_to_speech`       |`False`     |None                                                                                                                               |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\PipelinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$description = "description_example"; // string | The desciption field must be an array of ordered dictionaries.                                                      Each dictionary describes the feature to call. in fact, it has to contain two keys \"feature\" and \"params\".   * feature conatins a string (the value of the feature ex : automatic_translation).  * params contains a dictionary of parameters to be used to call the feature, see the feature corresponding documentation to know which parameters well be needed.   ex : `[ { \"feature\": \"ocr\",  \"params\": { \"providers\": \"['amazon']\",\"language\": \"en-US\" } }, { \"feature\": \"syntax_analysis\",  \"params\": { \"providers\": \"['amazon']\",\"language\": \"en-US\" } }]`
$return_only_last = true; // bool | This parameter allows user to choose to output only the final result or all the intermediate results.
$text = "text_example"; // string | The input text for the first feature of the pipeline
$files = "/path/to/file.txt"; // \SplFileObject | The input file for the first feature of the pipeline

try {
    $result = $apiInstance->pipelines($description, $return_only_last, $text, $files);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PipelinesApi->pipelines: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **description** | **string**| The desciption field must be an array of ordered dictionaries.                                                      Each dictionary describes the feature to call. in fact, it has to contain two keys \&quot;feature\&quot; and \&quot;params\&quot;.   * feature conatins a string (the value of the feature ex : automatic_translation).  * params contains a dictionary of parameters to be used to call the feature, see the feature corresponding documentation to know which parameters well be needed.   ex : &#x60;[ { \&quot;feature\&quot;: \&quot;ocr\&quot;,  \&quot;params\&quot;: { \&quot;providers\&quot;: \&quot;[&#39;amazon&#39;]\&quot;,\&quot;language\&quot;: \&quot;en-US\&quot; } }, { \&quot;feature\&quot;: \&quot;syntax_analysis\&quot;,  \&quot;params\&quot;: { \&quot;providers\&quot;: \&quot;[&#39;amazon&#39;]\&quot;,\&quot;language\&quot;: \&quot;en-US\&quot; } }]&#x60; |
 **return_only_last** | **bool**| This parameter allows user to choose to output only the final result or all the intermediate results. |
 **text** | **string**| The input text for the first feature of the pipeline | [optional]
 **files** | **\SplFileObject**| The input file for the first feature of the pipeline | [optional]

### Return type

[**\edenai\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

