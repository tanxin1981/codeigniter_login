<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?=$username?> action history</h1>
                <table style="width:500px;">
                    <tr>
                        <th style="width:400px;">time</th>
                        <th style="width:100px;">action</th>
                    </tr>
                    <?php foreach ($histories as $history){ ?>
                    <tr>
                    <td><?=$history['time']?></td>
                    <td><?=$history['action']?></td>
                    </tr>
                    <?php } ?>
                </table>
			</div>
		</div>
	</div><!-- .row -->
</div><!-- .container -->