<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/upload.css
    ">
    <title>Upload</title>
</head>
<body>
    <script src="script/jquery.min.js"></script>
    <script>
        var fileName;
        function getFile(file){
            fileName=file.files[0].name;
            $('.custom-file-label').html(fileName);
        }
    </script>
    <div class="container">
        <form action="controller/uploadStruk.php" enctype="multipart/form-data" method="post">
            <div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01"
                        aria-describedby="inputGroupFileAddon01" name="uploadedFile" onchange="getFile(this);">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="submit-btn">
                <input type="submit" value="submit" class="btn btn-primary" name="submit-btn">
            </div>
        </form>
    </div>
</body>
</html>