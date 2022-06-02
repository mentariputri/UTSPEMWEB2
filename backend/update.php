<?php
require_once '../koneksi.php';

$rawData = file_get_contents('php://input');
$data = json_decode($rawData);

$sql = "update toko_buku set " .
       "  penulis='" . $data->penulis . "'," .
       "  penerbit='" . $data->penerbit . "' " .
       "where judul_buku='" . $data->judul_buku . "'";
$result = pg_query($sql);
$row = pg_affected_rows($result);
$obj = new stdClass();
if($row > 0) {
    $obj->result = "success";
} else {
    $obj->result = "failed";
}
echo json_encode($obj);
?>