

@extends('layouts.adminform')
@section('content')

		<div class="contact1" style="background: white">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="{{asset('adminform/images/img-01.png')}}" alt="IMG">
			</div>

            <form method="post" enctype="multipart/form-data">

                @csrf
				<span class="contact1-form-title">
					Create Announcement
				</span>

				<div class="mb-3">
                    <label for="coursetitle" class="form-label">Course Title</label>
                    <input type="text" class="form-control" name="coursetitle" id="coursetitle" aria-describedby="emailHelp">
                  </div>

                  <div class="mb-3">
                    <label for="coursecode" class="form-label">Course Code</label>
                    <input type="text" name="coursecode" class="form-control" id="coursecode">
                  </div>

                  <div class="mb-3">
                      <label for="courselevel" class="form-label">Level</label>
                      <select type="number" class="form-control" name="courselevel" id="courselevel">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                      </select>
                  </div>

				<div class="container-contact1-form-btn">
					<button type="submit" class="contact1-form-btn">
						Done
					</button>
				</div>
			</form>
		</div>

     <p style="text-align: center" class="mt-5"> <a href="/course" class="btn btn-primary">View Courses</a> </p>






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
