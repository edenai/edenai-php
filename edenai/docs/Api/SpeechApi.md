# edenai\SpeechApi

All URIs are relative to *https://api.edenai.run/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**asyncSpeechToText**](SpeechApi.md#asyncSpeechToText) | **POST** /pretrained/audio/speech_recognition_async | 
[**asyncSpeechToText_0**](SpeechApi.md#asyncSpeechToText_0) | **GET** /pretrained/audio/speech_recognition_async/{job_id} | 
[**speechToText**](SpeechApi.md#speechToText) | **POST** /pretrained/audio/speech_to_text | 
[**textToSpeech**](SpeechApi.md#textToSpeech) | **POST** /pretrained/audio/text_to_speech | 


# **asyncSpeechToText**
> \edenai\Model\InlineResponse2003 asyncSpeechToText($language, $files, $providers, $webhook_receiver, $users_webhook_parameters, $vocab)



Speech recognition is technology that can recognize spoken words, which can then be converted to text. This endpoint allows you to launch asynchronous speech recognition jobs.  **SUPPORTED LANGUAGE**  |Name|Type|Value| |----|----|-----| |**Arabic (Saudi Arabia)**|`string`|`ar-SA`| |**English (GB)**|`string`|`en-GB`| |**Japanese**|`string`|`ja-JP`| |**English (US)**|`string`|`en-US`| |**Portuguese (Portugal)**|`string`|`pt-PT`| |**Indonesian**|`string`|`id-ID`| |**Malay**|`string`|`ms-MY`| |**German**|`string`|`de-DE`| |**Portuguese (Brazil)**|`string`|`pt-BR`| |**Turkish**|`string`|`tr-TR`| |**Korean**|`string`|`ko-KR`| |**Dutch (Netherlands)**|`string`|`nl-NL`| |**French**|`string`|`fr-FR`| |**Russian**|`string`|`ru-RU`| |**Italian**|`string`|`it-IT`| |**Spanish**|`string`|`es-ES`|  **AVAILABLE PROVIDERS**   |Name|Value|Version| |----|-----|-------| |**Amazon Web Services**|`amazon`| `boto3 (v1.15.18)`  |**Deepgram**|`deepgram`| `v1`  |**IBM Watson**|`ibm`| `v1`  |**Speechmatics**|`speechmatics`| `2.7.0`  |**Microsoft Azure**|`microsoft`| `v1.0`  |**Google Cloud**|`google`| `v1p1beta1`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\SpeechApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$language = "language_example"; // string | Language code expected (ex: fr-FR (French), en-US (English), es-ES (Spanish), nl-NL Dutch (Netherlands))
$files = "/path/to/file.txt"; // \SplFileObject | File to analyse (ex: mp3, wav, m4a)
$providers = "providers_example"; // string | Provider to compare (ex: [ 'amazon', 'microsoft', 'ibm','google', 'threescribe])
$webhook_receiver = "webhook_receiver_example"; // string | Webhook reciever should be a valid https URL (ex : https://your.listner.com/endpoint)
$users_webhook_parameters = "users_webhook_parameters_example"; // string | Json data that consist of additional parameters that will be sent back to the webhook receiver (ex: api key for security).                    **NOTE : The data will be returned back as a string that should be decoded into a json object!**
$vocab = "vocab_example"; // string | Speechmatics allows to add a custom vocab dictionnary (json format) for better recognition, you can add it via this parameter.                     It has to be a list of dictionaries : {'content'(Required) : 'string', 'sounds_like'(Optional) : 'list of strings'}

try {
    $result = $apiInstance->asyncSpeechToText($language, $files, $providers, $webhook_receiver, $users_webhook_parameters, $vocab);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpeechApi->asyncSpeechToText: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language** | **string**| Language code expected (ex: fr-FR (French), en-US (English), es-ES (Spanish), nl-NL Dutch (Netherlands)) |
 **files** | **\SplFileObject**| File to analyse (ex: mp3, wav, m4a) |
 **providers** | **string**| Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;,&#39;google&#39;, &#39;threescribe]) |
 **webhook_receiver** | **string**| Webhook reciever should be a valid https URL (ex : https://your.listner.com/endpoint) | [optional]
 **users_webhook_parameters** | **string**| Json data that consist of additional parameters that will be sent back to the webhook receiver (ex: api key for security).                    **NOTE : The data will be returned back as a string that should be decoded into a json object!** | [optional]
 **vocab** | **string**| Speechmatics allows to add a custom vocab dictionnary (json format) for better recognition, you can add it via this parameter.                     It has to be a list of dictionaries : {&#39;content&#39;(Required) : &#39;string&#39;, &#39;sounds_like&#39;(Optional) : &#39;list of strings&#39;} | [optional]

### Return type

[**\edenai\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **asyncSpeechToText_0**
> \edenai\Model\InlineResponse2004 asyncSpeechToText_0($job_id)



This endpoint allows you to check the state of  your asynchronous speech recognition job and returns the results if they are ready.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\SpeechApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_id = "job_id_example"; // string | 

try {
    $result = $apiInstance->asyncSpeechToText_0($job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpeechApi->asyncSpeechToText_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **string**|  |

### Return type

[**\edenai\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **speechToText**
> \edenai\Model\InlineResponse201 speechToText($language, $files, $providers, $vocab)



Speech recognition is technology that can recognize spoken words, which can then be converted to text.  **SUPPORTED LANGUAGE**  |Name|Type|Value| |----|----|-----| |**Arabic (Saudi Arabia)**|`string`|`ar-SA`| |**English (GB)**|`string`|`en-GB`| |**Japanese**|`string`|`ja-JP`| |**English (US)**|`string`|`en-US`| |**Portuguese (Portugal)**|`string`|`pt-PT`| |**Indonesian**|`string`|`id-ID`| |**Malay**|`string`|`ms-MY`| |**German**|`string`|`de-DE`| |**Portuguese (Brazil)**|`string`|`pt-BR`| |**Turkish**|`string`|`tr-TR`| |**Korean**|`string`|`ko-KR`| |**Dutch (Netherlands)**|`string`|`nl-NL`| |**French**|`string`|`fr-FR`| |**Russian**|`string`|`ru-RU`| |**Italian**|`string`|`it-IT`| |**Spanish**|`string`|`es-ES`|  **AVAILABLE PROVIDERS**   |Name|Value|Version| |----|-----|-------| |**Amazon Web Services**|`amazon`| `boto3 (v1.15.18)`  |**Deepgram**|`deepgram`| `v1`  |**IBM Watson**|`ibm`| `v1`  |**Speechmatics**|`speechmatics`| `2.7.0`  |**Microsoft Azure**|`microsoft`| `v1.0`  |**Google Cloud**|`google`| `v1p1beta1`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\SpeechApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$language = "language_example"; // string | Language code expected (ex: fr-FR (French), en-US (English), es-ES (Spanish), nl-NL Dutch (Netherlands))
$files = "/path/to/file.txt"; // \SplFileObject | File to analyse (ex: mp3, wav, m4a)
$providers = "providers_example"; // string | Provider to compare (ex: [ 'amazon', 'microsoft', 'ibm','google', 'threescribe])
$vocab = "vocab_example"; // string | Speechmatics allows to add a custom vocab dictionnary (json format) for better recognition, you can add it via this parameter.                     It has to be a list of dictionaries : {'content'(Required) : 'string', 'sounds_like'(Optional) : 'list of strings'}

try {
    $result = $apiInstance->speechToText($language, $files, $providers, $vocab);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpeechApi->speechToText: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language** | **string**| Language code expected (ex: fr-FR (French), en-US (English), es-ES (Spanish), nl-NL Dutch (Netherlands)) |
 **files** | **\SplFileObject**| File to analyse (ex: mp3, wav, m4a) |
 **providers** | **string**| Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;,&#39;google&#39;, &#39;threescribe]) |
 **vocab** | **string**| Speechmatics allows to add a custom vocab dictionnary (json format) for better recognition, you can add it via this parameter.                     It has to be a list of dictionaries : {&#39;content&#39;(Required) : &#39;string&#39;, &#39;sounds_like&#39;(Optional) : &#39;list of strings&#39;} | [optional]

### Return type

[**\edenai\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **textToSpeech**
> \edenai\Model\InlineResponse2011 textToSpeech($text, $language, $option, $providers)



Text-to-speech (TTS) system converts normal language text into speech.  **SUPPORTED LANGUAGE**  |Name|Type|Value| |----|----|-----| |**English (GB)**|`string`|`en-GB`| |**Danish**|`string`|`da-DK`| |**English (US)**|`string`|`en-US`| |**Japanese**|`string`|`ja-JP`| |**Portuguese (Portugal)**|`string`|`pt-PT`| |**German**|`string`|`de-DE`| |**Portuguese (Brazil)**|`string`|`pt-BR`| |**Arabic**|`string`|`ar-XA`| |**Dutch (Netherlands)**|`string`|`nl-NL`| |**French**|`string`|`fr-FR`| |**Chinese**|`string`|`cmn-CN`| |**Russian**|`string`|`ru-RU`| |**Italian**|`string`|`it-IT`| |**Spanish**|`string`|`es-ES`|  **AVAILABLE PROVIDERS**   |Name|Value|Version| |----|-----|-------| |**Microsoft Azure**|`microsoft`| `v1.0`  |**Amazon Web Services**|`amazon`| `boto3 (v1.15.18)`  |**Google Cloud**|`google`| `v1`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\SpeechApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$text = "text_example"; // string | Text to transform
$language = "language_example"; // string | Language code expected (ex: fr-FR (French), en-US (English), es-ES (Spanish))
$option = "option_example"; // string | Voice gender selected (ex: FEMALE ou MALE)
$providers = "providers_example"; // string | Provider to compare (ex: [ 'amazon', 'microsoft', 'ibm','google'])

try {
    $result = $apiInstance->textToSpeech($text, $language, $option, $providers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpeechApi->textToSpeech: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **text** | **string**| Text to transform |
 **language** | **string**| Language code expected (ex: fr-FR (French), en-US (English), es-ES (Spanish)) |
 **option** | **string**| Voice gender selected (ex: FEMALE ou MALE) |
 **providers** | **string**| Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;,&#39;google&#39;]) |

### Return type

[**\edenai\Model\InlineResponse2011**](../Model/InlineResponse2011.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

