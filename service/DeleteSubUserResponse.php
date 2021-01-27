<?php

namespace ascio\v3;

class DeleteSubUserResponse extends AbstractResponse
{

    /**
     * @param int $ResultCode
     */
    public function __construct($ResultCode)
    {
      parent::__construct($ResultCode);
    }

}
