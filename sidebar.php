<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../bootstrap-icons/bootstrap-icons.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <style>
        *{
            margin: 0;
            padding: 0;
            outline: none;
            border: none;
            text-decoration: none;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }
        body {
            background-color: #e78282;
        }
        nav {
            position: absolute;
            top: 0;
            bottom: 0;
            height: 100%;
            left: 0;
            background: #fff;
            width: 100px;
            overflow: hidden;
            transition: width 0.2s linear;
            box-shadow: 0 20px 35px rgba(0, 0, 0, 0.102);
        }
        .logo {
            text-align: center;
            display: flex;
            transition: all 0.5s ease;
            margin: 10px 0 0 10px;
        }
        .logo img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
        .logo span {
            font-weight: 15px;
            padding-left: 15px;
            top: 10px;
            font-size: 10px;
            text-transform: uppercase;
        }
        a {
            position: relative;
            color: rgb(85, 83, 83);
            font-size: 13px;
            display: table;
            width: 300px;
            padding: 20px;
        }
        li a .icon {
            position: relative;
            width: 60px;
            height: 20px;
            top: 14px;
            font-size: 2px;
            text-align: center;
        }
        .nav-item {
            position: relative;
            top: 8px;
            margin-left: 20px;
        }
        a:hover {
            background: #eee;
        }
        nav:hover {
            width: 280px;
            transition: all 0.5s ease;
        }
        .logout {
            position: absolute;
            bottom: 0;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <li>
                <a href="" class="logo">
                <img src="" alt="">
                <span class="nav-item">MIXUE</span>
                </a>
            </li>
            <li>
                <a href="index.php?page=penjualan">
                <i data-feather="home" class="icon"></i>
                <span class="nav-item">Home</span>
                </a>   
            </li>
            <li>
                <a href="">
                <i data-feather="home" class="icon"></i>
                <span class="nav-item">Home</span>
                </a>   
            </li>
            <li>
                <a href="">
                <i data-feather="home" class="icon"></i>
                <span class="nav-item">Home</span>
                </a>   
            </li>
            <li>
                <a href="">
                <i data-feather="home" class="icon"></i>
                <span class="nav-item">Home</span>
                </a>   
            </li>
            <li>
                <a href="">
                <i data-feather="home" class="icon"></i>
                <span class="nav-item">Home</span>
                </a>   
            </li>
            <li>
                <a href="" class="logout">
                <i data-feather="log-out" class="icon"></i>
                <span class="nav-item">Home</span>
                </a>   
            </li>
        </ul>
    </nav>
    <script>
        feather.replace();
    </script>
</body>
</html>