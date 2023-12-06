<?php


if ( 0 < $_FILES['my_uploaded_file']['error'] ) {
        echo 'Error: ' . $_FILES['my_uploaded_file']['error'] . '<br>';
    }
    else {
        move_uploaded_file($_FILES['my_uploaded_file']['tmp_name'], '../uploads/' . $_FILES['my_uploaded_file']['name']);
    }
move_uploaded_file(

    // this is where the file is temporarily stored on the server when uploaded
    // do not change this
    $_FILES['my_uploaded_file']['tmp_name'],

    // this is where you want to put the file and what you want to name it
    // in this case we are putting in a directory called "uploads"
    // and giving it the original filename
    'uploads/' . $_FILES['my_uploaded_file']['name']
);

?>
