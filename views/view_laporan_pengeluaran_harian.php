
        <style>
            	@page {
  size: A4;
  border: 0;
  margin: 0mm 0mm 0mm 10mm;
  
}
@media print {
  html, body {
    width: 210mm;
    height: 297mm;
  }
  }
            </style>
        <!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
                    <!-- OVERVIEW -->
                    <div class="panel">
                        <?php 
                        include 'library/format_rupiah.php';
                        include 'library/function_date.php';
                        include 'library/config.php';
                       
                        $tanggal=$_GET['tanggal'];
                       
                        
                        ?>
								<div class="panel-heading text-center">
                                    <h3 class="" style="display:inline-block">Laporan Pengeluaran Harian</h3>
                                </div>
                                <div class="panel-body">
                                    <table class="">
                                    <tr>
                                        <td><h4>Tanggal &nbsp;</h4></td>
                                        <td><h4>&nbsp;: </h4></td>
                                        <td><h4>&nbsp; <?=tgl_indonesia($tanggal)?></h4></td>
                                    </tr> 
                                                                  
                                    </table>
                                </div>
								<hr>
								<div class="panel-body">
                                   
                                    <div class="row">

                                        <table class="table table-bordered table-striped" id="">
                                            <thead>
                                            <tr>
                                                <th style="width: 5%">No</th>
                                               <th>Penerima</th>
                                                <th>Nominal</th>
                                            </tr>
                                            </thead>
                                            <?php 
                                            
                                            ?>
                                            <tbody>
                                                                                          
                                                <?php
                                                $total=0;
                                                $no=1; 
                                                $query=mysqli_query($koneksi,"SELECT tp.penerima,SUM(td.nominal)
                                                FROM tbl_pengeluaran as tp
                                                INNER JOIN tbl_detail_pengeluaran as td ON td.id_pengeluaran=tp.id_pengeluaran
                                                WHERE tp.tanggal='$tanggal'
                                                GROUP BY tp.id_pengeluaran");
                                                while($row=mysqli_fetch_array($query)){
                                                echo '<tr>
                                                <td>'.$no.'</td>
                                                <td>'.$row[0].'</td>
                                                <td>'.rupiah($row[1]).'</td>
                                            </tr>';
                                            $no++;
                                            $total=$total+$row[1];

                                                }
                                                ?>
                                               
                                            
                                                
                                            </tbody>
                                            <thead>
                                            <tr>
                                                <th style="width: 5%"></th>
                                                <th>Total</th>
                                              
                                                <th><?= rupiah ($total)?></th>
                                            </tr>
                                            </thead>
                                        </table>
                                        <a href="#" class="pull-right" onclick="window.print()"><i class="fa fa-print btn btn-success print" title="Cetak Laporan"> Cetak Laporan</i></a><br><br>
                                    </div>
								</div>
							</div>
					<!-- END OVERVIEW -->
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
        <!-- END MAIN -->
        