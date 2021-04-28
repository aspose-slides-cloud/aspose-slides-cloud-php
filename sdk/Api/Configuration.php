<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose">
 *   Copyright (c) 2018 Aspose.Slides for Cloud
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */


namespace Aspose\Slides\Cloud\Sdk\Api;

/*
 * Represents a set of configuration settings
 */
class Configuration
{
    private static $_defaultConfiguration;
    
    /*
     * ClientId for API
     *
     */
    protected $appSid = '';
    
    /*
     * ClientSecret for API
     * @var string
     */
    protected $appKey = '';

    /*
     * Access token for OAuth
     *
     * @var string
     */
    protected $accessToken = '';

    /*
     * Username for HTTP basic authentication
     *
     * @var string
     */
    protected $username = '';

    /*
     * Password for HTTP basic authentication
     *
     * @var string
     */
    protected $password = '';

    /*
     * The host
     *
     * @var string
     */
    protected $host = 'https://api.aspose.cloud';

    /*
     * The host
     *
     * @var string
     */
    protected $authHost = 'https://api.aspose.cloud';
	
    /*
     * Version of API to use, possible values are v1, v1.1, v2, v3
     * default value is v1
     * @var string
     */
    protected $base_path = "v3.0";

    /*
     * User agent of the HTTP request, set to "PHP-Swagger" by default
     *
     * @var string
     */
    protected $userAgent = "php sdk";

    /*
     * Debug switch (default set to false)
     *
     * @var bool
     */
    protected $debug = false;

    /*
     * Slides operation timeout in seconds
     *
     * @var integer
     */
    protected $timeout = 0;

    /*
     * Debug file location (log to STDOUT by default)
     *
     * @var string
     */
    protected $debugFile = 'php://output';

    /*
     * Debug file location (log to STDOUT by default)
     *
     * @var string
     */
    protected $tempFolderPath;

    /*
     * Custom HTTP headers added to each request
     *
     * @var string
     */
    protected $customHeaders = [];
    
    /*
     * Version of Aspose.Slides Cloud API
     *
     */
    protected $clientVersion = '21.4.0';

    /*
     * Constructor
     */
    public function __construct()
    {
        $this->tempFolderPath = sys_get_temp_dir();
        date_default_timezone_set('UTC');
    }
    
    /*
     * Gets client version
     *
     */
    public function getClientVersion()
    {
        return $this->clientVersion;
    }
    
    /*
     * Sets ClientId
     *
     * @param string $appSid
     *
     * @return $this
     */
    public function setAppSid($appSid)
    {
        $this->appSid = $appSid;
        return $this;
    }
    
    /*
     * Gets ClientId
     * @return $appSid
     */
    public function getAppSid()
    {
        return $this->appSid;
    }
    
    /*
     * Sets ClientSecret
     *
     * @param string $appKey
     *
     * @return $this
     */
    public function setAppKey($appKey)
    {
        $this->appKey = $appKey;
        return $this;
    }
    
    /*
     * Gets ClientSecret
     * @return $appKey
     */
    public function getAppKey()
    {
        return $this->appKey;
    }

    /*
     * Sets the access token for OAuth
     *
     * @param string $accessToken Token for OAuth
     *
     * @return $this
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    /*
     * Gets the access token for OAuth
     *
     * @return string Access token for OAuth
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /*
     * Sets the username for HTTP basic authentication
     *
     * @param string $username Username for HTTP basic authentication
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /*
     * Gets the username for HTTP basic authentication
     *
     * @return string Username for HTTP basic authentication
     */
    public function getUsername()
    {
        return $this->username;
    }

    /*
     * Sets the password for HTTP basic authentication
     *
     * @param string $password Password for HTTP basic authentication
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /*
     * Gets the password for HTTP basic authentication
     *
     * @return string Password for HTTP basic authentication
     */
    public function getPassword()
    {
        return $this->password;
    }

    /*
     * Sets the host
     *
     * @param string $host Host
     *
     * @return $this
     */
    public function setHost($host)
    {
        $this->host = $host;
        return $this;
    }

    /*
     * Gets the host
     *
     * @return string Host
     */
    public function getHost()
    {
        return $this->host;
    }

    /*
     * Sets the host
     *
     * @param string $host Host
     *
     * @return $this
     */
    public function setAuthHost($authHost)
    {
        $this->authHost = $authHost;
        return $this;
    }

