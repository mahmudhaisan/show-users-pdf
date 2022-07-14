<?php

/**
 * Register a custom menu page.
 */
function random_settings_func() {
    add_menu_page(
        __('Doc files', 'docfiles'),
        'Doc Files',
        'manage_options',
        'users_pdf_files', // slug
        'docfiles_all_pdf', // callback
        'dashicons-controls-repeat',
        100
    );
}
add_action('admin_menu', 'random_settings_func');


/**
 * Settings Template Page
 */

function docfiles_all_pdf() {

?>

    <!-- html will go here -->

    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>User Name </th>
                <th>Police File </th>
                <th>First Aid File</th>
                <th>Working With Children</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $get_all_users = get_users(array('role__in' => array('subscriber')));
            // Array of WP_User objects.
            foreach ($get_all_users as $user) {

                $users_id_number = $user->ID;

                // police certificate file
                $police_check_file_id_array = get_user_meta($users_id_number, 'policecheck');
                $police_check_file_id = $police_check_file_id_array[0];
                $police_check_file_post = get_post($police_check_file_id);

                // firstaid certificate file
                $firstaid_check_file_id_array = get_user_meta($users_id_number, 'firstaid');
                $firstaid_check_file_id = $firstaid_check_file_id_array[0];
                $firstaid_check_file_post = get_post($firstaid_check_file_id);

                // workingwithchildren certificate file
                $workingwithchildren_check_file_id_array = get_user_meta($users_id_number, 'workingwithchildren');
                $workingwithchildren_check_file_id = $workingwithchildren_check_file_id_array[0];
                $workingwithchildren_check_file_post = get_post($workingwithchildren_check_file_id);


                // get all info of police certificate file
                $police_file_title = $police_check_file_post->post_title;
                $police_file_url = $police_check_file_post->guid;
                //$police_file_mime_type = $police_check_file_post->post_mime_type;

                // echo $police_file_title;
                // echo $police_file_url;
                // echo $police_file_mime_type;


                // get all info of firstaid certificate file
                $firstaid_file_title = $firstaid_check_file_post->post_title;
                $firstaid_file_url = $firstaid_check_file_post->guid;
                //$firstaid_file_mime_type = $firstaid_check_file_post->post_mime_type;

                // echo $firstaid_file_title;
                // echo $firstaid_file_url;
                // echo $firstaid_file_mime_type;

                // get all info of workingwithchildren certificate file
                $workingwithchildren_file_title = $workingwithchildren_check_file_post->post_title;
                $workingwithchildren_file_url = $workingwithchildren_check_file_post->guid;
                //$workingwithchildren_file_mime_type = $workingwithchildren_check_file_post->post_mime_type;


                // echo $workingwithchildren_file_title;
                // echo $workingwithchildren_file_url;
                // echo $workingwithchildren_file_mime_type;

            ?>
                <tr>
                    <td><?php echo $user->display_name; ?></td>
                    <td><a href="<?php echo $police_file_url; ?>"> <?php echo $police_file_title; ?> </a></td>
                    <td><a href="<?php echo $firstaid_file_url; ?>"> <?php echo $firstaid_file_title; ?> </a></td>
                    <td><a href="<?php echo $workingwithchildren_file_url; ?>"> <?php echo $workingwithchildren_file_title; ?> </a></td>
                </tr>
            <?php } ?>

        </tbody>
    </table>



<?php }
