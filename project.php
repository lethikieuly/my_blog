<!DOCTYPE html>
<html lang="en">

<?php 
    include_once './head.php';
    include_once 'connect.php';
    $categories = [];
    try {
        $query = "SELECT * FROM categories WHERE type_category = 1 ";
        $stm = $conn->prepare($query);
        $stm->execute();
        $categories = $stm->fetchAll(\PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    $post = null;
    if (isset($_GET["id"])) {
        try {
            $query = "SELECT * FROM posts WHERE id = " . $_GET["id"] ;
            $stm = $conn->prepare($query);  
            $stm->execute();
            $post = $stm->fetchAll(\PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
?>

<body>
    <?php include_once 'header.php' ?>
    <div class="content w-11/12 mx-auto">
        
        <div class="lg:w-2/3 relative top-0 left-0 mx-auto">
            <div class="text-center font-semibold text-4xl my-4">MY PROJECT
            </div>
            <?php if(isset($_GET["id"])) { ?> 
                <a href="project.php" class="absolute top-3 text-xl font-semibold left-0">Trở về</a>
            <?php } ?>
        </div>
            <?php if ($post == null)  {?>
            <div class="w-full flex flex-col lg:flex-row">
                <div class="lg:w-2/3 w-full border-2 border-solid border-pink-200 p-8 bg-pink-100 mr-10" id="content__project">
                    <p class="text-2xl font-semibold my-3">
                        My project
                    </p>
                    <img src="./assets/images/Myproject.jpg"
                        alt=""
                        class="w-2/3 my-5 mx-auto object-cover"
                    />
                    <p class="font-bold my-3 text-xl">
                        1.(2020) Twitter trending EDA - Final project of Web Data Mining Subject.
                    </p>
                    <p class="font-semibold my-3 text-xl">Abstract/Description:</p>

                    <p class="text-xl">
                    This project focus on two main jobs:
                    
                    <p class="text-xl">
                    – Crawled Twitter Trending about Bitcoin via Twitter API, all coding inherited and modified from a Github repo.
                    </p>
                    <p class="text-xl">
                    – Exploratory data analysis (EDA) this crawled data and give  insightful information.
                    </p>
                    </p>

                    <div class="my-3 flex items-center text-xl">
                        <p class="font-bold mr-1 text-xl">Link : </p>
                        <ul class="flex">
                            <li class="p-0.5 text-pink-600 font-bold cursor-pointer underline">
                            <a href= "https://github.com/lethikieuly/Data-mining-/blob/main/Nhom5Deiz.pdf" > Paper, </a>
                            </li>
                            <li class="p-0.5 text-pink-600 font-bold cursor-pointer underline">
                            <a href= "https://github.com/lethikieuly/Data-mining-/blob/main/DoAn.ipynb" > Github </a>
                            </li>
                        
                        </ul>
                    </div>
                    <p class="font-bold my-3 text-xl">
                        2.Design and Implementation of Web front-end
                    </p>
                    <p class="font-semibold my-3 text-xl">Abstract/Description:</p>

                    <p class="text-xl">
                    Technology mechanism analysis of Web front-end, we do the requirement from Business Requirement and Functional Requirement, define all the
                    function modules and draw the use cases and class diagram with UML. After the implementation is done, we test the system on performance and functions
                    and point the weakness founded during testing.
                    Our project achieved an excellent score (9.5/10) in this subject.

                    </p>

                    <div class="my-3 flex items-center text-xl">
                        <p class="font-bold mr-1 text-xl">Link : </p>
                        <ul class="flex">
                            <li class="p-0.5 text-pink-600 font-bold cursor-pointer underline">
                            <a href= "https://drive.google.com/drive/u/0/my-drive" > Paper, </a>
                            </li>
                            <li class="p-0.5 text-pink-600 font-bold cursor-pointer underline">
                            <a href= "https://github.com/Zero-432/Web1" > Github, </a>
                            </li>
                            <li class="p-0.5 text-pink-600 font-bold cursor-pointer underline">
                            <a href= "https://thebigcityshoes.com/" > Access </a>
                            </li>
                        </ul>
                    </div>
                    <p class="font-bold my-3 text-xl">
                 

                    


                    <hr class="mb-2 w-24">
                    <p class="my-1 font-bold">Share this : </p>
                    <ul class="my-1 mb-3 flex flex-wrap">
                        <li class="px-2 py-1.5 bg-pink-200 rounded-lg flex items-center mr-2 mb-2  
                        hover:text-white hover:bg-black cursor-pointer">
                            <i class='bx bxl-github mr-2' ></i>
                            Github
                        </li>
                        <li class="px-2 py-1.5 bg-pink-200 rounded-lg flex items-center mr-2 mb-2  
                        hover:text-white hover:bg-blue-700  cursor-pointer">
                            <i class='bx bxl-facebook-circle mr-2' ></i>
                            Facebook
                        </li>
                        <li class="px-2 py-1.5 bg-pink-200 rounded-lg flex items-center mr-2 mb-2  
                        hover:text-white hover:bg-red-500  cursor-pointer">
                            <i class='bx bxl-youtube mr-2' ></i>
                            Youtube
                        </li>
                        <li class="px-2 py-1.5 bg-pink-200 rounded-lg flex items-center mr-2 mb-2  
                        hover:text-white hover:bg-blue-500  cursor-pointer">
                            <i class='bx bxl-linkedin-square mr-2' ></i>
                            Linkedin
                        </li>
                    </ul>
                    <hr class="w-24 mb-2">
                    <p class="my-1 font-bold">Like this : </p>
                    <div class="pr-2 my-2 rounded-lg items-center flex ">
                        <i class='bx bxs-star mr-2 text-yellow-600 cursor-pointer' ></i>
                        <i class='bx bxs-star mr-2 text-yellow-600 cursor-pointer' ></i>
                        <i class='bx bxs-star mr-2 text-yellow-600 cursor-pointer' ></i>
                        <i class='bx bxs-star mr-2 text-yellow-600 cursor-pointer' ></i>
                        <i class='bx bxs-star-half mr-2 text-yellow-600 cursor-pointer' ></i>
                    </div>
                    <div class="w-full">
                        <div class="">
                            <input type="text" placeholder="Comment..." class="p-2 border-2 border-solid border-pink-200 
                            focus:border-pink-500 rounded-lg" />
                            <button class="p-2 border-2 border-solid border-pink-200 bg-pink-500 text-white 
                            rounded-lg focus:none">
                            <i class='bx bx-send mr-2' ></i>Send
                            </button>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 w-full mt-10 lg:mt-0">
                    <div class="w-full mb-5 border-2 border-solid border-pink-200 relative p-10">
                        <span class="absolute -top-5 left-1/2 transform -translate-x-1/2 px-2 bg-white 
                        text-2xl">
                            CATEGORIES
                        </span>
                        <select onChange="loadInfoCategory(this)"  name="" id="" class="py-1 px-3 border-pink-200 border-solid border-2 
                        relative">
                            <option>Select category</option>
                            <?php foreach ($categories as $key => $value) { ?>
                                <option value="<?php echo $value['id'] ?>">
                                    <?php echo $value['name_category'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="w-full mb-5 border-2 border-solid border-pink-200 relative py-10 px-4">
                        <input type="text" placeholder="Search..." class="w-full p-2.5 border-2 border-solid 
                        border-pink-100 focus:border-pink-300 rounded-lg" />
                    </div>

                    <div class="w-full mb-5 border-2 border-solid border-pink-200 relative p-10">
                        <span class="absolute -top-5 left-1/2 transform -translate-x-1/2 px-2 bg-white 
                        text-2xl">
                        ABOUT ME
                        </span>
                        <img src="https://i0.wp.com/anhnhat.me/wp-content/uploads/2021/09/IMG_8690-scaled-e1632024467500.jpg?resize=768%2C925&ssl=1" 
                        class="w-full object-cover"
                        />
                        <p class="my-2 text-sm">
                            Mình là Anh Nhật, hiện tại đang là sinh viên năm 4 tại Trường Đại học Kinh tế – Luật,
                            ĐHQG. TPHCM. Mình đang làm việc trong lĩnh vực khoa học dữ liệu với vị trí Business 
                            Intelligence Analyst.
                            <br>
                            <br>
                            Blog này là nơi mình chia sẻ về những hành trình của mình, cám ơn tất cả các bạn đã 
                            đến đây và ủng hộ mình.
                        </p>
                    </div>

                </div>
            </div>
            <?php }else { ?>
            <div class="lg:w-2/3 mx-auto w-full border-2 border-solid border-pink-200 p-8 bg-pink-100 mr-10" id="content__project">
                <div class="content__data"> <?php echo  $post ? ($post[0]['content'])  : ""?></div>
            </div>
            <?php } ?>
    </div>
    <?php include_once 'footer.php' ?>
    <!-- index -->
</body>
</html>