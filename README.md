# Aspose.Slides Cloud SDK for PHP
This repository contains Aspose.Slides Cloud SDK for PHP source code. This SDK allows you to work with Aspose.Slides Cloud REST APIs in your PHP applications.

## Key Features
* Conversion between various document-related formats (20+ formats supported), including PDF<->PowerPoint conversion
* Download slides and shapes in various formats, including PDF and SVG
* Merge and split PowerPoint presentations
* Access PowerPoint presentation metadata and statistics
* Find and replace
* Full read & write access to Document Object Model, including slides, shapes, paragraphs, portions and many others
* Support of Aspose.Storage API

## Licensing
All Aspose.Slides Cloud SDKs are licensed under MIT License.

## How to use the SDK?
The complete source code is available in this repository folder. You can either directly use it in your project via source code or get [composer package](https://packagist.org/packages/aspose/slides-sdk-php) (recommended).

## Prerequisites
To use Aspose Slides Cloud PHP SDK you need to register an account with [Aspose Cloud](https://www.aspose.cloud/) and lookup/create App Key and SID at [Cloud Dashboard](https://dashboard.aspose.cloud/#/apps). There is free quota available. For more details, see [Aspose Cloud Pricing](https://purchase.aspose.cloud/pricing).

### Installation

From the command line:

	composer require aspose/slides-sdk-php

### Sample usage

The example code below converts a PowerPoint document to PDF format using asposeslidescloud library:
```php
use Aspose\Slides\Cloud\Sdk\Api\Configuration;
use Aspose\Slides\Cloud\Sdk\Api\SlidesApi;
use Aspose\Slides\Cloud\Sdk\Model\ExportFormat;
use Aspose\Slides\Cloud\Sdk\Model\Requests\PostSlidesConvertRequest;

$config = new Configuration();
$config->setAppSid("MyAppSid");
$config->setAppKey("MyAppKey");
$api = new SlidesApi(null, $config);
$request = new PostSlidesConvertRequest(ExportFormat::PDF, fopen("MyPresentation.pptx", 'r'));
$result = $api->postSlidesConvert($request);
echo "My PDF was saved to " . $result->getPathname();
```

## Contact Us

Your feedback is very important to us. Please feel free to contact us using our [Support Forums](https://forum.aspose.cloud/c/slides).

## Resources
 
[Website](https://www.aspose.cloud/)  
[Product Home](https://products.aspose.cloud/slides/family)  
[API Reference](https://apireference.aspose.cloud/slides/)  
[Documentation](https://docs.aspose.cloud/display/slidescloud/Home)  
[Blog](https://blog.aspose.cloud/category/slides/)  
 
## Other languages

We generate our SDKs in different languages so you may check if yours is available in our [list](https://github.com/aspose-slides-cloud).
 
If you don't find your language in the list, feel free to request it from us, or use raw REST API requests as you can find it [here](https://products.aspose.cloud/slides/curl).

