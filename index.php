
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .x{
            margin: 20px 100px;
        }
    </style>
</head>
<body>
    

<form method='post' action='process.php' enctype='multipart/form-data'><div class = "x">
 <h3>Select file to upload:</h3> 
 <input class = 'form-control' type='file' accept = 'audio/mp3,video/mp4,image/*' name= 'uploadedName' required/>
 <input type='submit' class="btn btn-outline-primary" value= 'Nahrát' name='submit' href = 'process.php'/>
</div>
</form>

</body>
</html>