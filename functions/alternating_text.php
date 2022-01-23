
<?php
class AlternateText
{
    public function alternatingString($string)
    {
        try {
            if ($string !== "") {
                $result = '';
                $vals = explode(' ', $string);
                foreach ($vals as $val) {
                    $val = str_split($val);
                    $newVal = '';
                    foreach ($val as $key => $_val) {
                        $key % 2 == 0 ? $newVal .= strtoupper($_val) : $newVal .= strtolower($_val); // alternating uppercase / lowercase characters
                    }
                    $result .= $newVal . " ";
                }
                return $result;
            } else {
                return false;
            }
        } catch (customException $e) {
            echo $e->errorMessage();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
?>