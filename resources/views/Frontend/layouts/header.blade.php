<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto+Condensed&family=Rubik&family=Source+Sans+Pro:wght@600&family=Ubuntu&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="{{url('Frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('Frontend/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <nav>
            <input type="checkbox" id="show-search">
            <input type="checkbox" id="show-menu">
            <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
            <div class="content">
                <div class="logo"><a href="#">HamroGhar</a></div>
                <div class="mid-header">
                    <ul class="links">
                        <li><a href="#">About</a></li>

                        <li>
                            <a href="#" class="desktop-link">Discover <span>&#8595;</span></a>
                            <input type="checkbox" id="show-features">
                            <label for="show-features">Houses For</label>
                            <ul>
                                <li><a href="#">Drop Menu 1</a></li>
                                <li><a href="#">Drop Menu 2</a></li>
                                <li><a href="#">Drop Menu 3</a></li>
                                <li><a href="#">Drop Menu 4</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Rent </a></li>
                        <li><a href="#">Register Your Property </a></li>
                    </ul>
                </div>
            </div>
            <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
            <form action="#" class="search-box">
                <input type="text" placeholder="Type Something to Search..." required>
                <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
            </form>
        </nav>
    </div>