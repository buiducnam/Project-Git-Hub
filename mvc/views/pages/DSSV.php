<form action="">
	<table border="1">
		<th>Mã sinh viên</th>
		<th>Họ tên sinh viên</th>
		<th>Mã khoa</th>
		<th>Năm sinh</th>
		<th>Quê quán</th>
		<th>Chức năng</th>

		<?php
			while ($row = mysqli_fetch_array($data["SV"])) {
				echo "<tr>";
				echo "<td>". $row["masv"] ."</td>";
				echo "<td>". $row["hotensv"] ."</td>";
				echo "<td>". $row["makhoa"] ."</td>";
				echo "<td>". $row["namsinh"] ."</td>";
				echo "<td>". $row["quequan"] ."</td>";
				echo "<td> <a href='ThemSV'>Thêm</a> | <a href='Xoa'>Xóa</a> | <a href='Sua'>Sửa</a></td>";
				echo "</tr>";
		}
	?>
	</table>
</form>