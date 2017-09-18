 <?php if (isset($_SESSION['username']) && $_SESSION['username']=="admin" ) {

  ?>

  <script type="text/javascript">
    window.location.replace('http://maxoptika-admin2.herokuapp.com/home.php');
  </script>

  <?php


  } 

?>

<style type="text/css">
  input {
    line-height: normal;
    width: 100%;
}
.row {
    border-bottom: 1px solid #eee;
    margin-bottom: 10px;
    margin-top: 10px;
}

</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Oraret e Dyqaneve
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Oraret e Dyqaneve</a></li>
        <li class="active">Vendos oraret e vizitave</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-lg-12 col-xs-12">
          
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Vendos oraret e vizitave ne dyqane</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form id="update_store_times" action="functions.php?action=update_store_times" method="post" class="form-horizontal">
              <div class="box-body">
          		<div class="form-group">
                  <div class="col-sm-12">
                    <center>
	                    <h4></h4>
	                    	<?php
	                    		
								$dataResult = DB::getInstance()->getAll('oraridyqan')->results();

								foreach ($dataResult as $tableRows) {
									if ($tableRows->dyqani=='qtu') {
										$qtuhene=$tableRows->hene;
										$qtumarte=$tableRows->marte;
                    $qtumerkure=$tableRows->merkure;
                    $qtuenjte=$tableRows->enjte;
                    $qtupremte=$tableRows->premte;
                    $qtushtune=$tableRows->shtune;
                    $qtudiele=$tableRows->diele;
									}else if ($tableRows->dyqani=='mshyri') {
                    $mshyrihene=$tableRows->hene;
                    $mshyrimarte=$tableRows->marte;
                    $mshyrimerkure=$tableRows->merkure;
                    $mshyrienjte=$tableRows->enjte;
                    $mshyripremte=$tableRows->premte;
                    $mshyrishtune=$tableRows->shtune;
                    $mshyridiele=$tableRows->diele;
                  }else if ($tableRows->dyqani=='sheshiwillson') {
                    $sheshiwillsonhene=$tableRows->hene;
                    $sheshiwillsonmarte=$tableRows->marte;
                    $sheshiwillsonmerkure=$tableRows->merkure;
                    $sheshiwillsonenjte=$tableRows->enjte;
                    $sheshiwillsonpremte=$tableRows->premte;
                    $sheshiwillsonshtune=$tableRows->shtune;
                    $sheshiwillsondiele=$tableRows->diele;
                  }else if ($tableRows->dyqani=='dhjetori') {
                    $dhjetorihene=$tableRows->hene;
                    $dhjetorimarte=$tableRows->marte;
                    $dhjetorimerkure=$tableRows->merkure;
                    $dhjetorienjte=$tableRows->enjte;
                    $dhjetoripremte=$tableRows->premte;
                    $dhjetorishtune=$tableRows->shtune;
                    $dhjetoridiele=$tableRows->diele;
                  }else if ($tableRows->dyqani=='durres') {
                    $durreshene=$tableRows->hene;
                    $durresmarte=$tableRows->marte;
                    $durresmerkure=$tableRows->merkure;
                    $durresenjte=$tableRows->enjte;
                    $durrespremte=$tableRows->premte;
                    $durresshtune=$tableRows->shtune;
                    $durresdiele=$tableRows->diele;
                  }else if ($tableRows->dyqani=='pogradec') {
                    $pogradechene=$tableRows->hene;
                    $pogradecmarte=$tableRows->marte;
                    $pogradecmerkure=$tableRows->merkure;
                    $pogradecenjte=$tableRows->enjte;
                    $pogradecpremte=$tableRows->premte;
                    $pogradecshtune=$tableRows->shtune;
                    $pogradecdiele=$tableRows->diele;
                  }else if ($tableRows->dyqani=='shkoder') {
                    $shkoderhene=$tableRows->hene;
                    $shkodermarte=$tableRows->marte;
                    $shkodermerkure=$tableRows->merkure;
                    $shkoderenjte=$tableRows->enjte;
                    $shkoderpremte=$tableRows->premte;
                    $shkodershtune=$tableRows->shtune;
                    $shkoderdiele=$tableRows->diele;
                  }else if ($tableRows->dyqani=='lushnje') {
                    $lushnjehene=$tableRows->hene;
                    $lushnjemarte=$tableRows->marte;
                    $lushnjemerkure=$tableRows->merkure;
                    $lushnjeenjte=$tableRows->enjte;
                    $lushnjepremte=$tableRows->premte;
                    $lushnjeshtune=$tableRows->shtune;
                    $lushnjediele=$tableRows->diele;
                  }else if ($tableRows->dyqani=='vlore') {
                    $vlorehene=$tableRows->hene;
                    $vloremarte=$tableRows->marte;
                    $vloremerkure=$tableRows->merkure;
                    $vloreenjte=$tableRows->enjte;
                    $vlorepremte=$tableRows->premte;
                    $vloreshtune=$tableRows->shtune;
                    $vlorediele=$tableRows->diele;
                  }else if ($tableRows->dyqani=='fier') {
                    $fierhene=$tableRows->hene;
                    $fiermarte=$tableRows->marte;
                    $fiermerkure=$tableRows->merkure;
                    $fierenjte=$tableRows->enjte;
                    $fierpremte=$tableRows->premte;
                    $fiershtune=$tableRows->shtune;
                    $fierdiele=$tableRows->diele;
                  }else if ($tableRows->dyqani=='sarande') {
                    $sarandehene=$tableRows->hene;
                    $sarandemarte=$tableRows->marte;
                    $sarandemerkure=$tableRows->merkure;
                    $sarandeenjte=$tableRows->enjte;
                    $sarandepremte=$tableRows->premte;
                    $sarandeshtune=$tableRows->shtune;
                    $sarandediele=$tableRows->diele;
                  }
									
								}
	                    	?>
	                    </select>
                    </center>
                  </div>
                </div>
				<!-- hidden -->
				<div class='clinic-card-container'>
					
					<div class="row">
						<div class="col-sm-4">
							<div class="col-sm-12">
								<h4>QTU</h4>
							</div>
						
			                <div class="form-group">
							</div>
			                <div class="form-group">
			                  <div class="col-sm-12">
			                    <div class="col-sm-3">E Hene</div>
			                    <div class="col-sm-9"><input type='text' name='qtuhene' value="<?php echo $qtuhene; ?>" /></div>
			                  </div>
			              	</div>
			              	<div class="form-group">
			                  <div class="col-sm-12">
			                    <div class="col-sm-3">E Marte</div>
			                    <div class="col-sm-9"><input type='text' name='qtumarte' value="<?php echo $qtumarte; ?>" /></div>
			                  </div>
			                </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Merkure</div>
                          <div class="col-sm-9"><input type='text' name='qtumerkure' value="<?php echo $qtumerkure; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Enjte</div>
                          <div class="col-sm-9"><input type='text' name='qtuenjte' value="<?php echo $qtuenjte; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Premte</div>
                          <div class="col-sm-9"><input type='text' name='qtupremte' value="<?php echo $qtupremte; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Shtune</div>
                          <div class="col-sm-9"><input type='text' name='qtushtune' value="<?php echo $qtushtune; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Diele</div>
                          <div class="col-sm-9"><input type='text' name='qtudiele' value="<?php echo $qtudiele; ?>" /></div>
                        </div>
                      </div>
		                </div>

            <div class="col-sm-4">
              <div class="col-sm-12">
                <h4>Myslum Shyri</h4>
              </div>
            
            <div class="form-group">
              </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Hene</div>
                          <div class="col-sm-9"><input type='text' name='mshyrihene' value="<?php echo $mshyrihene; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Marte</div>
                          <div class="col-sm-9"><input type='text' name='mshyrimarte' value="<?php echo $mshyrimarte; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Merkure</div>
                          <div class="col-sm-9"><input type='text' name='mshyrimerkure' value="<?php echo $mshyrimerkure; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Enjte</div>
                          <div class="col-sm-9"><input type='text' name='mshyrienjte' value="<?php echo $mshyrienjte; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Premte</div>
                          <div class="col-sm-9"><input type='text' name='mshyripremte' value="<?php echo $mshyripremte; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Shtune</div>
                          <div class="col-sm-9"><input type='text' name='mshyrishtune' value="<?php echo $mshyrishtune; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Diele</div>
                          <div class="col-sm-9"><input type='text' name='mshyridiele' value="<?php echo $mshyridiele; ?>" /></div>
                        </div>
                      </div>
                    </div>

            <div class="col-sm-4">
              <div class="col-sm-12">
                <h4>Sheshi Willson</h4>
              </div>
            
                      <div class="form-group">
              </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Hene</div>
                          <div class="col-sm-9"><input type='text' name='sheshiwillsonhene' value="<?php echo $sheshiwillsonhene; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Marte</div>
                          <div class="col-sm-9"><input type='text' name='sheshiwillsonmarte' value="<?php echo $sheshiwillsonmarte; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Merkure</div>
                          <div class="col-sm-9"><input type='text' name='sheshiwillsonmerkure' value="<?php echo $sheshiwillsonmerkure; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Enjte</div>
                          <div class="col-sm-9"><input type='text' name='sheshiwillsonenjte' value="<?php echo $sheshiwillsonenjte; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Premte</div>
                          <div class="col-sm-9"><input type='text' name='sheshiwillsonpremte' value="<?php echo $sheshiwillsonpremte; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Shtune</div>
                          <div class="col-sm-9"><input type='text' name='sheshiwillsonshtune' value="<?php echo $sheshiwillsonshtune; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Diele</div>
                          <div class="col-sm-9"><input type='text' name='sheshiwillsondiele' value="<?php echo $sheshiwillsondiele; ?>" /></div>
                        </div>
                      </div>
                    </div>

	              	</div>

                            <div class="row">
            <div class="col-sm-4">
              <div class="col-sm-12">
                <h4>21 Dhjetori</h4>
              </div>
            
                      <div class="form-group">
              </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Hene</div>
                          <div class="col-sm-9"><input type='text' name='dhjetorihene' value="<?php echo $dhjetorihene; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Marte</div>
                          <div class="col-sm-9"><input type='text' name='dhjetorimarte' value="<?php echo $dhjetorimarte; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Merkure</div>
                          <div class="col-sm-9"><input type='text' name='dhjetorimerkure' value="<?php echo $dhjetorimerkure; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Enjte</div>
                          <div class="col-sm-9"><input type='text' name='dhjetorienjte' value="<?php echo $dhjetorienjte; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Premte</div>
                          <div class="col-sm-9"><input type='text' name='dhjetoripremte' value="<?php echo $dhjetoripremte; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Shtune</div>
                          <div class="col-sm-9"><input type='text' name='dhjetorishtune' value="<?php echo $dhjetorishtune; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Diele</div>
                          <div class="col-sm-9"><input type='text' name='dhjetoridiele' value="<?php echo $dhjetoridiele; ?>" /></div>
                        </div>
                      </div>
                    </div>

            <div class="col-sm-4">
              <div class="col-sm-12">
                <h4>Durres</h4>
              </div>
            
                      <div class="form-group">
              </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Hene</div>
                          <div class="col-sm-9"><input type='text' name='durreshene' value="<?php echo $durreshene; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Marte</div>
                          <div class="col-sm-9"><input type='text' name='durresmarte' value="<?php echo $durresmarte; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Merkure</div>
                          <div class="col-sm-9"><input type='text' name='durresmerkure' value="<?php echo $durresmerkure; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Enjte</div>
                          <div class="col-sm-9"><input type='text' name='durresenjte' value="<?php echo $durresenjte; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Premte</div>
                          <div class="col-sm-9"><input type='text' name='durrespremte' value="<?php echo $durrespremte; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Shtune</div>
                          <div class="col-sm-9"><input type='text' name='durresshtune' value="<?php echo $durresshtune; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Diele</div>
                          <div class="col-sm-9"><input type='text' name='durresdiele' value="<?php echo $durresdiele; ?>" /></div>
                        </div>
                      </div>
                    </div>

            <div class="col-sm-4">
              <div class="col-sm-12">
                <h4>Pogradec</h4>
              </div>
            
                      <div class="form-group">
              </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Hene</div>
                          <div class="col-sm-9"><input type='text' name='pogradechene' value="<?php echo $pogradechene; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Marte</div>
                          <div class="col-sm-9"><input type='text' name='pogradecmarte' value="<?php echo $pogradecmarte; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Merkure</div>
                          <div class="col-sm-9"><input type='text' name='pogradecmerkure' value="<?php echo $pogradecmerkure; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Enjte</div>
                          <div class="col-sm-9"><input type='text' name='pogradecenjte' value="<?php echo $pogradecenjte; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Premte</div>
                          <div class="col-sm-9"><input type='text' name='pogradecpremte' value="<?php echo $pogradecpremte; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Shtune</div>
                          <div class="col-sm-9"><input type='text' name='pogradecshtune' value="<?php echo $pogradecshtune; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Diele</div>
                          <div class="col-sm-9"><input type='text' name='pogradecdiele' value="<?php echo $pogradecdiele; ?>" /></div>
                        </div>
                      </div>
                    </div>

                  </div>

                            <div class="row">
            <div class="col-sm-4">
              <div class="col-sm-12">
                <h4>Shkoder</h4>
              </div>
            
                      <div class="form-group">
              </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Hene</div>
                          <div class="col-sm-9"><input type='text' name='shkoderhene' value="<?php echo $shkoderhene; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Marte</div>
                          <div class="col-sm-9"><input type='text' name='shkodermarte' value="<?php echo $shkodermarte; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Merkure</div>
                          <div class="col-sm-9"><input type='text' name='shkodermerkure' value="<?php echo $shkodermerkure; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Enjte</div>
                          <div class="col-sm-9"><input type='text' name='shkoderenjte' value="<?php echo $shkoderenjte; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Premte</div>
                          <div class="col-sm-9"><input type='text' name='shkoderpremte' value="<?php echo $shkoderpremte; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Shtune</div>
                          <div class="col-sm-9"><input type='text' name='shkodershtune' value="<?php echo $shkodershtune; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Diele</div>
                          <div class="col-sm-9"><input type='text' name='shkoderdiele' value="<?php echo $shkoderdiele; ?>" /></div>
                        </div>
                      </div>
                    </div>

            <div class="col-sm-4">
              <div class="col-sm-12">
                <h4>Lushnje</h4>
              </div>
            
                      <div class="form-group">
              </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Hene</div>
                          <div class="col-sm-9"><input type='text' name='lushnjehene' value="<?php echo $lushnjehene; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Marte</div>
                          <div class="col-sm-9"><input type='text' name='lushnjemarte' value="<?php echo $lushnjemarte; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Merkure</div>
                          <div class="col-sm-9"><input type='text' name='lushnjemerkure' value="<?php echo $lushnjemerkure; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Enjte</div>
                          <div class="col-sm-9"><input type='text' name='lushnjeenjte' value="<?php echo $lushnjeenjte; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Premte</div>
                          <div class="col-sm-9"><input type='text' name='lushnjepremte' value="<?php echo $lushnjepremte; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Shtune</div>
                          <div class="col-sm-9"><input type='text' name='lushnjeshtune' value="<?php echo $lushnjeshtune; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Diele</div>
                          <div class="col-sm-9"><input type='text' name='lushnjediele' value="<?php echo $lushnjediele; ?>" /></div>
                        </div>
                      </div>
                    </div>

            <div class="col-sm-4">
              <div class="col-sm-12">
                <h4>Vlore</h4>
              </div>
            
                      <div class="form-group">
              </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Hene</div>
                          <div class="col-sm-9"><input type='text' name='vlorehene' value="<?php echo $vlorehene; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Marte</div>
                          <div class="col-sm-9"><input type='text' name='vloremarte' value="<?php echo $vloremarte; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Merkure</div>
                          <div class="col-sm-9"><input type='text' name='vloremerkure' value="<?php echo $vloremerkure; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Enjte</div>
                          <div class="col-sm-9"><input type='text' name='vloreenjte' value="<?php echo $vloreenjte; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Premte</div>
                          <div class="col-sm-9"><input type='text' name='vlorepremte' value="<?php echo $vlorepremte; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Shtune</div>
                          <div class="col-sm-9"><input type='text' name='vloreshtune' value="<?php echo $vloreshtune; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Diele</div>
                          <div class="col-sm-9"><input type='text' name='vlorediele' value="<?php echo $vlorediele; ?>" /></div>
                        </div>
                      </div>
                    </div>

                  </div>
                            <div class="row">
            <div class="col-sm-4">
              <div class="col-sm-12">
                <h4>Fier</h4>
              </div>
            
                      <div class="form-group">
              </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Hene</div>
                          <div class="col-sm-9"><input type='text' name='fierhene' value="<?php echo $fierhene; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Marte</div>
                          <div class="col-sm-9"><input type='text' name='fiermarte' value="<?php echo $fiermarte; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Merkure</div>
                          <div class="col-sm-9"><input type='text' name='fiermerkure' value="<?php echo $fiermerkure; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Enjte</div>
                          <div class="col-sm-9"><input type='text' name='fierenjte' value="<?php echo $fierenjte; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Premte</div>
                          <div class="col-sm-9"><input type='text' name='fierpremte' value="<?php echo $fierpremte; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Shtune</div>
                          <div class="col-sm-9"><input type='text' name='fiershtune' value="<?php echo $fiershtune; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Diele</div>
                          <div class="col-sm-9"><input type='text' name='fierdiele' value="<?php echo $fierdiele; ?>" /></div>
                        </div>
                      </div>
                    </div>

            <div class="col-sm-4">
              <div class="col-sm-12">
                <h4>Sarande</h4>
              </div>
            
                      <div class="form-group">
              </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Hene</div>
                          <div class="col-sm-9"><input type='text' name='sarandehene' value="<?php echo $sarandehene; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Marte</div>
                          <div class="col-sm-9"><input type='text' name='sarandemarte' value="<?php echo $sarandemarte; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Merkure</div>
                          <div class="col-sm-9"><input type='text' name='sarandemerkure' value="<?php echo $sarandemerkure; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Enjte</div>
                          <div class="col-sm-9"><input type='text' name='sarandeenjte' value="<?php echo $sarandeenjte; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Premte</div>
                          <div class="col-sm-9"><input type='text' name='sarandepremte' value="<?php echo $sarandepremte; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Shtune</div>
                          <div class="col-sm-9"><input type='text' name='sarandeshtune' value="<?php echo $sarandeshtune; ?>" /></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">E Diele</div>
                          <div class="col-sm-9"><input type='text' name='sarandediele' value="<?php echo $sarandediele; ?>" /></div>
                        </div>
                      </div>
                    </div>



                  </div>

              		<div class="box-footer" >
                  <div><img class="gifloader pull-right" style="margin-left: 30px;width: 30px;display: none;" src="assets/img/loader.gif"></div>
	                	<button type="submit" class="btn btn-info pull-right">Vendos</button>
	              </div>
				</div>
              <!-- /.box-body -->
              
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          <!-- general form elements disabled -->
             
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      
    </section>
    <!-- /.content -->
  </div>

  <script type="text/javascript">
  $(".gifloader").hide();




    $("#update_store_times").submit(function(event) {
      $(".gifloader").show();


      /* Stop form from submitting normally */
      event.preventDefault();
      var values = $(this).serialize();

       $.ajax({
              url: "functions.php?action=manage_store_times",
              type: "post",
              data: values ,
              success: function (response) {
                $(".gifloader").hide();
                 // you will get response from your php page (what you echo or print) 
                 //console.log(typeof(response));
                 //console.log(response);
                 
                if(response=="1"){ 
                  // Response: 1 - Success
                   swal(
                    '',
                    'Oraret u perditesuan me sukses',
                    'success'
                  )
                }else if (response == "2"){
                  // Response: 2 - Empty Fields
                  swal(
                    '',
                    'Ju lutem plotesoni te gjitha fushat',
                    'warning'
                  )
                 }               

              },
              error: function(jqXHR, textStatus, errorThrown) {
                 console.log(textStatus, errorThrown);
              }


          });
       });


  </script>

    <?php
  if (isset($_GET['id'])) { ?>
    <script type="text/javascript">
    	$('.clinic-card-container').show();
    	$("#clientsSelect").val(<?php echo $_GET['id']; ?>);


    </script>

  <?php
  	//echo "yes it's set";
  }
  ?>