<div id='header'>
    <a href="/" class="white">
        <img src="/img/logo.png">
        <h2>Travelight</h2>
    </a>
    <?php if(!$user): ?>
        <div id="btns">
            <a href="/login" class="btn btn-link white">Login</a>
            <a href="/signup" class="btn btn-success">Signup</a>
        </div>
    <?php else: ?>

        <div id="btns" class="btn-group">
            <a href="#" class="btn btn-success"><?php echo $h($user->email); ?></a>
            <a href="#" class="btn btn-success dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="#"><span class="glyphicon glyphicon-search"></span> See my product</a></li>
                <li><a href="/product"><span class="glyphicon glyphicon-plus"></span> Add a product</a></li>
                <li class="divider"></li>
                <li><a href="/logout"><span class="glyphicon glyphicon-remove"></span> Logout</a></li>
            </ul>
        </div>
    <?php endif; ?>
</div>

<section class="formlog">
    <form class="form-horizontal formadd" method="post" enctype="multipart/form-data">
      <fieldset>

        <legend>Add my product</legend>

          <div class="form-group">
            <label for="select" class="col-lg-2 control-label">I want</label>
            <div class="col-lg-10">
                <div class="checkbox">
                    <label><input type="checkbox" name="transaction[]" value="sell"> Sell</label>
                    <label><input type="checkbox" name="transaction[]" value="rent"> Rent</label>
                    <label><input type="checkbox" name="transaction[]" value="swap"> Swap</label>
                </div>
            </div>
          </div>

          <div class="form-group">
              <label for="title" class="col-lg-2 control-label">Title</label>
              <div class="col-lg-10">
                  <input type="text" class="form-control" id="title" name="title" placeholder="title">
              </div>
          </div>

          <div class="form-group">
              <label for="textArea" class="col-lg-2 control-label">Description</label>
              <div class="col-lg-10">
                  <textarea class="form-control" rows="3" id="textArea" name="description" placeholder="Description"></textarea>
              </div>
          </div>

          <div class="form-group">
              <label class="col-lg-2 control-label" for="price">Price</label>
              <div class="col-lg-10">
                  <div class="input-group">
                      <span class="input-group-addon">$</span>
                      <input type="number" class="form-control" id="price" name="price" placeholder="price">
                  </div>
              </div>
          </div>

          <div class="form-group">
              <label for="textArea" class="col-lg-2 control-label">Image</label>
              <div class="col-lg-10">
                  <input name="imgproduct" type="file" accept="image/*" class="tempImg hide"/>
                  <img src="/img/vide.png" alt="image" id="imgaddproduct">
              </div>
          </div>

          <div class="form-group">
              <label for="title" class="col-lg-2 control-label">City</label>
              <div class="col-lg-10">
                  <input type="text" class="form-control" id="city" name="city" placeholder="City">
              </div>
          </div>

          <div class="form-group">
              <label for="tags" class="col-lg-2 control-label">Tags</label>
              <div class="col-lg-10">
                  <textarea class="form-control" rows="3" id="tags" name="tags" placeholder="Tags"></textarea>
              </div>
          </div>


          <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                  <input type="submit" class="btn btn-success " value="Add my product">
              </div>
          </div>

      </fieldset>
    </form>
</section>

<div class="spacer100"></div>