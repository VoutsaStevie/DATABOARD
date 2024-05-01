
@extends('layouts.adminform')
@section('content')
<div class="container border border-black">
		<div class="contact1" style="background: white">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="{{asset('adminform/images/img-01.png')}}" alt="IMG">
			</div>

			<form method="POST" action="/students" enctype="multipart/form-data">
                @csrf
				<span class="contact1-form-title">
					Upload File
				</span>
                <div class="mb-3">
                    <label for="name" class="form-label">Full Nmae</label>
                    <input type="text" class="form-control" name="name" id="name">
                  </div>
                  <div class="mb-3">
                    <label for="speciality" class="form-label">Speciality</label>
                    <input type="text" class="form-control" name="speciality" id="speciality">
                  </div>
                  <div class="mb-3">
                    <label for="matricule" class="form-label">Matricule</label>
                    <input type="text" class="form-control" name="matricule" id="matricule" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                      <label for="sex" class="form-label">Gender</label>
                      <input type="text" name="sex" class="form-control" id="sex">
                    </div>
                    <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="text" name="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                      <label for="phone" class="form-label">Phone</label>
                      <input type="text" name="phone" class="form-control" id="phone">
                    </div>
                  <div class="mb-3">
                      <label for="level" class="form-label">Level</label>
                      <input type="number" class="form-control" name="level" id="level">
                  </div>
                  <div class="mb-3">
                      <label for="birthdate" class="form-label">Birth Date</label>
                      <input type="date" class="form-control" name="birthdate" id="birthdate">
                  </div>

                <br>
				<div class="container-contact1-form-btn">
					<button type="submit" class="contact1-form-btn">
						Done
					</button>
				</div>
			</form>

		</div>
        <p style="text-align: center" class="mt-5"> <a href="/students" class="btn btn-primary">View Students</a> </p>
<br>
    </div>
    <br>




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



