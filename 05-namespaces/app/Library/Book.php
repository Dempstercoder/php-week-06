<?php
/* Create a class Book in the App\Library namespace. It should take a title and its number of pages in the constructor. It should have a read() method, which takes a number of pages that have been read. It should also have a currentPage() page method which tells you which page you're currently on. Put the following in index.php and then check that you get back the right results: */

namespace App\Library;

class Book
{
    private $currentPage = 1; // start on page 1



    public function read($pagesRead) // can call parameter whatever you like
    {
         $this->currentPage += $pagesRead; // currentPage adds to $pagesRead, each time the page is read it increases.
    }

    public function currentPage()
    {
        return $this->currentPage;
    }


}

// setter method changes the values

// getter method gets something back