<?php
include('lib/koneksi.php');

		$id = $_GET['id'];
// code by varo handoko
		try {
			$conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$pdo = $conn->prepare("DELETE FROM tbl_keranjang WHERE id = :id");
			$deletedata = array(':id' => $id);
			$pdo->execute($deletedata);
// code by varo handoko
      echo "<script>alert('Barang dalam keranjang berhasil dihapus');window.location='?page=beranda'</script>";
// code by varo handoko
		} catch (PDOexception $e) {
			print "hapus berita gagal: " . $e->getMessage() . "<br/>";
		   die();
		}
?>
