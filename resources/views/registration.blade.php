<x-master>
    <x-slot:title>
        Admin | Registration
        </x-slot>

        <div class="main-panel">
            <div class="content">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">

                        <section class="content">

                            <section class="vh-100 gradient-custom">
                                <div class="container py-2 h-80">
                                    <div class="row justify-content-center align-items-center h-100">
                                        <div class="col-12 col-lg-9 col-xl-7">
                                            <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                                                <div class="card-body p-4 p-md-5">
                                                    <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>

                                                    <form method="post" action="registerstore.php" enctype="multipart/form-data">

                                                        <div class="row">
                                                            <div class="col-md-6 mb-4">

                                                                <div class="form-outline">
                                                                    <input type="text" id="firstName" name="f_name" class="form-control form-control-lg"  />
                                                                    <label class="form-label" for="firstName">First Name</label>
                                                                </div>

                                                            </div>
                                                            <div class="col-md-6 mb-4">

                                                                <div class="form-outline">
                                                                    <input type="text" id="lastName" name="l_name" class="form-control form-control-lg"  />
                                                                    <label class="form-label" for="lastName">Last Name</label>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6 mb-4 d-flex align-items-center">

                                                                <div class="form-outline datepicker w-100">
                                                                    <input type="password" name="password" class="form-control form-control-lg" id="birthdayDate" />
                                                                    <label for="password" class="form-label">Password</label>
                                                                </div>

                                                            </div>
                                                            <div class="col-md-6 mb-4">

                                                                <h6 class="mb-2 pb-1">Gender: </h6>

                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="gender" id="femaleGender" value="female" checked />
                                                                    <label class="form-check-label" for="femaleGender">Female</label>
                                                                </div>

                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="gender" id="maleGender" value="male" />
                                                                    <label class="form-check-label" for="maleGender">Male</label>
                                                                </div>

                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="gender" id="otherGender" value="other" />
                                                                    <label class="form-check-label" for="otherGender">Other</label>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6 mb-4 pb-2">

                                                                <div class="form-outline">
                                                                    <input type="email" id="emailAddress" name="email"class="form-control form-control-lg" />
                                                                    <label class="form-label" for="emailAddress">Email</label>
                                                                </div>

                                                            </div>
                                                            <div class="col-md-6 mb-4 pb-2">

                                                                <div class="form-outline">
                                                                    <input type="tel" id="phoneNumber" name="number" class="form-control form-control-lg" />
                                                                    <label class="form-label" for="phoneNumber">Phone Number</label>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-12">

                                                                <select name="roll" class="select form-control-lg">
                                                                    <option value="1" disabled>Choose option</option>
                                                                    <option value="admin">Admin</option>
                                                                    <option value="user">User</option>
                                                                </select>
                                                                <label class="form-label select-label">Choose option</label>

                                                            </div>
                                                        </div>

                                                        <div class="mt-4 pt-2">
                                                            <input class="btn btn-primary btn-lg" type="submit" name="submit" value="Submit" />
                                                        </div>

                                                    </form>
                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>


                        </section>
                    </div>
                </div>
            </div>
        </div> >
</x-master>