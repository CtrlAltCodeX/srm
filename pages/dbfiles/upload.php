<?php

if (isset($_POST['uniquevar']) && isset($_POST['extension'])) {
    $uniquevar = $_POST['uniquevar'];
    $extension = $_POST['extension'];
    if (0 < $_FILES['my_uploaded_file']['error']) {
        echo 'Error: ' . $_FILES['my_uploaded_file']['error'] . '<br>';
    } else {
        move_uploaded_file($_FILES['my_uploaded_file']['tmp_name'], '../uploads/' . $uniquevar . '.' . $extension);
    }
    move_uploaded_file(

        // this is where the file is temporarily stored on the server when uploaded
        // do not change this
        $_FILES['my_uploaded_file']['tmp_name'],

        // this is where you want to put the file and what you want to name it
        // in this case we are putting in a directory called "uploads"
        // and giving it the original filename
        'uploads/' . $uniquevar . $extension
    );
}

//

$target_dir = "../uploads/";
// $target_dir = "../uploads/auditFiles/";
$target_file = $target_dir . $_POST['qqfilename'];
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$result = [];
// Check if file already exists
if (file_exists($target_file)) {
    $uploadOk = 0;
    $result = [
        'success'   => false,
        'error'     =>  'Sorry, file already exists.'
    ];
}

// Check file size
if ($_POST['qqtotalfilesize'] > 31457280) {
    $uploadOk = 0;
    $result = [
        'success'   => false,
        'error'     =>  'Sorry, your file is too large.'
    ];
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo json_encode($result);
} else {
    $upload = move_uploaded_file($_FILES['qqfile']['tmp_name'], $target_file);
    if ($upload) {
        $result = [
            'uploadName'    => $_POST['qqfilename'],
            'previewLink'   => $target_file,
            'success'       => true,
            'message'       => "The file " . htmlspecialchars($_POST['qqfilename']) . " has been uploaded."
        ];
        echo json_encode($result);
    } else {
        $result = [
            'success'   => false,
            'error'     =>  'Sorry, there was an error uploading your file.',
            'message' => $upload
        ];
        echo json_encode($result);
    }
}
