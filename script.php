<?php
error_reporting(E_ALL);
foreach (glob("functions/*.php") as $filename) {
    include $filename;
}

function testProgram()
{
    $uppercaseText = new TextToUppercase();
    $alternateText = new AlternateText();
    $generateCSV = new GenerateCSV();
    $helper = new Helper();
    $testMessage = "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.";
    $issues = [];

    $test1 = ctype_upper($uppercaseText->textConvertToUpperCase(($testMessage)));
    if ($test1 == true) {
        array_push($issues, "uppercase.php");
    }
    $test2 = $alternateText->alternatingString($testMessage);
    if ($test2 == false || strpos($test2, "Warning:") || strpos($test2, "Error:")) {
        array_push($issues, "alternating_text.php");
    }
    $test3 = $generateCSV->generateTextToCSV($testMessage);
    if ($test3 == false || strpos($test3, "Warning:") || strpos($test3, "Error:")) {
        array_push($issues, "generate_csv.php");
    }

    if (count($issues) > 0) {
        return implode(",", $issues);
    } else {
        $helper->deletePath('download');
        return true;
    }

}

$uppercaseText = new TextToUppercase();
$alternateText = new AlternateText();
$generateCSV = new GenerateCSV();
$response = new customResponse();
$test = testProgram();

if ($test == true) {

    $string = readline('Enter text to begin: ');

    if (!empty($string)) {

        try {

            echo $response->info(strtoupper($string));
            echo $response->info($alternateText->alternatingString($string));

            try {
                if ($generateCSV->generateTextToCSV($string)) {
                    echo $response->info("CSV created!");
                }
            } catch (customException $e) {
                echo $e->errorMessage();
            }

        } catch (Exception $e) {
            echo $e->getMessage();
        }

    } else {
        throw new Exception("No input found.");
    }
} else {
    throw new Exception("Program has shut down. Issues found in files [" . $test . "]");
}
