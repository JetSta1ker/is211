<?php
include("./interfaces/FileStorageInterface.php");

class FileStorage implements FileStorageInterface
{
    public function saveData($nameFile, $arr)
    {
        $json = json_encode($arr);
        $handle = fopen($nameFile, "w");
        fwrite($handle, $json);
        fclose($handle);
    }
    public function loadData($nameFile): ?array
    {
        $handle = fopen($nameFile, "r");
        $data = fread($handle, filesize($nameFile));
        $arr = json_decode($data, true);
        return $arr;
    }
}
