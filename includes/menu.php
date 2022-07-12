<?php

/**
 * Register a custom menu page.
 */
function random_settings_func() {
    add_menu_page(
        __('PDF files', 'filepdf'),
        'PDF files',
        'manage_options',
        'users_pdf_files', // slug
        'filepdf_all_pdf', // callback
        'dashicons-controls-repeat',
        100
    );
}
add_action('admin_menu', 'random_settings_func');


/**
 * Settings Template Page
 */

function filepdf_all_pdf() { ?>

    <!-- html will go here -->

    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Pdf File</th>
                <th>Pdf Link</th>
                <th>Download</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Bio Pdf</td>
                <td>www.example.com</td>
                <td><a href=""> Download </a></a></td>
            </tr>
            <tr>
                <td>Bio Pdf</td>
                <td>www.example.com</td>
                <td><a href=""> Download </a></a></td>
            </tr>
        </tbody>
    </table>



<?php }
