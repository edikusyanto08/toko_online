<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="btn btn-sm btn-success">
				<?php
				$grand_total = 0;
				if($keranjang = $this->cart->contents())
				{
					foreach($keranjang as $item)
					{
						$grand_total = $grand_total + $item['subtotal'];
					}
				echo "<h4>Total Belanja Anda: Rp. ".number_format($grand_total, 0, ',','.');
				
					?>
			</div><br><br>
			<h3>Input Alamat Pengiriman dan Pembayaran</h3>
			<form action="<?php echo base_url(); ?>dashboard/proses_pesanan" method="post">
				<div class="form-group">
					<label> Nama Lengkap</label>
					<input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
				</div>
				<div class="form-group">
					<label> Alamat Lengkap</label>
					<input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
				</div>
				<div class="form-group">
					<label> No. Telepon</label>
					<input type="number" name="no_telepon" placeholder="Nomor Telepon Anda" class="form-control">
				</div>
				<div class="form-group">
					<label> Jasa Pengiriman</label>
					<select name="" class="form-control">
						<option value="">JNE</option>
						<option value="">TIKI</option>
						<option value="">Pos Indonesia</option>
						<option value="">Sicepat</option>
						<option value="">Ojol</option>
						<option value="">Grabe</option>
						<option value="">Gojek</option>
					</select>
				</div>
				<div class="form-group">
					<label> Pilih Bank</label>
					<select name="" class="form-control">
						<option value="">BCA - 123456789</option>
						<option value="">BNI - 123456789</option>
						<option value="">Mandiri - 123456789</option>
						<option value="">BRI - 123456789</option>
					</select>
				</div>
				<button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>
			</form>
			<?php 
			} else {
				echo "<h4>Keranjang Belanja Anda Masih Kosong";
			} 
			?>
		</div>
		
		<div class="col-md-2"></div>
	</div>
</div>
