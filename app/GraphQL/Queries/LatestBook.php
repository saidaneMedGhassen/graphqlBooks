<?php

namespace App\GraphQL\Queries;
use App\Models\Book;

class LatestBook
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        return Book::all()->last();
    }
}
