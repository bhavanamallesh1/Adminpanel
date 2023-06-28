<?php
    include("db2.php");
$sql = "SELECT * FROM data";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // Fetch all rows from the result as an associative array
    $rows = $result->fetch_all(MYSQLI_ASSOC);
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
    background-color: #87CEEB;
    font-weight: bold;
  }

  /* CSS styles for the button */
  .download-button {
    padding: 10px 20px;
    background-color: #3A5311;
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


<?php } else {
    echo "No results found.";
}
?>
<!-- Include the SheetJS library and JavaScript code -->
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