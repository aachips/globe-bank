<?php

function find_all_subjects() {
    global $db;
    $sql = "SELECT * FROM SUBJECTS ";
    $sql .= "ORDER BY position ASC";
    $result = mysqli_query($db, $sql);
    return $result;
}

function find_all_pages() {
    global $db;
    $sql = "SELECT * FROM pages ";
    $sql .= "ORDER BY subject_id ASC, position ASC";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
}

?>