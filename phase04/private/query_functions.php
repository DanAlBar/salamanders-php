<?php

  function find_all_salamanders() {
    global $db;

    $sql = "SELECT * FROM salamander ";
    $sql .= "ORDER BY name ASC";
    $salamander = mysqli_query($db, $sql);
    confirm_salamander_set($salamander);
    return $salamander;
  }

  function find_salamander_by_id($id) {
    global $db;

    $sql = "SELECT * FROM salamander ";
    $sql .= "WHERE id='" . $id . "'";
    $salamander = mysqli_query($db, $sql);
    confirm_salamander_set($salamander);
    $salamander_object = mysqli_fetch_assoc($salamander);
    mysqli_free_result($salamander);
    return $salamander_object; // returns an assoc. array
  }

?>
