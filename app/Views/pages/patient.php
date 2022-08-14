


<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5 mt-5">
            <div class="card gradient-custom" style="border-radius: 1rem;">
                <div class="card-body p-5 text-white">
                    <div class="my-md-5">

                        <div class="text-center mb-2">
                            <i class="bi bi-heart-pulse-fill fa-5x"></i>
                            <h1 class="fw-bold text-uppercase">Consultation</h1>
                          </div>

                        <form class="form-inline" action="query.php" method="post">
                
                            <div class="form-outline form-white mb-2">
                                <label for="name" class="form-label">Name: </label> 
                                <input type="text" class="form-control" name="name" id="name"> 
                            </div>
                            
                            <div class="form-outline form-white mb-2">
                                <label for="age" class="form-label">Age: </label>
                                <input type="number" name="age" id="age" class="form-control" min="0" max="130"> <br>
                            </div>
                    
                                
                            <label class="form-label" for="gender" >Gender: </label> <br>

                            <div class="d-flex mb-2">

                                <div class="mx-3"> 
                                    <input class="form-check-input" type="radio" id="genderMale" name="gender" value="male" checked>
                                    <label for="genderMale" >Male</label> <br>
                                </div>
                                
                                <div class="mx-3"> 
                                    <input class="form-check-input" type="radio" id="genderFemale" name="gender" value="female">
                                    <label for="genderFemale">Female</label> <br>
                                </div>

                                <div class="mx-2"> 
                                    <input class="form-check-input" type="radio" id="genderNeutral" name="gender" value="neutral">
                                    <label for="genderNeutral">Prefer not to say</label> <br>
                                </div>

                            </div>
                    
                            <div class="mb-2 mt-3">
                                <label for="labelPatientType" class="form-label">Patient Type: </label>
                                <select class="form-select" name="patient-type" id="patientType">
                                    <option value="walk-in">Walk- in </option>
                                    <option value="returnee">Returnee </option>
                                    <option value="appointment">Appointment</option>
                                </select> <br>
                            </div> 
                            
                            <div class="text-center py-3 mt-2 ">
                                <button class="btn btn-success btn-lg btn-rounded px-5" type="submit">Consult</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
 