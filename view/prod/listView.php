
      <!-- page content -->
      <div class="span9">
        <div class="pageContent">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Qty</th>
                    </tr>
                </thead>
                <tbody>

<?php

    foreach ( $product as $key => $item ) { ?>

                    <tr>
                        <td><?php print $item["prod_name"]; ?></td>
                        <td><?php print $item["prod_description"]; ?></td>
                        <td><?php print $item["retail"]; ?></td>
                        <td><?php print $item["qty"]; ?></td>
                    </tr>

<?php }

?>
                </tbody>
            </table>

        </div><!--/well-->
      </div><!--/span-->
      <!-- End page content -->