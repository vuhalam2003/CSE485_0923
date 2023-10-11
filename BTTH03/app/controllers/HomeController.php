<?php

require_once APP_ROOT.'/cse485/midterm/app/services/BookService.php';

class HomeController{
    public function index(){
        $bookService = new BookService();
        $books = $bookService->getAllBook();
        include APP_ROOT.'/cse485/midterm/app/view/home/index.php';
    }


}