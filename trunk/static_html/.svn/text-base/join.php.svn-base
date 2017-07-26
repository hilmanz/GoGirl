
<div class="row">
	<div class="page-title">
    	<div class="col-md-4">
        	<h2>Join Now!</h2>
        </div>
    	<div class="col-md-8">
        	<p class="page-desc">Daftarkan dirimu untuk jadi bagian dari kontributor Cerita Kita dengan mengisi form di bawah ini.</p>
        </div>
    </div>
    <div class="pagecontainer">
    	<div id="errorbox" class="errorbox">
        	<p><i class="icon-report-problem"></i> Semua data wajib diisi</p>
        </div>
    	<form class="theform" id="joinform">
        	<div class="row">
                <div class="col-md-4">
                    <label>Tipe Kontributor</label>
                </div><!-- end .col-md-4 -->
                <div class="col-md-8">
                	<div class="checkbox-row">
                        <input type="radio" name="type" class="required" checked="checked" />
                        <span>Writer</span>
                    </div>
                	<div class="checkbox-row">
                        <input type="radio" name="type" class="required"  />
                        <span>Beauty Enthusiast</span>
                    </div>
                	<div class="checkbox-row">
                        <input type="radio" name="type" class="required"  />
                        <span>Graphic Designer</span>
                    </div>
                	<div class="checkbox-row">
                        <input type="radio" name="type" class="required"  />
                        <span>Photographer</span>
                    </div>
                	<div class="checkbox-row">
                        <input type="radio" name="type" class="required"  />
                        <span>Fashion Stylist</span>
                    </div>
                    <i>Pilih salah satu (Tipe Contributor)</i>
                </div><!-- end .col-md-8 -->
        	</div><!-- end .row -->
        	<div class="row">
                <div class="col-md-4">
                    <label>Nama</label>
                </div><!-- end .col-md-4 -->
                <div class="col-md-8">
                	<input type="text"  class="required" name="name" />
                </div><!-- end .col-md-8 -->
        	</div><!-- end .row -->
        	<div class="row">
                <div class="col-md-4">
                    <label>Alamat</label>
                </div><!-- end .col-md-4 -->
                <div class="col-md-8">
                	<input type="text"  class="required" name="alamat" />
                </div><!-- end .col-md-8 -->
        	</div><!-- end .row -->
        	<div class="row">
                <div class="col-md-4">
                    <label>No. Hp</label>
                </div><!-- end .col-md-4 -->
                <div class="col-md-8">
                	<input type="text"  class="required" name="telpn" />
                </div><!-- end .col-md-8 -->
        	</div><!-- end .row -->
        	<div class="row">
                <div class="col-md-4">
                    <label>Email</label>
                </div><!-- end .col-md-4 -->
                <div class="col-md-8">
                	<input type="text"  class="required" name="email" />
                    <i>Tim Cerita KIta akan mengirimkan kode unik untuk diskon 50% pembelian produk Clean and Clear FFW di Alfamart</i>
                </div><!-- end .col-md-8 -->
        	</div><!-- end .row -->
        	<div class="row">
                <div class="col-md-4">
                    <label>Cerita Kamu</label>
                </div><!-- end .col-md-4 -->
                <div class="col-md-8">
                	<textarea class="required" name="story"></textarea>
                    <i>Ceritakan tentang singkat tentang kamu, passion kamu, dan kenapa kamu ingin menjadi kontributor di Cerita Kita (max 270 karakter)</i>
                </div><!-- end .col-md-8 -->
        	</div><!-- end .row -->
        	<div class="row">
                <div class="col-md-4">
                    <label>Upload File</label>
                </div><!-- end .col-md-4 -->
                <div class="col-md-8">
                	<div class="inputfile">
                        <input id="uploadFile" type="text" class="required" name="file"/>
                        <div class="file_upload">
                        <input id="uploadBtn" type="file"  class="custom-file-input ignore" name="filepath">
                        </div>
                    </div>
                </div><!-- end .col-md-8 -->
        	</div><!-- end .row -->
        	<div class="row">
                <div class="col-md-4">
                    <label>Upload Foto Kamu</label>
                </div><!-- end .col-md-4 -->
                <div class="col-md-8">
                	<div class="inputfile">
                        <input id="uploadFileImage" type="text" class="required" name="image"/>
                        <div class="file_upload">
                        <input id="uploadBtnImage" type="file"  class="custom-file-input ignore" name="imagepath">
                        </div>
                    </div>
                </div><!-- end .col-md-8 -->
        	</div><!-- end .row -->
        	<div class="row">
                <div class="col-md-8">
                	<div class="checkbox-row">
                        <input type="checkbox" name="agree" />
                        <span>Sudah membaca dan menyetujui  <a href="index.php?page=terms" target="_blank">Term and Condition</a> dari tim Cerita Kita</a></span>
                    </div>
                </div><!-- end .col-md-8 -->
        	</div><!-- end .row -->
        	<div class="row">
                <div class="col-md-12">
                	<button class="button fr">SUBMIT</button>
                </div><!-- end .col-md-8 -->
        	</div><!-- end .row -->
        </form>
    </div><!-- end .entry-detail -->
</div><!-- end .row -->
<script>
	$("#joinform").validate({
		onkeyup: false,
  		ignore: ".ignore",
		submitHandler: function() {
			$(".errorbox").show();		
		},
		  rules: {
			name: "required",
			alamat: "required",
			telpn: "required",
			story: "required",
			file: "required",
			image: "required",
			email: {
			  required: true,
			  email: true
			}
		  },
		  success: "valid",
		  submitHandler: function() { window.location.replace("index.php?page=thanks"); }
	});
	$( "#uploadBtn" ).change(function () {
		$( "#uploadFile" ).val(this.value);
	 });
	$( "#uploadBtnImage" ).change(function () {
		$( "#uploadFileImage" ).val(this.value);
	 });
	
</script>