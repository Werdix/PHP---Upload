<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    //var_dump($_FILES);
    $targetDir = "uploads/";
    
    $targetFile = $targetDir . basename($_FILES["uploadedName"]["name"]);
    $imageFileType = pathinfo($targetFile,PATHINFO_EXTENSION);
    
    $uploadSuccess = true; //pomocná  - označí nám chybu

 //kontrola existence
 //if (file_exists($targetFile)) {
     //echo "Soubor již existuje!";
     //$uploadSuccess = false;
 //}
 
 // Kontrola velikosti (vlastní limit)
 if ($_FILES["uploadedName"]["size"] > 8000000) {
     echo "<p>Soubor je příliš velký</p>";
     $uploadSuccess = false;
 }
 
 // Kontrola typu – vždy WHITELIST
 //if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
 //&& $imageFileType != "gif" ) {
    // echo "Bohužel jsou podporovány jen soubory typů JPG, JPEG, PNG a GIF.";
     //$uploadSuccess = false;
 //}
 if (! $uploadSuccess) {
    echo "<p>Bohužel došlo k chybě uploadu</p>";

// pokud je vše v pořádku, uložíme soubor trvale
} 
else {
    if (move_uploaded_file($_FILES["uploadedName"]["tmp_name"], $targetFile)) {
        echo "Soubor ". basename( $_FILES["uploadedName"]["name"]). " byl uložen.";
        
        if($imageFileType == "mp4"||$imageFileType=="webm"||$imageFileType=="mov")
        {
            echo "<video width='320' height='240' autoplay><source src = '$targetFile'></video>";
        }
        elseif($imageFileType == "mp3"||$imageFileType == "wav")
        {
            echo "<audio controls autoplay><source src = '$targetFile'></audio>";
        }
        elseif($imageFileType=="png"||$imageFileType=="jpg"||$imageFileType=="jpeg"||$imageFileType=="gif")
        {
            echo "<img src = '$targetFile'/>";
        }
        else{
            echo "Neplatný typ souboru";
        }
    } else {
	 echo "<p>Bohužel došlo k chybě uploadu</p>";
    }
}

?>
</body>
</html>