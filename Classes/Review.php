<?php


class Review
{
    public $id;
    public $name;
    public $stars;
    public $review;
    public $postdate;
    public $user_id;
    public $product;


    public function __construct()
    {
        settype($this->id, 'integer');
    }
}
