<?php
class homepage extends page {

public function get() {

$form = '<form action="index.php" method="post">';
    $form .= '<input type="submit" value="Click here to proceed">';
    $form .= '</form> ';
    $this->html.= htmlTags::headingOne("Ready to upload a CSV File?");
    $this->html .= $form;
}
public function post() {
    header('Location:index.php?page=uploadfile');
}
}
