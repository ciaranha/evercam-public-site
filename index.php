<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Unleash the power of your camera. A developer platform for cameras with an app store for camera owners.">
    <meta name="author" content="evercam.io">
    <title>Evercam.io</title>
    <? include 'styles.php'; ?>
    <script src="http://api.html5media.info/1.1.6/html5media.min.js"></script>
    <meta property="twitter:account_id" content="4503599630778866" />
  </head>
  <body>
  
<? include 'nav.php'; ?>
    

    <header>
      <div class="banner">
        <div class="banner-content">
          <h1>Apps for Cameras</h1>
          <h2>Get more from your CCTV system with our Apps and Developer tools.</h2>
          <h2>Check out our <a href="#Use-Cases">Use Cases</a></h2>
          <a class="btn btn-primary" href="#" role="button">Add a Camera</a>
        </div>
        <div class="banner-image">
          <img src="img/header-banner.png">
        </div>
      </div>
    </header>

    <section id="apps" class="alt-color">
      <div class="apps">
        <div class="title">
          <div class="text-content">
            <h1>Apps</h1>
            <h2>Connect your camera to Evercam and add additional functionality to your camera through our growing range of apps.</h2>
          </div>
        </div>
        <div class="cards">
          <div class="card">
            <div class="card-inner">
              <img src="img/snapmail.png">
              <h3>Snapmail</h3>
              <p>Get scheduled email from your camera</p>
            </div>
          </div>
          <div class="card">
            <div class="card-inner">
              <img src="img/snapmail.png">
              <h3>Evercam Play</h3>
              <p>Get scheduled email from your camera</p>
            </div>
          </div>
          <div class="card">
            <div class="card-inner">
              <img src="img/snapmail.png">
              <h3>Evercam Capture</h3>
              <p>Get scheduled email from your camera</p>
            </div>
          </div>
          <div class="card">
            <div class="card-inner">
              <img src="img/snapmail.png">
              <h3>Timelapse</h3>
              <p>Get scheduled email from your camera</p>
            </div>
          </div>                
        </div>
        <div class="view-more">
        <h3>View all apps <span class="ti-arrow-right"></span></h3>
        </div>
      </div>
    </section>

    <section id="use-cases">
      <div class="use-cases">        
        <div class="title">
          <div class="text-content">
            <h6>Use Case<h6>
            <h1>Construction Camera</h1>
            <h2>Connect your camera to Evercam and add additional functionality to your camera through our growing range of apps.</h2>
            <a class="btn btn-grey-outline" href="/uses/construction" role="button">View Use Case </a>
          </div>
          <div class="title-image">
            <img src="http://placehold.it/400x250">
          </div>
        </div>

        <div class="gallery">          
          <div class="use-case">
            <a href="#"><h3>Weighbridge <span class="ti-arrow-right"></span></h3></a>
            <p>The kit consists of more than a hundred ready-to-use elements that you can combine to get the exact prototype you want</p>
          </div>
          <div class="use-case">
            <a href="#"><h3>SAP <span class="ti-arrow-right"></span></h3></a>
            <p>Get scheduled email from your camera</p>
          </div>
          <div class="use-case">
            <a href="#"><h3>Use Case Three <span class="ti-arrow-right"></span></h3></a>
            <p>Get scheduled email from your camera</p>
          </div>
        </div>
      </div>
    </section>

    <section id="add-camera" class="alt-color">
      <div class="add-camera">        
        <div class="title">
          <div class="text-content">
            <h1>Add a Camera</h1>
          </div>
          
          <div class="add-a-camera">
            <h2>
              I have my own Camera
            </h2>
            <div class="card-inner">
              <div role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Step 1</a></li>
                  <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Step 2</a></li>
                  <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Step 3</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="home">.1..</div>
                  <div role="tabpanel" class="tab-pane" id="profile">..2.</div>
                  <div role="tabpanel" class="tab-pane" id="messages">3...</div>
                </div>
              </div>  
            </div>
          </div>

          <div class="add-a-camera">
            <h2>
              Browse Public Cameras
            </h2>
            <div class="card-inner">
              <div class="public-map">
                <input type="text" class="form-control" placeholder="Search">
                <img src="http://placehold.it/560x350">
              </div>
              <div class="public-description">
                <p>
                  Any camera added to Evercam can be made public and becomes accessible through our Public Camera page in the Evercam dashboard.<br>
                  You can search through Public Cameras and and find cameras located nearby.
                </p>
                <a class="btn btn-primary" href="#" role="button">View Map in Dashboard</a>
              </div>
            </div>
          </div>

          <div class="add-a-camera">
            <h2>
              Use your mobile device as a Camera
            </h2>
            <div class="card-inner">
            Step 1
            </div>
          </div> 

        </div>
      </div>
    </section>

<? include 'footer.php'; ?>
  
  


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
  </body>
</html>