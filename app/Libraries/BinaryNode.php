<?php
namespace App\Libraries;

class BinaryNode
{
    public $data;
    public $left;
    public $right;

    public function __construct(string $data = NULL)
    {
        $this->data = $data;
        $this->left = NULL;
        $this->right = NULL;
    }

    public function addChildren($left, $right) 
    {
        $this->left = $left;
        $this->right = $right;
    }
}