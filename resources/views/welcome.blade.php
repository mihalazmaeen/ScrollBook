<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->


    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'poppins', sans-serif;
        }

        body {
            font-family: 'poppins', sans-serif;
            background: #efefef;

        }

        nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: #1876f2;
            padding: 5px 5%;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .logo {
            width: 160px;
            margin-right: 45px;
        }

        .nav-left, .nav-right {
            display: flex;
            align-items: center;
        }

        .nav-left ul li {
            list-style: none;
            display: inline-block;
        }

        .nav-left ul li img {
            width: 28px;
            margin: 0 15px;
        }

        .nav-user-icon img {
            width: 40px;
            border-radius: 50%;
        }

        .nav-user-icon {
            margin-left: 30px;
        }

        .container {
            display: flex;
            justify-content: space-between;
            padding: 13px 5%;
        }

        .left-sidebar {

            flex-basis: 25%;
            position: sticky;
            top: 70px;
            align-self: flex-start;

        }

        .right-sidebar {

            flex-basis: 25%;
            position: sticky;
            top: 70px;
            align-self: flex-start;

        }

        .main-content {
            flex-basis: 47%;
        }

        .imp-links {
            border-bottom: 1px solid #ccc;
        }

        .imp-links a, .shortcut-links a {
            text-decoration: none;
            display: flex;
            align-items: center;
            margin-bottom: 30px;
            color: #626262;
            width: fit-content;
        }

        .imp-links a img {
            width: 25px;
            margin-right: 15px;
        }

        .shortcut-links a img {
            width: 40px;
            border-radius: 4px;
            margin-right: 15px;
        }

        .shortcut-links p {
            margin: 25px 0;
            color: #626262;
            font-weight: 500;
        }

        .write-post-container {
            width: 100%;
            background: #fff;
            border-radius: 4px;
            padding: 20px;
            color: #626262;
        }

        .user-profile {
            display: flex;
            align-items: center;
        }

        .user-profile img {
            width: 45px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .user-profile p {
            margin-bottom: -5px;
            font-weight: 500;
            color: #626262;
        }

        .user-profile small {
            font-size: 12px;
        }

        .post-input-container {
            padding-left: 55px;
            padding-top: 20px;
        }

        .post-input-container textarea {
            width: 100%;
            border: 0;
            outline: 0;
            border-bottom: 1px solid #ccc;
            background: transparent;
            resize: none;

        }

        .add-post-links {
            display: flex;
            margin-top: 10px;
        }

        .add-post-links a {
            text-decoration: none;
            display: flex;
            align-items: center;
            color: #626262;
            margin-right: 30px;
            font-size: 13px;
        }

        .post-container {
            width: 100%;
            background: #fff;
            border-radius: 6px;
            padding: 20px;
            color: #626262;
            margin: 20px 0;
        }

        .user-profile span {
            font-size: 13px;
            color: #9a9a9a;
        }

        .post-text {
            color: #9a9a9a;
            margin: 15px 0;
            font-size: 15px;
        }

        .post-text a {
            color: #1876f2;
            text-decoration: none;
        }

        .post-img {
            width: 100%;
            border-radius: 4px;
            margin-bottom: 5px;

        }

        .post-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .activity-icons div {
            display: inline-flex;
            align-items: center;
            margin-right: 0;
        }

        .activity-icons div img {
            width: 18px;
            margin-right: 10px;
        }

        .input-comment {
            width: 100%;
            padding: 8px;
            border: 0;
            outline: 0;
        }


    </style>
</head>
<body>
<nav>
    <div class="nav-left">
        <img src="" class="logo" alt="logo">
        <ul>
            <li>item</li>
            <li>item</li>
            <li>item</li>
        </ul>
    </div>
    <div class="nav-right">
        <div class="nav-user-icon">
            <img src="" alt="profile">
        </div>
    </div>

</nav>
<div class="container">
    {{--    LEft Sidebar--}}
    <div class="left-sidebar">
        <div class="imp-links">
            <a href="#"><img src="">Create Post</a>
        </div>
        <div class="shortcut-links">
            <p>Your posts</p>
            <a href="#"><img src="">First Post</a>
            <a href="#"><img src="">Second Post</a>
            <a href="#"><img src="">Third Post</a>

        </div>
    </div>
    <div class="main-content">
        <div class="write-post-container">
            <div class="user-profile">
                <img src="" alt="profile">
                <div>
                    <p>John Wick</p>
                    <small>public</small>
                </div>
            </div>
            <div class="post-input-container">
                <textarea rows="3" placeholder="Whats on Your Gun ?"></textarea>
                <div class="add-post-links">
                    <a href="#">Photo</a>
                    <a href="#">video</a>
                    <a href="#">feeling</a>
                </div>
            </div>
        </div>
        <div class="post-container">
            <div class="row">
                <div class="post-main">
                    <div class="user-profile">
                        <img src="" alt="Profile">
                        <div>
                            <p>John Wick</p>
                            <span>June 24 2021, 13:40</span>
                        </div>
                    </div>
                    <p class="post-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Explicabo, provident. <a href="">view more</a></p>
                    <img src="" alt="image" class="post-img">
                    <div class="post-row">
                        <div class="activity-icons">
                            <div class="text-center">love</div>
                        </div>
                    </div>
                </div>
                <div class="comment-container">
                    <input type="text" name="comment"
                           class="input-comment" placeholder="write comment">
                </div>


            </div>

        </div>
    </div>
    <div class="right-sidebar">

    </div>

</div>
</body>

</html>
