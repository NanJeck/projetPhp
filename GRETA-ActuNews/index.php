<?php require_once('partials/header.php'); 


$posts = getPosts(6);

?>

<!-- Titre de la page -->

<div class="p-3 mx-auto text-center">
    <h1 class="display-4">ActuNews</h1>
</div>

<!-- Contenu de la page -->


    <div class="container">
        <div class="row">
            <?php foreach($posts as $post){ ?>
            <div class="col-md-4 mt-4">
                <div class="card shadow-sm">
                    <img class="card-img-top"
                         src="<?=$post['image']?>" alt='[PLACEHOLDER]'>
                    <div class="card-body">
                        <h2 class="card-title"><?php echo $post['title']?></h2>
                        <div class="card-text"><?php echo summarize($post['content'])?></div>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted"><?php echo $post['firstName']?></small>
                            <a href="<?php echo "article.php?slug=".$post['postSlug']?>" class="btn btn-dark">
                                Lire la suite
                            </a>
                        </div>
                    </div>
            </div>
            </div>
                <?php } ?>
                </div> <!-- ./card -->
            </div> <!-- ./col-md-4 -->
        </div> <!-- ./row -->
    </div> <!-- ./container -->
</div> <!-- ./bg-light -->

<?php require_once('partials/footer.php'); ?>

