<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link rel="stylesheet" href="styles.css">


            <div class="card">
                <h5 class="card-header bg-card-header card-header-font p-3">Schedule</h5>
                <div class="card-body">
                    <div class="">
                        <select class=" form-select" aria-label="Default select example">
                            <option selected>Classes</option>
                            <option value="1">Class1</option>
                            <option value="2">Class2</option>
                        </select>

                        <select class="form-select" aria-label="Default select example">
                            <option selected>Quizzes</option>
                            <option value="1">Quiz1</option>
                            <option value="2">Quiz2</option>
                        </select>
                        <label for="start">Start date:</label>

                        <input type="date" id="start" name="trip-start" value="2018-07-22" min="2018-01-01"
                            max="2018-12-31" />

                        <label for="start">End Date:</label>

                        <input type="date" id="start" name="trip-start" value="2018-07-22" min="2018-01-01"
                            max="2018-12-31" />
                        <button type="button" class="btn btn-secondary bg-card-btn">Submit</button>
                    </div>
                </div>
            </div>
