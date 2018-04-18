@extends('layouts.app')    
    @section('content')
    <div class="section"></div>
    <div class="section"></div>
      <div class="container">
        <div class="row">
          <div class="col l12 s12 m12">
            <div class="card card-padded grey lighten-4">
              <span class="card-title">HELP / FAQ</span>
              <div class="section"></div>
                <ul class="collapsible grey darken-3 white-text">
                    <li>
                      <div class="collapsible-header black"><i class="material-icons">whatshot</i>Getting Started</div>
                      <div class="collapsible-body">
                        <h6>Creating an Account</h6>
                        <div class="divider"></div>
                        <span><i class="tiny material-icons">check</i>	Step 1: Click register on the home page</span><br>
                        <span><i class="tiny material-icons">check</i>	Step 2: Enter your information</span><br>
                        <span><i class="tiny material-icons">check</i>  Step 3: Click the Register button on the bottom of the form</span><br>
                        <span><i class="tiny material-icons">check</i>	Step 4: Account Created</span><br><br>
                        <h6>Writing Your First Review:</h6>
                        <div class="divider"></div>
                        <span><i class="tiny material-icons">check</i>	Step 1: Search for a professor</span><br>
                        <span><i class="tiny material-icons">check</i>	Step 2: Go to the professor's page</span><br>
                        <span><i class="tiny material-icons">check</i>  Step 3: Click the 'Review This Professor' button</span><br>
                        <span><i class="tiny material-icons">check</i>	Step 4: Write your review</span><br>
                        <span><i class="tiny material-icons">check</i>	Step 5: Click the 'Submit' button</span><br>
                        <span><i class="tiny material-icons">check</i>	Step 6: Review Created</span><br><br>
                        <h6>Reading Other Reviews</h6>
                        <div class="divider"></div>
                        <span><i class="tiny material-icons">check</i>	Step 1: Search for a professor</span><br>
                        <span><i class="tiny material-icons">check</i>	Step 2: The reviews written by other students are on the professor's page</span><br><br>
                        <h6>Viewing Professor's Pages</h6>
                        <div class="divider"></div>
                        <span><i class="tiny material-icons">check</i>	Step 1: Search for a professor</span><br>
                        <span><i class="tiny material-icons">check</i>	Step 2: Click the 'Go' button beneath the search bar</span><br>
                        <span><i class="tiny material-icons">check</i>  Step 3: You have arrived at th professor's page</span><br><br>
                        <h6>Adding a Professor:</h6>
                        <div class="divider"></div>
                        <span><i class="tiny material-icons">check</i>	If you don't see your professor on the site you can request a professor to be added:</span><br>
                        <span><i class="tiny material-icons">check</i>	Step 1: Click the 'Search' button in the navigation bar</span><br>
                        <span><i class="tiny material-icons">check</i>  Step 2: Click the search bar</span><br>
                        <span><i class="tiny material-icons">check</i>	Step 3: Wait for the 'Add Professor' button to show up and then click the button</span><br>
                        <span><i class="tiny material-icons">check</i>	Step 4: Enter the professor's information</span><br>
                      </div>
                    </li>
                    <li>
                      <div class="collapsible-header black"><i class="material-icons">people</i>About Us</div>
                      <div class="collapsible-body"><span>We at Ship Overground are not affiliated in any way, shape, or form with Shippensburg University. We are a team of four students who came up with this idea for out Project Management class. As a disclaimer, the page you see might not be the finished product. We are committed to providing Ship students with a modern, sleek, and effective design. We will do our best to provide everyone with consistent updates until this project is finished. Check back whenever you have time and you might find that the web page is updated.</span></div>
                    </li>
                    <li>
                      <div class="collapsible-header black"><i class="material-icons">question_answer</i>FAQ</div>
                      <div class="collapsible-body">
                        <h6>What are the rules for posting reviews?</h6>
                          <span><i class="tiny material-icons">check</i>Check out our Rules section down below.</span><br>
                          <h6>Is my information safe?</h6>
                          <span><i class="tiny material-icons">check</i>Your information is completely safe. All personal information is encrypted and the site is equipped with HTTPS.</span><br>
                          <h6>What if I don't see my professor?</h6>
                          <span><i class="tiny material-icons">check</i>Check out our Getting Started section which has all the information you need.</span><br>
                          <h6>Do I get anything for donating to Ship Overground?</h6>
                          <span><i class="tiny material-icons">check</i>You do not receive anything if you choose to donate to our website, but you will be helping with the upkeep. The donations would go right back into the costs of running the website.</span><br>
                      </div>
                    </li>
                    <li>
                        <div class="collapsible-header black"><i class="material-icons">do_not_disturb</i>Rules</div>
                        <div class="collapsible-body">
                            <span><i class="tiny material-icons">check</i>We do not have strict rules regarding strong language in reviews. However, we urge reviewers to keep their posts professional if they want to be taken seriously. </span><br>
                            <span><i class="tiny material-icons">check</i>Professors are real people. While other people cannot see who posts a review, they can see what you write. Try your best to keep it civil. </span><br>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header black"><i class="material-icons">info</i>Privacy Policy</div>
                        <div class="collapsible-body">
                            <span><i class="tiny material-icons">check</i>Ship Overground will never steal your personal information. Your information is kept private and encrypted within the database.</span><br>
                            <span><i class="tiny material-icons">check</i>Ship Overground cannot see your physical location from where you post reviews.</span><br>
                        </div>
                    </li>
                  </ul>
                  <div class="section"></div>
                  <a href="/donate"><div class="btn green darken-4 white-text">Donate</div></a>
            </div>
          </div>
        </div>
      </div>
    @endsection