<html>
    <head>
        <style>
            .center{
                text-align: center;
            }
            .f16{
                font-size: 16px;
            }
            .f20{
                font-size: 20px;
            }
            .f12{
                font-size: 12px;
            }
            .justify{
                text-align: justify;
            }
            .bold{
                font-weight: bold;
            }
            section{
                margin:0;
                padding:0;
            }
            .underline{
                border-bottom: 1px solid black;
                width:40%;
                margin-left: 30%;
            }
            .paragraf{
                margin-left: 50px;
                margin-right: 50px;
            }
            .pengesahan{
                display: inline-block;
                width:50%;
                text-align: center;
            }
            .floatleft{
                float:left;
                position: relative;
            }
            .floatright{
                float:right;
                position: relative;
            }
            table{
                width:80%;
            }
            .tdleft{
                width:40%;
                padding-left: 20px;
            }
            .tdright{
                width:60%;
                padding-right: 20px;
            }
            .logo_kop{
                width:85px;
                float:left;
                position:absolute;                
            }
            .right{
                position:absolute;
                float:right;
            }
            .inline-block{
                display: inline-block;
                width:90%;
                margin-left: 10%;
                
            }
        </style>
    </head>
    <body>
        <img src="<?= base_url()?>/assets/images/logo_kab.jpg" class="inline-block logo_kop"/>
        <header class="inline-block center right">
            <section class="f16">PEMERINTAH KABUPATEN CIREBON</section>
            <section class="f16 bold">KECAMATAN KEDAWUNG</section>
            <section class="f20 bold">KANTOR KUWU SUTAWINANGUN</section>
            <section class="f12"><i>Jalan Pramuka No. 13 Telp. (0231)337037 <span class="bold">Cirebon 45153</span></i></section>
        </header>
        <br>
        <br>
        <br>
        <br>
        <br>
        <hr>
        <br>
        <br>
        <h2><small>Data Penduduk Desa Sutawinangun</small></h2>
Total Penduduk : <?=$jumlah_penduduk?> orang<br>
Total Laki-Laki : <?=$jumlah_pria?> orang<br>
Total Perempuan : <?=$jumlah_wanita?> orang<br>
            
          <div class="x_content">
            <p class="text-muted font-13 m-b-30">
              <!-- DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code> -->
            </p>
            <table id="datatable" class="table table-striped table-bordered" border="1" style="border-spacing:none;">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>NIK</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Agama</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Alamat</th>
                  <th>Status Perkawinan</th>
                  <th>kewarganegaraan</th>
                  <th>Pekerjaan</th>
<!--                  <th>Aksi</th>-->
                </tr>
              </thead>
              <tbody>
                <?php
                $no=1;
                foreach ($penduduk as $row) {
                ?>
                <tr>
                  <td><?= $no++;?></td>
                  <td><?= $row->nik;?></td>
                  <td><?= $row->nama;?></td>
                  <td><?= $row->j_kelamin;?></td>
                  <td><?= $row->agama;?></td>
                  <td><?= $row->tmp_lahir;?></td>
                  <td><?= $row->tgl_lahir;?></td>
                  <td><?= $row->alamat;?></td>
                  <td><?= $row->status_perkawinan;?></td>
                  <td><?= $row->kewarganegaraan;?></td>
                  <td><?= $row->pekerjaan;?></td>
<!--
                  <td>
                    <a href="<?php echo base_url(). 'index.php/admin/update_data_penduduk/'.$row->nik; ?>" style="background-color:cornflowerblue;color:white;padding:5px;border-radius:10px;">update</a><br/><br/>
                    <a href="<?php echo base_url(). 'index.php/action/hapus_data_penduduk/'.$row->nik; ?>" style="background-color:crimson;color:white;padding:5px;border-radius:10px;">delete</a>
                  </td>
-->
                </tr>
                <?php
                }
                 ?>

              </tbody>
            </table>
          </div>
        </body>
</html>
