<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
       $db= \Config\Database::connect();
       $builder = $db->table('authors');


       $builder->select("posts.*, CONCAT(authors.first_name, ' ', authors.last_name) AS author");
       $builder->join('posts', 'posts.author_id = authors.id');
       $query = $builder->get();
       $result = $query->getResult();
       return json_encode($result);

    }
}
