<?php
if (isset($_POST['filename'])) {

    $file = basename($_POST['filename']);
    $path = "uploads/" . $file;

    if (file_exists($path)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $file . '"');
        header('Content-Length: ' . filesize($path));
        readfile($path);
        exit;
    } else {
        echo "❌ File not found";
    }

} else {
    echo "❌ Invalid request";
}
?>
