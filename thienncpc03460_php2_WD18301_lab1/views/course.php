<div class="panel panel-default">
  <div class="panel-heading">
    <p>Bài 1 & 2 <?= '| '. $course_name ?? '' ?></p>

  </div>
  <div class="panel-body">
    <form action="" method="GET" role="form">
      <div class="form-group">
        <label for="">Khoá học</label>
        <select name="semester" id="" class="form-control">
          <?php foreach ($list_of_courses as $key => $course) : ?>
          <option value="<?= 'c'.$key ?>"><?= $course ?></option>
          <?php endforeach; ?>

        </select>

      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>



  </div>
</div>