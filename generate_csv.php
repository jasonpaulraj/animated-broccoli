<?php
class GenerateCSV
{
    public function generateTextToCSV($string)
    {
        try {
            if (!empty($string)) {
                $_string = str_split($string);
                if (count($_string) > 0) {
                    $filename = 'download/output_' . date('YmdHis') . '.csv';
                    $dirname = dirname($filename);
                    if (!is_dir($dirname)) {
                        mkdir($dirname, 0755, true);
                    }
                    $fp = fopen($filename, 'w');
                    fputcsv($fp, $_string);
                    fclose($fp);
                    return true;
                }
                return false;
            }
            return false;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
