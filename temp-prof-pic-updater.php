//problem is naguupdate and nagiistay pero hindi kita pic, yung small logo lang na green, imma keep updating//
<?php
require 'dbconnection.php';
session_start(); 
$_SESSION["id"] = 1; 
$sessionId = $_SESSION["id"];

$result = mysqli_query($conn, "SELECT * FROM userinfo WHERE id = $sessionId");

if (!$result) {
    echo "Error: " . mysqli_error($conn);
} else {
    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Update Profile Pic</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form class="form" id="form" action="" enctype="multipart/form-data" method="post">
        <div class="upload">
            <?php
            $id = $user["id"];
            $name = $user["username"];
            $image = $user["userimg"];
            ?>
            <img src="imgs/<?php echo $image; ?>" width="125" height="125" title="<?php echo $image; ?>">
            <div>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="hidden" name="name" value="<?php echo $name; ?>">
                <input type="file" name="image" id = "image" accept = ".jpg, .jpeg, .png">
                <i class="fa fa-camera" style = "color: #fff"></i>
            </div>
        </div>
    </form>
    <script type="text/javascript">
        document.getElementById("image").onchange = function(){
            document.getElementById('form').submit();
        }    
    </script>
    <?php
    if(isset($_FILES["image"]["name"])){
        $id = $_POST["id"];
        $name = $_POST["name"];

        $imageName = $_FILES["image"]["name"];
        $imageSize = $_FILES["image"]["size"];
        $tempName = $_FILES["image"]["tmp_name"];

        $validationImageExtension = ['jpg', 'jpeg', 'png'];
        $imageExtension = explode('.', $imageName);
        $imageExtension = strtolower(end($imageExtension));
        if(!in_array($imageExtension, $validationImageExtension)){
            echo
            "
            <script>
                alert('Invalid Image Extension');
                document.location.href = '../oasiscafeinxampp';
            </script>
            "
            ;
        }
        elseif ($imageSize > 1200000)
        {
            echo
            "
            <script>
                alert('Image Size Is Too Large');
                document.location.href = '../oasiscafeinxampp';
            </script>
            "
            ;
        }
        else{
            $newImageName = $name . " - " . date("Y.m.d") . " - " . date("h.i.sa");
            $newImageName .= "." . $imageExtension;
            $query = "UPDATE userinfo SET userimg = '$newImageName' WHERE id = $id";
            mysqli_query($conn, $query);
            move_uploaded_file($tempName, 'imgs/' . $newImageName);
            "
            <script>
                document.location.href = '../oasiscafeinxampp';
            </script>
            "
            ;
        }

    }
    ?>
</body>
</html>
<?php
    } else {
        // No rows found for the given session ID
        echo "No user found with ID: $sessionId";
    }
}
?>