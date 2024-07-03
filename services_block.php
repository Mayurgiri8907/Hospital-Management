<?php include("conn.php"); ?>

<section class="service_section layout_padding-bottom">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                <span class="design_dot"></span>
                Our Services
            </h2>
            <p>
                It is a long established fact that a reader will be distracted
            </p>
        </div>
        <div class="row">
            <div class="col-md-2">

            </div>
            <?php

                $services_data = "select * from hospital_services";
                $result = mysqli_query($conn,$services_data);

                foreach ($result as $value) {
                    echo '<div class="col-md-4 mx-auto">
                            <div class="box">
                                <img src="images/'.$value['services_icon'].'" alt="" />
                                <a href="#">
                                    '.$value['services_title'].'
                                </a>
                            </div>
                        </div>';
                }
            ?>


        </div>
        <div class="btn-box">
            <a href="">
                View All
            </a>
        </div>
    </div>
</section>