<?php
abstract class Model extends Database
{
    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    abstract function tableFill();

    abstract function fieldFill();

    // Lấy tất cả bản ghi
    public function get()
    {
        $tableName = $this->tableFill();
        $fieldSelect = $this->fieldFill();
        if (empty($fieldSelect)) {
            $fieldSelect = '*';
        }
        $sql = "SELECT $fieldSelect FROM $tableName";
        $query = $this->db->query($sql);
        if (isset($query)) {
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }
        return false;
    }

    // Lấy 1 bản ghi
    public function first()
    {
        $tableName = $this->tableFill();
        $fieldSelect = $this->fieldFill();
        if (empty($fieldSelect)) {
            $fieldSelect = '*';
        }
        $sql = "SELECT $fieldSelect FROM $tableName";
        $query = $this->db->query($sql);
        if (isset($query)) {
            return $query->fetch(PDO::FETCH_ASSOC);
        }
        return false;
    }
}
