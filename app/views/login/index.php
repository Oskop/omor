<body>
    <div class="box">
    	<div class="box-header">Login</div>
    	<div class="box-body">
    		<form method="post" action="<?=baseurl?>login/masuk">
	    		<div>
	    			<input class="input" type="text" name="username" placeholder="Masukkan Username" htmlspecialchars autocomplete="on">
	    		</div>
	    		<div>
	    		<input class="input" type="password" name="password" placeholder="Masukkan Password" htmlspecialchars>
	    		</div>
	    		<div>
				<button class="btn" type="submit" name="submit">Login</button>
	    		</div>
	    	</form>	
    		<hr>
    		<div>
    			<a href="../index.html">Home</a>
    			|
    			<a href="../Registrasi/registrasi.html">Daftar</a>
    		</div>
		</div>
		<?php if(isset($cek)) : ?>
		<h1>LOGIN ERROR</h1>
		<?php endif ?>
    </div>
  </body>