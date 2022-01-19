<!DOCTYPE html>
<html lang="en">

<head>

  <?php include './components/header.php'; ?>
  <title>Freedom Tools</title>


</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
    <div class="jumper">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- Header -->
  <header class="">
  <?php include './components/nav.php'; ?>
  </header>

  <!-- Page Content -->
  <!-- Banner Starts Here -->
  <div class="banner header-text">
    <div class="owl-banner owl-carousel">
      <div class="banner-item-01">
        <div class="text-content">
          <h3>Suppliers of Hand Tools, Power Tools & Personal Protective Equipments(PPE)</h3>
        </div>
      </div>
      <div class="banner-item-02">
        <div class="text-content">
          <h2>Get your best products from us</h2>
        </div>
      </div>
      <div class="banner-item-03">
        <div class="text-content">
          <h2>freedom tools is your best plug</h2>
        </div>
      </div>
    </div>
  </div>
  <!-- Banner Ends Here -->

  <div class="latest-products">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Latest Products</h2>
            <a href="products.php">view all products <i class="fa fa-angle-right"></i></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="product-item">
            <a href="#"><img src="assets/images/product_01.jpg" alt=""></a>
            <div class="down-content">
              <a href="#">
                <h4>Tittle goes here</h4>
              </a>
              <h6></h6>
              <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="product-item">
            <a href="#"><img src="assets/images/product_02.jpg" alt=""></a>
            <div class="down-content">
              <a href="#">
                <h4>Tittle goes here</h4>
              </a>
              <h6></h6>
              <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
             
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="product-item">
            <a href="#"><img src="assets/images/product_03.jpg" alt=""></a>
            <div class="down-content">
              <a href="#">
                <h4>Tittle goes here</h4>
              </a>
              <h6></h6>
              <p>Freedom ToolsCo.</p>
              
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="product-item">
            <a href="#"><img src="assets/images/product_04.jpg" alt=""></a>
            <div class="down-content">
              <a href="#">
                <h4>Tittle goes here</h4>
              </a>
              <h6></h6>
              <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
              
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="product-item">
            <a href="#"><img src="assets/images/product_05.jpg" alt=""></a>
            <div class="down-content">
              <a href="#">
                <h4>Tittle goes here</h4>
              </a>
              <h6></h6>
              <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
              
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="product-item">
            <a href="#"><img src="assets/images/product_06.jpg" alt=""></a>
            <div class="down-content">
              <a href="#">
                <h4>Tittle goes here</h4>
              </a>
              <h6></h6>
              <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="best-features">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>About Freedom Tools LTD.</h2>
          </div>
        </div>
        <div class="col-md-6">
          <div class="left-content">
            <h4>About Our Products & Services</h4>
            <p>At FREEDOM TOOLS LIMITED, we've always been about innovation, quality and integrity - and today we're proud to continue that tradition. Today - as ever -FREEDOM TOOLS LIMITED delivers Quality, comfort, performance and a smart, consistent appearance for any organisation. And that's excellent news for your business!</p>
            <ul class="featured-list">
              <li>Safety Footwear</li>
              <li>High Visibility Products</li>
              <li>Personal Protective Equipment</li>
              <li>Hand Tools and Power tools</li>
              <li>Printing & Embroidery Services</li>
            </ul>
            <a href="about.php" class="filled-button">Read More</a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="right-image">
            <img src="assets/images/feature-image.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>


  <footer id="footer" class="footer-area wow fadeIn">
    <?php include './components/footer.php'; ?>
  </footer>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  <!-- Additional Scripts -->
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/owl.js"></script>
  <script src="assets/js/slick.js"></script>
  <script src="assets/js/isotope.js"></script>
  <script src="assets/js/accordions.js"></script>


  <script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) { //declaring the array outside of the
      if (!cleared[t.id]) { // function makes it static and global
        cleared[t.id] = 1; // you could use true and false, but that's more typing
        t.value = ''; // with more chance of typos
        t.style.color = '#fff';
      }
    }
  </script>


</body>

</html>