
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
                        include 'library/function_date.php';
                        include 'library/config.php';
                        $nama_bulan = array(1=>"Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                        $tanggal=$_GET['bulan_tahun'];
                        $bulan=(int)substr($tanggal,0,2);
                        $tahun=substr($tanggal,3,4);
                        
                        ?>
								<div class="panel-heading text-center">
                                    <img src="assets/img/logo.png" style="width:100px; float:left">
                                    <h3 class="" style="display:inline-block">Laporan Pengeluaran Bulanan</h3>
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
                                    <tr>
                                        <td><h4>Bulan &nbsp;</h4></td>
                                        <td><h4>&nbsp;: </h4></td>
                                        <td><h4>&nbsp; <?=$nama_bulan[$bulan]?></h4></td>
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
                                                <th>Tanggal</th>
                                              
                                                <th>Nominal</th>
                                            </tr>
                                            </thead>
                                            <?php 
                                            
                                            ?>
                                            <tbody>
                                                                                          
                                                <?php
                                                $total=0;
                                                $no=1; 
                                                $query=mysqli_query($koneksi,"SELECT tp.tanggal,tp.penerima,SUM(td.nominal)
                                                FROM tbl_pengeluaran as tp
                                                INNER JOIN tbl_detail_pengeluaran as td ON td.id_pengeluaran=tp.id_pengeluaran
                                                WHERE MONTH(tp.tanggal)='$bulan' AND YEAR(tp.tanggal)='$tahun'
                                                GROUP BY tp.tanggal");
                                                while($row=mysqli_fetch_array($query)){
                                                echo '<tr>
                                                <td>'.$no.'</td>
                                                <td>'.tgl_indonesia($row[0]).'</td>
                                               
                                                <td>'.rupiah($row[2]).'</td>
                                            </tr>';

                                            $no++;
                                                $total=$total+$row[2];
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
        