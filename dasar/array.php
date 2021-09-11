<?php
$array = [];
$array[] = 'One';
$array[] = 'Two';
$array[] = 'Three';
$array[] = 'Four';
echo '<pre>';
print_r($array);
?>

<br>

<?php
$employee = [
    'name' => 'Akbar Ginanjar',
    'email' => 'akbarginanjar0@gmail.com',
    'phone' => '1234567890',
];

// echo $employee['name'];

foreach ($employee as $key => $value){
    echo $key . ':' . $value;
    echo '<br>';
}
?>