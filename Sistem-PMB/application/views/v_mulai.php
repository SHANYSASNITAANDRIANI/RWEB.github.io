  <div class="container">
		<div class="card">
			<div class="card-header">Soal</div>
			<div class="card-body">
			<?php 
			if(validation_errors() != false)
			{
				?>
				<div class="alert alert-danger" role="alert">
					<?php echo validation_errors(); ?>
				</div>
				<?php
			}
			?>
			<form method="post" action="<?php echo base_url(); ?>index.php/ujian/nilai">
				<?php 
					$i = 0;



					foreach($soal as $row)
					{

							$i++;

				?>					
					<div class="card" style="width: 55rem;">
		  			<ul class="list-group list-group-flush">
		    			<li class="list-group-item"> 
		    				<label>Soal no <?= $i ?></label>
							 <br>
		    				<div class="input-group">
							  <textarea readonly name="soal_<?=$i?>"  class="form-control" aria-label="With textarea" placeholder="Isi soal no <?=$i?>"><?=$row->soal; ?></textarea>
							</div>
		    			</li>
	  				</ul>
	  				<!-- jawaban -->
				
					<div class="card-footer" style="height: 4.8rem;">
		    			
						  <div class="input-group-text">
						  <div class="form-check">
  							<input class="form-check-input" type="radio" name="input_jwb_<?=$i?>" value="a" >
						</div>
						a. <input  readonly value="<?=$row->jawaban_1; ?>" type="text" class="form-control" name="jwb_<?=$i;?>_a" placeholder="Isi jawaban a no <?=$i;?>" aria-label="Text input with radio button">
						  </div>
					</div>
					

					<div class="card-footer" style="height: 4.8rem;">
		    			
						  <div class="input-group-text">
						  					<div class="form-check">
  <input class="form-check-input" type="radio" name="input_jwb_<?=$i?>" value="b" >
</div>
				    b. <input readonly value="<?=$row->jawaban_2; ?>" value="b"  type="text" class="form-control" name="jwb_<?=$i;?>_b" placeholder="Isi jawaban b no <?=$i;?>" aria-label="Text input with radio button">
						  </div>
					</div>
	
					<div class="card-footer" style="height: 4.8rem;">
						  <div class="input-group-text">
						  					<div class="form-check">
  <input class="form-check-input" type="radio" name="input_jwb_<?=$i?>" value="c" >
</div>
				    c. <input readonly value="<?=$row->jawaban_3; ?>"  type="text" class="form-control" name="jwb_<?=$i;?>_c" placeholder="Isi jawaban c no <?=$i;?>" aria-label="Text input with radio button">
						  </div>
					</div>
					


					<div class="card-footer" style="height: 4.8rem;">
		    			
						  <div class="input-group-text">
							<div class="form-check">
  <input class="form-check-input" type="radio" name="input_jwb_<?=$i?>" value="d">
</div>	   
						    d. <input readonly value="<?=$row->jawaban_4; ?>"  type="text" class="form-control" name="jwb_<?=$i;?>_d" placeholder="Isi jawaban d no <?=$i;?>" aria-label="Text input with radio button">
						  </div>
					</div>
				
				
	  	
	  				
				</div>
				<br><br>
				<?php $temp =$row->temp; 
				?>
				

				<input type="hidden" name="ndata" value="<?=$i;?>">
				<input type="hidden" name="nama_tb" value="<?php echo $temp ?>">
				<input type="hidden" name="nminimal" value="<?=$row->temp2 ?>">
				
				<?php 
								
					}
				?>


				
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
			</div>
		</div>
	</div>

	



