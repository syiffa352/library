<?php
$title = "CREATE BOOK";
require_once "views/template/header.php";

$host = "localhost"; 
$user = "root";
$password = "";
$dbname = "launch_code";

$conn = mysqli_connect($host, $user, $password, $dbname);

if(!$conn) {
  echo "Koneksi gagal: ";
}

$sql = "SELECT * FROM history";
$result = mysqli_query($conn, $sql);

?>

<div class="container mt-5 shadow p-3">
    <div class="d-flex justify-content-between">
        <a href="/dashboard">Back To Dashboard</a>
        <p>Create Book</p>
    </div>
    <form>
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="form-group mb-3">
                    <label for="category_id">Choose Category</label>
                    <select class="form-control" name="category_id">
                        <option value="">-- Choose Category --</option>
                        <?php foreach ($data as $book) : ?>
                            <option value="<?= $book['id'] ?>">
                                <?= $book['category_name'] ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="form-group mb-3">
                    <label for="title">Title</label>
                    <input
                        class="form-control"
                        name="title"
                        placeholder="Title" />
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="form-group mb-3">
                    <label for="Author">Author</label>
                    <input
                        class="form-control"
                        name="author"
                        placeholder="Author" />
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="form-group mb-3">
                    <label for="year">Year</label>
                    <input
                        type="number"
                        class="form-control"
                        name="year"
                        placeholder="Year" />
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="form-group mb-3">
                    <label for="Qty">Qty</label>
                    <input
                        type="number"
                        class="form-control"
                        name="qty"
                        placeholder="Qty" />
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <button class="btn btn-success" type="submit">Submit</button>
            </div>
        </div>
    </form>
</div>

<?php 
    if(mysqli_num_rows($result) > 0) {
      echo "<table class='table-belang'>";
      echo "<thead><tr>";
      echo "<th>JUMLAH</th>";
      echo "<th>NAMA BARANG</th>";
      echo "<th>TANGGAL PEMASUKAN</th>";
      echo "<th>TANGGAL PENGELUARAN</th>";
      echo "<th>PENANGGUNG JAWABAN</th>";
      echo "</tr></thead><tbody>";

  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>{$row['jumlah']}</td>";
    echo "<td>{$row['nama_barang']}</td>";
    echo "<td>{$row['tgl_pemasukan']}</td>";
    echo "<td>{$row['tgl_pengeluaran']}</td>";
    echo "<td>{$row['penanggung_jawaban']}</td>";
    echo "</tr>";
  }

  echo "</tbody></table>";
} else {
  echo "<p class='text-center py-4 text-gray-600'>Tidak ada data.</p>";
}
?>

<?php require_once "views/template/footer.php" ?>