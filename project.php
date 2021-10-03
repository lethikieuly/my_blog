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
?>

<body>
    <?php include_once 'header.php' ?>
    <div class="content w-11/12 mx-auto">
        <p class="text-center font-semibold text-4xl my-4">MY PROJECT</p>
        <div class="w-full flex flex-col lg:flex-row">
            <div class="lg:w-2/3 w-full border-2 border-solid border-pink-200 p-8 bg-pink-100 mr-10">
                <p class="text-2xl font-semibold my-3">
                    Data Analyst
                </p>
                <img src="https://i0.wp.com/anhnhat.me/wp-content/uploads/2021/07/My-Project.png?fit=600%2C500&ssl=1" 
                     alt=""
                     class="w-2/3 my-5 mx-auto object-cover"
                />
                <p class="font-bold my-3 text-xl">
                    1.(2019) A proposed method for opinion mining online media of smartphone with Vietnamese text
                </p>
                <p class="font-semibold my-3 text-xl">Abstract/Description:</p>

                <p class="text-xl">
                    The rapid growth of the Internet has increased the number of people who accessed on Internet, 
                    customers can quickly search for information about products. Besides, businesses can clearly 
                    promote their products to users with low cost by many methods, but the most typical one is 
                    online newspapers and reviews. This study classify entire news (with user’s comments) in 
                    smartphone field. To accomplish that, four machine learning models are considered (LSTM, 
                    BiLSTM, SVM, and BERT). One of them is based on BERT that is a modern Deep Learning model 
                    for Natural Language Processing tasks created by Google recently that has achieved state-of-the-art 
                    results.
                </p>

                <div class="my-3 flex items-center text-xl">
                    <p class="font-bold mr-1 text-xl">Link : </p>
                    <ul class="flex">
                        <li class="p-0.5 text-pink-600 font-bold cursor-pointer underline">Paper,</li>
                        <li class="p-0.5 text-pink-600 font-bold cursor-pointer underline">Github,</li>
                        <li class="p-0.5 text-pink-600 font-bold cursor-pointer underline">Youtube</li>
                    </ul>
                </div>

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
                    <select name="" id="" class="py-1 px-3 border-pink-200 border-solid border-2 
                    relative">
                        <option value="">Select category</option>
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
    </div>
    <?php include_once 'footer.php' ?>
    <!-- index -->
</body>
</html>