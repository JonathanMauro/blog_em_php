<?php 
include_once("template/header.php");

if(isset($_GET['id'])){
    $postID = $_GET['id'];
    $currentPost;

    foreach($posts as $post) {
        if($post['id'] == $postID) {
            $currentPost = $post;
        }
    }
}
?>

<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description']?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis atque rem reprehenderit voluptas consequatur nisi ipsam eius minima sint dignissimos, dolores, doloribus optio, earum pariatur architecto iure? Quisquam, nobis quam.
        Aliquam animi non nobis voluptatem quod, nihil et veritatis. Vel nostrum eius quas necessitatibus facere illum explicabo eos modi. Maiores dolor earum reiciendis quam libero at, saepe facilis illo tempore.
        Asperiores eius et nulla explicabo suscipit quisquam quis nihil aliquid. Voluptatibus placeat asperiores, recusandae alias maxime esse. Repellendus veritatis excepturi, ipsam hic non vero, dolor consectetur eaque ipsum similique officia.
        Autem minus officia mollitia adipisci rem sint enim tenetur suscipit aut voluptatum expedita repudiandae possimus repellat officiis iusto quisquam asperiores delectus iste magnam, voluptatem itaque quidem. Deserunt amet minus quaerat?
        Illum amet nulla assumenda dolor maiores libero blanditiis delectus deserunt, laudantium adipisci voluptate quam placeat ipsa commodi provident animi minus! Ducimus, eveniet soluta? Corporis cumque aperiam rerum nostrum rem. Rerum.</p>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis atque rem reprehenderit voluptas consequatur nisi ipsam eius minima sint dignissimos, dolores, doloribus optio, earum pariatur architecto iure? Quisquam, nobis quam.
        Aliquam animi non nobis voluptatem quod, nihil et veritatis. Vel nostrum eius quas necessitatibus facere illum explicabo eos modi. Maiores dolor earum reiciendis quam libero at, saepe facilis illo tempore.
        Asperiores eius et nulla explicabo suscipit quisquam quis nihil aliquid. Voluptatibus placeat asperiores, recusandae alias maxime esse. Repellendus veritatis excepturi, ipsam hic non vero, dolor consectetur eaque ipsum similique officia.
        Autem minus officia mollitia adipisci rem sint enim tenetur suscipit aut voluptatum expedita repudiandae possimus repellat officiis iusto quisquam asperiores delectus iste magnam, voluptatem itaque quidem. Deserunt amet minus quaerat?
        Illum amet nulla assumenda dolor maiores libero blanditiis delectus deserunt, laudantium adipisci voluptate quam placeat ipsa commodi provident animi minus! Ducimus, eveniet soluta? Corporis cumque aperiam rerum nostrum rem. Rerum.</p>
    </div>
    

    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <div id= "tags-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
                <li> <a href="#"> <?= $tag ?></a></li>
            <?php endforeach; ?>
        </div>
        <h3 id="categories-title">Categorias</h3>
        <ul id= "categories-list">
            <?php foreach($categories as $category): ?>
                <li> <a href="#"> <?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
    

</main>




    <?php 
include_once("template/footer.php");
?> 