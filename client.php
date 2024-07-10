<?php 
    @session_start();
    if(!isset($_SESSION['name']) && $_SESSION['name'] == ""){
      header("location:login.php");
    }
    include("conn.php"); 
?>

<section class="client_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                <span class="design_dot"></span>
                Testimonial
            </h2>
        </div>
    </div>
    <div class="container px-0">
        <div id="customCarousel2" class="carousel  carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <?php

                    $testimonial_data = "select * from hospital_testimonial";
                    $result = mysqli_query($conn,$testimonial_data);
                    $count = 1;

                    foreach($result as $value){
                        
                        if($count == 1){
                            echo '<div class="carousel-item active">
                                <div class="box">
                                    <div class="client_info">
                                        <div class="client_name">
                                            <h5>
                                                '.$value['testimonial_title'].'
                                            </h5>
                                        </div>
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    </div>
                                    <p>
                                        '.$value['testimonia_discription'].'
                                    </p>
                                </div>
                            </div>'; 
                            $count++;
                               
                        }else{
                            echo '<div class="carousel-item">
                                <div class="box">
                                    <div class="client_info">
                                        <div class="client_name">
                                            <h5>
                                                '.$value['testimonial_title'].'
                                            </h5>
                                        </div>
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    </div>
                                    <p>
                                        '.$value['testimonia_discription'].'
                                    </p>
                                </div>
                            </div>';
                                
                        }
                        
                            
                    }
                ?>
                
                
            <div class="carousel_btn-box">
                <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>