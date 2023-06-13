<?php
global $dbh;

function getPosts($limit = null){
    global $dbh;
    $sql = 'SELECT p.id,
    p.title,
    p.content,
    p.published_At,
    p.slug as postSlug,
    p.image,
    c.nomCategory,
    c.slug,
    u.firstName,
    u.lastName
FROM post p
      INNER JOIN user u ON u.id = p.id_user
      INNER JOIN category c ON c.id = p.id_category
ORDER BY p.published_At DESC';
# Si une limit est précisé, alors je l'ajoute à la requête
$limit !== null ? $sql .= " LIMIT $limit" : '';
   // $sql.= $limit ?? '';

    $query = $dbh->query($sql);

    return $query->fetchAll();
}

function getPostsByCategory($categoryId): bool|array
{
    global $dbh;

    # Création de la requête SQL
    $sql = 'SELECT p.id,
                   p.title,
                   p.content,
                   p.published_At,
                   p.slug as postSlug
                   p.image,
                   c.nomCategory,
                   c.slug,
                   u.firstName,
                   u.lastName
                FROM post p
                     INNER JOIN user u ON u.id = p.id_user
                     INNER JOIN category c ON c.id = p.id_category
                        WHERE p.id_category = :categoryId
                        ORDER BY p.published_At DESC';

    # Preparation de la requête
    $query = $dbh->prepare($sql);
    $query->bindValue(':categoryId', $categoryId, PDO::PARAM_INT);

    # Execution de la requête
    $query->execute();

    # Retour du résultat
    return $query->fetchAll();
}

function getPostsBySlug($slugId): bool|array
{
    global $dbh;

    # Création de la requête SQL
    $sql = 'SELECT p.id,
                   p.title,
                   p.content,
                   p.published_At,
                   p.slug as postSlug,
                   p.image,
                   c.nomCategory,
                   c.slug as categorySlug,
                   u.firstName,
                   u.lastName
                FROM post p
                     INNER JOIN user u ON u.id = p.id_user
                     INNER JOIN category c ON c.id = p.id_category
                        WHERE p.slug = :slug
                        ORDER BY p.published_At DESC';
                     

    # Preparation de la requête
    $query = $dbh->prepare($sql);
    $query->bindValue(':slug', $slugId, PDO::PARAM_STR);

    # Execution de la requête
    $query->execute();

    # Retour du résultat
    return $query->fetch();
}
?>

