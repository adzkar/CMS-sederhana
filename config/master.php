<?php 

	class tool_mantap {
		
		public $connection;

		function __construct($jenisdb, $host, $db, $user, $pass)
		{
			$this->connection = new PDO("$jenisdb:host=$host;dbname=$db","$user","$pass");
		}

		function create($table, $data) {
			$sql = "INSERT INTO $table set";
			$a = null;
			foreach ($data as $key => $value) {
				$a .= ", $key = '$value'";
			}
			$a = substr($a, 1);
			$sql = $sql.$a;
			try {
				$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$data = $this->connection->query($sql);
				return $data;
			} catch (Exception $e) {
				$e->getMessage();
			}
		}// function create

		function read($table, $data = null) {
			$sql = "SELECT * FROM $table";
			$a = null;
			if (isset($data)) {
				$sql .= " where ";
				foreach ($data as $key => $value) {
					$a .= "and $key = '$value'";
				}
				$a = substr($a, 3);
				$sql = $sql.$a;
			} else {
				$sql .= "";
			}
			try {
				$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$data = $this->connection->query($sql);
				return $data;
			} catch (Exception $e) {
				$e->getMessage();
			}
		}// function read

		function read_order($table, $order, $value, $data = null) {
			$sql = "SELECT * FROM $table";
			$a = null;
			if (isset($data)) {
				$sql .= " where ";
				foreach ($data as $key => $nilai) {
					$a .= "and $key = '$nilai'";
				}
				$a = substr($a, 3);
				$sql = $sql.$a;
			} else {
				$sql .= "";
			}
			$sql .= " order by $order $value";
			try {
				$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$data = $this->connection->query($sql);
				return $data;
			} catch (Exception $e) {
				$e->getMessage();
			}
		}// function read_order

		function read_order_limit($table, $start, $show, $order, $value, $data = null) {
			$sql = "SELECT * FROM $table";
			$a = null;
			if (isset($data)) {
				$sql .= " where ";
				foreach ($data as $key => $value) {
					$a .= "and $key = '$value'";
				}
				$a = substr($a, 3);
				$sql = $sql.$a;
			} else {
				$sql .= "";
			}
			$sql .= " order by $order $value limit $start, $show ";
			try {
				$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$data = $this->connection->query($sql);
				return $data;
			} catch (Exception $e) {
				$e->getMessage();
			}
		}// function read_order_limit

		function read_limit($table,$start,$show,$data = null) {
			$sql = "select * from $table";
			$a = null;
			if (isset($data)) {
				$sql .= " where ";
				foreach ($data as $key => $value) {
					$a .= "and $key = '$value'";
				}
				$a = substr($a, 3);
				$sql = $sql.$a."limit $start, $show";
			} else {
				$sql = $sql." limit $start, $show";
			}

			try {
				$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$data = $this->connection->query($sql);
				return $data;
			} catch (Exception $e) {
				$e->getMessage();
			}
		}// function read_limit

		function jumlah_kolom($kolom, $table) {
			$sql = "select $kolom from $table";
			try {
				$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$data = $this->connection->query($sql);
				$b = null;
				while ($a = $data->fetch()) {
					$b.= " ".$a[$i];
					$i++;
				}
				$b = explode(" ", $b);
				$i = 0;
				while ($i < count($b)) {
					$hasil = $hasil * $b[$i];
					$i++;
				}
				return $hasil;
			} catch (Exception $e) {
				$e->getMessage();
			}
		}#functio jumlah_kolom

		function read_cari($table, $cari, $katakunci) {
			$sql = "select * from $table where $cari like '%$katakunci%'";
			try {
				$data = $this->connection->query($sql);
				return $data;
			} catch (Exception $e) {
				$e->getMessage();
			}
		}

		function read_max($katakunci, $table) {
			$sql = "select max($katakunci) from $table";
			try {
				$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$data = $this->connection->query($sql);
				return $data;
			} catch (Exception $e) {
				$e->getMessage();
			}
		}
		function update($table, $data, $kolom, $id) {
			$sql = "update $table set ";
			$a = null;
			foreach ($data as $key => $value) {
				$a .= ", $key = '$value'";
			}
			$a = substr($a, 1);
			$sql = $sql.$a." where $kolom = '$id'";
			try {
				$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$data = $this->connection->query($sql);
				return $data;
			} catch (Exception $e) {
				$e->getMessage();
			}
		}//function update

		function delete($table, $kolom, $id) {
			$sql = "delete from $table where $kolom = $id";
			try {
				$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$data = $this->connection->query($sql);
				return $data;
			} catch (Exception $e) {
				$e->getMessage();
			}
		}//function delete

		// function untuk cookie.. :)
		function buat_kue($nama, $value, $angka) {
			setcookie("$nama","$value",time()+$angka);
		}
		function makan_kue($nama, $value, $angka) {
			setcookie("$nama","$value",time()-$angka);
		}

		//function alert
		function alert($pesan) {
			echo "<script>";
			echo "alert('$pesan');";
			echo "</script>";
		}

		// function untuk notifikasi
		function notifikasi($pesan_sukses, $pesan_error) {
			if (isset($pesan_sukses)) {
				echo "<div class='notifikasi notifikasi-primary'>";
				echo "<p>";
				echo "$pesan_sukses";
				echo "</p>";
				echo "</div>";
			} elseif (isset($pesan_error)) {
				echo "<div class='notifikasi notifikasi-primary'>";
				echo "<p>";
				echo "$pesan_error";
				echo "</p>";
				echo "</div>";
			}
		}
	}//punya class tool_mantap
?>