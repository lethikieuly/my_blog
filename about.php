<!DOCTYPE html>
<html lang="en">
<?php include_once 'head.php' ?>
<body>
    <?php include_once 'header.php' ?>
    <section class="w3l-breadcrumb py-5">
    <div class="container">
        <div class="header-section w-2/3 text-justify mx-auto">
        <h6 class="sub-title">About me</h5>
          <h3>Kiều Ly</h3>
          <p>Mình là Kiều Ly, hiện tại mình đang là sinh viên năm 4 trước đại học Kinh tế - Luật, TPĐHQG HCM, Chuyên ngành: Thương Mại điện tử
            Mình yêu cái đẹp và muốn làm mọi thứ tốt hơn. Trong thời gian rảnh mình sẽ đọc sách và viết lách. Mình có niềm yêu thích với toán học và phân tích vấn đề. Hiện tại mình đang 
            chăm chỉ và trao dồi kiến thức để trở thành một Data Analysis- một trong số các mục tiêu đề ra.
          </p>
        </div>
    </div>
  </section>
  <!-- about -->
  <div class="about py-5">
    <div class="container w-2/3 mx-auto py-lg-3">
      <div class="flex">
        <div class="w-2/3 text-justify pr-4">
          <h2 class="mb-4 mt-0 about-title"><b>Tôi đang làm gì?</b> </h2>
          <p class="mb-4">1. Tôi đang là sinh viên năm 4 trường đại học Kinh tế Luật, chuyên ngành Thương mại điện tử, dự kiến tốt nghiệp năm 2022</p>
          <p class="mb-4"></p>
          <p class="mb-4">2. Trong dịch covid 19, ngoài việc học trên trường, tôi xây dựng kế hoạch theo giỏi bản thân, tập trung cải thiện kiến thức
            chuyên nghành và chuẩn bị cho đợt thực tập sắp tới </p>
          <p class="mb-4"></p>
          <p class="mb-4">3. Tôi viết bản tin email vào những thời gian rảnh, chia sẻ một cuốn sách hay một chủ đề mà tôi yêu thích. Tôi cũng hay xem tin 
            tức mạng xã hội để tìm các nguồn tài liệu hay để tham khảo. </p>
          <p class="mb-4"></p>
          <p class="mb-4">4. Trên website này, tôi viết lách về cuộc sống, chia sẽ những kỷ niệm của bản thân và hành trình tôi đi bắt đầu từ đại học. 
            Đồng thời hướng dẫn những kiến thức, ứng dụng hoặc công nghệ mà tôi yêu thích và cảm thấy hữu ích trong nhiều năm. </p>
          <p class="mb-4"></p>
          <h2 class="mb-4 mt-0 about-title"><b>Những thứ khác về bản thân tôi</b> </h2>
          <p class="mb-4">Tôi thích toán học, hầu hết các điểm môn lý thuyết sác xuất, ma trận điểm đều A. Tôi thấy nó rất hữu ích, sau này tôi càng học thêm 
            về phân tích dữ liệu, mọi quyết định được đưa ra đều có tính logic và thông qua toán học, nó nắm một vai trò quan trọng trong giải quyết bài toán, và không 
            dựa trên tính chủ quan của người phân tích.
            Ngoài ra, Tôi thích đọc sách, nó giúp tôi tập trung và cân bằng cảm xúc. Lúc ở quê, gia đình tôi không khá giả nên việc mua sách
            còn hạn chế, sau khi lên đại học tôi có thể trao đổi sách với bạn bè, mược thư viện, và biến thêm nhiều nguồn sách đọc online trên mạng. Thông qua những cuốn sách
            bé nhỏ chứa đậm mùi thơm của giấy, tôi đã khám phá được nhiều thứ bên ngoài, hoặc những điều mà mình chưa từng nghe tới.
            Hát hay nhảy không phải sở trường của tôi, bù lại tôi lại biết vẽ và cũng yêu thích nó nhiều, tôi luôn có niềm tin rằng mỗi bức tranh đều có hồn và thể hiện được tâm trạng của người vẽ.
            Khi đặt bút lên tấm giấy, ta tậm trung và đưa cảm xúc vào những nét vẽ. Tôi nghĩ đó là một điều tuyệt vời</p>
        </div>
        <div class="   flex justify-center">
          <img src="./assets/images/ly.PNG" alt="" class="img-fluid w-80 h-80 
          rounded-full object-cover" />
        </div>
      </div>
  
    </div>
  </div>
  <!-- subscribe form -->
  <!-- //subscribe form -->
  <!-- footer-66 -->

  <!--//footer-66 -->

  <!-- jQuery JS -->
  <!-- <script src="assets/js/jquery-3.4.1.slim.min.js"></script> -->
  <script src="assets/js/jquery-1.9.1.min.js"></script>


  <script src="assets/js/theme-change.js"></script>

  <!-- responsive tabs -->
  <script src="assets/js/easyResponsiveTabs.js"></script>

  <!--Plug-in Initialisation-->
  <script type="text/javascript">
    $(document).ready(function () {
      //Horizontal Tab
      $('#parentHorizontalTab').easyResponsiveTabs({
        type: 'default', //Types: default, vertical, accordion
        width: 'auto', //auto or any width like 600px
        fit: true, // 100% fit in a container
        tabidentify: 'hor_1', // The tab groups identifier
        activate: function (event) { // Callback function if tab is switched
          var $tab = $(this);
          var $info = $('#nested-tabInfo');
          var $name = $('span', $info);
          $name.text($tab.text());
          $info.show();
        }
      });
    });
  </script>
  <!-- Template JavaScript -->
  <script src="assets/js/owl.carousel.js"></script>
  <!-- script for banner slider-->
  <script>
    $(document).ready(function () {
      $('.owl-one').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          480: {
            items: 1,
            nav: false
          },
          667: {
            items: 1,
            nav: true
          },
          1000: {
            items: 1,
            nav: true
          }
        }
      })
    })
  </script>
  <!-- //script -->

  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->


  <!-- Bootstrap JS -->
  <script src="assets/js/bootstrap.min.js"></script>
    <?php include_once 'footer.php' ?>

</body>
</html>