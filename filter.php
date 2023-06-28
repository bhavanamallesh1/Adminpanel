<?php 
include("db2.php");
$x = 1;
$purl=null;
$skill=null;
$c1 = "";
$clink1 = null;
$d="";
$set = 0;
$sql = "SELECT * FROM data";
$result = mysqli_query($con, $sql);
if ($result->num_rows > 0) {
    $rows = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
$f = array();
if(isset($_POST['fname']) and strlen($_POST['fname']) !=0){
    $set = 1;
foreach ($rows as $row) {
    $rowName = strtolower($row['fname']);
    if (strtolower($_POST['fname']) === strtolower($row['fname'])) {
        $f[] = $row;
    }
}
}
if(count($f)>0){
    $rows = $f;
}
elseif($set === 1){
    $rows = [];
}
$set = 0;
 
unset($f);
$f = array();
if(isset($_POST['lname']) and strlen($_POST['lname']) !=0){
    $set = 1;
    foreach ($rows as $row) {
        if (strtolower($_POST['lname']) === strtolower($row['lname'])) {
            $f[] = $row;
        }
    }
}
if(count($f)>0){
    $rows = $f;
}
elseif($set === 1){
    $rows = [];
}
$set = 0;
 
 
unset($f);
$f = array();
if(isset($_POST['email1']) and strlen($_POST['email1']) !=0){
    $set = 1;
    foreach ($rows as $row) {
        if (strtolower($_POST['email1']) === strtolower($row['mail1'])) {
            $f[] = $row;
        }
    }
}
if(count($f)>0){
    $rows = $f;
}
elseif($set === 1){
    $rows = [];
}
$set = 0;
 
 
unset($f);
$f = array();
if(isset($_POST['puniversity']) and strlen($_POST['puniversity'])!=0){
    $set = 1;
    foreach ($rows as $row) {
        if (strtolower($_POST['puniversity']) === strtolower($row['pguniversityname'])) {
            $f[] = $row;
        }
    }
}
if(count($f)>0){
    $rows = $f;
}
elseif($set === 1){
    $rows = [];
}
$set = 0;
 
 
unset($f);
$f = array();
if(isset($_POST['pcountry']) and (($_POST['pcountry']!=="Select University country") and( $_POST['pcountry']!=="-") and strlen($_POST['pcountry'])!=0)){
    $set = 1;
    foreach ($rows as $row) {
        if ($_POST['pcountry'] === $row['pgcountry']) {
            $f[] = $row;
        }
    }
}
if(count($f)>0){
    $rows = $f;
}
elseif($set === 1){
    $rows = [];
}
$set = 0;
 
 
$f = array();
if(isset($_POST['pstate'])  and ($_POST['pstate']!=="Select University state") and( $_POST['pstate']!=="-") and strlen($_POST['pstate'])!=0){
    $set = 1;
    foreach ($rows as $row) {
        if (strtolower($_POST['pstate']) === strtolower($row['pgstate'])) {
            $f[] = $row;
        }
    }
}
if(count($f)>0){
    $rows = $f;
}
elseif($set === 1){
    $rows = [];
}
$set = 0;
 
unset($f);
$f = array();
if(isset($_POST['pprog']) and strlen($_POST['pprog'])!=0){
    $set = 1;
    foreach ($rows as $row) {
        if (strtolower($_POST['pprog']) === strtolower($row['pgprogtype'])) {
            $f[] = $row;
        }
    }
}
if(count($f)>0){
    $rows = $f;
}
elseif($set === 1){
    $rows = [];
}
$set = 0;
 
 
unset($f);
$f = array();
if(isset($_POST['pspec']) and strlen($_POST['pspec'])!=0){
    $set = 1;
    foreach ($rows as $row) {
        if (strtolower($_POST['pspec']) === strtolower($row['pgspec'])) {
            $f[] = $row;
        }
    }
}
if(count($f)>0){
    $rows = $f;
}
elseif($set === 1){
    $rows = [];
}
$set = 0;
 
 
unset($f);
$f = array();
if(isset($_POST['pyear']) and strlen($_POST['pyear'])!=0){
    $set = 1;
    foreach ($rows as $row) {
        if (strtolower($_POST['pyear']) === strtolower($row['pgpassyear'])) {
            $f[] = $row;
        }
    }
}
if(count($f)>0){
    $rows = $f;
}
elseif($set === 1){
    $rows = [];
}
$set = 0;
 
 
unset($f);
$f = array();
if(isset($_POST['university']) and strlen($_POST['university'])!=0){
    $set = 1;
    foreach ($rows as $row) {
        if (strtolower($_POST['university']) === strtolower($row['uguniversityname'])) {
            $f[] = $row;
        }
    }
}
if(count($f)>0){
    $rows = $f;
}
elseif($set === 1){
    $rows = [];
}
$set = 0;
 
 
unset($f);
$f = array();
if(isset($_POST['ucountry']) and (($_POST['ucountry']!=="Select University country") and ($_POST['ucountry']!=="-") and strlen($_POST['ucountry'])!=0)){
    $set = 1;
    echo "<br>set = $set<br>";
    foreach ($rows as $row) {
        if (strtolower($_POST['ucountry']) === strtolower($row['ugcountry'])) {
            $f[] = $row; 
        }
    }
}
if(count($f)>0){
    $rows = $f;
}
elseif($set === 1){
    $rows = [];
}
$set = 0;
 
 

unset($f);
$f = array();
if(isset($_POST['ustate']) and (($_POST['ustate']!=="Select University state") and ($_POST['ustate']!=="-") and strlen($_POST['ustate'])!=0)){
    $set = 1;
    foreach ($rows as $row) {
        if (strtolower($_POST['ustate']) === strtolower($row['ugstate'])) {
            $f[] = $row;
        }
    }
}
if(count($f)>0){
    $rows = $f;
}
elseif($set === 1){
    $rows = [];
}
$set = 0;
 
 
unset($f);
$f = array();
if(isset($_POST['uprog']) and strlen($_POST['uprog'])!=0){
    $set = 1;
    foreach ($rows as $row) {
        if (strtolower($_POST['uprog']) === strtolower($row['ugprogtype'])) {
            $f[] = $row;
        }
    }
}
if(count($f)>0){
    $rows = $f;
}
elseif($set === 1){
    $rows = [];
}
$set = 0;
 
 
unset($f);
$f = array();
if(isset($_POST['uspec']) and strlen($_POST['uspec'])!=0){
    $set = 1;
    foreach ($rows as $row) {
        if (strtolower($_POST['uspec']) === strtolower($row['ugspecialization'])) {
            $f[] = $row;
        }
    }
}
if(count($f)>0){
    $rows = $f;
}
elseif($set === 1){
    $rows = [];
}
$set = 0;
 
 
unset($f);
$f = array();
if(isset($_POST['uyear']) and strlen($_POST['uyear'])!=0){
    $set = 1;
    foreach ($rows as $row) {
        if (strtolower($_POST['uyear']) === strtolower($row['ugpassyear'])) {
            $f[] = $row;
        }
    }
}
if(count($f)>0){
    $rows = $f;
}
elseif($set === 1){
    $rows = [];
}
$set = 0;
 
 
unset($f);
$f = array();
if(isset($_POST['rcountry']) and strlen($_POST['rcountry'])!=0){
    $set = 1;
    foreach ($rows as $row) {
        if (strtolower($_POST['rcountry']) === strtolower($row['country'])) {
            $f[] = $row;
        }
    }
}
if(count($f)>0){
    $rows = $f;
}
elseif($set === 1){
    $rows = [];
}
$set = 0;
 
unset($f);
$f = array();
if(isset($_POST['rstate']) and ($_POST['rstate']!=="Select resident state") and ($_POST['rstate']!=="-") and strlen($_POST['rstate'])!=0){
    $e = $_POST['rstate'];
    echo "<br><br>$e<br><br><br>";
    $set = 1;
    foreach ($rows as $row) {
        if (strtolower($_POST['rstate']) === strtolower($row['state'])) {
            $f[] = $row;
        }
    }
}
if(count($f)>0){
    $rows = $f;
}
elseif($set === 1){
    $rows = [];
}
$set = 0;
 
 
unset($f);
$f = array();
if(isset($_POST['applied']) and ($_POST['applied']!="--") and strlen($_POST['applied'])!=0 ){
    $set = 1;
    foreach ($rows as $row) {
        if (strtolower($_POST['applied']) === strtolower($row['appliedrole'])) {
            $f[] = $row;
        }
    }
}
if(count($f)>0){
    $rows = $f;
}
elseif($set === 1){
    $rows = [];
}
$set = 0;
 
 
unset($f);
$f = array();
if(isset($_POST['ptype'])  and ($_POST['ptype']!="-") and strlen($_POST['applied'])!=0 ){
    $set = 1;
    foreach ($rows as $row) {
        if (strtolower($_POST['ptype']) === strtolower($row['profiletype'])) {
            $f[] = $row;
        }
    }
}
if(count($f)>0){
    $rows = $f;
}
elseif($set === 1){
    $rows = [];
}
$set = 0;
 
 
unset($f);
$f = array();
if(isset($_POST['cname'])  and strlen($_POST['cname'])!=0){
    $set = 1;
    foreach ($rows as $row) {
        if (strtolower($_POST['cname']) === strtolower($row['excompany'])) {
            $f[] = $row;
        }
    }
}
if(count($f)>0){
    $rows = $f;
}
elseif($set === 1){
    $rows = [];
}
$set = 0;

unset($f);
$f = array();
if(isset($_POST['role'])  and strlen($_POST['role'])!=0){
    $set = 1;
    foreach ($rows as $row) {
        if (strtolower($_POST['role']) === strtolower($row['exrole'])) {
            $f[] = $row;
        }
    }
}
if(count($f)>0){
    $rows = $f;
}
elseif($set === 1){
    $rows = [];
}
$set = 0;

unset($f);
$f = array();
$x = 1;
$ar = array();
while(true){
  $d = "skill".$x;
  if(isset($_POST[$d])){
    array_push($ar , $_POST[$d]);
    $x++;
  }else{
    break;
  }
}
if(count($ar)>0){
    foreach ($rows as $row) {
        $flag = false;
        for ($i=0;$i<count($ar) ;$i++){
            if(strpos(strtolower($row['skill']),strtolower($ar[$i])) !== false){
                $flag = true;
            }
        }
        if($flag){
            $f[] = $row;
        }
    }
}
if(count($f)>0){
    $rows = $f;
}
elseif($set === 1){
    $rows = [];
}
$set = 0;
$x = 1;
unset($f);
unset($ar);
$ar = array();
$f = array();
while(true){
  $d = "c".$x;
  if(isset($_POST[$d])){
    array_push($ar , $_POST[$d]);
    $x++;
  }else{
    break;
  }
}
if(count($ar)>0){
    foreach ($rows as $row) {
        $flag = false;
        for ($i=0;$i<count($ar) ;$i++){
            if(strpos(strtolower($row['certifications']),strtolower($ar[$i])) !== false){
                $flag = true;
            }
        }
        if($flag){
            $f[] = $row;
        }
    }
}
if(count($f)>0){
    $rows = $f;
}
elseif($set === 1){
    $rows = [];
}
 
$set = 0;
 
if (count($rows) != 0){
?>
<style>
  /* CSS styles for the table */
  .table-container {
    max-width: 100%;
    overflow-x: auto;
    margin-bottom: 20px;
  }
  .table-container table {
    width: 100%;
    border-collapse: collapse;
  }
  .table-container th,
  .table-container td {
    padding: 8px;
    border: 1px solid #ddd;
  }
  .table-container th {
    background-color: #f2f2f2;
    font-weight: bold;
  }

  /* CSS styles for the button */
  .download-button {
    padding: 10px 20px;
    background-color: #4caf50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
  }
</style>

<div class="table-container">
  <table>
    <tr>
      <?php foreach ($rows[0] as $key => $value) : ?>
        <th><?php echo $key; ?></th>
      <?php endforeach; ?>
    </tr>
    <?php foreach ($rows as $row) : ?>
      <tr>
        <?php foreach ($row as $value) : ?>
          <td><?php echo $value; ?></td>
        <?php endforeach; ?>
      </tr>
    <?php endforeach; ?>
  </table>
</div>

<button class="download-button" onclick="exportTableToExcel()">Download as Excel</button>
<?php }else{
      echo "No results found.";
}
 } else {
    echo "No results found.";
}
?>
<script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
<script>
  function exportTableToExcel() {
    const table = document.getElementsByTagName("table")[0];
    const wb = XLSX.utils.table_to_book(table);
    const wbout = XLSX.write(wb, { bookType: "xlsx", type: "array" });
    saveAsExcelFile(wbout, "table.xlsx");
  }

  function saveAsExcelFile(buffer, filename) {
    const data = new Blob([buffer], { type: "application/octet-stream" });
    const link = document.createElement("a");
    link.href = window.URL.createObjectURL(data);
    link.download = filename;
    link.click();
  }
</script>