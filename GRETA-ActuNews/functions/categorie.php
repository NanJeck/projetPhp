<?php

/**
 * Retourne toutes les
 * catégories du site.
 */


function getCategories(){

   global $dbh;
   $query = $dbh->query("SELECT * FROM category");

   return $query->fetchAll();
}


function getCategoryBySlug(string $slug){

global $dbh;

$sql = 'SELECT * FROM category WHERE slug = :slug';
$query = $dbh->prepare($sql);
$query->bindValue(':slug',$slug);
$query->execute();
return $query->fetch();

}