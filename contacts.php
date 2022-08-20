<?php
  get_header();
    /**
* Template Name: contacts
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
?>
<div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Send us a Message</h2>
            </div>
          </div>
          <div class="col-md-8" style=" border:6px solid red; border-radius: 60px; margin: auto; background-color: #ffcccb;">
            <div class="contact-form">
              <form id="contact" action="" method="post" style="width: 30%; margin: 7% 20% 7% 20%;">
                <div class="row">
                     <?php echo do_shortcode('[contact-form-7 id="17" title="Форма за контакти 1"]') ?>

                	</div>
                </div>
              </form>
            </div>
          </div>

<?php
  get_footer();
?>