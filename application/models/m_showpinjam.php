<?php 

class M_showpinjam extends CI_Model{	
	function show_peminjaman(){
		include "database.php";
		$query = mysqli_query($connection,"SELECT * FROM data_pinjam");
		echo "<table>"; // start a table tag in the HTML

		while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
		echo "<tr><td>" . $row['peminjam'] . "</td><td>" . $row['npm'] . "</td></tr>". $row['fakultas'] . "</td></tr>". $row['jurusan'] . "</td></tr>". $row['instansi'] . "</td></tr>". $row['kode_ruang'] . "</td></tr>". $row['acara'] . "</td></tr>". $row['waktu_mulai'] . "</td></tr>".$row['waktu_selesai'];  //$row['index'] the index here is a field name
		}

	echo "</table>"; //Close the table in HTML
	}
}

?>