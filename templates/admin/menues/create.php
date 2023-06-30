<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">


    <section class="pt-3 pb-1 mb-2 border-bottom">
        <h1 class="h5">Create Menu</h1>
    </section>

    <section class="row my-3">
        <section class="col-12">
            <form method="post" action="<?= url("admin/menue/store")?>">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name ..." required>
                </div>

                <div class="form-group">
                    <label for="url">url</label>
                    <input type="text" class="form-control" id="url" name="url" placeholder="Enter url ..." required>
                </div>


                <button type="submit" class="btn btn-primary btn-sm">ذخیره</button>
            </form>
        </section>
    </section>

</main>
