<?php

if(isset($_POST['submit-btn'])){
    $file=$_FILES['uploadedFile'];
    $fileName=$file['name'];
    $fileExtension=strtolower(pathinfo($file['name'],PATHINFO_EXTENSION));
    if($fileExtension=='jpg'||$fileExtension=='png'||$fileExtension=='jpeg'){
        $path='../struk/'.$fileName;
        move_uploaded_file($file['tmp_name'],$path);
        ?>
        <script>
            alert("Success");
            document.location.href="../index.php";
        </script>
        <?php
    }
}

?>