<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts-2/icomoon/style.css">

    <link rel="stylesheet" href="css-2/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css-2/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="css-2/style.css">

    <link rel="shortcut icon" href="img/heart-shortcut-icon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="#" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css" />

    <title>Heart/NSTA Trust | Login</title>
  </head>
  <body>

        <!-- LOADER -->
        <div id="preloader">
          <div class="loader">
              <img src="img/loader.gif" alt="#" />
          </div>
      </div>
      <!-- end loader -->
      <!-- END LOADER -->


  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('img/workers.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3 style="font-size:2rem">Login</h3>
            {{-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> --}}
            <form action="login" method="POST">
                @csrf
              <div class="form-group first">
                <label for="username">Email</label>
                <input type="text" name="email" class="form-control" placeholder="your-email@gmail.com" id="username">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password" name="pwd" class="form-control" placeholder="Your Password" id="password">
              </div>

              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption" style="font-size:12.5px">Remember me </span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="signup" class="forgot-pass" style="font-size:12.5px"> Dont have an account? Sign Up</a></span>
              </div>
        {{-------------------Form Errors-----------------------}}
                @if(Session::get('faillog'))
                    <div class="alert alert-danger" role="alert" >
                        {{ Session::get('faillog') }}
                    </div>
                @endif
                @error('email')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
                @enderror
                @error('pwd')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
                @enderror
        {{---------X---------Form Errors----------X------------}}

                <input type="submit" value="Log In" class="btn btn-block btn-primary"><div style="margin-bottom:8px"></div>
              <a href="{{ url('/') }}" > <-- back to site</a>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>



    <script src="js-2/jquery-3.3.1.min.js"></script>
    <script src="js-2/popper.min.js"></script>
    <script src="js-2/bootstrap.min.js"></script>
    <script src="js-2/main.js"></script>

    <!-- ALL JS FILES -->
    <script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script>
    <script src="js/slider-index.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/custom.js"></script>
	<script>
			/* counter js */

		(function ($) {
			$.fn.countTo = function (options) {
				options = options || {};

				return $(this).each(function () {
					// set options for current element
					var settings = $.extend({}, $.fn.countTo.defaults, {
						from:            $(this).data('from'),
						to:              $(this).data('to'),
						speed:           $(this).data('speed'),
						refreshInterval: $(this).data('refresh-interval'),
						decimals:        $(this).data('decimals')
					}, options);

					// how many times to update the value, and how much to increment the value on each update
					var loops = Math.ceil(settings.speed / settings.refreshInterval),
						increment = (settings.to - settings.from) / loops;

					// references & variables that will change with each update
					var self = this,
						$self = $(this),
						loopCount = 0,
						value = settings.from,
						data = $self.data('countTo') || {};

					$self.data('countTo', data);

					// if an existing interval can be found, clear it first
					if (data.interval) {
						clearInterval(data.interval);
					}
					data.interval = setInterval(updateTimer, settings.refreshInterval);

					// initialize the element with the starting value
					render(value);

					function updateTimer() {
						value += increment;
						loopCount++;

						render(value);

						if (typeof(settings.onUpdate) == 'function') {
							settings.onUpdate.call(self, value);
						}

						if (loopCount >= loops) {
							// remove the interval
							$self.removeData('countTo');
							clearInterval(data.interval);
							value = settings.to;

							if (typeof(settings.onComplete) == 'function') {
								settings.onComplete.call(self, value);
							}
						}
					}

					function render(value) {
						var formattedValue = settings.formatter.call(self, value, settings);
						$self.html(formattedValue);
					}
				});
			};

			$.fn.countTo.defaults = {
				from: 0,               // the number the element should start at
				to: 0,                 // the number the element should end at
				speed: 1000,           // how long it should take to count between the target numbers
				refreshInterval: 100,  // how often the element should be updated
				decimals: 0,           // the number of decimal places to show
				formatter: formatter,  // handler for formatting the value before rendering
				onUpdate: null,        // callback method for every time the element is updated
				onComplete: null       // callback method for when the element finishes updating
			};

			function formatter(value, settings) {
				return value.toFixed(settings.decimals);
			}
		}(jQuery));

		jQuery(function ($) {
		  // custom formatting example
		  $('.count-number').data('countToOptions', {
			formatter: function (value, options) {
			  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
			}
		  });

		  // start all the timers
		  $('.timer').each(count);

		  function count(options) {
			var $this = $(this);
			options = $.extend({}, options || {}, $this.data('countToOptions') || {});
			$this.countTo(options);
		  }
		});

</script>

	  </body>
	</html>
