<?php
// Google Sheets API configuration
$sheetID = "1ywCwy_bDolWM1gV_NcCTby2-CmuEZnWHyLTFV58DFmQ"; // Replace with your actual Sheet ID
$apiKey = "AIzaSyBzQ0cRTrbf_vxrB75nh8AoV3BtawPiiCQ"; // Replace with your API Key
$apiURL = "https://sheets.googleapis.com/v4/spreadsheets/$sheetID/values/Sheet1?key=$apiKey";

$rows_count = 8; // Number of rows to be displayed

// Fetch the Google Sheets data
$response = file_get_contents($apiURL);
$data = json_decode($response, true);
if (isset($data['values']) && count($data['values']) > 1) {
for ($i = 1; $i <= min($rows_count, count($data['values']) - 1); $i++) {	

// Get the column wise data from Google Sheet, if no value then show N/A
$column_1 = isset($data['values'][$i][0]) ? htmlspecialchars($data['values'][$i][0]) : "N/A";
$column_2 = isset($data['values'][$i][1]) ? htmlspecialchars($data['values'][$i][1]) : "N/A";
$column_3 = isset($data['values'][$i][2]) ? htmlspecialchars($data['values'][$i][2]) : "N/A";
$column_4 = isset($data['values'][$i][3]) ? htmlspecialchars($data['values'][$i][3]) : "N/A";
$column_5 = isset($data['values'][$i][4]) ? htmlspecialchars($data['values'][$i][4]) : "N/A";
?>

<?php } ?>
<div class="row">
<div><?php echo $column_1;?></div>
<div><?php echo $column_2;?></div>
<div><?php echo $column_3;?></div>
<div><?php echo $column_4;?></div>
<div><?php echo $column_5;?></div>
</div>
<?php } ?>