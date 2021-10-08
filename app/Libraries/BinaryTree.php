<?php
namespace App\Libraries;

use App\Libraries\BinaryNode;

class BinaryTree {
    private $root = null;
    
    public function __construct() 
    {
        $this->root = null;
    }

    public function isEmpty() {
        return $this->root === null;
    }

    public function insert($data) 
    {
        $node = new BinaryNode($data);
        if ($this->isEmpty()) // this is the root node
        { 
            $this->root = $node;
            return true;
        } 
        else {
            return $this->insertNode($node, $this->root);
        }
    }
}