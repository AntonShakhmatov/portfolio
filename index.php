<?php get_header(); ?>

<!--content-part-->
<!-- <div class="mobile-line"></div> -->
<div class="home-box container">

<!--first-block-->	
<div class="description">	

<!--three columns-->
<div class="three-columns">
<table>
<caption>
<div class="home-title">
Home
</div>

</caption>
	<thead>
		<tr>
<th>
<div class="home-under-title-text">
	Build visual for your customers
</div>
</th>
		</tr>
	</thead>
	<tbody style="display: flex;flex-direction: row;">
		<tr style="display: grid;">
			<td style="display: flex;"><div class="dot-image"></div><div class="near-dot-header">Lorem Ipsum is simply dummy</div></td>
			<td><div class="under-dot-description">Lorem Ipsum is simply dummy text of the printing and type- setting industry.</div></td>
		</tr>
			<tr style="display: grid;">
			<td style="display: flex;"><div class="dot-image"></div><div class="near-dot-header">Lorem Ipsum is simply dummy</div></td>
			<td><div class="under-dot-description">Lorem Ipsum is simply dummy text of the printing and type-setting industry.</div></td>
		</tr>
			<tr style="display: grid;">
			<td style="display: flex;"><div class="dot-image"></div><div class="near-dot-header">Lorem Ipsum is simply dummy</div></td>
			<td><div class="under-dot-description">Lorem Ipsum is simply dummy text of the printing and type-setting industry.</div></td>
		</tr>
	</tbody>
</table>

</div>
<!--/three columns-->

</div>
<!--/first-block-->

<!--reverse container-->

<!-- second container -->
<div class="reverse-container">

<div class="reverse-container__first-block">	
<div class="reverse-container__text-part"><div class="reverse-container__text-part__header">Lorem Ipsum is simply dummy</div>
<div class="reverse-container__text-part__description">Lorem Ipsum is simply dummy text of the printing and type-setting industry.</div>
<div class="first-block-button"><button>GET STARTED</button></div>
</div>
<div class="reverse-container__image"></div>
</div>

<div class="reverse-container__second-block">	
<div class="reverse-container__text-part"><div class="reverse-container__text-part__header">Lorem Ipsum is simply dummy</div>
<div class="reverse-container__text-part__description">Lorem Ipsum is simply dummy text of the printing and type-setting industry.</div>
<div class="second-block-button"><button>GET STARTED</button>
	</div></div>
<div class="reverse-container__image_2"></div>
</div>

</div>
<!-- second container -->
<!--/reverse container-->

<!--price-cards-->
<!-- third-container -->
<section class="pricing-section bg-8">
            <div class="pricing pricing--tashi">
                <div class="pricing__item">
                    <h3 class="pricing__title">Startup</h3>
                    <p class="pricing__sentence">Perfect for small startups that have less than 10 team members</p>
                    <div class="pricing__price"><span class="pricing__currency">$</span>19<span class="pricing__period">/ month</span></div>
                    <ul class="pricing__feature-list">
                        <li class="pricing__feature">1 GB of space</li>
                        <li class="pricing__feature">Support at $25/hour</li>
                        <li class="pricing__feature">Small social media package</li>
                    </ul>
                    <button class="pricing__action" aria-label="Purchase this plan"><span class="icon icon--arrow-right"></span></button>
                </div>
                <div class="pricing__item">
                    <h3 class="pricing__title">Medium</h3>
                    <p class="pricing__sentence">Suitable for medium-sized businesses with up to 30 employees</p>
                    <div class="pricing__price"><span class="pricing__currency">$</span>199<span class="pricing__period">/ month</span></div>
                    <ul class="pricing__feature-list">
                        <li class="pricing__feature">5 GB of space</li>
                        <li class="pricing__feature">Support at $5/hour</li>
                        <li class="pricing__feature">Medium social media package</li>
                    </ul>
                    <button class="pricing__action" aria-label="Purchase this plan"><span class="icon icon--arrow-right"></span></button>
                </div>
                <div class="pricing__item">
                    <h3 class="pricing__title">Pro</h3>
                    <p class="pricing__sentence">For any large corporation with an unlimited number of members</p>
                    <div class="pricing__price"><span class="pricing__currency">$</span>499<span class="pricing__period">/ month</span></div>
                    <ul class="pricing__feature-list">
                        <li class="pricing__feature">Unlimited space</li>
                        <li class="pricing__feature">20 hours of free support</li>
                        <li class="pricing__feature">Full social media package</li>
                    </ul>
                    <button class="pricing__action" aria-label="Purchase this plan"><span class="icon icon--arrow-right"></span></button>
                </div>
            </div>
        </section>
        <!-- /third-container -->
<!--/price-cards-->

<!--contacts-->
<!-- fourth container -->
<div class="contacts">

<div class="contacts-header">Contact Us</div>
<div class="contacts-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
<div class="contact-blocks">
<!--form-block-->
<div class="contacts-block-left">
	
  <form id="contact" action = "<?php echo admin_url('admin-ajax.php?action=send_mail') ?>" method="post">
  	<div id="note"></div>
  	<div id="fields">
    <p><label for="name"><input class="respond" type="text" name="message_name" placeholder="Your name" value="<?php echo esc_attr($_POST['message_name']); ?>"></label></p>
    <p><label for="message_email"><input class="respond" type="text" name="message_email" placeholder="Your email" value="<?php echo esc_attr($_POST['message_email']); ?>"></label></p>
    <p><label for="message_text"><textarea class="respond-text" type="text" name="message_text" placeholder="Your text" value="<?php echo esc_textarea($_POST['message_text']); ?>"></textarea></label></p>
    <!-- <p><label for="message_human" class="resp">Human Verification:<input class="respond" type="text" name="message_human" style="width: 60px;"> + 3 = 5</label><input type="hidden" name="submitted" value="1"><input class="input" type="submit"/></p> -->
   <input type="hidden" name="submitted" value="1">
  </div>
  </form>

</div>
<!--/form-block-->

<div class="contacts-block-right">
	<ul>
	<li><div class="tel"></div><div class="contact-txt">+420 774-129-003</div></li>
	<li><div class="envelope"></div><div class="contact-txt">podudali.tech@gmail.com</div></li>
		<li><div class="insta"></div><div class="contact-txt">@podudali_portfolio</div></li>
		<li><div class="messenger"></div><div class="contact-txt">podudali.tech@gmail.com</div></li>
</ul>
</div>
</div>
</div>
<!-- /fourth container -->
<!--/contacts-->
	</div>
<!--/content-part-->
<div class="line-messure"></div>

<?php
//get_sidebar();
get_footer();
