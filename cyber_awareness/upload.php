<?php
if (isset($_FILES['myfile'])) {

    $upload_dir = "uploads/";

    $file_name = $_FILES['myfile']['name'];
    $tmp_name  = $_FILES['myfile']['tmp_name'];

    if ($file_name != "") {

        $target_file = $upload_dir . basename($file_name);

        if (move_uploaded_file($tmp_name, $target_file)) {
            echo "✅ File uploaded successfully<br><br>";
            ?>

            <!-- Download Button -->
            <form action="download.php" method="post">
                <input type="hidden" name="filename" value="<?php echo $file_name; ?>">
                <input type="submit" value="Download File">
            </form>

            <?php
        } else {
            echo "❌ File upload failed";
        }

    } else {
        echo "❌ No file selected";
    }

} else {
    echo "❌ File input not found";
}
?>
