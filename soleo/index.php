<?php get_header(); ?>

<!--Background Image-->
<div class=" d-flex bg-image" style="background-image:url(<?php echo get_theme_file_uri('/images/background.jpeg') ?>);">
    <div class="container d-flex flex-column justify-content-center align-items-start" style="height: 100%;">
      <div style="color: #2F3037;">
        <h1 class="md-3">Performance<br>Marketing that Scales</h1>
        <h5 class="md-4 text-muted">From experts in pay-per-call lead generation</h5>
        <button class="btn btn-primary btn-lg mt-4" href="#" role="button"  style="background-color: #ef6b36;">Let's talk</button>
      </div>
        
    </div>
    
  </div>

  


<!--Body content-->
<div class="container-fluid" style="padding-top: 150px;">
  <div>
    <h1 class="d-flex justify-content-center text-center" style="font-size: 45px;">Get the Most Out of Your Marketing Dollars</h1>
    <p id="section-p" class="d-flex justify-content-center text-muted text-center">Target the customers you want and get leads that convert. Performance marketing maximizes your marketing spend by focusing on high-intent inbound leads from qualified sources.</p>
  </div>
  
  
   <!--Cards Section-->
  <div class="container d-flex align-items-center justify-content-center text-center h-100">
    <div class="text-black">
      <div class="container mt-5">
          <div class="row d-flex align-items-start justify-content-center">
            <!--First Column-->
            <div class="col-lg">
              <div class="row justify-content-center">
                <div class="col-2"><img src="<?php echo get_theme_file_uri("images/first_icon.svg")?>" /></div>
                  <div class="col-8 text-start"><p><strong>Only Pay for Performance</strong></p>
                    <p class="text-muted text-justify text-start">
                      Amplify your ROAS with the highest-converting form of leads – calls
                    </p>
                  </div> 
              </div>
            </div>
            
            <!--Second Column-->
            <div class="col-lg">
              <div class="row justify-content-center">
                <div class="col-2"><img src="<?php echo get_theme_file_uri("images/second_icon.svg")?>" /></div>
                  <div class="col-8 text-start"><p><strong>Increase Your Profitability</strong></p>
                    <p class="text-muted text-start">
                      Innovative call management technology that increases the efficiency of your team & campaigns
                    </p>
                  </div> 
              </div>
            </div>
      
           
            <!--Third Column-->
            <div class="col-lg">
              <div class="row justify-content-center">
                <div class="col-2"><img src="<?php echo get_theme_file_uri("images/third_icon.svg")?>"/></div>
                <div class="col-8 text-start"><p><strong>Benefit from our Experience</strong></p>
                  <p class="text-muted text-start">
                    Our 20+ years in call management make Soleo a pioneer and trusted expert in pay-per-call
                  </p>
                </div> 
              </div>
            
            </div>
          </div>
        </div>

    <!--Learn More Button-->  
      <button type="button" class="learn-btn btn-dark mt-5 mb-5 text-black shadow-0">Learn more</button>
    </div>
  </div>
</div>

<?php get_footer(); ?>