<?php
function loadImage($imageInputBoxName,$pathtoStore,$guid){
    $uploadOk=0; 
    $is_file_move='no';
    if (function_exists('date_default_timezone_set'))
    {
        date_default_timezone_set('Asia/Kolkata');
    }
        $date = getDateForDb();
        $image_date = getDateForImageName();
        $target_dir = $pathtoStore.$guid."/";
        if(!is_dir($target_dir)){
            //Directory does not exist, so lets create it.
            mkdir($target_dir, 755, true);
        }//$target_file = $target_dir . basename($_FILES["upload_pic"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo(basename($_FILES[$imageInputBoxName]["name"]),PATHINFO_EXTENSION);
	if(!isset($imageFileType)){
		
	}
        $uniquepicName = $guid."_".$image_date.".".$imageFileType;
        $target_file = $target_dir .$uniquepicName;
        // Check if image file is a actual image or fake image
        if(isset($submit)){
            $check = getimagesize($_FILES[$imageInputBoxName]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
                return null;
            }
        }
        if (file_exists($target_file)) {
            echo "Error in Image";
            $uploadOk = 0;
            return null;
        }
        // Check file size
        if ($_FILES[$imageInputBoxName]["size"] > 500000) {
           echo"Image size error";
            $uploadOk = 0;
            return null;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
            echo"Image Bad Formats";
            $uploadOk = 0;
            return null;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Image error";
            return null;
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES[$imageInputBoxName]["tmp_name"], $target_file)) {
                //system_message("The file ". basename( $_FILES[$imageInputBoxName]["name"]). " has been uploaded.");
                $is_file_move='yes';
            } else {
                register_error(elgg_echo('videos:imageUpload'));
                return null;
            }
        }
        
        if(basename($_FILES[$imageInputBoxName]["name"]) != null || basename($_FILES[$imageInputBoxName]["name"]) != '')
        {$image_path = $target_file;}
        else
        {$image_path = 'images/123/profile.png';}
        return ['url'=>$image_path,'status'=>$uploadOk,'isFileMove'=>$is_file_move];
}
function getDateForDb(){
    $today = getdate();
    $Y=$today[year];;
    $m=$today[mon];;
    $d=$today[mday];;
    $H=$today[hours];;
    $i=$today[minutes];
    $s=$today[seconds];
   return $date = date($Y."-".$m."-".$d." ".$H.":".$i.":".$s ,Time());
}
function getDateTimeForDb(){
   return getDateForDb();
}
function getDateForImageName(){
    $today = getdate();
    $Y=$today[year];;
    $m=$today[mon];;
    $d=$today[mday];;
    $H=$today[hours];;
    $i=$today[minutes];
    $s=$today[seconds];
    return $image_date = date($Y.$m.$d.$H.$i.$s ,Time());
}?>