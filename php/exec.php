<?php

require_once 'vendor/autoload.php';

use App\NewFeature\ScalarTypeSample;
use App\NewFeature\NoScalarTypeSample;

try {
    //$object = new ScalarTypeSample();
    $object = new NoScalarTypeSample();

    echo $object->someMethod('a');
    echo "\n";
} catch (TypeError $e) {
    echo '引数の型が正しくありません。';
    echo "\n";
} catch (Exception $e) {
    echo '予期せぬ例外が発生。';
    echo "\n";
}
