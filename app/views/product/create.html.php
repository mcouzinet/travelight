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
            <a href="#" class="btn btn-success"><?=$user->email?></a>
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
    <form class="form-horizontal formadd">
      <fieldset>

        <legend>Add my product</legend>

          <div class="form-group">
            <label for="select" class="col-lg-2 control-label">I want</label>
            <div class="col-lg-10">
              <select class="form-control" id="select">
                <option>Sell</option>
                <option>Rent</option>
                <option>Swap</option>
              </select>
            </div>
          </div>

        <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">Email</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" id="inputEmail" placeholder="Email">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword" class="col-lg-2 control-label">Password</label>
          <div class="col-lg-10">
            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
            <div class="checkbox">
              <label>
                <input type="checkbox"> Checkbox
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="textArea" class="col-lg-2 control-label">Textarea</label>
          <div class="col-lg-10">
            <textarea class="form-control" rows="3" id="textArea"></textarea>
            <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-2 control-label">Radios</label>
          <div class="col-lg-10">
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                Option one is this
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                Option two can be something else
              </label>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <button class="btn btn-default">Cancel</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </fieldset>
    </form>
</section>