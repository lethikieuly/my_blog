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
    <div class="w-full bg-gray-100" style="height:450px;">
        <div class="w-10/12 mx-auto h-full">
            <div class="w-1/2 h-4/5  flex items-center">
                <img src="./assets/images/Ebooks.svg" class="h-2/3 object-contain" alt="" srcset="">
            </div>  
            <div class="text-4xl font-bold ">
            📚 Book Summaries
            </div>
            <div class="w-32 h-1 mt-3 bg-blue-500"></div>
        </div>  
    </div>
    <div class="w-10/12 px-3 mx-auto pt-12">
        <div class="flex flex-wrap w-full my-3">
            <?php if (!isset($_GET["type"])) { foreach ($posts as $key => $value) { ?>
                <div class="w-1/2 flex mb-10">
                    <div class="w-1/3">
                        <img src="<?= $value["image"] ?>" 
                             alt=""
                             class="w-full h-60 object-contain" />
                    </div>
                    <div class="flex justify-start w-2/3 pl-3 pr-8">
                        <div class="flex flex-col">
                        <a href="<?php echo 'bookandstories.php?type='.$value['id'] ?>" 
                        class="text-blue-600 text-2xl"><?php echo $value['title'] ?></a>
                        <span class="text-gray-600 mb-1"><?php echo $value['time_created'] ?></span>
                        <p><?php echo substr($value['describe_short'],0,250) . "..." ?></p>
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