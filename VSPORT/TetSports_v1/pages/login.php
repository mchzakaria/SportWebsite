<?php
  $home='../';
  include $home.'composantes/header.php';
?>

<main>
  <div class="form-container">
    <h2 class="login-title">Log in</h2>

    <form class="login-form">
      <div>
        <label for="email">Email </label>
        <input
              id="email"
              type="email"
              placeholder="me@example.com"
              name="email"
              required
              />
      </div>

      <div>
        <label for="password">Password </label>
        <input
              id="password"
              type="password"
              placeholder="password"
              name="password"
              required
              />
      </div>

      <button class="btn btn--form" type="submit" value="Log in">
        Log in
      </button>
    </form>
  </div>
</main>

<?php
  include $home.'composantes/footer.php';
?>
