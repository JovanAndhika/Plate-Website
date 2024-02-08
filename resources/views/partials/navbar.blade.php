<nav class="navbar navbar-expand-lg d-flex justify-content-around" style="background-color: #7F27FF;">
  <div class="container-fluid px-5">
    <a class="navbar-brand" href="#">Plate</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>

  <div class="collapse navbar-collapse navbar-buttons" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link btn active" aria-current="page" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link btn" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link btn" href="#">Template</a>
      </li>
    </ul>
  </div>
</nav>

<style>
  .navbar-buttons {
    display: flex;
    background-color: #9F70FD;
    padding-right: 20px;
    /* width: 100%; */
  }

  .active {
    border: 0;
  }

  .nav-item {
    padding: 0 20px;
  }

  .nav-item:hover {
    background-color: #FDBF60;
    border-radius: 5px;
  }

  .slide-down {
    transform: translateY(-3px);
  }
</style>


<script>
  let toogler = document.querySelector('.navbar-toggler');
  document.addEventListener('click', function() {
    toogler.classList.toggle("slide-down");
  })
</script>