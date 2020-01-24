<?php
        
$dir = 'images';

if(!is_dir($dir))
{
    echo 'Directory not found';
    exit; 
}

$imgfile = NULL;
// open the directory handle
if ($handle01 = opendir($dir)) {

    // output headers to create and download csv file
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename="imagelist.csv"');

    // file pointer to the output stream
    $output = fopen('php://output', 'w');

    // output the column headings in csv file
    fputcsv($output, array('Image-directory', 'Image-list'));

    // loop over the directory
    while (false !== ($entry01 = readdir($handle01))) {

        // Exclude . & .. from inner directory list
        if ($entry01 != "." && $entry01 != "..") {

            $innerdir = $entry01;

            //get inner directory path
            $innerdirpath = $dir."/".$entry01;

            // open the inner directory handle
            if ($handle02 = opendir($innerdirpath)) {

                // loop over the inner directory
                while (false !== ($entry02 = readdir($handle02))) {

                    // Exclude . & .. from image file list
                    if ($entry02 != "." && $entry02 != "..") {

                        //contacenate image file names separated by comma
                        $imgfile = $imgfile.$entry02.",";
                    }    
                }
                closedir($handle02);
            }
            else{
                // write the error in csv file if any inner directory is inaccessible
                $imgfile = 'Inaccessible directory';
            } 
            $row = array($innerdir,$imgfile);
            fputcsv($output, $row);
            $imgfile = NULL;

        }
    }
    closedir($handle01);
}

else{
    echo 'Inaccessible directory';
}

?>
