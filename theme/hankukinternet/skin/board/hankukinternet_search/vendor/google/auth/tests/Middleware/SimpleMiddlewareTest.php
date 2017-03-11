<?php
/*
 * Copyright 2010 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Auth\Tests;

use Google\Auth\Middleware\SimpleMiddleware;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Uri;

class SimpleMiddlewareTest extends BaseTest
{
  private $mockRequest;

  /**
   * @todo finish
   */
  protected function setUp()
  {
    $this->onlyGuzzle6();

    $this->mockRequest =
      $this
      ->getMockBuilder('GuzzleHttp\Psr7\Request')
      ->disableOriginalConstructor()
      ->getMock();
  }

  public function testTest()
  {

  }
}
