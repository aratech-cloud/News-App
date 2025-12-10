<!doctype html>
<html lang="en">

<head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>Contact Us</title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
       a {
              text-decoration: none;
       }

       span {
              background-color: blue;
              color: white;
       }

       u {
              color: blue;
              font-weight: bold;
       }

       img,
       iframe {
              border-radius: 18px;
       }
</style>

<body>
       <nav class="navbar navbar-expand-lg bg-body-tertiary container fixed-top">
              <div class="container-fluid">
                     <a class="navbar-brand" href="dashboard.html">News Application <span>Bro</span></a>
                     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 px-2">
                                   <li class="nav-item">
                                          <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
                                   </li>
                                   <li class="nav-item">
                                          <a class="nav-link" href="about.php">About Us</a>
                                   </li>
                                   <li class="nav-item">
                                          <a class="nav-link" href="contact.php">Contact Us</a>
                                   </li>
                            </ul>
                            <form class="d-flex" role="search">
                                   <a href="login.php" class="btn btn-primary">Logout</a>
                            </form>
                     </div>
              </div>
       </nav>

       <section id="home" class="container">
              <div class="section-heading">
                     <h2 class="text-center">Contact Us</h2>
              </div>

              <div class="hero mt-5">
                     <img src="https://images.unsplash.com/photo-1593789198777-f29bc259780e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" width="100%" height="300px" style="object-fit: cover;">
              </div>

              <div class="container mt-5 text-center text-bold">
                     <h2>Any Question <u>??</u></h2>
              </div>

              <div class="row mt-5 mb-5">
                     <div class="col">
                            <form class="container mt-5" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                   <div class="mb-3">
                                          <label for="username" class="form-label">Username</label>
                                          <input type="text" class="form-control" id="username" name="username" aria-describedby="username" required>
                                   </div>
                                   <div class="mb-3">
                                          <label for="email" class="form-label">Email Address</label>
                                          <input type="email" class="form-control" id="email" name="email" aria-describedby="email" required>
                                   </div>

                                   <div class="mb-3">
                                          <label for="message" class="form-label">Message</label>
                                          <br>
                                          <textarea name="message" id="message" rows="5" cols="30" required></textarea>
                                   </div>

                                   <button type="submit" class="btn btn-primary mt-3">Send Email</button>

                            </form>
                     </div>
                     <div class="col">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15844.730610781611!2d107.5354939!3d-6.8687043!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e68e46d527c3%3A0x80c53eeb41601c6e!2sCODEPOLITAN!5e0!3m2!1sen!2sid!4v1723625488824!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                     </div>
              </div>
       </section>

       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
       // Ambil data dari form
       $username = htmlspecialchars($_POST['username']);
       $email = htmlspecialchars($_POST['email']);
       $message = htmlspecialchars($_POST['message']);

       // Validasi data jika diperlukan
       if (!empty($username) && !empty($email) && !empty($message)) {
              // Kirim email
              $to = "youremail@example.com"; // ganti dengan email tujuan
              $subject = "Contact Form Submission from $username";
              $body = "Name: $username\nEmail: $email\n\nMessage:\n$message";
              $headers = "From: $email";

              if (mail($to, $subject, $body, $headers)) {
                     echo "<script>alert('Email berhasil dikirim!');</script>";
              } else {
                     echo "<script>alert('Gagal mengirim email.');</script>";
              }
       } else {
              echo "<script>alert('Harap isi semua field.');</script>";
       }
}
?>