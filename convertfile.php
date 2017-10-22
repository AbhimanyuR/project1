<?php
class convertfile extends page{

    public function get(){

    if (($uploaded_file = fopen("./uploads/" . $_GET['filename'], "r")) !== FALSE) {
        $row_pos = 1;
        htmlTags::openTable(2);

        while (($content = fgetcsv($uploaded_file)) !== FALSE) {
        if (!empty($content)) {
            $pos = 0;
            foreach ($content as $check) {
            if (!empty(trim($check))) {
                $pos = 1;
                break;
            }

        }
        if ($pos != 0) {
        $num = count($content);
        if ($row_pos == 1) {
            htmlTags::openTableHeader();
            htmlTags::openTableRow();
        }
        else {
        htmlTags::openTableRow();
        }

        for ($c = 0; $c < $num; $c++) {
            if (empty($content[$c])) {
            $value = "";
            }
            else {
            $value = $content[$c];
            }

            if ($row_pos == 1) {
            htmlTags::headerCell($value);
            }
            else {
            htmlTags::standardCell($value);
            }

        }

        if ($row_pos == 1) {
            htmlTags::closeTableRow();
            htmlTags::closeTableHeader();
            htmlTags::openTableBody();
         }
        else {
        htmlTags::closeTableRow();
        }
        $row_pos++;

            }

        }
    }

    htmlTags::closeTableBody();
    htmlTags::closeTable();
    fclose($uploaded_file);
}

}

}