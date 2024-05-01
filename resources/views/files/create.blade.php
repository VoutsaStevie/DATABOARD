

@extends('layouts.adminform')
@section('content')

		<div class="contact1" style="background: white">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="{{asset('adminform/images/img-01.png')}}" alt="IMG">
			</div>

			<form method="POST" action="/files" enctype="multipart/form-data">
                @csrf
				<span class="contact1-form-title">
					Upload File
				</span>

                <label for="title" class="label-name">Title</label>
				<div class="wrap-input1 validate-input" data-validate = "title is required">
					<input class="form-control" type="text" name="title" placeholder="Announcement Title">
					<span class="shadow-input1"></span>
				</div>

                <label for="description" class="label-name">Description</label>
				<div class="wrap-input1 validate-input" data-validate = "title is required">
					<input class="form-control" type="text" name="description" placeholder="Description">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "title is required">
                <label for="type" class="label-name">Type</label>
                <select class="form-control" name="file">
                    <option value="image">Image</option>
                    <option value="pdf">PDF</option>
                    <option value="other">Other</option>
                </select>
                </div>


				<label for="file" class="label-name">File</label>
				<div class="wrap-input1 validate-input" data-validate = "title is required">
                <input type="file" class="form-control" name="file">
                </div>

                <br>
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



