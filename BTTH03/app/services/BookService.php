<?php

require_once APP_ROOT . '/CSE485/midterm/app/models/bookmodel.php';
require_once APP_ROOT . '/CSE485/midterm/app/libs/DBConnection.php';

class BookService
{
    public function getAllBook()
    {
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConn();

        if($conn != null){
            $sql = "SELECT * FROM sach ORDER BY id DESC";
            $query = $conn->prepare($sql);
            $query->execute();

            $books = [];
            while ($row = $query->fetch()) {
                $book = new Book($row['id'], $row['tenSach'], $row['namXuatBan'], $row['idTacGia']);
                $books[] = $book;
            }
            return $books;
        }

    }

    public function addNewBook(){
        try{
            $dbConnection = new DBConnection();
            $conn = $dbConnection->getConn();
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $name_book = $_POST["name_book"];
                $year =  $_POST["year"];
                $id_author =  $_POST["id_author"];
            // Kiểm tra trùng lặp
            $sql_check = "SELECT * FROM sach WHERE tenSach = '$name_book'";
            $query_check = $conn->prepare($sql_check);
            $query_check->execute();
            $rowCount = $query_check->rowCount();     
             if ($rowCount > 0) {
                $return = DOMAIN.'public/index.php';
                header('Location: '.$return);
             }else{
                $sql = "INSERT INTO BaiHat(tenSach, namXuatBan, idTacGia) VALUES ('$name_book', '$year', '$id_author')";
                $query = $conn->prepare($sql);
                $query->execute();
                $return = DOMAIN.'public/index.php';
                header('Location: '.$return);
             }
            }
        }catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}