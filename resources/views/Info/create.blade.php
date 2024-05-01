
@extends('layouts.adminform')
@section('content')

		<div class="contact1" style="background: white">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="{{asset('adminform/images/img-01.png')}}" alt="IMG">
			</div>

			<form method="POST" action="/info" enctype="multipart/form-data">
                @csrf
				<span class="contact1-form-title">
					Create Announcement
				</span>

				<div class="wrap-input1 validate-input" data-validate = "title is required">
					<input class="input1" type="text" name="title" placeholder="Announcement Title">
					<span class="shadow-input1"></span>
				</div>

                <div class="wrap-input1 validate-input" data-validate = "Description is required">
					<textarea class="input1" name="description" placeholder="Description"></textarea>
					<span class="shadow-input1"></span>
				</div>


				<div class="wrap-input1 validate-input" data-validate = "author is required">
					<input class="input1" type="text" name="author" placeholder="Author">
					<span class="shadow-input1"></span>
				</div>

                <div class="wrap-input1 validate-input" data-validate = "file is required">
					<input  class="form-control" type="file" name="file" placeholder="File">
					<span class="shadow-input1"></span>
				</div>

				<div style="text-align: center" class="wrap-input1 validate-input" data-validate = "Subject is required">
					Students <input type="radio" name="destination" value="students">
					Public <input type="radio" name="destination" value="public">
					<span class="shadow-input1"></span>
				</div>


				<div class="container-contact1-form-btn">
					<button type="submit" class="contact1-form-btn">
						Done
					</button>
				</div>
			</form>
		</div>





<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<!--===============================================================================================-->
	<script src="js/main.js"></script>

@endsection


