<?php

/**
 * User.php
 * Author: Andrii Molchanov
 * Email: andymolchanov@gmail.com
 * 26.09.2024
 */

class User
{

    public function getUserList()
    {
        global $DB;
        try {
            return $DB->get_records('user');
        } catch (dml_exception $e) {
// Do something
            return $e->getMessage();
        }
    }

    public function getUser($id)
    {
        global $DB;
        try {
            return $DB->get_records('user', ['id' => $id]);
        } catch (dml_exception $e) {
// Do something
            return $e->getMessage();
        }
    }


}
