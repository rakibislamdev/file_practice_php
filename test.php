 <?php
header('Content-type: image/jpg');

    $image = array() //Populate this array with the image paths

    //Create the Letters Image Objects
      foreach($image as $a){
        $image['obj'][] = imageCreateFromPNG($a);
      }unset($a);

      $canvasW = 300;
      $canvasH = 300;

    //Create Canvas
      $photoImage = imagecreatetruecolor($canvasW,$canvasH);
      imagesavealpha($photoImage, true);
      $trans_color = imagecolorallocatealpha($photoImage, 0, 0, 0, 127);
      imagefill($photoImage, 0, 0, $trans_color);

    //Merge Images
      $Offset_y = 0;
      $images_by_row = 3;
      $images_rows_height = 100; // height of each image row
      $counter = 0;

      foreach($image['obj'] as $a){
        $counter++;

        $width = ceil(imagesx($a));
        $height = ceil(imagesy($a));

        if(!isset($offset)){ $offset = 1; }

        imageComposeAlpha($photoImage, $a, $offset, $Offset_y,$width,$height);

        if($offset >= 1){
          $offset = $offset + $width;
        }

        //Check if new row next time
        if($counter >= $images_by_row){
          if($images_by_row%$counter){
            $offset_y += $images_rows_height;
          }
        }

      }unset($a);

      imagepng($photoImage);

      ?>


