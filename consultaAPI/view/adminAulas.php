 <!-- Carrusel de botones para acceder a cada una de las aulas -->
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
                        <? $contador = 0;
                            $contActive = 0;

                            foreach($elementos as $key) {
                                if($contador == 0) {
                                    if($contActive == 0) {
                                        echo '<div class="carousel-item active">';
                                    } else {
                                        echo '<div class="carousel-item">';
                                    }
                                    echo '<div class="row justify-content-center">';   
                                    $contActive++; 
                                }
                                $contador++;
                                    echo '<div class="circleAulas col-12 col-md-4 col-sm-12 mb-3">';
                                        echo '<form action="./index.php" method="post">';
                                            echo '<div class="distortedAulas">';
                                                echo '<input type="hidden" name="idArduino" value="'.$key['idArduino'].'">';
                                                    echo '<button type="submit" class="botonAulas btn btn-circle" name="enviar">';
                                                        echo '<div class="mt-3">';
                                                            echo '<h4>AULA '.$key['nombre'].'</h4>';
                                                        echo '</div>';
                                                    echo '</button>';
                                            echo '</div>';
                                        echo '</form>';
                                    echo '</div>';
                                if($contador == 3) {
                                    $contador = 0;
                                    echo '</div>';
                                echo '</div>';
                                }
                            }
                        ?>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>