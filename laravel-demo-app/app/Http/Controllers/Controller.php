<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Aspose\Slides\Cloud\Sdk\Api\Configuration;
use Aspose\Slides\Cloud\Sdk\Api\SlidesApi;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected static function getCloudApi()
    {
        if (!self::$cloudApi)
        {
            $config = new Configuration();
            $config->setAppSid(env("ASPOSE_CLIENT_ID"));
            $config->setAppKey(env("ASPOSE_CLIENT_SECRET"));
            if (env("ASPOSE_CLIENT_HOST"))
            {
                $config->setHost(env("ASPOSE_CLIENT_HOST"));
            }
            if (env("ASPOSE_CLIENT_AUTH_HOST"))
            {
                $config->setAuthHost(env("ASPOSE_CLIENT_AUTH_HOST"));
            }
            self::$cloudApi = new SlidesApi(null, $config);
        }
        return self::$cloudApi;
    }

    private static $cloudApi;
}
