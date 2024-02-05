<nav>
  <div class="logo">
    <h4>Plate</h4>
  </div>
  <ul>
    <li><button><a href="">Home</a></button></li>
    <li><button><a href="">About</a></button></li>
    <li><button><a href="">Template</a></button></li>
    <li><button><a href="">About Me</a></button></li>
  </ul>

  <div class="menu-toogle">
    <input type="checkbox">
    <span></span>
    <span></span>
    <span></span>
  </div>
</nav>

<style>
  * {
    margin: 0;
    padding: 0;
  }

  body {
    font-family: sans-serif;
    overflow-x: hidden;
  }

  /* navbar */
  nav {
    padding-top: 10px;
    display: flex;
    background-color: darkorchid;
    justify-content: space-around;
    color: whitesmoke;
    height: 45px;
    align-items: center;
  }

  nav .logo {
    letter-spacing: 3px;
  }

  nav ul {
    display: flex;
    list-style: none;
    width: 40%;
    justify-content: space-between;
  }

  nav ul li a {
    color: whitesmoke;
    text-decoration: none;
    font-size: 0.8em;
  }

  nav ul li a:hover {
    color: white;
  }

  nav ul li button {
    top: 2px 0;
    height: 45px;
    border-radius: 5px;
    background-color: darkorchid;
    border-style: none;
  }

  nav ul li button:hover {
    background-color: plum;
  }

  
  /* Hamburger Toogler */
  .menu-toogle {
    display: none;
    flex-direction: column;
    height: 20px;
    justify-content: space-between;
    position: relative;
  }

  .menu-toogle input {
    position: absolute;
    width: 40px;
    height: 30px;
    left: -6px;
    top: -3px;
    opacity: 0;
    cursor: pointer;
    z-index: 2;
  }

  .menu-toogle span {
    display: block;
    width: 28px;
    height: 3px;
    background-color: plum;
    border-radius: 3px;
    transition: all 0.4s;
  }


  /* Hamburger animation */
  .menu-toogle span:nth-child(2) {
    transform-origin: 0 0;
  }

  .menu-toogle span:last-child {
    transform-origin: 0 100%;
  }

  .menu-toogle input:checked~span:nth-child(2) {
    background-color: white;
    transform: rotate(45deg) translate(-1px, -1px);
  }

  .menu-toogle input:checked~span:nth-child(3) {
    opacity: 0;
    transform: scale(0);
  }

  .menu-toogle input:checked~span:last-child {
    background-color: white;
    transform: rotate(-45deg) translate(-1px, 0);
  }


  /* Responsive Breakpoint */
  /* Ukuran tablet */
  @media screen and (max-width: 760px) {
    nav ul {
      width: 50%;
    }
  }

  /* Ukuran mobile */
  @media screen and (max-width: 576px) {
    nav {
      padding-top: 4px;
    }

    .menu-toogle {
      display: flex;
    }

    nav ul {
      position: absolute;
      right: 0;
      top: 0;
      flex-direction: column;
      width: 40vh;
      height: 65vh;
      align-items: center;
      justify-content: space-evenly;
      z-index: -1;
      background-color: darkorchid;
      transform: translateX(100%);
      transition: all 0.5s;
    }

    nav ul.slide{
      transform: translateX(0);
    }
  }
</style>

<script>
  const menuToogle = document.querySelector('.menu-toogle input');
  const nav = document.querySelector('nav ul');

  menuToogle.addEventListener('click', function(){
    nav.classList.toggle('slide');
  });
</script>