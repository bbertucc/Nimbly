<?php include 'header.php' ?>
<div class="light_bg">
  <div id="post" class="container">
    <div class="row">
      <div class="nine_span one_space">
        <h1>Contact Todd</h1>
        <p>Ragusa Consulting provides 24/7 client support. Fill in the contact form below and a representative will be in touch with you shortly.</p>
        <form>
          <span><label for="full_name">Full Name</label><input type="text" id="full_name"></span>
          <span><label for="email_address">Email Address</label><input type="text" id="email_address"></span>
          <label for="comments">Comments</label><textarea id="comments"></textarea>
          <button>Submit</button>
        </form>
      </div>
      <div class="three_span">
      <h3>Contact Information</h3>
        <div id="side_info" >
          <?php include 'template_parts/map.php' ?>  
          <p><strong>Address</strong><br>501 basin street, suite F<br>
            New orleans, LA 70112</p>
          <p><strong>Phone</strong><br>504.330.2202</p>
          <ul>
            <li><a href="#">Email Todd</a></li>
          </ul>
        </div>
      </div>
    </div>
<!--
    <div class="row">
      <div class="nine_span one_space">
        <div class="meta">
          Posted: November 23, 2015 <span class="right">Share: <a target="blank" href="https://twitter.com/home?status=your.link.here"><i class="fa fa-twitter fa-lg"></i></a> <a target="blank" href="https://www.facebook.com/sharer/sharer.php?u=your.link.here"><i class="fa fa-facebook fa-lg"></i></a> <a target="blank" href="https://www.linkedin.com/cws/share?url=your.link.here"><i class="fa fa-linkedin fa-lg"></i></a></span>
        </div>
        <?php include 'template_parts/next_previous_links.php' ?>  
      </div>
    </div>
-->
  </div>
  <?php include 'template_parts/featured_articles.php' ?>
</div>
<?php include 'footer.php' ?>
