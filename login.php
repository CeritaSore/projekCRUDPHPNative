<!-- login -->
<main class="Login bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card bg-dark text-light border-light">
                    <h4 class="card-header text-center">Silahkan Login</h4>
                    <div class="card-body">
                        <!-- form -->
                        <form method="POST" action="index.php?hal=userproses">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" id="username" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" />
                            </div>
                            
                            <div class="mb-3 d-flex justify-content-around">
                                <button type="submit" class="btn btn-primary" name="login">Submit</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>