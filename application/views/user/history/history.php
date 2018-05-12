<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="container page-header">
				<h1>User '<?=$username?>' activities:</h1>
                <table class="table">
                    <thead>
                    <tr>
                        <th class="col-md-2">Time</th>
                        <th class="col-md-2">Activity</th>
                        <th class="col-md-2">IP</th>
                        <th class="col-md-6">User Agent</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($histories as $history){ ?>
                    <tr>
                    <td><?=isset($history['time']) ? $history['time'] : 'N/A'?></td>
                    <td><?=isset($history['action']) ? $history['action'] : 'N/A'?></td>
                        <td><?=isset($history['ip']) ? $history['ip'] : 'N/A'?></td>
                        <td><?=isset($history['user_agent']) ? $history['user_agent'] : 'N/A'?></td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
			</div>
		</div>
	</div><!-- .row -->
</div><!-- .container -->