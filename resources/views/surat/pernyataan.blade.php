<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<div style="line-height: 0.25, ">
	<center>
		<h3>RUKUN TETANGGA 10 RW. 07</h3>
		<h3>KELURAHAN CAWANG</h3>
		<h3>KEC. KRAMATJATI JAKARTA TIMUR	</h3>
  </center>
</div>
	
	<hr style="height:2px;border-width:0;color:gray;background-color:black">
	
<div style="font-size: 100%; font-weight: bold; text-decoration: underline; text-align: center">
		<p>
		  <label>SURAT PERNYATAAN</label>
	  </p>
	</div>

	<p style="text-indent: 5em">
		Saya yang bertanda tangan dibawah ini:
	</p>
	
<table width="1223" border="0">
	  <tbody>
	    <tr>
	      <td width="75">&nbsp;</td>
		  <td width="233">Nama</td>
	      <td width="901">: {{ $services->nama }}</td>
        </tr>
	    <tr>
	      <td>&nbsp;</td>
		  <td>Tempat, Tanggal Lahir</td>
	      <td>: {{ $services->tmptlhr }}, {{ date('d-m-Y', strtotime($services->tgllhr)) }}</td>
        </tr>
	    <tr>
	      <td>&nbsp;</td>
		  <td>NIK</td>
	      <td>: {{ $services->nik }}</td>
        </tr>
	    <tr>
	      <td>&nbsp;</td>
		  <td>Jenis Kelamin</td>
	      <td>: {{ $services->jkel }}</td>
        </tr>
	    <tr>
	      <td>&nbsp;</td>
		  <td>Alamat Sesuai KTP</td>
	      <td>: {{ $services->alamat }}</td>
        </tr>
	    <tr>
	      <td>&nbsp;</td>
		  <td>Agama</td>
	      <td>: {{ $services->agama }}</td>
        </tr>
	    <tr>
	      <td>&nbsp;</td>
		  <td>Pekerjaan</td>
	      <td>: {{ $services->pekerjaan }}</td>
        </tr>
      </tbody>
	</table>
    <p style="text-indent: 5em">
		Dengan ini menyatakan bahwa {{ $services->teks }}.
	</p>

	<p style="text-indent: 5em">
		Demikian surat pernyataan ini saya buat dengan sebenar-benarnya dan dipergunakan sesuai dengan keperluan.
	</p>
    <center>	
        <table width="100%" border="0" style="text-align: center">
            <tbody>
                <tr>
                <td width="50%">&nbsp;</td>
                <td width="50%"><p  style="line-height: 1">Jakarta, {{date('d M Y')}}</p>
                <p  style="line-height: 1">Yang membuat pernyataan</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>( {{ $services->nama }} )</p></td>
                </tr>
            </tbody>
        </table>
    </center>
	<p style="text-align: center">Mengetahui:</p>
	<center>
        <table width="100%" border="0" style="text-align: center">
            <tbody>
                <tr>
                    <td width="50%"><p>Ketua RW 07 / I</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>( Munadi )</p></td>
                    <td width="50%"><p>Ketua RT 010 / 07</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>( Puji Purnomo )</p></td>
                </tr>
            </tbody>
        </table>
	</center>
</body>
</html>
