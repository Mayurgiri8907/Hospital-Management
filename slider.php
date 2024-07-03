<?php include("conn.php"); ?>

<section class=" slider_section position-relative">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php

                $slider_data = "select * from hospital_slider";
                $result = mysqli_query($conn,$slider_data);
                $count = 0;

                foreach ($result as $value) {
                    if($count == 0){
                        echo '<div class="carousel-item active">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="detail-box">
                                            <div>
                                                <h1>
                                                    '.$value['slider_title'].'
                                                </h1>
                                                <p>
                                                    '.$value['slider_discription'].'
                                                </p>
                                                <a href="">
                                                    Read More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="img-box">
                                            <img src="images/'.$value['slider_img'].'" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';  
                        $count++;  
                    }
                    else{

                        echo '<div class="carousel-item ">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="detail-box">
                                                <div>
                                                    <h1>
                                                        '.$value['slider_title'].'
                                                    </h1>
                                                    <p>
                                                        '.$value['slider_discription'].'
                                                    </p>
                                                    <a href="">
                                                        Read More
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="img-box">
                                                <img src="images/'.$value['slider_img'].'" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>';        
                    }
                }
            ?>
            
            
        </div>
        <ol class="carousel-indicators">
            <?php
                $slider_dot = 0;
                foreach($result as $value){
                    if($slider_dot == 1){
                        echo '<li data-target="#carouselExampleIndicators" data-slide-to="'.$slider_dot.'" class="active"></li>';
                        $slider_dot++;
                        continue;
                    }
                    echo '<li data-target="#carouselExampleIndicators" data-slide-to="'.$slider_data.'"></li>';
                }
            ?>
            
            
            
        </ol>
    </div>
</section>
</div>