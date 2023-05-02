<?php

session_start();
$db = mysqli_connect("localhost", "root", "", "data_immunotherapy");

if (isset($_POST['submit'])) {
    // Mengambil nilai-nilai input dari form
    $age_inp = $_POST['age'];
    $warts_inp = $_POST['warts'];
    $induration_inp = $_POST['induration'];
    $ageasli = $age_inp;
    $wartsasli = $warts_inp;
    $indurationasli = $induration_inp;
    
    $query = "SELECT * FROM tabel_immuno";
    $result = mysqli_query($db, $query);
    
    $data = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
        $age = $row['age'];
        $warts = $row['warts'];
        $induration = $row['induration'];
        $treatment = $row['treatment'];
        
        // Validasi input treatment
        if ($treatment != 0 && $treatment != 1) {
            echo "Input treatment tidak valid";
            exit;
        }
    }

$kombinasi = array();
$io = array();
$output = array();
$treatment = array();
$age = "";
$warts = "";
$induration = "";
foreach ($data as $row) {
    if ($row['age'] < 30) {
        $age = 1;
    } else {
        $age = 0;
    }
    if ($row['warts'] > 6) {
        $warts = 1;
    } else {
        $warts = 0;
    }
    if ($row['induration'] > 16) {
        $induration = 1;
    } else {
        $induration = 0;
    }
    $kombinasi[] = $age.$warts.$induration.$row['treatment'];
    $io[] = $age.$warts.$induration;
    $treatment[] = $row['treatment'];
}


$treatment0 =  count(array_keys($treatment, 0));
$treatment1 =  count(array_keys($treatment, 1));
$all = count($data);
$counts = array_count_values($io);
$values = array(
    'nilai_111' => $counts['111'] ?? 0,
    'nilai_110' => $counts['110'] ?? 0,
    'nilai_101' => $counts['101'] ?? 0,
    'nilai_100' => $counts['100'] ?? 0,
    'nilai_011' => $counts['011'] ?? 0,
    'nilai_010' => $counts['010'] ?? 0,
    'nilai_001' => $counts['001'] ?? 0,
    'nilai_000' => $counts['000'] ?? 0,
);

$cwitho = array_count_values($kombinasi);

$input_bayes = array();
if ($age_inp < 30) {
    $age_val = 1;
} else {
    $age_val = 0;
}
if ($warts_inp > 6) {
    $warts_val = 1;
} else {
    $warts_val = 0;
}
if ($induration_inp > 16) {
    $induration_val = 1;
} else {
    $induration_val = 0;
}

$input_bayes[] = $age_val.$warts_val.$induration_val;
$temp_0 = $cwitho[$input_bayes[0]."0"] ?? 0;
$temp_1 = $cwitho[$input_bayes[0]."1"] ?? 0;
$pA = "";
$prob_0 = "";
$prob_1 = "";

if ($prob_0 == 0 && $prob_1 == 0) {
    // jika probabilitas 0, maka naive bayes = 0
    $naive_bayes = 0;
} else {
    // menghitung probabilitas prior
    $pA = $values['nilai_'.$input_bayes[0]]/$all;
    // menghitung probabilitas posterior
    $prob_0 = $temp_0/$treatment0;
    $prob_1 = $temp_1/$treatment1;
    $pengali = $pA * $prob_1;
    $pembagi = $pA * $prob_0;
    $naive_bayes = $pengali / ($pengali + $pembagi);
}
$hasil = $naive_bayes > 0.5;

// menyimpan data ke dalam tabel di database
// $sql = "INSERT INTO tabel_immuno VALUES (null, '$ageasli', '$wartsasli', '$indurationasli', '$hasil')";
// if (mysqli_query($db, $sql)) {
//     // echo "Data berhasil disimpan";
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($db);
// }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prediction result of immunotherapy</title>
</head>
<body style="background-color: #f7f7f7; font-family: Arial, sans-serif;">
    <img style="position: fixed; bottom: 0; left: 0; height: 100%; z-index: -1;" src="wave.png">
    <div style="text-align: center; margin-top: 50px;">
        <h2 style="color: #333;">Hasil Prediksi</h2>
    </div>
    <div style="margin: 50px auto; width: 50%;">
        <table style="border-collapse: collapse; width: 100%;">
            <tr>
                <td style="border: 1px solid #333; padding: 10px;">Age</td>
                <td style="border: 1px solid #333; padding: 10px;"><?php echo $ageasli ?></td>
            </tr>
            <tr>
                <td style="border: 1px solid #333; padding: 10px;">Number of Warts</td>
                <td style="border: 1px solid #333; padding: 10px;"><?php echo $wartsasli ?></td>
            </tr>
            <tr>
                <td style="border: 1px solid #333; padding: 10px;">Induration Diameter</td>
                <td style="border: 1px solid #333; padding: 10px;"><?php echo $indurationasli ?></td>
            </tr>
            <tr>
                <td style="border: 1px solid #333; padding: 10px;">Hasil Prediksi</td>
                <td style="border: 1px solid #333; padding: 10px;"><?php echo ($naive_bayes*100)."%" ?></td>
            </tr>
        </table>
        <table style="border-collapse: collapse; width: 100%; margin-top: 20px;">
            <?php
            if ($hasil){
                echo "<h3 style='color: green;'>Immunotherapy Kemungkinan Berhasil</h3>";
            } else{
                echo "<h3 style='color: red;'>Immunotherapy Kemungkinan Tidak Berhasil</h3>";
            }
            ?>   
        </table>
    </div>
    <div style="text-align: center; margin-top: 50px;">
    <a style="color: #333; text-decoration: none; border: 1px solid #333; padding: 10px 20px; border-radius: 5px;" href="formNew.php">Kembali ke Immunotherapy Predictor</a>
    </div>
    <style>
        a:hover {
            background-color: #00BFA6;
            color: #fff;
        }
    </style>

</body>
</html>