    /*
     * Gets the host
     *
     * @return string Host
     */
    public function getAuthHost()
    {
        return $this->authHost;
    }
	
    /*
     * Sets the base_path
     *
     * @param string $base_path api version
     *
     * @return $this
     */
    public function setBasePath($base_path)
    {
        $this->base_path = $base_path;
        return $this;
    }

    /*
     * Gets the base_path
     *
     * @return string base_path
     */
    public function getBasePath()
    {
        return $this->base_path;
    }

    /*
     * Sets the user agent of the api client
     *
     * @param string $userAgent the user agent of the api client
     *
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUserAgent($userAgent)
    {
        if (!is_string($userAgent)) {
            throw new \InvalidArgumentException('User-agent must be a string.');
        }

        $this->userAgent = $userAgent;
        return $this;
    }

    /*
     * Gets the user agent of the api client
     *
     * @return string user agent
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /*
     * Sets timeout
     *
     * @param integer $timeout Timeout
     *
     * @return $this
     */
    public function setTimeout($timeout)
    {
        $this->timeout = $timeout;
        return $this;
    }

    /*
     * Gets the timeout
     *
     * @return integer
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    /*
     * Sets debug flag
     *
     * @param bool $debug Debug flag
     *
     * @return $this
     */
    public function setDebug($debug)
    {
        $this->debug = $debug;
        return $this;
    }

    /*
     * Gets the debug flag
     *
     * @return bool
     */
    public function getDebug()
    {
        return $this->debug;
    }

    /*
     * Sets the debug file
     *
     * @param string $debugFile Debug file
     *
     * @return $this
     */
    public function setDebugFile($debugFile)
    {
        $this->debugFile = $debugFile;
        return $this;
    }

    /*
     * Gets the debug file
     *
     * @return string
     */
    public function getDebugFile()
    {
        return $this->debugFile;
    }

    /*
     * Sets the temp folder path
     *
     * @param string $tempFolderPath Temp folder path
     *
     * @return $this
     */
    public function setTempFolderPath($tempFolderPath)
    {
        $this->tempFolderPath = $tempFolderPath;
        return $this;
    }

    /*
     * Gets the temp folder path
     *
     * @return string Temp folder path
     */
    public function getTempFolderPath()
    {
        return $this->tempFolderPath;
    }

    /*
     * Gets the custom headers array
     *
     * @return array custom headers array
     */
    public function getCustomHeaders()
    {
        return $this->customHeaders;
    }

    /*
     * Sets the a custom header value
     *
     * @return string Custom header value
     */
    public function setCustomHeader($key, $value)
    {
        return $this->customHeaders[$key] = $value;
    }

    /*
     * Gets the default configuration instance
     *
     * @return Configuration
     */
    public static function getDefaultConfiguration()
    {
        if (self::$_defaultConfiguration === null) {
            self::$_defaultConfiguration = new Configuration();
        }

        return self::$_defaultConfiguration;
    }

    /*
     * Sets the detault configuration instance
     *
     * @param Configuration $config An instance of the Configuration Object
     *
     * @return void
     */
    public static function setDefaultConfiguration(Configuration $config)
    {
        self::$_defaultConfiguration = $config;
    }

    /*
     * Gets the essential information for debugging
     *
     * @return string The report for debugging
     */
    public static function toDebugReport()
    {
        $report  = 'PHP SDK (Aspose\Slides) Debug Report:' . PHP_EOL;
        $report .= '    OS: ' . php_uname() . PHP_EOL;
        $report .= '    PHP Version: ' . PHP_VERSION . PHP_EOL;
        $report .= '    OpenAPI Spec Version: 21.4.0' . PHP_EOL;
        $report .= '    Temp Folder Path: ' . self::getDefaultConfiguration()->getTempFolderPath() . PHP_EOL;

        return $report;
    }

    /*
     * Get API key (with prefix if set)
     *
     * @param  string $apiKeyIdentifier name of apikey
     *
     * @return string API key with the prefix
     */
    public function getApiKeyWithPrefix($apiKeyIdentifier)
    {
        $prefix = $this->getApiKeyPrefix($apiKeyIdentifier);
        $apiKey = $this->getApiKey($apiKeyIdentifier);

        if ($apiKey === null) {
            return null;
        }

        if ($prefix === null) {
            $keyWithPrefix = $apiKey;
        } else {
            $keyWithPrefix = $prefix . ' ' . $apiKey;
        }

        return $keyWithPrefix;
    }
}
