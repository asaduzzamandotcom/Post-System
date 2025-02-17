<?php
include 'include/header.php';
session_start()
?>

<main>
  <div class="container col-lg-5 mt-5">
    <div class="card">
      <div class="card-header m-2">
        Add Post
      </div>
      <div class="card-body">

        <form method="post" action="./controller/PostStoreController.php">

          <input name="title" type="text" class="form-control mb-3" placeholder="Post title">
          <span class="text-danger">
            <?= ($_SESSION['errors']['title_error']) ?? null; ?>
          </span>

          <textarea name="detail" id="" class="form-control mb-3" placeholder="Post Details"></textarea>
          <span class="text-danger">
            <?= ($_SESSION['errors']['detail_error']) ?? null; ?>
          </span>

          <input name="author" type="text" class="form-control mb-3" placeholder="Author">

          <input name="email" type="email" class="form-control mb-3" placeholder="Email">

          <input name="phone" type="number" class="form-control mb-3" placeholder="Phone">

          <button class="btn btn-success" type="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
</main>

<?php
include 'include/footer.php';
session_unset()
?>