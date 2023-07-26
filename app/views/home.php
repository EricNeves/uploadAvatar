<section class="content">
  <div class="container">
    <h1>
      Send your avatar
      <i class="fa-solid fa-share-from-square"></i>
    </h1>

    <div class="result"></div>

    <div class="form__upload">
      <form name="form" enctype="multipart/form-data">
        <label id="label_input" for="avatar">
          Select Avatar <i class="fa-solid fa-upload"></i>
        </label>
        <input type="file" name="avatar" id="avatar">

        <input type="submit" value="Upload">
      </form>
    </div>

    <div class="preview">
      <p>Preview <span id="loading">0%</span></p>
      <img src="https://img.icons8.com/?size=512&id=nV9eQkc8EY6r&format=png" alt="Avatar">
    </div>
  </div>
</section>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="<?php echo BASE_URL; ?>public/js/upload.js"></script>