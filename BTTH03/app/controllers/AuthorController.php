<?php


require_once APP_ROOT.'/cse485/midterm/app/services/AuthorService.php';
class AuthorController{
     public function addNewAuthor(){
        include APP_ROOT.'/CSE485/BTTH03/app/view/song/addNewAuthor.php';
        $songService = new AuthorService();
        $newSong = $songService->addNewAuthor();
    }
}
