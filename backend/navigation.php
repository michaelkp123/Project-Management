<?php
function displayNav($pageTitle)
{

  // Display navn bar
  echo '
  <nav
  id="sidebarMenu"
  class="collapse d-lg-block sidebar collapse"
  >
    <!-- Sidebar -->
<div class="position-sticky">
 <div class="list-group list-group-flush mx-3 mt-4">
   <a
      href="#"
      class="list-group-item list-group-item-action ripple"
      aria-current="true"
      >
     <i class="fa-solid fa-list-check me-3"></i
       ><span>Projects</span>
   </a>
   <a
      href="#"
      class="list-group-item list-group-item-action ripple"
      ><i class="fa-solid fa-check me-3"></i
     ><span>My work</span></a
     >
     <a
      href="#"
      class="list-group-item list-group-item-action ripple"
      ><i class="fa-solid fa-calendar-days me-3"></i
     ><span>Calender</span></a
     >
 </div>
</div>
</nav>
<!-- Sidebar -->

<!-- Navbar -->
<nav
  id="main-navbar"
  class="navbar navbar-expand-lg navbar-light bg-white fixed-top"
  >
<!-- Container wrapper -->
<div class="container-fluid">
 <!-- Toggle button -->
 <button
         class="navbar-toggler"
         type="button"
         data-mdb-toggle="collapse"
         data-mdb-target="#sidebarMenu"
         aria-controls="sidebarMenu"
         aria-expanded="false"
         aria-label="Toggle navigation"
         >
   <i class="fas fa-bars"></i>
 </button>

 <!-- Brand -->
 <a class="navbar-brand" href="../index.php">
   <img
        src="./img/Logo med tekst.png"
        height="30"
        alt=""
        loading="lazy"
        />
 </a>
 <h1 style="margin-left: 9rem;">' . $pageTitle . '</h1>

 <!-- Right links -->
 <ul class="navbar-nav ms-auto d-flex flex-row">
   <!-- Notification dropdown -->
   <li class="nav-item dropdown">
     <a
        class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow"
        href="#"
        id="navbarDropdownMenuLink"
        role="button"
        data-mdb-toggle="dropdown"
        aria-expanded="false"
        >
       <i class="fas fa-bell"></i>
       <span class="badge rounded-pill badge-notification bg-danger"
             ></span
         >
     </a>
   </li>


   <!-- Avatar -->
   <li class="nav-item dropdown">
     <a
        class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center"
        href="#"
        id="navbarDropdownMenuLink"
        role="button"
        data-mdb-toggle="dropdown"
        aria-expanded="false"
        >
       <img
            src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg"
            class="rounded-circle"
            height="22"
            alt=""
            loading="lazy"
            />
     </a>
     <ul
         class="dropdown-menu dropdown-menu-end"
         aria-labelledby="navbarDropdownMenuLink"
         >
       <li><a class="dropdown-item" href="#">My profile</a></li>
       <li><a class="dropdown-item" href="#">Settings</a></li>
       <li><a href="logout.php" class="btn btn-warning">Logout</a></li>
     </ul>
   </li>
 </ul>
</div>
<!-- Container wrapper -->
</nav>';
}

$pageTitle = "";
displayNav($pageTitle);