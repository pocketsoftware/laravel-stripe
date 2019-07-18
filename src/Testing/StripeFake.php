<?php
/**
 * Copyright 2019 Cloud Creativity Limited
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace CloudCreativity\LaravelStripe\Testing;

use CloudCreativity\LaravelStripe\Contracts\Connect\AdapterInterface;
use CloudCreativity\LaravelStripe\Contracts\Webhooks\ProcessorInterface;
use CloudCreativity\LaravelStripe\Log\Logger;
use CloudCreativity\LaravelStripe\StripeService;
use CloudCreativity\LaravelStripe\Testing\Concerns\MakesStripeAssertions;

class StripeFake extends StripeService
{

    use MakesStripeAssertions;

    /**
     * StripeFake constructor.
     *
     * @param ClientFake $client
     */
    public function __construct(ClientFake $client)
    {
        $this->stripeClient = $client;
    }
}
