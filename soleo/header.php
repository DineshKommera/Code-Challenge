<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head();?>
<body>
   

<header>
  <!--Navbar -->
  <nav class="navbar navbar-expand-xl navbar-light" style="background-color:#fffefe;">
    <!--Navbar Links-->
    <div class="d-flex-sm justify-content-center container-fluid p-0" style="margin: 0px 80px;">
      <a href="#" class="navbar-brand d-sm-flex align-items-center"><img src="<?php echo get_theme_file_uri("images/soleo-logo- 2.svg")?>" alt=""></a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
        <span class="navbar-toggler-icon"></span>
      </button>

      
      <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="#" class="nav-link active">
              Solutions
              <span><button style="border: 0;background-color: transparent;"><img src="<?php echo get_theme_file_uri("images/arrow.svg")?>" alt="" ></button></span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link active">About</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link active">Contact</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link active">Resources</a>
          </li>
        </ul>
        <div class="ms-auto">
          <form class="d-flex">
            <button class="search-btn" type="button"><img src="<?php echo get_theme_file_uri("images/search.svg")?>" alt=""></button>
            <p class="m-3">(833) 389-5800</p>
            <button class="btn btn-primary border-0" role="button" style="background-color: #ef6b36;">Let's Talk</button>
            </form>
        </div>
      </div>

    </div>
</nav>
</header>

<script src="js/bootstrap.js"></script>

</body>
</html>