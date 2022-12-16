<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{$BASE_URL}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>REGISTRADORA</title>
</head>

<body>
    <div class="portada">
      
    </div>

    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand">REGISTRADORA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="ventas">Ventas</a>
                    </li>
                    {if !$logueado }
                        <li class="nav-item">
                            <a class="nav-link" href="login">Login</a>
                        </li>
                    {else}
                        <li class="nav-item">
                            <a class="nav-link" href="logout">Logout</a>
                        </li>
                    {/if}
                </ul>
            </div>
        </div>
    </nav>

  

</ul>