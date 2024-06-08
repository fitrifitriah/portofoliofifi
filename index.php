<?php

$conn = mysqli_connect('localhost','id19936598_contact_form','9>W_(Eyd)=p&no\p','id19936598_contact_db') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'Pesan sudah terkirim, tunggu balasan di email mu ya!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Interaktif Portofolio</title>

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


<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="image" data-aos="zoom-out">
      <img src="images/mee.jpg" alt="">
   </div>

   <div class="content">
      <h3 data-aos="fade-right">Looking for My Portofolio?</h3>
      <span data-aos="fade-left">College Student</span>
      <p data-aos="fade-right">Sedang melakukan studi di Politeknik Elektronika Negeri Surabaya.</p>
      <input type="submit" class="btn btn-primary" name="Achievement" value="Achievement" onclick="location.href='tampil.php';">
   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>Tentang Saya</span> </h1>

   <div class="biography">

      <p data-aos="fade-up">Kenali hal umum tentang saya^^.</p>

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>Nama : </span> Fitri Fitriah</h3>
         <h3 data-aos="zoom-in"> <span>Email : </span> fitrifitriah@te.student.pens.ac.id </h3>
         <h3 data-aos="zoom-in"> <span>Alamat : </span> Tegal Mulyorejo Baru 72 </h3>
         <h3 data-aos="zoom-in"> <span>WhatsApp : </span> 0895613444085 </h3>
         <h3 data-aos="zoom-in"> <span>Umur: </span> 20 Tahun </h3>
         <h3 data-aos="zoom-in"> <span>Tempat/Tanggal Lahir : </span> Malang, 10 November 2022 </h3>
      </div>


   </div>
   
   <div class="skills" data-aos="fade-up">

      <h1 class="heading"> <span>What I Can Do?</span> </h1>

      <div class="progress">
         <div class="bar" data-aos="fade-left"> <h3><span>Microsoft</span> <span>95%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>PHP</span> <span>80%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>Android Studio</span> <span>65%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>Writing Artikel</span> <span>80%</span></h3> </div>
      </div>

   </div>

   <div class="edu-exp">

      <h1 class="heading" data-aos="fade-up"> <span>Pendidikan dan Pengalaman </span> </h1>

      <div class="row">

         <div class="box-container">

            <h3 class="title" data-aos="fade-right">Pendidikan</h3>

            <div class="box" data-aos="fade-right">
               <span>( 2018-2021)</span>
               <h3>Siswa</h3>
               <p>Berasal dari SMAN 5 Malang di Jalan Tanimba dengan jurusan MIPA</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2021-sekarang )</span>
               <h3>Mahasiswa</h3>
               <p>Masuk di prodi D4 Teknik Telekomunikasi B NRP 2221600058.</p>
            </div>

         </div>

         <div class="box-container">

            <h3 class="title" data-aos="fade-left">Pengalaman</h3>

            <div class="box" data-aos="fade-left">
               <span>( 2021-2022 )</span>
               <h3>Ground Control Sation (GCS)-KRTI</h3>
               <p>Membuat mission planer berupa aplikasi web dan.</p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2022 )</span>
               <h3>Ketua Tim PMW Eltrolic Kidzteen</h3>
               <p>Eltrolic Kidzteen merupakan tim PMW di Politeknik Elektronika Negeri Surabaya.</p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2022-2023 )</span>
               <h3>Staf Muda HIMA TELKOM </h3>
               <p>Bertugas di departemen eksternal dan riset.</p>
            </div>

         </div>

      </div>

   </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->



<!-- services section ends -->

<!-- portfolio section starts  -->



<!-- portfolio section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>Hubungi Saya</span> </h1>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="Masukkan Nama" class="box" required>
         <input data-aos="fade-left" type="email" name="email" placeholder="Masukkan Email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="Masukkan nomor" class="box" required>
      <textarea data-aos="fade-up" name="message" class="box" required placeholder="Masukkan pesan anda" cols="30" rows="10"></textarea>
      <input type="submit" data-aos="zoom-in" value="KIRIM" name="send" class="btn">
   </form>


</section>

<!-- contact section ends -->

<<div class="credit"> </span> </div>


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