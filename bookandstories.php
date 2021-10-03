<!DOCTYPE html>
<html lang="en">

<?php include_once './head.php' ?>

<body>
    <?php include_once 'connect.php' ?>
    <?php 
        $posts = [];
        try {
            $query = "SELECT * FROM posts WHERE type_post = 0 ORDER BY time_created DESC";
            $stm = $conn->prepare($query);
            $stm->execute();
            $posts = $stm->fetchAll(\PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        $post = null;
        try {
            if (!empty($_GET["type"])) {
                $query = "SELECT * FROM posts WHERE  type_post = 0 AND  id = " .$_GET['type'];
                $stm = $conn->prepare($query);
                $stm->execute();
                $post = $stm->fetch(\PDO::FETCH_ASSOC);
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    ?>
    <?php include_once 'header.php' ?>
    <div class="w-10/12 px-3 mx-auto">
    <p class="text-center font-semibold text-4xl mt-3 mb-5">POSTS</p>
        <?php 
            
        ?>
        <div class="flex flex-col my-3">
            <?php if (!isset($_GET["type"])) { foreach ($posts as $key => $value) { ?>
                <div class="w-full flex mb-2">
                    <div class="w-1/3">
                        <img src="https://photo-cms-plo.zadn.vn/w800/Uploaded/2021/qxwpwqdwp/2021_10_03/ve-ag-1_kyab.jpg" 
                             alt=""
                             class="w-full h-80 object-cover" />
                    </div>
                    <div class="flex justify-start w-2/3 pl-10 items-center">
                        <div class="flex flex-col">
                        <a href="<?php echo 'bookandstories.php?type='.$value['id'] ?>" 
                        class="text-blue-600 text-2xl"><?php echo $value['title'] ?></a>
                        <span class="text-gray-600 mb-1"><?php echo $value['time_created'] ?></span>
                        <p><?php echo $value['describe_short'] ?></p>
                        </div>
                    </div>
                </div>
            <?php }} else {?>
                <div class="content__data"> <?php echo  $post ? ($post['content'])  : ""?></div>
          <?php }?>
        </div>
        <p class=" my-5"><a href="bookandstories.php"class="text-blue-500 ">Trở về</a></p>
    </div>
    <?php include_once 'footer.php' ?>

</body>
</html>