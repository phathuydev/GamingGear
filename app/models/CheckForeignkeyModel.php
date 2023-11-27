<?php
date_default_timezone_set('Asia/Ho_Chi_Minh'); // Set default time zone
// Kế thừa từ class Model
class CheckForeignkeyModel extends Model
{
    private $__table = "";

    // Định nghĩa table trong Model
    function tableFill()
    {
        return '';
    }

    function fieldFill()
    {
        return '*';
    }

    // Check exitst foreignkey
    public function isForeignKeyExist($tableName, $foreignKey, $foreignKeyComparison)
    {
        $checkForeignkey = $this->db->table($tableName)
            ->select("is_delete")
            ->where($foreignKey, '=', $foreignKeyComparison)
            ->where('is_delete', '=', 0)
            ->first();
        return $checkForeignkey;
    }
}
