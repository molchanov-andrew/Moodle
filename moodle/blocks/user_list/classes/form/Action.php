<?php

/**
 * Action.php
 * Author: Andrii Molchanov
 * Email: andymolchanov@gmail.com
 * 25.09.2024
 */
class Action
{
    public int $userId;
    public function __construct($userId)
    {
        $this->userId = $userId;
    }

}
