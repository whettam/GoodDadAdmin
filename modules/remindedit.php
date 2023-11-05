<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script>
        let dropdowns = document.querySelectorAll('.dropdown-toggle')
        dropdowns.forEach((dd) => {
            dd.addEventListener('click', function (e) {
                var el = this.nextElementSibling
                el.style.display = el.style.display === 'block' ? 'none' : 'block'
            })
        })
    </script>

<div class="row">
        <div class="col-lg-4 p-5">
            <div class="card">
                <h5 class="card-header bg-card-header card-header-font p-3">Remind</h5>
                <div class="card-body">
                    <h5 class="card-title card-text-font text-underline">Send quiz</h5>
                    <p class="card-text"></p>
                    <div class="row">
                        <div class="col-4">
                            <div class="btn-group">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                    Send reminder
                                </button>
                                <ul class="dropdown-menu">
                                    <div class="btn-group dropend">
                                        <button type="button" class="btn  dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            Class1
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">quiz1</a></li>
                                            <li><a class="dropdown-item" href="#">quiz2</a></li>
                                            <li><a class="dropdown-item" href="#">quiz3</a></li>
                                        </ul>
                                    </div>

                                    <div class="btn-group dropend">
                                        <button type="button" class="btn  dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            Class2
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">quiz1</a></li>
                                            <li><a class="dropdown-item" href="#">quiz2</a></li>
                                            <li><a class="dropdown-item" href="#">quiz3</a></li>
                                        </ul>
                                    </div>
                                    <div class="btn-group dropend">
                                        <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            class3
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">quiz1</a></li>
                                            <li><a class="dropdown-item" href="#">quiz2</a></li>
                                            <li><a class="dropdown-item" href="#">quiz3</a></li>
                                        </ul>
                                    </div>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>