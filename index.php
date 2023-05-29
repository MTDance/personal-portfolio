<?php

$conn = mysqli_connect('localhost','root','','personal portfolio') or die('La connexion a échoué');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'Le message est déja envoyé!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'Le message est envoyé avec succès!';
   }

}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Complete Responsive Personal Portfolio Website Design</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<!-- header section starts  -->

<header class="header">

   <div id="menu-btn" class="fas fa-bars"></div>

   <a href="#home" class="logo">Portfolio</a>

   <nav class="navbar">
      <a href="#home">Accueil</a>
      <a href="#about">A propos</a>
      <a href="#services">services</a>
      <a href="#portfolio">portfolio</a>
      <a href="#contact">contact</a>
   </nav>

   <div class="follow">
      <a href="https://www.facebook.com/minhtuan.tran.50/" class="fab fa-facebook-f" target="_blank"></a>
      <a href="https://www.instagram.com/minh_tuan_tls/" class="fab fa-instagram" target="_blank"></a>
      <a href="https://www.linkedin.com/in/minh-tuan-t-658a78b9/" class="fab fa-linkedin" target="_blank"></a>
      <a href="https://github.com/MTDance" class="fab fa-github" target="_blank"></a>
   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="image" data-aos="fade-right">
      <img src="images/user-img.jpg" alt="">
   </div>

   <div class="content">
      <h3 data-aos="fade-up">Hello world, je suis Minh-Tuan</h3>
      <span data-aos="fade-up">Développeur web front et back end</span>
      <p data-aos="fade-up">En reconversion professionnelle je suis formé chez web force 3 à Toulouse</p>
      <a data-aos="fade-up" href="#about" class="btn">Mon parcours</a>
   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>biographie</span> </h1>

   <div class="biography">

      <p data-aos="fade-up">La majeur partie de ma carrière professionnelle est axé sur le métier de la grande distribution</p>

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>nom et prénom : </span> Tran Minh-Tuan</h3>
         <h3 data-aos="zoom-in"> <span>email : </span> minhtuan46@hotmail.fr </h3>
         <h3 data-aos="zoom-in"> <span>addresse : </span> 11 rue des maquisards</h3>
         <h3 data-aos="zoom-in"> <span>téléphone : </span>06 69 71 26 20</h3>
         <h3 data-aos="zoom-in"> <span>age : </span> 35 ans </h3>
         <h3 data-aos="zoom-in"> <span>experience : </span> 2 ans</h3>
      </div>

      <a href="#" class="btn" data-aos="fade-up">download CV</a>

   </div>
   
   <div class="skills" data-aos="fade-up">

      <h1 class="heading"> <span>langage et framwork</span> </h1>

      <div class="progress">
         <div class="bar" data-aos="fade-left"> <h3><span>HTML</span> <span>90%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>CSS</span> <span>80%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>JavaScript</span> <span>65%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>PHP</span> <span>80%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>Angular</span> <span>65%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>Symfony</span> <span>70%</span></h3> </div>
      </div>

   </div>

   <div class="edu-exp">

      <h1 class="heading" data-aos="fade-up"> <span>diplome & experience</span> </h1>

      <div class="row">

         <div class="box-container">

            <h3 class="title" data-aos="fade-right">diplome</h3>

            <div class="box" data-aos="fade-right">
               <span>( 2021-2022 )</span>
               <h3>certificat de qualification professionnelle</h3>
               <p>Cursus directeur de magasin à Figeac</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( fevrier-juin 2020 )</span>
               <h3>certificat de développeur web</h3>
               <p>Formation du métier de développeur web chez Web force 3 à Toulouse</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2010-2012 )</span>
               <h3>BTS Management des unités commerciales</h3>
               <p>En alternance au CCI de Cahors</p>
            </div>

         </div>

         <div class="box-container">

            <h3 class="title" data-aos="fade-left">experience</h3>

            <div class="box" data-aos="fade-left">
               <span>( depuis Octobre 2020 )</span>
               <h3>Intermarché</h3>
               <p>employe de commerce à Figeac</p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2016 - 2019 )</span>
               <h3>Carrefour</h3>
               <p>Manager de rayon (secteur frais) à Toulouse</p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( juin à octobre 2015 )</span>
               <h3>Auchan</h3>
               <p>Employe de commerce à Toulouse</p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( févirer 2012 à juin 2015 )</span>
               <h3>Intermarché</h3>
               <p>Employe de commerce à Saint Jean</p>
            </div>

         </div>

      </div>

   </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading" data-aos="fade-up"> <span>services</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-code"></i>
         <h3>Développement web</h3>
         <p>Langage HTML, CSS, JS, PHP</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-paint-brush"></i>
         <h3>graphic design</h3>
         <p>UI / UX design</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fab fa-bootstrap"></i>
         <h3>bootstrap</h3>
         <p>possibilité d'intégrer les projets sur Bootstrap</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-chart-line"></i>
         <h3>seo marketing</h3>
         <p>Remise à niveau du référencement naturel</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-bullhorn"></i>
         <h3>digital marketing</h3>
         <p>Utilisation des réseau sociaux</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fab fa-wordpress"></i>
         <h3>wordpress</h3>
         <p>Possibilité d'intégrer vos projet sur wordpress</p>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- portfolio section starts  -->

<section class="portfolio" id="portfolio">

   <h1 class="heading" data-aos="fade-up"> <span>portfolio</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <img src="images/img-1.jpg" alt="">
         <h3>web development</h3>
         <span>( 2020 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-2.jpg" alt="">
         <h3>web development</h3>
         <span>( 2020 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-3.jpg" alt="">
         <h3>web development</h3>
         <span>( 2020 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-4.jpg" alt="">
         <h3>web development</h3>
         <span>( 2020 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-5.jpg" alt="">
         <h3>web development</h3>
         <span>( 2020 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-6.jpg" alt="">
         <h3>web development</h3>
         <span>( 2020 - 2022 )</span>
      </div>

   </div>

</section>

<!-- portfolio section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>contact</span> </h1>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="nom et prenom" class="box" required>
         <input data-aos="fade-left" type="email" name="email" placeholder="votre email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="numéro de téléphone" class="box" required>
      <textarea data-aos="fade-up" name="message" class="box" required placeholder="Saisir votre message" cols="30" rows="10"></textarea>
      <input type="submit" data-aos="zoom-in" value="envoyer" name="send" class="btn">
   </form>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-phone"></i>
         <h3>phone</h3>
         <p>06 69 71 26 20</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p>minhtuan46@hotmail.fr</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-map-marker-alt"></i>
         <h3>addresse</h3>
         <p>11 rue des maquisard</p>
         <p>46100 Figeac</p>
      </div>

   </div>

</section>

<!-- contact section ends -->

<div class="credit"> &copy; copyright @ <?php echo date('Y'); ?>  <span>TRAN Minh-Tuan</span> </div>












<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-- aos js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>
   
</body>
</html>