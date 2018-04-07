<!DOCTYPE html>
<html lang="en">
<!-- Head -->

<head>
    <title>Node.js Africa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/app.css">
</head>

<body>
  <div class="container-fluid remove">
    <!-- First Section -->
    <section>
      <div class="row remove">
        <div class="col-md  first-section remove">
          <!-- Navbar -->
          <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
              <a class="navbar-brand" href="#"><img src="assets/images/nodejs-new-pantone-white.png">
                <span class="africa">Africa</span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Downloads</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">News</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Get Involved</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link btn btn-sm btn-node-school" type="button" href="#">NODESCHOOL</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>

            <!-- First-section-body -->
            <div class="first-section-body col-md-12">
              <div class="row">
                <div class="col-md-6 first-section-body-1">
                  <div class="col-md-12 h1 div-1-1">
                    Welcome to Node.js Community in Africa.
                  </div>
                  <div class="col-md-9 b1 div-1-2">
                    Enabling widespread adoption and help accelerate development of Node.js and other related modules.
                  </div>
                  <div class="col-md-4"></div>
                  <div class="col-md-12">
                    <button class="btn btn-join-now node-btn">JOIN NOW</button>
                    <button class="btn btn-attend-events node-btn">ATTEND EVENTS</button>
                  </div>
                </div>
                <div class="col-md-6 first-section-body-2">
                  <img src="assets/images/cartoons/1.png" class="first-section-img" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Second Section -->
      <section id="about-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6 second-section-body-2">
              <img src="assets/images/cartoons/2.png" class="second-section-img" />
            </div>
            <div class="col-md-6 second-section-body-1">
              <div class="col-md-11 h2 div-2-1">
                Established to expand the growth of Node.js in Africa.
              </div>
              <div class="col-md-11 b2 div-1-2">
                We accomplish our mission through an open governance model that encourages
                participation and technical contribution, and by providing a framework for
                long term stewardship by an ecosystem invested in Node.js’ success.
              </div>
              <div class="col-md-4"></div>
              <div class="col-md-12">
                <button class="btn btn-see-activity node-btn">SEE OUR ACTIVITIES</button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- News Section -->
      <section id="news-section">
        <div class="third-section-overlay">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="col-md-12 h2 div-3-1">
                Latest Node.js Foundation News
              </div>
              <div class="row">
                <?php include ("layouts/feeds.php")?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Empty Space -->
    <section>
      <div class="row remove fourth-section">
      </div>
    </section>

    <!-- fifth Section -->
    <section>
      <div class="row remove fifth-section" align="center">
        <div class="col-md-12 h2 div-2-1">
          Join us on all our channels
        </div>
        <div class="col-md-12 channel-icons">
          <a href="#"><i class="fa fa-facebook-square"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-medium"></i></a>
          <a href="https://github.com/nodejsafrica" target="_blank"><i class="fa fa-github-alt"></i></a>
        </div>
        <div class="col-md-12">
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-6 form-div">
          <form align="center">
            <div class="form-row">
              <div class="col-md-6 form-inner">
                <input type="text" class="form-control contact" placeholder="First name">
              </div>
                    <div class="col-md-6 form-inner">
                        <input type="text" class="form-control contact" placeholder="Last name">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 form-inner">
                        <input type="text" class="form-control contact" placeholder="Phone Number">
                    </div>
                    <div class="col-md-6 form-inner">
                        <input type="text" class="form-control contact" placeholder="Organisation">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-12" align="center">
            <button class="btn btn-see-activity node-btn">JOIN OUR ACTIVITIES</button>
        </div>
    </div>
</section>

<!-- Footer -->
<section>
    <div class="row remove">
        <div class="col footer">
            © Node.js Africa 2018
        </div>
    </div>
</section>

    </div>
</body>
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

</html>
