<?php

/**
 * UserExpensive.php
 * Author: Andrii Molchanov
 * Email: andymolchanov@gmail.com
 * 27.09.2024
 */
class UserExpensive
{
    const TABLE_NAME = 'block_user_list_expensive';

    public function getRecords()
    {
        global $DB;
        try {
            return $DB->get_records(self::TABLE_NAME);
        } catch (dml_exception $e) {
// Do something
            return $e->getMessage();
        }
    }

    public function getRecord($id)
    {
        global $DB;
        try {
            return $DB->get_records(self::TABLE_NAME, ['id' => $id]);
        } catch (dml_exception $e) {
// Do something
            return $e->getMessage();
        }
    }

    public function save($dataObject)
    {
        global $DB;
        try {
            return $DB->update_record(self::TABLE_NAME, $dataObject);
        } catch (dml_exception $e) {
// Do something
            return $e->getMessage();
        }
    }
}
