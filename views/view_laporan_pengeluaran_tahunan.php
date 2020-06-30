
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
                        include 'library/konversi_bulan.php';
                        include 'library/config.php';
                        $tahun=$_GET['tahun']; 
                        
                        ?>
								<div class="panel-heading text-center">
                                    <img src="assets/img/logo.png" style="width:100px; float:left">
                                    <h3 class="" style="display:inline-block">Laporan Tahunan Pengeluaran</h3>
                                    <h4 class="text-center">DAYAH TERPADU MADINATUDDINIYAH JABAL NUR PALOH LADA</h4>
                                    <h4 class="text-center">Kec. Dewantara Kab. Aceh Utara</h4>
                                </div>
                                <div class="panel-body">
                                    <table class="">
                                    <tr>
                                        <td><h4>Tahun &nbsp;</h4></td>
                                        <td><h4>&nbsp;: </h4></td>
                                        <td><h4>&nbsp; <?=$tahun?></h4></td>
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
                                                <th>Bulan</th>
                                                <th>Pengeluaran per Bulan</th>
                                            </tr>
                                            </thead>
                                            <?php 
                                            $nama_bulan = array(1=>"Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                                            ?>
                                            <tbody>
                                                                                          
                                                <?php 
                                                $total=0;
                                                for($i=1;$i<=12;$i++) { 
                                                $laporan=mysqli_query($koneksi,"SELECT IFNULL(SUM(nominal),0)
                                                FROM tbl_pengeluaran
                                                INNER JOIN tbl_detail_pengeluaran ON tbl_detail_pengeluaran.id_pengeluaran=tbl_pengeluaran.id_pengeluaran
                                                WHERE YEAR(tbl_pengeluaran.tanggal)='$tahun' AND MONTH(tbl_pengeluaran.tanggal)='$i'"); 
                                                $data=mysqli_fetch_row($laporan);
                                                echo '<tr>
                                                <td>'.$i.'</td>
                                                <td>'.$nama_bulan[$i].'</td>
                                                <td>'.rupiah ($data[0]).'</td>
                                                </tr>';
                                                $total+=$data[0];
                                                }
                                                
                                                ?>
                                               <tr>
                                                <td colspan="2"><b>Total</b></td>
                                                <td><?= rupiah($total);?>
                                               </tr>
                                            
                                                
                                            </tbody>
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
        