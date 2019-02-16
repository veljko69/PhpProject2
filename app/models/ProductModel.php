<?php


class ProductModel implements ModelInterface
{
    public static function getAll(){
        $SQL = 'SELECT * FROM product ORDER  BY name;';
        $prep = DataBase::getInstance()->prepare($SQL);
        $prep->execute();
        return $prep->fetchAll(PDO::FETCH_OBJ);
    }
    public static function getById($product_id){
        $product_id = intval($product_id);
        $SQL = 'SELECT * FROM product WHERE $product_id = ?;';
        $prep = DataBase::getInstance()->prepare($SQL);
        $prep->execute([$product_id]);
        return $prep->fetch(PDO::FETCH_OBJ);

    }
}