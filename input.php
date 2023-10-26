<div class="input bg-dark">
    <div class="container ">
        <h1 class="text-light">input data</h1>
        <div class="card" style="width: 45%;">
            <div class="card-body">
                <form method="POST" action="index.php?hal=proses">
                    <div class="form-group row justify-content-center">
                        <label for="nama" class="col-4 col-form-label">nama</label>
                        <div class="col-8">
                            <input id="nama" name="nama" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row justify-content-center">
                        <label for="nim" class="col-4 col-form-label">nim</label>
                        <div class="col-8">
                            <input id="nim" name="nim" type="number" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row justify-content-center">
                        <div class="offset-4 col-8">
                            <button name="proses" type="submit" value="simpan" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>