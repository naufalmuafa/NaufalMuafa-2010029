<!DOCTYPE html>
<html>
<head>
	<title>Pendaftran Mahasiswa</title>
</head>
<body>
	<h1>Form Pendaftaran Mahasiswa</h1>

	<form id="form" method="post">
		<table>
			<tr>
				<td>Nama</td>
				<td> : </td>
				<td>
					<input type="text" name="nama" id="nama">
				</td>
			</tr>

			<tr>
				<td>Jenis Kelamin</td>
				<td> : </td>
				<td>
					<input type="radio" name="jk" value="pria" checked="checked" id="jk">Pria
					<input type="radio" name="jk" value="wanita" id="jk">Wanita
				</td>
			</tr>

			<tr>
				<td>Prodi</td>
				<td> : </td>
				<td>
					<select>
						<option id="prodi">Teknik Informatika</option>
						<option id="prodi">Sistem Informasi</option>
					</select>
				</td>
			</tr>

			<tr>
				<td>Hoby</td>
				<td> : </td>
				<td>
					<input type="checkbox" name="hoby" value="coding" id="hoby">Coding
					<input type="checkbox" name="hoby" value="jalan-jalan" id="hoby">Jalan-jalan
					<input type="checkbox" name="hoby" value="makan" id="hoby">Makan
				</td>
			</tr>

			<tr>
				<td>
					<button type="button" onclick="tampilin()">Kirim</button>
					<!-- <input type="submit" name="kirim" value="Kirim" id="kirim" onclick="tampilin()"> -->
				</td>
			</tr>
		</table>
	</form>

	<script type="text/javascript">
		function tampilin(){
 
			    let nama=document.getElementById("nama").value;
			    let jk=document.querySelector('input[name="jk"]:checked').value;
			    let prodi=document.getElementById("prodi").innerHTML;
			    let hoby=document.querySelectorAll('input[name="hoby"]:checked');
			    let hobys= '';
			    for(x=0; x<hoby.length; x++) {
			    	hobys += hoby[x].value + ', ';
			    }


			    document.getElementById("hasil_nama").innerHTML = nama;
				document.getElementById("hasil_jk").innerHTML = jk;
				document.getElementById("hasil_prodi").innerHTML = prodi;
				document.getElementById("hasil_hoby").innerHTML = hobys;
			}
			 

	</script>

	<br /><br/>

	<h1>Data Mahasiswa Baru</h1>

	<table>
		<tr>
			<td>Nama</td>
			<td> : </td>
			<td id="hasil_nama"></td>
		</tr>

		<tr>
			<td>Jenis Kelamin</td>
			<td> : </td>
			<td id="hasil_jk"></td>
		</tr>

		<tr>
			<td>Prodi</td>
			<td> : </td>
			<td id="hasil_prodi"></td>
		</tr>

		<tr>
			<td>Hoby</td>
			<td> : </td>
			<td id="hasil_hoby"></td>
		</tr>
	</table>
</body>
</html>