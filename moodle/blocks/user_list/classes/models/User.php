<?php

/**
 * User.php
 * Author: Andrii Molchanov
 * Email: andymolchanov@gmail.com
 * 26.09.2024
 */

class User
{

    const TABLE_NAME = 'user';

    public function getUserList()
    {
        global $DB;
        try {
            return $DB->get_records(self::TABLE_NAME);
        } catch (dml_exception $e) {
// Do something
            return $e->getMessage();
        }
    }

    public function getUser($id)
    {
        global $DB;
        try {
            return $DB->get_records(self::TABLE_NAME, ['id' => $id]);
        } catch (dml_exception $e) {
// Do something
            return $e->getMessage();
        }
    }

//    public function save()
//    {
//        global $DB;
//        try {
//            return $DB->update_record('user', ['id' => $id]);
//        } catch (dml_exception $e) {
//// Do something
//            return $e->getMessage();
//        }
//    }

}
