<?php
class htmlTags {
    static public function headerCell($input) {
        echo '<th>' . $input . '</th>';
    }
    static public function standardCell($input) {
        echo '<td>' . $input . '</td>';
    }
    static public function openTableHeader() {
        echo '<thead>';
    }

    static public function openTableBody() {
        echo '<tbody>';
    }

    static public function openTableRow() {
        echo '<tr>';
    }
    static public function closeTableHeader() {
        echo '</thead>';
    }

    static public function closeTableBody() {
        echo '</tbody>';
    }

    static public function closeTableRow() {
        echo '</tr>';
    }
    static public function openTable($input) {
        echo "<table border = $input>";
    }
    static public function closeTable() {
        echo '</table>';
    }
    static public function horizontalRule() {
        return '<hr>';
    }
    static public function headingOne($text) {
        return '<h1>' . $text . '</h1>';
    }
}
