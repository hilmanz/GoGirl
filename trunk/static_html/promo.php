
<div class="row">
	<div class="page-title">
    	<div class="col-md-12">
        	<h2 style="font-size:42px;">Cerita Kita, Promo Discount  Foaming Facial Wash 50% <img src="images/logo-alfa.png" /> </h2>
        </div>
    </div>
    <div class="pagecontainer">
    	<div id="errorbox" class="errorbox">
        	<p><i class="icon-report-problem"></i> Semua data wajib diisi</p>
        </div>
    	<form class="theform" id="joinform">
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