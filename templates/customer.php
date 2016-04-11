<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/customer.css">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"></a>
        </div>
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Cisco Customer Service Hub</h1>
        <p>We are here to help.</p>
        <p><button class="btn btn-primary btn-lg service-request-btn" data-toggle="modal" data-target="#service-request-modal">Talk to a Representative</button></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Cisco Docs</h2>
          <p></p>
          <p><a class="btn btn-default" href="http://www.cisco.com/c/en/us/support/index.html" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>TAC</h2>
          <p></p>
          <!-- <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p> -->
		  <p><a class="btn btn-default" href="http://76.204.214.224/candy/example/index.html"  onclick="window.open('http://76.204.214.224/candy/example/index.html', 'newwindow', 'width=300, height=250'); return false;"> Chat</a></p>
       </div>
        <div class="col-md-4">
          <h2>General Inquiries</h2>
          <p></p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; Happy 2016</p>
      </footer>
    </div> <!-- /container -->


    <!-- Service Request Modal -->
    <div class="modal fade" id="service-request-modal" tabindex="-1" role="dialog" aria-labelledby="service-request-modal-label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="service-request-modal-label">Talk to a Representative</h4>
                </div>
                <div class="modal-body">
                    <form role="form" class="request-form">
                        <div class="form-group">
                            <label for="customer-name" class="control-label">Your Name:</label>
                            <input type="text" class="form-control customer-name" name="customer_name" required="required">
                        </div>
                        <div class="form-group">
                            <label for="problem-text" class="control-label">Tell us about your problem:</label>
                            <textarea class="form-control problem-text" name="problem_text" required="required"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary request-submit">Request a representative</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Service Panel -->
    <div id="service-panel" class="video-holder">
        <div class="subscriber"></div>
        <div class="publisher"></div>
        <div class="bottom-bar">
            <button type="button" class="btn btn-danger close-button">Cancel</button>
        </div>
        <div class="waiting">
            <p class="hardware-access">Please allow access to your camera and mic.</p>
            <p class="representative">Waiting for representative...</p>
        </div>
    </div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/lodash.js/2.4.1/lodash.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//static.opentok.com/webrtc/v2.2/js/opentok.min.js"></script>
    <script src="/js/vendor/setImmediate.js"></script>
    <script src="/js/vendor/eventemitter2.js"></script>
    <script src="/js/utils.js"></script>
    <script src="/js/customer.js"></script>
</body>
</html>
