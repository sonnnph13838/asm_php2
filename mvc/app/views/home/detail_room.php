<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <nav class="py-2 bg-light border-bottom">
            <div class="container d-flex flex-wrap">
                <ul class="nav me-auto">
                    <li class="nav-item"><a href="/" class="nav-link link-dark px-2 active"
                                            aria-current="page">Home</a>
                    </li>
                    <li class="nav-item"><a href="/rooms" class="nav-link link-dark px-2">Rooms</a></li>
                    <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Pages</a></li>
                    <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Posts</a></li>
                    <li class="nav-item"><a href="#" class="nav-link link-dark px-2">News</a></li>
                    <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Contacts</a></li>
                </ul>
                <ul class="nav">
                    <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Login</a></li>
                    <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Sign up</a></li>
                </ul>
            </div>
        </nav>
        <header class="py-3 mb-4 border-bottom">
            <div class="container d-flex flex-wrap justify-content-center">
                <a href="/asm/mvc/public" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                    <span class="fs-4">DILAOLI</span>
                </a>
                <form class="col-12 col-lg-auto mb-3 mb-lg-0">
                    <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                </form>
            </div>
        </header>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="card bg-dark text-white">
                <img src="https://statics.vntrip.vn/uploads/deal/20220608_342510_7.jpg" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                    <p class="card-text">Giá chỉ từ: 1.500.000đ</p>
                </div>
            </div>
            <div class="sp" style="padding: 20px ;"></div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" type="button">Book now</button>
            </div>
            <div class="sp" style="padding: 20px ;"></div>
            <div class="card-group">
                <div class="card">
                  <img src="https://statics.vntrip.vn/uploads/deal/20220608_342250_2.jpg" class="card-img-top" alt="...">
                </div>
                <div class="card">
                  <img src="https://statics.vntrip.vn/uploads/deal/20220608_342170_3.jpg" class="card-img-top" alt="...">
                </div>
                <div class="card">
                  <img src="https://statics.vntrip.vn/uploads/deal/20220608_342200_6.jpg" class="card-img-top" alt="...">
                </div>
              </div>
            <div class="sp" style="padding: 20px ;"></div>
            <div class="ct">
                <h4 class="h4">Thông tin chi tiết</h4>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus excepturi dignissimos dolore libero reiciendis ea delectus nihil voluptas impedit, unde voluptate explicabo ut molestiae non assumenda debitis hic ducimus quasi.</p>
            </div>
            <div class="sp" style="padding: 20px ;"></div>
            <h3 class="h3">Related Rooms</h3>
            <div class="row" style="margin-top: 20px; ">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                </div>
            </div>
            <div class="footer"
                style="margin-top:50px; background:aqua; padding: 30px; text-align: center; color: brown; font-size: 2em;">
                <span>Nguyen Ngoc Son</span>
            </div>
        </div>
</body>

</html>