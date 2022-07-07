<?php
include('lib/koneksi.php');

		$id = $_GET['id'];
// code by varo handoko
		try {
			$conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$hapus = $conn->prepare("DELETE FROM tbl_users WHERE id_user = :id");
			$deleteuser = array(':id' => $id);
			$hapus->execute($deleteuser);
// code by varo handoko
      echo "<script>alert('User berhasil dihapus');window.location='?page=user'</script>";
// code by varo handoko
		} catch (PDOexception $e) {
			print "hapus berita gagal: " . $e->getMessage() . "<br/>";
		   die();
		}
?>
