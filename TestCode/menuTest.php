<?php
namespace App\Models\Menu;
class Menu{
    public $food_name;
    public $price;
    public function setFoodName($food_name){
        $this->food_name=$food_name;
    }
    public function getFoodName(){
        return $this->food_name;
    }
    public function testFoodName(){
        $menu=new Menu;
        $menu->setFoodName('Chicken');
    }
    public function getFoodName(){
        return $this->food_name;
    }
    public function testFoodName(){
        $menu=new Menu;
        $menu->setFoodName('Beef');
    }
    public function getFoodName(){
        return $this->food_name;
    }
    public function testFoodName(){
        $menu=new Menu;
        $menu->setFoodName('Mutton');
    }
    public function getFoodName(){
        return $this->food_name;
    }
    public function testFoodName(){
        $menu=new Menu;
        $menu->setFoodName('Sandwich');
    }
    public function getFoodName(){
        return $this->food_name;
    }
    public function getFoodInfo(){
        return $this->food_name;
        return $this->price;
    }
}
?>