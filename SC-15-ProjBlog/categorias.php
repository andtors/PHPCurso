<?php
    include_once("templates/header.php");

    $tags = ["Selecione"];
    $artigosTags = [];

    foreach($posts as $post){
        $arrayTags = $post['tags'];
        foreach ($arrayTags as $tag){
            array_push($tags, $tag);
        }
    }
    
    $uniqueTags = array_unique($tags);

    $artigosTags = [];
   
    if(isset($_POST["selectTagSub"])){
        $selectTag = $_POST['selectTagSub'];    
        foreach($posts as $post => $postArr){
          foreach($postArr['tags'] as $tag){
           if($tag == $selectTag){
                array_push($artigosTags, $postArr);
           }
          }
        }
    }
?>

    <div id="select-container">
        <form action="categorias.php" method="POST" >
            <label class="label-select">Escolha uma tag:</label>
            <select name="selectTagSub">
                <?php foreach ($uniqueTags as $tag): ?>
                    <option value="<?= $tag ?>" ><?= $tag ?></option>
                <?php endforeach; ?>
                <input type="submit">
            </select>
        </form>
    </div>
    <main>
    <div id="post-container">
        <?php if($artigosTags): ?>
            <?php foreach($artigosTags as $artigosTag): ?>
                <div class="post-box">
                    <img src="<?= $BASE_URL ?>/img/<?= $artigosTag['img'] ?>" alt="<?= $artigosTag['title'] ?>">
                    <h2 class="post-title">
                    <a href="<?= $BASE_URL ?>post.php?id=<?= $artigosTag['id'] ?>"><?= $artigosTag['title'] ?></a>
                    </h2>
                <p class="post-description">
                <?= $artigosTag['description'] ?>
                </p>
                    <div class="post-tags">
                        <?php foreach($artigosTag['tags'] as $tag): ?>
                            <a href="#"><?= $tag ?></a>
                        <?php endforeach; ?>
                    </div>  
                </div>    
            <?php endforeach; ?>
        <?php endif; ?>
    </div>    
    </main>


<?php
include_once("templates/footer.php")
?>