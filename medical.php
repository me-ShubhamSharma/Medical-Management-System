<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="medical.css" />
  <link href="doctor/connection.php">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide" />
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="navdiv">
    <nav class="navbar">
      <div class="logo">
        <span>
          <h1><a class="logoa" href="#">MED</a></h1>
        </span>
      </div>
      <div class="links">
        <ul class="ullists">
          <li id="doctid" class="linklist">
            <a class="link1" href="#">Doctors</a>
          </li>
          <li id="pharid" class="linklist">
            <a class="link1" href="#">Pharmacy</a>
          </li>
          <li id="signid" class="linklist">
            <a id="dropalink" class="link1" href="#">Sign up</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  <!-- <div class="doctablediv">
        <p>
          lorem1000
        </p>
      </div> -->
  <div>
    <div class="hideondoc">
      <div class="bodyhead">
        <h1 class="title">Search, Get Appointments and Medicines now</h1>
        <input class="search" placeholder="Search" />
        <div class="listall">
          <button class="list11">Doctors</button>
          <button class="list11">Pharmacies</button>
        </div>
      </div>
      <div class="about">
        <h2>About</h2>
      </div>

      <div class="imagediv">
        <div class="subimagediv">
          <image class="images" src="Photos/1625075977_doctors-day-history-new.webp"></image>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima
            nesciunt optio et in labore non rerum voluptatum praesentium
            voluptas molestiae.
          </p>
        </div>

        <div class="subimagediv">
          <image class="images" src="Photos/file-20191203-66986-im7o5.jpg"></image>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima
            nesciunt optio et in labore non rerum voluptatum praesentium
            voluptas molestiae.
          </p>
        </div>

        <div class="subimagediv">
          <image class="images" src="Photos/images (1).jfif"></image>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima
            nesciunt optio et in labore non rerum voluptatum praesentium
            voluptas molestiae.
          </p>
        </div>

        <div class="subimagediv">
          <image class="images" src="Photos/images.jfif"></image>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima
            nesciunt optio et in labore non rerum voluptatum praesentium
            voluptas molestiae.
          </p>
        </div>

        <div class="subimagediv">
          <image class="images" src="Photos/group-of-doctors-card.jpg"></image>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima
            nesciunt optio et in labore non rerum voluptatum praesentium
            voluptas molestiae.
          </p>
        </div>

        <div class="subimagediv">
          <image class="images" src="Photos/images (2).jfif"></image>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima
            nesciunt optio et in labore non rerum voluptatum praesentium
            voluptas molestiae.
          </p>
        </div>

        <div class="subimagediv">
          <image class="images" src="Photos/group-of-doctors-card.jpg"></image>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima
            nesciunt optio et in labore non rerum voluptatum praesentium
            voluptas molestiae.
          </p>
        </div>
      </div>
      <div class="whatwedo">
        <h2 class="whathead">What we do</h2>
      </div>
      <div class="whatwedo2">
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime
          illo, nisi hic voluptatum commodi asperiores accusantium. Laudantium
          quis assumenda sit repudiandae rerum praesentium magni ullam dolores
          sequi numquam expedita optio earum, officia at ipsa quam debitis
          voluptate. Ipsum minima, similique unde, minus a tempora ullam
          commodi reiciendis optio ad numquam aliquid culpa sequi. Suscipit
          doloribus culpa numquam in voluptatum non. Ex nisi reiciendis quas
          eius commodi eligendi aspernatur atque molestias blanditiis
          doloremque reprehenderit architecto quisquam tempore dolore qui
          distinctio accusamus aliquam repellat, earum officiis quod officia
          vero. Aliquam fuga dolore, quibusdam facere nesciunt fugiat, ea
          temporibus dicta est animi architecto.
        </p>
      </div>
    </div>
    <div class="contact">
      <h2>Contact us</h2>
    </div>
    <div class="linkcontact">
      <a href="https://www.facebook.com" class="fa fa-facebook"></a>
      <a href="https://www.twitter.com" class="fa fa-twitter"></a>
      <a href="https://www.instagram.com" class="fa fa-instagram"></a>
      <a href="https://www.linkedin.com" class="fa fa-linkedin"></a>
      <a href="https://www.whatsapp.com" class="fa fa-whatsapp"></a>
    </div>
    <div class="empty"></div>
  </div>

  <div class="scriptdiv"></div>
</body>

</html>

<?php include './doctor/connection.php' ?>