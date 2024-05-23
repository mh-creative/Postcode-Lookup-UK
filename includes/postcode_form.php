<div class='container mt-3 p-0'>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="form-group mb-3">
      <label class="fw-bold" for="postcode">Enter Postcode:</label>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1"><img src='assets/img/PostcodesIcon.png'></span>
        </div>
        <input type="text" class="form-control" id="postcode" name="postcode" placeholder="Enter postcode">
      </div>
    </div>
    <!-- Add Submit button -->
    <button type="submit" class="btn btn-primary">Search</button>
    <!-- Add reset button -->
    <button type="button" class="btn btn-secondary" onclick="resetForm()">Reset</button>
  </form>
</div>
