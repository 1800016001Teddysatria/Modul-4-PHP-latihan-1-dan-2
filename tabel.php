<html>
<style>
    body {
  background-image: url('123.jpg');
}
table {
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 15px;
  
}
</style>
<body><table style="width:50%">

	<tr>
    <td>NIM</td>
    <td><?php echo $_POST["nim"]; ?></td> 
    </tr>

    <tr>
    <td>Nama</td>
    <td><?php echo $_POST["nama"]; ?></td> 
    </tr>

    <tr>
    <td>Jenis Kelamin</td>
    <td><?php echo $_POST["kelamin"]; ?></td> 
    </tr>

    <tr>
    <td>Program Studi</td>
    <td><?php echo $_POST["jurusan"]; ?></td> 
    </tr>

</table>
</body>
</html>