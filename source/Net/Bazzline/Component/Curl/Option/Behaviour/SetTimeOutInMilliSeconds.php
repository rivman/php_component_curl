<?php

namespace Net\Bazzline\Component\Curl\Option;

class SetTimeOutInMilliSeconds extends AbstractSetOptionIntValue
{
    /**
     * @return int
     */
    public function identifier()
    {
        return CURLOPT_TIMEOUT_MS;
    }
}