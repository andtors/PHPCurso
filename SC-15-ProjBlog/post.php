<?php
    include_once("templates/header.php");
    if(isset($_GET['id'])){

        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post){
            if($post['id'] == $postId){
                $currentPost = $post;
            }
        }
    }

?>

    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title">
            <?= $currentPost['title'] ?>
            </h1>
            <p id="post-description">
            <?= $currentPost['description'] ?>
            </p>
            <div class="img-container">
             <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">   
            </div>
            <p class="post-content">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis, ullam doloremque. Voluptates commodi ducimus aliquid dolor distinctio placeat quod, veritatis odit nulla saepe exercitationem facere ipsum officia architecto alias voluptatibus.
                Laborum dicta alias corporis a repellat neque obcaecati unde nemo fugit, adipisci corrupti ea labore, voluptatum sint fugiat et in! Veritatis accusamus cupiditate impedit omnis quia atque dolore assumenda voluptatem!
                Quam voluptates vero hic adipisci, quod eaque repellendus amet ducimus! Officiis dolores, possimus laudantium corporis assumenda eos excepturi impedit culpa rerum quam cumque ut odit explicabo. Ut magnam voluptatem quidem?
                Sed odio, itaque, nisi at rem ab eum perspiciatis, doloremque quos voluptatem repellat architecto. Unde quasi maxime voluptatibus nisi. Optio deleniti adipisci rem reiciendis deserunt perspiciatis earum, accusamus ea corrupti.
                Quisquam tempora error earum sunt molestias porro mollitia. Asperiores quis animi porro molestias. Rem eligendi quo tempore totam repudiandae, adipisci ducimus nemo vel officiis est laborum esse itaque, ipsam fuga.
            </p>
            <p class="post-content">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis, ullam doloremque. Voluptates commodi ducimus aliquid dolor distinctio placeat quod, veritatis odit nulla saepe exercitationem facere ipsum officia architecto alias voluptatibus.
                Laborum dicta alias corporis a repellat neque obcaecati unde nemo fugit, adipisci corrupti ea labore, voluptatum sint fugiat et in! Veritatis accusamus cupiditate impedit omnis quia atque dolore assumenda voluptatem!
                Quam voluptates vero hic adipisci, quod eaque repellendus amet ducimus! Officiis dolores, possimus laudantium corporis assumenda eos excepturi impedit culpa rerum quam cumque ut odit explicabo. Ut magnam voluptatem quidem?
                Sed odio, itaque, nisi at rem ab eum perspiciatis, doloremque quos voluptatem repellat architecto. Unde quasi maxime voluptatibus nisi. Optio deleniti adipisci rem reiciendis deserunt perspiciatis earum, accusamus ea corrupti.
                Quisquam tempora error earum sunt molestias porro mollitia. Asperiores quis animi porro molestias. Rem eligendi quo tempore totam repudiandae, adipisci ducimus nemo vel officiis est laborum esse itaque, ipsam fuga.
            </p>
        </div>
        <aside class="nav-container">
            <h3 id="tags-title">Tags</h3> 
            <ul id="tags-list">
                    <?php foreach($currentPost['tags'] as $tag): ?>
                        <li><a href="#"><?= $tag ?></a></li>
                    <?php endforeach; ?>
            </ul>     
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category): ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
        </aside>
    </main>

<?php
    include_once("templates/footer.php")
?>