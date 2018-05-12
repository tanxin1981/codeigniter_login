<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="container page-header">
				<h1>Welcome to the real world!</h1>
			</div>
            <div class="container">
                <?php if (isset($username)) :?>
                <p>Dear <strong><?=$username?></strong>, Here is your homepage!</p>
                <p><img src="http://www.runnymedecollegiate.com/wp-content/uploads/2018/01/welcome-768x296.jpg"</p>
                <?php else: ?>
                    Please
                    <a role="button" class="btn btn-link" href="/register">Signup</a>
                    or
                    <a role="button" class="btn btn-link" href="/login">Login</a>
                    to enjoy our premium service!
                <?php endif ?>
            </div>
		</div>
	</div><!-- .row -->
</div><!-- .container -->