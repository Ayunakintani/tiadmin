<h2> Data Result </h2>

<table class="table table-bordered">
	<thead>
			<tr>
				<th>No</th>
				<th>Nama Dosen</th>
				<th>Nip Dosen</th>
				<th>Mata Kuliah</th>
				<th>Ruang</th>
				<th>Aksi</th>
			</tr>
	</thead>
			<tbody>
			<?php $nomor=1; ?>
			<?php $ambil=$conn->query ("SELECT * FROM dosen INNER JOIN matakuliah ON dosen.id_dosen=matakuliah.id_dosen"); ?>
			<?php while($pecah = $ambil->fetch_assoc()) { ?>

			<tr>
				<td><?php echo $nomor; ?></td>
				<td><?php echo $pecah['nama_dosen']; ?></td>
				<td><?php echo $pecah['nip_doesn']; ?></td>
				<td><?php echo $pecah['nama_matkul']; ?></td>
				<td><?php echo $pecah['id_ruangan']; ?></td>
				<td>
					<a href="" class="btn btn-danger">info</a>
				</td>
			</tr>
			<?php $nomor++; ?>
			<?php } ?>
	
	</tbody>
 </tbody>
</table>