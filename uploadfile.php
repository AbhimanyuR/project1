<?php
class uploadfile extends page
{

public function get()
{
    $form = '<form action="index.php?page=uploadfile" method="post"
               enctype="multipart/form-data">';
    $form .= '<input type="file" name="fileToUpload" id="fileToUpload">';
    $form .= '<input type="submit" value="Upload File" name="submit">';
    $form .= '</form> ';
    $this->html.= htmlTags::headingOne("Upload CSV File");
    $this->html .= $form;

}

public function post() {

    $directory = "uploads/";

    $file = $directory . basename($_FILES["fileToUpload"]["name"]);

    $fileType = pathinfo($file,PATHINFO_EXTENSION);

    if (file_exists($file)) {
    echo "Sorry, file already exists.";
    }
    elseif($fileType != "csv" ) {
    echo "Sorry, only CSV files are allowed.";
    }

    else {
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $file);
        header('Location:index.php?page=convertfile&filename='.$_FILES["fileToUpload"]["name"]);
    }


}
}
