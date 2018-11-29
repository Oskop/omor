<body>
	<div class="box">
		<div class="box-header">Daftar</div>
		<div class="box-body">
			<form method="post" action="<?=baseurl?>Registrasi/registAngg">
				<table>
					<tr>
						<td>
							<label for="nama">Nama Lengkap</label>
						</td>
						<td>
							<input class="input" type="text" name="nama" id="nama" placeholder="Masukkan Nama Lengkap" autocomplete="on">
						</td>
					</tr>
					<tr>
						<td>
							<label for="usr">Nama Pengguna</label>
						</td>
						<td>
							<input class="input" type="text" name="user" id="usr" placeholder="Masukkan Username" autocomplete="on">
						</td>
					</tr>
					<tr>
						<td>
							<label for="jk">Jenis Kelamin</label>
						</td>
						<td>
							<select name="jk" id="jk">
								<option checked>Laki-laki</option>
								<option>Perempuan</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							<label for="tempatl">Tempat Lahir</label>
						</td>
						<td>
							<input class="input" type="text" name="tempatl" id="tempatl" placeholder="Masukkan Tempat Lahir" autocomplete="on">
						</td>
					</tr>
					<tr>
						<td>
							<label for="alamat">Alamat</label>
						</td>
						<td>
							<input class="input" type="textarea" name="alamat" id="alamat" placeholder="Masukkan Alamat" autocomplete="on">
						</td>
					</tr>
					<tr>
						<td>
							<label for="ttl">Tanggal Lahir</label>
						</td>
						<td>
							<input type="date" name="tanggal" value="[0-9]{2}-[0-9]{2}-[0-9]{4}" id="ttl" placeholder="dd-mm-yyyy">
						</td>
					</tr>
					<tr>
						<td>
							<label for="agama">Agama</label>
						</td>
						<td>
							<select name="agama" id="agama">
								<option checked>Tidak Ada</option>
								<option>Islam</option>
								<option>Kristen</option>
								<option>Katolik</option>
								<option>Kong Hu Chu</option>
								<option>Hindu</option>
								<option>Buddha</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							<label for="nohp">Nomor HP</label>
						</td>
						<td>
							<input class="input" type="text" name="nohp" id="nohp" placeholder="Masukkan Nomor HP" autocomplete="on">
						</td>
					</tr>
					<tr>
						<td>
							<label for="email">Email</label>
						</td>
						<td>
							<input class="input" type="text" name="email" id="email" placeholder="Masukkan Email" autocomplete="on">
						</td>
					</tr>
					<tr>
						<td>
							<label for="pass">Password</label>
						</td>
						<td>
							<input class="input" type="Password" name="pass" id="pass" placeholder="Masukkan Password">
						</td>
					</tr>
					<tr>
						<td>
							<label for="pascon">Konfirmasi Password &nbsp</label>
						</td>
						<td>
							<input class="input" type="Password" name="pascon" id="pascon" placeholder="Masukkan Konfirmasi Password">
						</td>
					</tr>
				</table>
				<button class="btn" type="submit" name="submit">Daftar</button>
			</form>
			<?php if(isset($error)) : ?>
			<h1>Error Login</h1>
			<?php endif ?>
			<hr>
			<div>
				<a href="../index.html">Home</a> |
				<a href="../Login/login.html">Login</a>
			</div>
		</div>
	</div>
</body>