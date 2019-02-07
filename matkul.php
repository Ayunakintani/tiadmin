<h2>Mata Kuliah</h2>

<table class="table table-bordered">
	<thead>
			<tr>
				<th>No</th>
				<th>Mata Kuliah</th>
				<th>Jadwal Kuliah</th>
				<th>Kode Mata Kuliah</th>
				<th>Aksi</th>
			</tr>
	</thead>
		<tbody>
			<?php $nomor=1; ?>
			<?php $ambil=$conn->query ("SELECT * FROM matakuliah"); ?>
			<?php while($pecah = $ambil->fetch_assoc()){ ?>
			<tr>
				<td><?php echo $nomor; ?></td>
				<td><?php echo $pecah['nama_matkul']; ?></td>
				<td><?php echo $pecah['jadwal_waktu']; ?></td>
				<td><?php echo $pecah['kode_matkul']; ?></td>
				<td>
					<a href="" class="btn btn-info">ubah</a>
				</td>
			</tr>
			<?php $nomor++; ?>
			<?php } ?>

		</tbody>
	</tbody>
</table>
