<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Learn more about us, our mission, and what drives us at News Application Bro.">
    <meta name="keywords" content="About Us, News Application, Company Mission">
    <title>About Us - News Application Bro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <style>
    a {
        text-decoration: none;
    }
    span {
      background-color: blue;
      color: white;
      padding: 2px 6px;
      border-radius: 3px;
    }
    img, iframe {
        border-radius: 18px;
    }
    .section-heading {
        margin-top: 100px;
    }
    .hero img {
        object-fit: cover;
    }
    .detail {
        margin-top: 20px;
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
          <h2 class="text-center">About</h2>
        </div>
        <div class="hero mt-5">
        <img src="https://images.unsplash.com/photo-1593789198777-f29bc259780e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
        alt="" width="100%" height="300px" style="object-fit: cover;">
        </div>
        <div class="detail mt-5">
            <h3>About Our Company</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur cum, accusantium blanditiis debitis asperiores eum exercitationem suscipit quisquam dolorum maiores. Eius, officia dignissimos. Non quas similique quod tempora minus nihil molestiae sunt laboriosam amet beatae placeat natus suscipit quisquam odit et autem atque voluptatibus expedita saepe facere, cum corrupti. Culpa.</p>
        </div>
      </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
