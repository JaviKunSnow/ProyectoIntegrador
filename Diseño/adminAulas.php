<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/adminStyle.css">
<link rel="stylesheet" href="css/tipografia.css">

<div class="usuario">
    <h2 class="text-center">Aulas</h2>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-right d-flex justify-content-end">
                <a class="me-1" href="#carouselExampleIndicators2" role="button" data-bs-slide="prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#e33c13" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                    </svg>
                </a>
                <a href="#carouselExampleIndicators2" role="button" data-bs-slide="next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-right-circle " viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                    </svg>
                </a>
            </div>
            <!-- Aqui supongo que podria ir un foreach para poner automaticamente la cantidad de aulas que tengamos...supongo -->
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="#e33c13">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row justify-content-center">
                                <div class="circleAulas col-12 col-md-4 col-sm-12 mb-3">
                                    <div class="distortedAulas">
                                        <button class="botonAulas btn btn-circle" id="planta1">
                                            <div class="mt-3">
                                                <h4>AULA 100</h4>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                                <div class="circleAulas col-12 col-md-4 col-sm-12 mb-3">
                                    <div class="distortedAulas">
                                        <button class="botonAulas btn btn-circle" id="planta1">
                                            <div class="mt-3">
                                                <h4>AULA 101</h4>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                                <div class="circleAulas col-12 col-md-4 col-sm-12 mb-3">
                                    <div class="distortedAulas">
                                        <button class="botonAulas btn btn-circle" id="planta1">
                                            <div class="mt-3">
                                                <h4>AULA 102</h4>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="circleAulas col-12 col-md-4 col-sm-12 mb-3">
                                    <div class="distortedAulas">
                                        <button class="botonAulas btn btn-circle" id="planta1">
                                            <div class="mt-3">
                                                <h4>AULA 103</h4>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                                <div class="circleAulas col-12 col-md-4 col-sm-12 mb-3">
                                    <div class="distortedAulas">
                                        <button class="botonAulas btn btn-circle" id="planta1">
                                            <div class="mt-3">
                                                <h4>AULA 104</h4>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                                <div class="circleAulas col-12 col-md-4 col-sm-12 mb-3">
                                    <div class="distortedAulas">
                                        <button class="botonAulas btn btn-circle" id="planta1">
                                            <div class="mt-3">
                                                <h4>AULA 105</h4>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>