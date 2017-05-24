 <?php 
 	$nama = "Irfan Suhendra";
  ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Judul Halaman</title>
 </head>
 <body>
 <?php 
 	for ($i=0;$i<5; $i++){ ?>
 	<h1><?php echo $nama ?></h1>
 	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda fugiat consequatur ratione. Accusamus consectetur assumenda unde ab, delectus praesentium facilis veritatis illo eius, necessitatibus ipsum obcaecati possimus laboriosam est ipsa.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad distinctio, cupiditate, totam, fugiat recusandae earum sint repellendus nobis natus eaque, nostrum voluptatem odit est laborum quos. Nesciunt ducimus ut labore!</p>
 <?php 
  	}
  ?>
<table border="1">
	<tr>
		<td>No</td>
		<td>Nama</td>
	</tr>
	<?php 
	for ($i=0; $i < 10; $i++) { ?>
	<tr>
		<td><?= $i+1 ?></td>
		<td><?= $nama ?></td>
	</tr>
	<?php
		}
	?>
</table>
 	
 </body>
 </html>