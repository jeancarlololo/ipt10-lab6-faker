<?php

class FileUtility
{
    public static function writeToFile($filename, $data, $header = [])
    {
        $file = fopen($filename, 'w');
        if (!$file) {
            throw new Exception("Unable to open file for writing: $filename");
        }

       
        if (!empty($header)) {
            fputcsv($file, $header);
        }

        
        foreach ($data as $line) {
            fputcsv($file, $line);
        }

        fclose($file);
    }

    public static function readFromFile($filename)
    {
        $data = [];
        if (($file = fopen($filename, 'r')) !== false) {
            while (($line = fgetcsv($file)) !== false) {
                $data[] = $line;
            }
            fclose($file);
        } else {
            throw new Exception("Unable to open file for reading: $filename");
        }
        return $data;
    }
}
