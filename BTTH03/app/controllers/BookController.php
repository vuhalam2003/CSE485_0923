<?php


require_once APP_ROOT.'/cse485/midterm/app/services/BookService.php';
class BookController{
    private $bookService;
    public function add(){
        $bookService = new BookService();
        require APP_ROOT.'/cse485/midterm/app/view/book/addNewBook.php';
    }
}
