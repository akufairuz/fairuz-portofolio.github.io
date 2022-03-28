<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>WPU BLOG | About</title>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1>
                        LayoutIt! <small>Interface Builder for Bootstrap</small>
                    </h1>
                </div>
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Messages</a>
                    </li>
                    <li class="nav-item dropdown ml-md-auto">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Dropdown link</a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider">
                            </div> <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </li>
                </ul>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Library</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Data
                        </li>
                    </ol>
                </nav>
                <div class="carousel slide" id="carousel-42774">
                    <ol class="carousel-indicators">
                        <li data-slide-to="0" data-target="#carousel-42774">
                        </li>
                        <li data-slide-to="1" data-target="#carousel-42774" class="active">
                        </li>
                        <li data-slide-to="2" data-target="#carousel-42774">
                        </li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <img class="d-block w-100" alt="Carousel Bootstrap First" src="https://www.layoutit.com/img/sports-q-c-1600-500-1.jpg">
                            <div class="carousel-caption">
                                <h4>
                                    First Thumbnail label
                                </h4>
                                <p>
                                    Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item active">
                            <img class="d-block w-100" alt="Carousel Bootstrap Second" src="https://www.layoutit.com/img/sports-q-c-1600-500-2.jpg">
                            <div class="carousel-caption">
                                <h4>
                                    Second Thumbnail label
                                </h4>
                                <p>
                                    Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" alt="Carousel Bootstrap Third" src="https://www.layoutit.com/img/sports-q-c-1600-500-3.jpg">
                            <div class="carousel-caption">
                                <h4>
                                    Third Thumbnail label
                                </h4>
                                <p>
                                    Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                </p>
                            </div>
                        </div>
                    </div> <a class="carousel-control-prev" href="#carousel-42774" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-42774" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-3">
                <span class="badge badge-default">Label</span>
                <ul>
                    <li class="list-item">
                        Lorem ipsum dolor sit amet
                    </li>
                    <li class="list-item">
                        Consectetur adipiscing elit
                    </li>
                    <li class="list-item">
                        Integer molestie lorem at massa
                    </li>
                    <li class="list-item">
                        Facilisis in pretium nisl aliquet
                    </li>
                    <li class="list-item">
                        Nulla volutpat aliquam velit
                    </li>
                    <li class="list-item">
                        Faucibus porta lacus fringilla vel
                    </li>
                    <li class="list-item">
                        Aenean sit amet erat nunc
                    </li>
                    <li class="list-item">
                        Eget porttitor lorem
                    </li>
                </ul>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6">
                        <span class="badge badge-default">{{ $name }}</span>
                        <div class="row">
                            <div class="col-md-6">
                                <img alt="Bootstrap Image Preview" src="img/<?= $gambar; ?>" class="img-thumbnail">
                            </div>
                            <div class="col-md-6">
                                <dl>
                                    <dt>
                                        {{ $name }}
                                    </dt>
                                    <dd>
                                        A description list is perfect for defining terms.
                                    </dd>
                                    <dt>
                                        Euismod
                                    </dt>
                                    <dd>
                                        Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.
                                    </dd>
                                    <dd>
                                        Donec id elit non mi porta gravida at eget metus.
                                    </dd>
                                    <dt>
                                        Malesuada porta
                                    </dt>
                                    <dd>
                                        Etiam porta sem malesuada magna mollis euismod.
                                    </dd>
                                    <dt>
                                        Felis euismod semper eget lacinia
                                    </dt>
                                    <dd>
                                        Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                                    </dd>
                                </dl>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">

                                <button type="button" class="btn btn-lg btn-link">
                                    Button
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
                <nav>
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#">Previous</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">5</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>