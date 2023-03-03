<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="web/multimedia/favicon.ico" type="image/x-icon">
    <!-- Dependiendo de que pagina sea tendra un css diferente -->
    <link rel="stylesheet" href="web/css/layoutStyle.css">
    <link rel="stylesheet" href="<?php echo $_SESSION['css'] ?>">
    <!-- Esta se mantiene para todas la paginas ya que incluye la tipografia especifica -->
    <link rel="stylesheet" href="web/css/tipografia.css">
    <title>Layout</title>
</head>

<body>
    <header>
        <div class="logo py-2 ms-5">
            <img src="web/multimedia/logo_blanco.png" alt="Logo" class="lg img-fluid px-3">
        </div>
        <!-- Si no esta logueado este boton desaparece -->
        <? if (estaValidado()) { ?>
            <div class="boton align-self-end mb-2">
                <form action="./index.php" method="post">
                    <button type="submit" class="btn text-light" id="logout" name="logout">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-right img-fluid" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                        </svg>
                    </button>
                </form>
            </div>
        <? } ?>
    </header>

    <main class="sticky-top">
        <!-- aparece a partir de tener iniciada la sesion -->
        <?
        if (estaValidado()) { ?>
            <nav class="navegador navbar navbar-expand ">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <form action="./index.php" method="post">
                            <ol class="breadcrumb flex-wrap navbar-nav me-auto mb-2 mb-lg-0">
                                <?
                                foreach ($migas as $nombre => $url) {
                                    if ($nombre !== $_SESSION['pagina']) { ?>
                                        <li class="breadcrumb-item">
                                            <button type="submit" class="bread btn btn-link" name="<?echo $nombre?>"><?echo $url?></button>
                                        </li>
                                    <?
                                    } else {?>
                                        <li class="breadcrumb-item">
                                            <button type="submit" class="bread btn btn-link" name="<?echo $nombre?>" disabled><?echo $url?></button>
                                        </li>
                                    <?
                                    }
                                }
                                ?>
                            </ol>
                        </form>
                        <!-- Este buscador solo aparece cuando el admin se encuentra en la seccion de AULAS -->
                        <!--<form class="d-flex">
                            <input class="buscadorI form-control form-control-sm " type="search" placeholder="Buscar" aria-label="Buscar">
                            <button class="buscador btn btn-secondary" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                            </button>
                        </form>
                            -->
                    </div>
                </div>
            </nav>
        <?
        }
        ?>

        <? require_once $_SESSION['vista'] ?>
    </main>
    <div class="container-fluid px-0 pt-1">
        <footer class="bg-light text-center text-lg-start fixed-bottom">
            <div class="text-center p-2">
                ©2023
                <a class="text-light" href="https://www.claudiomoyano.es/">IES Claudio Moyano - DAW2</a>
            </div>
        </footer>
    </div>
</body>

</html>