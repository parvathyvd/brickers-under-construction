<?php include('includes/header.php'); ?>
<section class="main-content">
  <div class="container-fluid search-block">
      <div class="row d-block make-model-new">
          <div class="col-sm-12 d-flex justify-content-center">
            <img src="img/brikers-ribbon2.png" class="img-fluid" alt="ribbon"/>
          <input type="text" class="form-control placeholder" id="inlineFormInput" placeholder="Part #" />
              <select class="custom-select make" id="inlineFormCustomSelect">
                <option selected>make</option>
                <option value="1">Cab</option>
                <option value="2">Deere</option>
              </select>
              <button type="submit" class="btn btn-outline-warning">Submit</button>
              <img src="img/brikers-ribbon-flip2.png" class="img-fluid" alt="ribbon"/>
            </div>
          </div>
      </div>

    <div class="container-fluid">
      <div class="row slider-bg">
        <div class="col-md-12 no-gutter">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-flex mx-auto img-fluid" src="img/header2.jpg" alt="First slide">
                <div class="carousel-caption d-md-block shade-bg">
                   <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, suscipit!</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error velit voluptate ullam, explicabo harum sed labore.</p>
                 </div>
              </div>
              <div class="carousel-item">
                <img class="d-flex mx-auto img-fluid slider-bg" src="img/header1.jpg" alt="First slide">
                <div class="carousel-caption d-md-block shade-bg">
                   <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, suscipit!</h3>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error velit voluptate ullam, explicabo harum sed labore.</p>
                 </div>
              </div>
              <div class="carousel-item">
                <img class="d-flex mx-auto img-fluid slider-bg" src="img/header3.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block shade-bg">
                   <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, suscipit!</h3>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error velit voluptate ullam, explicabo harum sed labore.</p>
                 </div>
              </div>
              <div class="carousel-item">
                <img class="d-flex mx-auto img-fluid slider-bg" src="img/header4.jpg" alt="First slide">
                <div class="carousel-caption d-md-block shade-bg">
                   <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, suscipit!</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error velit voluptate ullam, explicabo harum sed labore.</p>
                 </div>
              </div>
              <div class="carousel-item">
                <img class="d-flex mx-auto img-fluid slider-bg" src="img/header5.jpg" alt="First slide">
                <div class="carousel-caption d-md-block shade-bg">
                   <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, suscipit!</h3>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error velit voluptate ullam, explicabo harum sed labore.</p>
                 </div>
              </div>
              <div class="carousel-item">
                <img class="d-flex mx-auto img-fluid slider-bg" src="img/header6.jpg" alt="First slide">
                <div class="carousel-caption d-md-block shade-bg">
                   <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, suscipit!</h3>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error velit voluptate ullam, explicabo harum sed labore.</p>
                 </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
            </div>
        </div>
      </div>
    </div>
</section>
<?php include('includes/components.php'); ?>

<?php include('includes/home-about.php'); ?>

<?php include('includes/testimonials.php'); ?>

<?php include('includes/small-owl-slider.php'); ?>
<?php include('includes/footer.php'); ?>
