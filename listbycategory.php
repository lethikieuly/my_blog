
<?php 
    include_once './head.php';
    include_once 'connect.php';
    $postList = [];
    if ($_GET["id"]) {
        try {
            $query = "SELECT * FROM posts WHERE id_category = ". $_GET['id'];
            $stm = $conn->prepare($query);
            $stm->execute();
            $postList = $stm->fetchAll(\PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
?>

<?php foreach ($postList as $key => $value) { ?>
<div class="w-full p-10 border-2 border-solid border-pink-500 mb-6">
    <img src="<?= $value["image"] ?>" class="max-w-full mx-auto" alt="">
    <p class="text-3xl font-semibold text-center"><?= $value["title"] ?></p>
    <div class="w-3/4 mx-auto relative h-8 flex flex-wrap items-center">
        <div class="w-full h-1 bg-black"></div>
        <p class="px-4 h-12 w-auto whitespace-nowrap bg-pink-100 z-50 flex items-center justify-center absolute top-0 left-1/2 transform 
        -translate-x-1/2">Posted <?= $value["time_created"] ?> by Anh Nhat</p>
    </div>
    <p class="mt-6 mb-1">
        <?= $value["describe_short"] ?>
    </p>
    <div class="w-full flex items-center justify-center h-16">
        <a href="project.php?id=<?= $value['id'] ?>" class="px-8 py-2 bg-pink-500 text-white font-semibold">Read more</a>
    </div>
</div>
<?php } ?>