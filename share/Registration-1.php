<?php
<form>
	<div class="form-group row">
		<label for="inputEmail3" class="col-sm-2 form-control-label">Email</label>
		<div class="col-sm-10">
			<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
		</div>
	</div>
	<div class="form-group row">
		<label for="inputPassword3" class="col-sm-2 form-control-label">Password</label>
		<div class="col-sm-10">
			<input type="password" class="form-control" id="inputPassword3" placeholder="Email">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2">Radios</label>
		<div class="col-sm-10">
			<div class="radio">
				<label>
					<input type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
					Option one is this and that&mdash;be sure to include why it's great
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="gridRadios" id="gridRadios1" value="option1">
					Option one is this and that&mdash;be sure to include why it's great
				</label>
			</div>
			<div class="radio disabled">
				<label>
					<input type="radio" name="gridRadios" id="gridRadios1" value="option1" disabled>
					Option one is this and that&mdash;be sure to include why it's great
				</label>
			</div>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2">Checkbox</label>
		<div class="col-sm-10">
			<div class="checkbox">
				<label>
					<input type="checkbox"> Check me out
				</label>
			</div>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-secondary">Sign in</button>
		</div>
	</div>
</form>
<?/>