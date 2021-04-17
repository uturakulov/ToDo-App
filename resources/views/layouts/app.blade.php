<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Todo App</title>
</head>
<style>
    body {
        background: #fcfcfc;
    }
    .nav {
        list-style: none;
    }
    header {
        max-width: 90%;
        margin: auto
    }
    nav {
        display: flex;
        justify-content: space-between;
        height: 12vh;
        align-items: center;
    }
    .nav-item {
        margin-right: 5vw;
        font-size: 25px;
    }
    a {
        text-decoration: none
    }
    .logo {
        font-size: 35px;
        font-weight: bolder;
    }
    .container {
        max-width: 70%;
        margin: auto;
    }
    .welcome {
        color: #094067;
        font-size: 70px;
        margin-top: 20vh;
        margin-bottom: 30px;
    }
    .btn-primary {
        font-size: 30px;
        padding: 5px 25px;
    }
    .title-create {
        color: #094067;
        font-size: 50px;
        margin-bottom: 30px;
    }
    .form-group {
        margin-bottom: 30px;
    }
    .btn {
        font-size: 20px;
        margin-bottom: 10px;
    }

    .item {
        font-size: 30px;
        color: #3da9fc;
    }
</style>
<body>
    <header>
        <nav>
            <a href="/" class="logo">ToDo</a>
            <ul class="nav">
                <li class="nav-item"><a href="/posts">All ToDos</a></li>
                <li class="nav-item"><a href="/posts/create">Add</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        @yield('content')
    </div>

    @yield('footer')
</body>

</html>