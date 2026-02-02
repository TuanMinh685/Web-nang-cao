<?php
include "../model/database.php";

class xl_data extends database
{
    //read data
    // hàm thực hiện câu sql có lấy giá trị trả về
    public function readitem($sql): array
    {
        $result = $this->connection_database()->query(query: $sql);
        $danhsach = $result->fetchAll();
        return $danhsach;
    }

    // execute data
    // hàm thực hiện câu sql không lấy giá trị trả về
    function execute_item($sql): void
    {
        $conn = new database();
        $conn->connection_database()->query($sql);
    }
}