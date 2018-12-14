<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>All Products Listing</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="col-md-10 col-md-offset-1">
      <h1>All Products Listing</h1>
      <table class="table table-responsive table-bordered">
        <tr>
          <th>SL.</th>
          <th>Product Name</th>
          <th>Product Price</th>
          <th>Quantity</th>
          <th>Brand Company</th>
          <th>Description</th>
          <th>Added Date</th>
          <th>Last Updated</th>
          <th>Actions</th>
        </tr>

        <?php
          $i=0;
          foreach($products AS $product):
          ?>
        <tr>
          <td><?php echo ++$i; ?></td>
          <td><?php echo $product->product_name; ?></td>
          <td><?php echo $product->product_price; ?></td>
          <td><?php echo $product->quantity;?></td>
          <td><?php echo $product->company_name; ?></td>
          <td><?php echo $product->description; ?></td>
          <td><?php echo $product->date_created; ?></td>
          <td><?php echo $product->date_updated; ?></td>
          <td>
            <a href="<?php echo base_url();?>product/edit/<?php echo $product->product_id;?>">
            <button class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></button>
            </a>
            <a href="<?php echo base_url();?>product/delete_row/<?php echo $product->product_id;?>">
            <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
            </a>
          </td>
        </tr>
        <?php endforeach; ?>
      </table>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
  </html>