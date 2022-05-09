<?php

echo '<pre>';
var_dump($_POST);
echo '</pre>';

echo $_POST['field1'];
echo '<br>';
echo gettype($_POST['field1']);
echo '<br>';

echo $_POST['field2'];
echo '<br>';
echo gettype($_POST['field2']);
echo '<br>';

foreach ($_POST as $key => $value){
    echo "{$key}: {$value}";
    echo '<br>';
};

