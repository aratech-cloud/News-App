<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    a {
        text-decoration: none;
    }
    span {
        background-color: blue;
        color: white;
        padding: 0 5px;
        border-radius: 5px;
    }
    .navbar-brand {
        font-weight: bold;
    }
</style>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top container">
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

    <section id="home" class="container mt-5 pt-5">
        <div class="section-heading text-center">
            <h2>Home</h2>
        </div>
        <div id="news-container" class="row mt-4"></div>
    </section>

    <script>
        fetch('https://newsapi.org/v2/top-headlines?country=us&apiKey=YOUR_API_DISINI')
            .then(response => response.json())
            .then(data => {
                const newsContainer = document.getElementById('news-container');
                const articles = data.articles.slice(0, 9);
                articles.forEach(article => {
                    const imageUrl = article.urlToImage ? article.urlToImage : 'https://via.placeholder.com/300x200';
                    const newsCard = `
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <img src="${imageUrl}" class="card-img-top" alt="${article.title}">
                                <div class="card-body">
                                    <h5 class="card-title">${article.title}</h5>
                                    <p class="card-text">${article.description || ''}</p>
                                    <a href="${article.url}" target="_blank" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    `;
                    newsContainer.innerHTML += newsCard;
                });
            })
            .catch(error => {
                console.error('Error fetching news:', error);
                document.getElementById('news-container').innerHTML = '<p class="text-danger">Failed to load news. Please try again later.</p>';
            });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
