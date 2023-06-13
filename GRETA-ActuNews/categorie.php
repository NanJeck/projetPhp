<?php require_once('partials/header.php'); 

$slug =  $_GET['name'] ??'politique';
$category = getCategoryBySlug($slug);
debug($category);

$posts = getPostsByCategory($category['id']);
?>


<?php/*
    # Récupération de mon paramètre "name" dans l'URL
    # print_r( $_GET['name'] );
    if( !isset( $_GET['name'] ) ) {
        $category = 'Politique';
    } else {
        $category = $_GET['name'];
    }
*/
?>



<!-- Titre de la page -->





<div class="p-3 mx-auto text-center">
    <h1 class="display-4"><?php echo $category ?></h1>
</div>

<!-- Contenu de la page -->


    <div class="container">
        <div class="row">
            <div class="col-md-4 mt-4">
                <?php foreach($posts as $post) { ?>
                <div class="card shadow-sm">

                    <img class="card-img-top"
                         src="https://picsum.photos/400/250" alt="[PLACEHOLDER]">
                    <div class="card-body">
                        <h2 class="card-title"><?php echo $post['title']?></h2>
                        <div class="card-text">[DESCRIPTION]</div>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">[AUTEUR]</small>
                            <a href="#" class="btn btn-dark">
                                Lire la suite
                            </a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            
                </div> <!-- ./card -->
            </div> <!-- ./col-md-4 -->
        </div> <!-- ./row -->
    </div> <!-- ./container -->
</div> <!-- ./bg-light -->

<?php require_once('partials/footer.php'); ?>

