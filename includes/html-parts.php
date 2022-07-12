<?php
$random_btn_bg_color = get_option('random_settings_btn_bg_field');
$random_btn_text_color = get_option('random_settings_btn_text_field');
// $random_btn_text_color = get_option('random_settings_btn_text_input_field');


?>


<div class="">
    <div class="row random-row">
        <div class="col-md-8">
            <div class="text-center random-image-card">
                <div class="card-body">
                    <h3 class="random-card-title text-dark mt-2"><?php echo $cpt_post_name; ?></h3>
                    <div class="random-card-image">
                        <img class="img-responsive" src="<?php echo $cpt_post_image; ?>" alt="">
                    </div>

                    <p class="random-card-text card-text text-dark mt-2"><?php echo $cpt_post_content; ?></p>
                </div>
            </div>

        </div>
        <div class="col-md-4 text-center">
            <?php echo $random_btn_color; ?>
            <div class="jumbotron d-flex align-items-center min-vh-100">
                <div class="container text-center">
                    <a href="?<?php echo $cpt_post_id; ?>" class="btn btn-primary random-btn " style="background:<?php echo $random_btn_bg_color; ?>; color:<?php echo $random_btn_text_color; ?>;">PICK ANOTHER CARD</a>
                </div>
            </div>

        </div>
    </div>
</div>