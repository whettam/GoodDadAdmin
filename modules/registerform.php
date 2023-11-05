<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

    <div class="wrap">
        <form>
            <div class="form-header bg-card-header">
                <h2>Register</h2>
            </div>
            <div class="form-body">
                <fieldset>
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="fname" required>
                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lname" required>
                    <label for="address">Address</label>
                    <input type="text" id="address" name="address" required>
                    <label for="city">City</label>
                    <input type="text" id="city" name="city" required>
                    <label for="state">State</label>
                    <select id="state" name="state" required>
                        <option value=""></option>
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option value="CA">California</option>
                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="DC">District of Columbia</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="HI">Hawaii</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NV">Nevada</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="ND">North Dakota</option>
                        <option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="SD">South Dakota</option>
                        <option value="TN">Tennessee</option>
                        <option value="TX">Texas</option>
                        <option value="UT">Utah</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WA">Washington</option>
                        <option value="WV">West Virginia</option>
                        <option value="WI">Wisconsin</option>
                        <option value="WY">Wyoming</option>
                    </select>
                    <label for="zip">Zipcode</label>
                    <input type="text" id="zip" name="zip" required>
                </fieldset>
                <fieldset>
                    <legend><i class="fa fa-lock"></i>Contact</legend>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                    <label for="workphone">Work Phone</label>
                    <input type="text" id="workphone" name="workphone" required>
                    <label for="otherphone">Other Phone</label>
                    <input type="text" id="otherphone" name="otherphone">
                    <label for="employer">Employer</label>
                    <input type="text" id="employer" name="employer">
                    <label for="prob">Probation/Parole/Case Worker</label>
                    <input type="text" id="prob" name="prob" required>
                </fieldset>
                    <br>
                    <label for="contactChild">Contact with children</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" >
                        <label class="form-check-label" for="exampleRadios1">
                            Yes
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" >
                        <label class="form-check-label" for="exampleRadios1">
                            No
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" >
                        <label class="form-check-label" for="exampleRadios1">
                            Custody
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" >
                        <label class="form-check-label" for="exampleRadios1">
                            Visitation
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" >
                        <label class="form-check-label" for="exampleRadios1">
                            Phone
                        </label>
                    </div>
                    <br>
                    <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput10">How much do you pay in child support per month?</label>
            <div class="col-md-4">
                <input id="textinput10" name="textinput" type="text" class="form-control input-md" required="">
            </div>
            <label for="maritalStatus">Marital Status</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios2" value="option2" >
                <label class="form-check-label" for="exampleRadios2">
                    Married
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios2" value="option2" >
                <label class="form-check-label" for="exampleRadios2">
                    Engaged
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios2" value="option2" >
                <label class="form-check-label" for="exampleRadios2">
                    Single
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios2" value="option2" >
                <label class="form-check-label" for="exampleRadios2">
                    Willowed
                </label>
            </div>
        </div>
        <label class="mt-2" for="purpose">The purpose of this disclosure is</label>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
            <label class="form-check-label" for="flexCheckDefault1">
                Eligibility
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
            <label class="form-check-label" for="flexCheckDefault2">
                Employment
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
            <label class="form-check-label" for="flexCheckDefault3">
                Continuity of Services/Care
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
            <label class="form-check-label" for="flexCheckDefault4">
                Legal Consutation/ Representation
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
            <label class="form-check-label" for="flexCheckDefault5">
                Compliant/Investigation/Resolution
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault6">
            <label class="form-check-label" for="flexCheckDefault6">
                Background Investigation
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault7">
            <label class="form-check-label" for="flexCheckDefault7">
                legal Proceedings
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault8">
            <label class="form-check-label" for="flexCheckDefault8">
                Treatment Planning
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault9">
            <label class="form-check-label" for="flexCheckDefault9">
                At Consumer's Request
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault10">
            <label class="form-check-label" for="flexCheckDefault10">
                TO share or refer my information to other Missouri state agencies( such as DMH, DHSS, DSS,DESE, ETC) to obtain services Consistent with the ****** Program
            </label>
        </div>
            </div>
            <div class="form-footer">
                <input type="submit" value="Create Account">
            </div>
        </form>
    </div>
