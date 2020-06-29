<html><head>
<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
	
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	
  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
   
	
<?php 		include 'format_rupiah.php';
            include 'function_date.php';
            include 'function_terbilang.php';
			include 'config.php';?>
    <!-- Content Header (Page header) -->
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
  body{
  -webkit-print-color-adjust:exact;
}
    .garis {
    border-bottom: 1px solid black;
    }
    table .garis2 {
    border-collapse: collapse;
    width: 95%;
}

 table .garis2 {
    border: 1px solid black;
}
table .garis2 tr {
    border: 1px solid black;
}
table .garis2 th {
    border: 1px solid black;
     height: 25px;
}
table .garis2 td {
    border: 1px solid black;
   
}
table .tabel3 {
	width: 95%;
	text-align: left;
}
.spacer5 {
    height: 30px;
  }

    </style>
</head>
<body>

    <!-- Main content -->
    <section class="content container-fluid">
        <section class="invoice">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="page-header">
                     <!--  <img src="../images/kopsurat.png"> -->
                   
                    </h2>
                    </div>
                </div>
          
          <?php 
          $id_pengeluaran=$_GET['id'];
          $query=mysqli_query($koneksi,"SELECT tp.tanggal,tp.penerima,ifnull(SUM(td.nominal),0) as total
          FROM tbl_pengeluaran as tp
          INNER JOIN tbl_detail_pengeluaran as td on td.id_pengeluaran=tp.id_pengeluaran
          WHERE tp.id_pengeluaran='$id_pengeluaran'");
          $data=mysqli_fetch_row($query);

          
          echo '<div class="row invoice-info">
            <h3><p class="text-center"><strong>Tanda Penerimaan</strong></p></h3>
                <div class="col-xs-6 invoice-col">
                <table>
                    <tr>
                        <td>Sudah terima dari</td>
                        <td>:</td>
                        <td>&nbsp;Bendahara Kas</td>
                    </tr>
                    <tr>
                        <td>Tanggal</td>
                        <td>:</td>
                        <td>&nbsp;'.tgl_indonesia($data[0]).'</td>
                    </tr>
                    <tr>
                        <td>Uang banyaknya</td>
                        <td>:</td>
                        <td>&nbsp;'.rupiah($data[2]).'</td>
                    </tr>
                    <tr>
                        <td>Terbilang</td>
                        <td>:</td>
                        <td>&nbsp;'.terbilang($data[2]).'&nbsp;rupiah</td>
                    </tr>
                    <tr>
                        <td colspan="3">Dengan rincian sebagai berikut</td>
                       
                    </tr>
                </table>';?>
                <div class="spacer5"></div>
               
               <table border="1"  width="680">
               <!--<col width="100">
               <col width="800">
               <col width="400">-->
                <tr >
                    <th style="text-align:center">No</th>
                    <th style="text-align:center" width="450">Keperluan</th>
                    <th style="text-align:center">Nominal</th>
                </tr>
                <?php
                    $no=1;
                    $query1=mysqli_query($koneksi,"SELECT perihal,nominal FROM tbl_detail_pengeluaran WHERE id_pengeluaran='$id_pengeluaran'");
                    while($data1=mysqli_fetch_array($query1)){

                echo '<tr>
                    <td style="text-align:center">'.$no.'</td>
                    <td>&nbsp;'.$data1[0].'</td>
                    <td class="text-right">'.rupiah($data1[1]).'</td>
                </tr>';
                $no++;
                    }
                ?>
                
                <tr>
                    <th>&nbsp;</th>
                    <th>Total</th>
                    <th class="text-right"><?php echo rupiah($data[2]); ?></th>
                </tr>

               </table></p></div>
                </div>
                <table class="tabel3">
				<tbody>
						<tr  height="10">
						<td>&nbsp;</td>
						<td width="50">&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr >
						<td><b>Bendahara Kas</b></td>
						<td width="250">&nbsp;</td>
						<td><b>Penerima</b></td>
					</tr>
					<tr  height="100">
						<td>&nbsp;</td>
						<td width="330">&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr >
						<td class="garis"><p></p></td>
						<td width="250">&nbsp;</td>
						<?php echo '<td class="garis"><b>'.strtoupper(($data[1])).'</b></td>'; ?>
					</tr>
					<tr >
						<td>NIP.</td>
						<td width="250">&nbsp;</td>
						<td>NIP. </td>
					</tr>
				</tbody>
			</table>
            </div>
           
              
        </section>

    </section>
    </body>
    <script>
    $(document).ready(function(){
        window.print();
    });
    </script>
    </html>    