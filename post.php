<?php
include_once("template/header.php");

if (isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;

    foreach ($posts as $post) {
        if ($post['id'] == $postId) {
            $currentPost = $post;
        }
    }
}
?>

<main class="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>img/<?= $post['img'] ?>" alt="<?= $post['title'] ?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non recusandae accusantium
            reiciendis repudiandae. Deserunt, in laborum perspiciatis obcaecati totam quaerat, veniam eligendi maiores
            doloremque, fuga sequi dignissimos reprehenderit optio placeat.
            Aliquam ratione magnam iste! Dolorum, repellendus blanditiis. Natus, vitae nisi! Voluptatum ea alias neque
            voluptate perferendis cupiditate repellendus eaque suscipit repudiandae, nisi id vero magni corporis odit
            molestias numquam fuga!
            Tempora nam dolores, minus, sit voluptatem dolorem molestiae, ex tempore cupiditate repellendus quae nobis
            in incidunt? Aut sequi molestiae accusantium rem tempora doloribus quasi. Cumque consequatur quia excepturi
            maiores in.
            Sapiente dignissimos porro ratione eos magni explicabo velit illo, rerum expedita commodi repudiandae
            temporibus sunt ab fugit, omnis, reprehenderit tenetur corporis? Quibusdam cum inventore modi ex harum. Nam,
            iste eligendi.
            Accusamus assumenda, ipsa aperiam temporibus odit iusto recusandae omnis, reprehenderit repudiandae repellat
            unde, sunt rerum maxime amet quae nam error vitae sit doloribus autem facere corporis. Iste aperiam vero
            cumque.</p>
    </div>
    <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non recusandae accusantium
        reiciendis repudiandae. Deserunt, in laborum perspiciatis obcaecati totam quaerat, veniam eligendi maiores
        doloremque, fuga sequi dignissimos reprehenderit optio placeat.
        Aliquam ratione magnam iste! Dolorum, repellendus blanditiis. Natus, vitae nisi! Voluptatum ea alias neque
        voluptate perferendis cupiditate repellendus eaque suscipit repudiandae, nisi id vero magni corporis odit
        molestias numquam fuga!
        Tempora nam dolores, minus, sit voluptatem dolorem molestiae, ex tempore cupiditate repellendus quae nobis in
        incidunt? Aut sequi molestiae accusantium rem tempora doloribus quasi. Cumque consequatur quia excepturi maiores
        in.
        Sapiente dignissimos porro ratione eos magni explicabo velit illo, rerum expedita commodi repudiandae temporibus
        sunt ab fugit, omnis, reprehenderit tenetur corporis? Quibusdam cum inventore modi ex harum. Nam, iste eligendi.
        Accusamus assumenda, ipsa aperiam temporibus odit iusto recusandae omnis, reprehenderit repudiandae repellat
        unde, sunt rerum maxime amet quae nam error vitae sit doloribus autem facere corporis. Iste aperiam vero cumque.
    </p>
    </div>
</main>
<aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul id="tag-list">
        <?php foreach ($currentPost['tags'] as $tag): ?>
            <li><a href="#"><?= $tag ?></a></li>
        <?php endforeach; ?>
    </ul>
    <h3 id="categories-title">Categorias</h3>
    <ul id="categories-list">
        <?php foreach ($categories as $category): ?>
            <li><a href="#"><?= $category ?></a></li>
        <?php endforeach; ?>
    </ul>
</aside>
</main>
<?php
include_once("template/footer.php")
    ?>