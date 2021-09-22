<!DOCTYPE html>
<html lang="en">

<?php include_once './head.php' ?>

<body>
    <?php include_once 'connect.php' ?>
    <?php 
        $posts = [];
        try {
            $query = "SELECT * FROM book_and_stories";
            $stm = $conn->prepare($query);
            $stm->execute();
            $posts = $stm->fetchAll(\PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        $post = null;
        try {
            if (!empty($_GET["type"])) {
                $query = "SELECT * FROM book_and_stories WHERE id = " .$_GET['type'];
                $stm = $conn->prepare($query);
                $stm->execute();
                $post = $stm->fetch(\PDO::FETCH_ASSOC);
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    ?>
    <?php include_once 'header.php' ?>
    <div class="w-1/2 px-3 mx-auto">
        <h3 class="my-2 text-2xl font-bold">Posts</h3>
        <?php 
            
        ?>
        <div class="flex flex-col my-3">
            <?php if (!isset($_GET["type"])) { foreach ($posts as $key => $value) { ?>
                <span class="text-gray-600 mb-1"><?php echo $value['time_created'] ?></span>
                <a href="<?php echo 'bookandstories.php?type='.$value['id'] ?>" class="text-blue-600 text-2xl"><?php echo $value['title'] ?></a>
            <?php }} else {?>
                <p> <?php echo  $post ? ($post['content'])  : ""?></p>
          <?php }?>
        </div>
        <p class=" my-5"><a href="bookandstories.php"class="text-blue-500 ">Trở về</a></p>
    </div>
    <?php include_once 'footer.php' ?>

</body>
</html>