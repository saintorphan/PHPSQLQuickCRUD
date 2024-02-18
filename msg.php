<!-- Universal message dialog -->

<?php
if (isset($_SESSION['message'])): // If a message has been set, execute pop-up dialog as follows -
  ?>
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <!-- Actual message text -->
    <strong>Message:</strong>
    <?= $_SESSION['message']; ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <?php
  unset($_SESSION['message']); // Dispose of the message after execution
endif;
?>