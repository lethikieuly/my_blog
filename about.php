<!DOCTYPE html>
<html lang="en">
<?php include_once 'head.php' ?>
<body>
    <?php include_once 'header.php' ?>
    <section class="w3l-breadcrumb py-5">
    <div class="container">
      <h6 class="sub-title">About me</h5>
        <div class="header-section">
          <h3>Kieu Ly</h3>
          <p>My name is Kieu Ly, and I am currently a senior at the University of Economics and Law -Vietnam National
            University, major E-commerce.
            I love making things work... better! I love reading books, drawing comics, creating things in many colors
          </p>
        </div>
    </div>
  </section>
  <!-- about -->
  <div class="about py-5">
    <div class="container py-lg-3">
      <div class="flex">
        <div class="w-2/3">
          <p class="mb-4 mt-0 about-title"><b>My dream journey</b> Each step will bring me more experiences and improve
            myself.</p>
          <p class="mb-4">I was born and raised with nature, the environment here is not fully equipped with facilities,
            but it is a place to create a strong and trying person.</p>
          <p class="mb-4">The journey I took to step into the university door. Currently, I am a 3rd year student of
            University of Economics and Law (UEL for short), I am very proud that I am UELer - this place has given me
            dynamism, competition, and great teachers. great.</p>
          <p class="mb-4">Lorem Ipsum is simply dummy text of the Ipsum has been the industry's since the 1500s, when an
            unknown printer took a galley
            of type and scrambled it to make a type specimen book.</p>
        </div>
        <div class="w-1/3 flex justify-center">
          <img src="./assets/images/ly.PNG" alt="" class="img-fluid w-80 h-80 
          rounded-full object-cover" />
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-12 publication-about-grid">
          <p class="mb-4">It is a long established fact that a reader will be distracted by the readable content of a
            page when looking at its layout.
            The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
            using 'Content here, content
            here', making it look like readable English.</p>

          <p class="mb-4">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain
            was born and I will give you a
            complete account of the system, and expound the actual teachings of the great explorer of the truth, the
            master-builder of human happiness.
          </p>

          <p class="mb-5">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled
            and demoralized by the charms of
            pleasure of the moment, so blinded by desir.</p>

          <div class="my-4 header-about">
            <h3 class="mb-3 about-head-title">Writing is all our life:</h3>
          </div>
          <p class="mb-4">"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
            voluptatum deleniti atque corrupti quos
            dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
            officia deserunt mollitia animi, id
            est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore,
            cum soluta nobis est eligendi
            optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est,
            omnis dolor repellendus.
            Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates
            repudiandae sint et molestiae non
            recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias
            consequatur aut perferendis
            doloribus asperiores repellat." </p>

          <p class="mb-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
            laudantium, totam rem aperiam, eaque
            ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>

          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
            in some form, by injected humour,
            or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem
            Ipsum, you need to be sure there
            isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet
            tend to repeat predefined chunks as
            necessary, making this the first true generator on the Internet.</p>

          <div class="about-page-content mt-4 pt-lg-3">
            <h3 class="about-head-title m-0 mb-4">Developing first class solutions for our clients.</h3>
            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime vel nam tenetur sequi
              assumenda fuga
              sit non praesentium aut voluptatibus rem repellendus amet fugit, ab eligendi ratione, placeat quo
              ducimus at? Et suscipit earum reiciendis perferendis, dignissimos, labore quos voluptatibus voluptas
              ipsam placeat voluptates laborum maxime asperiores natus tempore incidunt. </p>
            <div class="text-list">
              <ol>
                <li>Quisque sagittis lacus eu lorem sodalesd enean adipiscing.</li>
                <li>Sed ut perspiciatis unde omnis natus</li>
                <li>Get started with Online Education!</li>
                <li>It’s limited seating! Hurry up. Get the Coaching Training for Free</li>
                <li>Nam libero tempore, cum soluta nobis est eligendi optio </li>
                <li>Onec Consequat sapien ut cursus rhoncus</li>
              </ol>
            </div>
          </div>
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