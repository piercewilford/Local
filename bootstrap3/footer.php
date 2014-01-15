<?php
/**
 * Default Footer
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
?> 
<footer>
<div class="well col-sm-12 col-md-12 col-lg-12">
                <div class="col-sm-4 col-md-4">
                <h4 style="color:#34344B;">Options For Animals:</h4>
                <p>4267 Virginia Rd
                Wellsville, KS 66092</p>
                <a href="tel:=13096582920">(309) 658-2920</a>
                </div>
                <div class="col-sm-4 col-md-4">
            </div>
                <div class="col-sm-3 col-md-3">
                    <div class="col-sm-12 col-md-12">
                        <ul class="list-unstyled">
                            <li><h4 style="margin:0px;color:#34344B;">Quicklinks</h4></li><li>
                            </li><li><a href="<?php echo site_url() ?>/aboutus/">About us</a></li>
                            <li><a href="<?php echo site_url() ?>/contactus/">Contact Us</a></li>
                            <li><a href="<?php echo site_url() ?>/your-invoices/">Your Payments</a></li>
                            <li><a href="<?php echo site_url() ?>/register/">Register</a></li>
                            <li><a href="<?php echo wp_login_url( $_SERVER[HTTP_REFERER] ); ?>" title="Login">Login</a></li>                         
                             <li><a href="<?php echo wp_logout_url( $_SERVER['REQUEST_URI']); ?>" title="Logout">Logout</a></li>
                        </ul>
                    </div>             
                </div>
  </div>

                <?php
                if (function_exists('dynamic_sidebar')) {
                    dynamic_sidebar("footer-content");
                } ?>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>