<?php 
namespace Bookshop;


class Category extends Entity {

    private string $name;

    public function __construct (int $id, string $name) {
        parent::__construct($id);
        $this->name = $name;
    }

}