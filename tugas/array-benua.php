<?php

// $array = [
//     ['Benua Asia' => ['Benua Asia', 'Bandung', 'Garut', 'Tasikmalaya', 'Purwakarta', 'Pangandaran'],
//      'Bandung', 'Garut', 'Tasikmalaya', 'Purwakarta', 'Pangandaran'],
     
//     ['Benua Afrika', 'Kediri', 'Blitar', 'Malang', 'Probolinggo'],
//     ['Benua Australia', 'Semarang', 'Tegal', 'Solo', 'Wonosobo'],
//     ['Benua Eropa', 'Semarang', 'Tegal', 'Solo', 'Wonosobo'],
// ];
// echo "<pre>";
// print_r ($array);

// $array = [
//     'Benua Asia' => 'Indonesia : Jakarta, Bandung, Surabaya, Palembang, Padang.<br>
//     India : New Delhi, Mumbai, Chennai, Bengaluru, Jaipur.<br>
//     Jepang : Kyoto, Tokyo, Nagasaki, Osaka, Hiroshima.',

//     'Benua Afrika' => 'Afrika Selatan : Cape Town, Pretoria, Durban, Nelspruit, Polok Wane.<br>
//     Nigeria : Lagos, Abuja, Ibadan, Kaduna, Jos.<br>
//     Ghana : Accra, Kumasi, Tamale, Tongo, Tumu.',

//     'Benua Australia' => 'New South Wales : Sydney, Wollongong, Albury, Oange, Broken Hill.<br>
//     Queensland : Brisbane, Cairns, Gold Coast, Mount Isa, Tiaro.<br>
//     Victoria : MelBoume, Ballarat, Geeling, Bendigo, Benalla.',
    
//     'Benua Eropa' => 'Spanyol : Barcelona, Sevilla, Bilbao, Madrid, Granada.<br>
//     Jerman : Berlin, Munchen, Hamburg, Koln, Dresden.<br>
//     Inggris : London, Manchester, Liverpool, Durham, Derby.',
// ];

    // ['Benua Asia' => 'Indonesia', ['Jakarta', 'Bandung', 'Surabaya', 'Palembang', 'Padang'],
    // ['Benua Asia' => 'India', ['New Delhi', 'Mumbai', 'Chennai', 'Bengaluru', 'Jaipur']],
    // ['Benua Asia' => 'Jepang', ['Kyoto', 'Tokyo', 'Nagasaki', 'Osaka', 'Hiroshima']],],

    // ['Benua Afrika' => 'Afrika Selatan', ['Cape Town', 'Pretoria', 'Durban', 'Nelspruit', 'Polok Wane'],
    // ['Benua Afrika' => 'Nigeria', ['Lagos', 'Abuja', 'Ibadan', 'Kaduna', 'Jos']],
    // ['Benua Afrika' => 'Ghana', ['Accra', 'Kumasi', 'Tamale', 'Tongo', 'Tumu']],],

    // ['Benua Australia' => 'New South Wales', ['Sydney', 'Wollongong', 'Albury', 'Orange', 'Broken Hill'],
    // ['Benua Australia' => 'Queensland', ['Brisbane', 'Cairns', 'Gold Coast', 'Mount Isa', 'Tiaro']],
    // ['Benua Australia' => 'Victoria', ['MelBoume', 'Ballarat', 'Geeling', 'Bendigo', 'Benalla']],],

    // ['Benua Eropa' => 'Spanyol', ['Barcelona', 'Sevilla', 'Madrid', 'Granada', 'Bilbao'],
    // ['Benua Eropa' => 'Jerman', ['Berlin', 'Munchen', 'Hamburg', 'Koln', 'Dresden']],
    // ['Benua Eropa' => 'Inggris', ['London', 'Manchester', 'Liverpool', 'Durham', 'Derby']],],

// echo '<br>';
// foreach ($array as $key => $value){
//     echo '<ul>';
//           echo '<li><b>' . $key . ' </b><br> ' . $value . '</li>';
//           echo '<br>';
//           echo '</ul>';
//       }

// echo "<br>";
// echo "Pemanggilan Array 2 dimensi" . "<br>";
// echo $perusahaan['Hobi'][1] . "<br>";
// echo $perusahaan['Media Sosial']['Instagram'];


$negara = [
    'Benua Asia' => [
        'Indonesia : ', 'Bandung', 'Jakarta', 'Padang', 'Palembang', 'Surabaya',
        'India :', 'New Delhi', 'Mumbai', 'Chennai', 'Bengaluru', 'Jaipur',
        'Jepang :', 'Kyoto', 'Tokyo', 'Nagasaki', 'Osaka', 'Hiroshima',
    ],
    'Benua Afrika' => [
        'Afrika Selatan :', 'Cape Town', 'Pretoria', 'Durban', 'Nelspruit', 'Polok Wane',
        'Nigeria :', 'Lagos', 'Abuja', 'Ibadan', 'Kaduna', 'Jos',
        'Ghana :', 'Accra', 'Kumasi', 'Tamale', 'Tongo', 'Tumu',
    ],
    'Benua Australia' => [
        'New South Wales :', 'Sydney', 'Wollongong', 'Albury', 'Oange', 'Broken Hill',
        'Queensland :', 'Brisbane', 'Cairns', 'Gold Coast', 'Mount Isa', 'Tiaro',
        'Victoria :', 'MelBoume', 'Ballarat', 'Geeling', 'Bendigo', 'Benalla',
    ],
    'Benua Eropa' => [
    'Spanyol :', 'Barcelona', 'Sevilla', 'Madrid', 'Granada', 'Bilbao',
    'Jerman :', 'Berlin', 'Munchen', 'Hamburg', 'Koln', 'Dresden',
    'Inggris :', 'London', 'Manchester', 'Liverpool', 'Durham', 'Derby',
    ],
    //19201753195
];
echo '<br>';
echo '<ul>';
foreach ($negara as $key => $value) {
    echo '<li>' . $key . '<br>' . $value[0] . $value[2] .', '. $value[3].', ' . $value[4].', ' . $value[5].'<br>'
    . $value[6] . $value[7].', ' . $value[8].', ' . $value[9].', ' . $value[10].', ' . $value[11].'<br>'
    . $value[12] . $value[13].', ' . $value[14].', ' . $value[15].', ' . $value[16].', ' . $value[17].'<br>'. '</li><br>';
}
echo '</ul>';
?>

