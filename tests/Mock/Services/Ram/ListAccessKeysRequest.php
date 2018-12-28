<?php
/**
 * LICENSE: Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * http://www.apache.org/licenses/LICENSE-2.0.
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * --------------------------------------------------------------------------
 *
 * PHP version 5
 *
 * @category  AlibabaCloud
 *
 * @author    Alibaba Cloud SDK <sdk-team@alibabacloud.com>
 * @copyright 2018 Alibaba Group
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 *
 * @link      https://github.com/aliyun/openapi-sdk-php-client
 */

namespace AlibabaCloud\Client\Tests\Mock\Services\Ram;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Class ListAccessKeysRequest
 *
 * @package   AlibabaCloud\Client\Tests\Mock\Services\Ram
 *
 * @author    Alibaba Cloud SDK <sdk-team@alibabacloud.com>
 * @copyright 2018 Alibaba Group
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 *
 * @link      https://github.com/aliyun/openapi-sdk-php-client
 */
class ListAccessKeysRequest extends RpcRequest
{

    /**
     * ListAccessKeysRequest constructor.
     *
     * @param array $options
     */
    public function __construct(array $options = [])
    {
        parent::__construct($options);
        $this->scheme('https');
        $this->method('POST');
        $this->product('Ram');
        $this->version('2015-05-01');
        $this->action('ListAccessKeys');
        $this->options($options);
    }

    /**
     * @var
     */
    private $userName;

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param $userName
     *
     * @return ListAccessKeysRequest
     */
    public function setUserName($userName)
    {
        $this->userName                     = $userName;
        $this->options['query']['UserName'] = $userName;
        return $this;
    }
}