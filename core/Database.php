<?php
class Database
{
  private $__conn;

  use QueryBuilder;
  // Kết nối db
  function __construct()
  {
    global $db_config;
    $this->__conn = Connection::getInstance($db_config);
  }
  // Thêm dữ liệu
  function insertData($table, $data)
  {
    if (isset($data)) {
      $fieldStr = '';
      $valueStr = '';
      foreach ($data as $key => $value) {
        $fieldStr .= $key . ',';
        $valueStr .= "'" . $value . "',";
      }
      $fieldStr = rtrim($fieldStr, ',');
      $valueStr = rtrim($valueStr, ',');

      $sql = "INSERT INTO $table($fieldStr) VALUES ($valueStr)";
      $status = $this->query($sql);
      if ($status) {
        return true;
      }
    }
    return false;
  }

  // Sửa dữ liệu
  function updateData($table, $data, $condition = '')
  {
    if (isset($data)) {
      $updateStr = '';
      foreach ($data as $key => $value) {
        $updateStr .= "$key='$value',";
      }

      $updateStr = rtrim($updateStr, ',');

      if (isset($condition)) {
        $sql = "UPDATE $table SET $updateStr WHERE $condition";
      } else {
        $sql = "UPDATE $table SET $updateStr";
      }

      $status = $this->query($sql);
      if ($status) {
        return true;
      }
    }
    return false;
  }

  // Xóa dữ liệu
  function deleteData($table, $condition = '')
  {
    if (isset($condition)) {
      $sql = ' DELETE FROM ' . $table . ' WHERE ' . $condition;
    } else {
      $sql = ' DELETE FROM ' . $table;
      echo $sql;
    }

    $status = $this->query($sql);
    if ($status) {
      return true;
    }
    return false;
  }

  // Truy vấn câu lệnh
  function query($sql)
  {
    try {

      $statement = $this->__conn->prepare($sql);
      $statement->execute();
      return $statement;
    } catch (Exception $e) {
      $mess = $e->getMessage();
      $data['message'] = $mess;
      App::$app->loadError('database', $data);
      die();
    }
  }

  // Trả về id mới nhất sau khi Insert
  function lastInsertId()
  {
    return $this->__conn->lastInsertId();
  }
}
