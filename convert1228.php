<?php
//讀取 composer 所下載的套件
require_once('vendor/autoload.php');
require_once 'db.inc.php';

//你的 excel 檔案路徑 (含檔名)
$inputFileName = './products1230.xlsx';


//透過套件功能來讀取 excel 檔
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileName);

//讀取當前工作表(sheet)的資料列數
$sheet = $spreadsheet->getSheetByName('prod_weight');
// print_r($sheet);

// $sheet = $spreadsheet->getActiveSheet();
$highestRow = $sheet->getHighestRow();


for ($i = 2; $i <= $highestRow; $i++) {
    if ($sheet->getCell("A" . $i)->getValue() === '') break;
    $coffee_size = $sheet->getCell("A" . $i)->getValue();
    $prod_id = $sheet->getCell("B" . $i)->getValue();
    // $prod_thumbnail = $sheet->getCell("D" . $i)->getValue();
    // $prod_price = $sheet->getCell("E" . $i)->getValue();
    // $prod_description = $sheet->getCell("F" . $i)->getValue();
    // $prod_bake = $sheet->getCell("G" . $i)->getValue();
    // $prod_flavor = $sheet->getCell("H" . $i)->getValue();
    // $prod_area = $sheet->getCell("I" . $i)->getValue();
    // $prod_process = $sheet->getCell("J" . $i)->getValue();
    // $cat_id = $sheet->getCell("K" . $i)->getValue();
    // echo "{$navbar_name}, {$parent_id}\n"; //\n是ターミナル讀取用的換行

    // $sql = "INSERT INTO `products`(`prod_name`, `prod_image`, `prod_thumbnail`, `prod_price`, `prod_description`, `prod_bake`, `prod_flavor`, `prod_area`, `prod_process`, `cat_id` )
    //         VALUES ('{$prod_name}', '{$prod_image}', '{$prod_thumbnail}', {$prod_price}, '{$prod_description}', '{$prod_bake}', '{$prod_flavor}', '{$prod_area}', '{$prod_process}', {$cat_id})";
    //id可以不用寫會自動代入

    $sql = "INSERT INTO `prod_weight`(`coffee_size`, `prod_id`)
            VALUES ('{$coffee_size}', {$prod_id})";


    echo $sql . "\n";
    $stmt = $pdo->query($sql);
    if ($stmt->rowCount() > 0) {
        echo $pdo->lastInsertId() . "\n";
    }
}
