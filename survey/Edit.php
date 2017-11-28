<?php

require 'DB.php';

$message = '';

// check action
if(!empty($_POST['action'])) {
  if($_POST['action'] == 'addquestion') {
    //get count to make new question last in sort order
    $count = $conn->query('SELECT count(*) FROM questions')
                  ->fetchColumn();
    $count = (int) $count + 1;
    $stmt = $conn->prepare('INSERT INTO questions (question,category,sort_order) VALUES (?,?,?)');
    $stmt->execute([$_POST['value'],1,$count]);
  //$message = 'Rows affected: ' . $stmt->rowCount();
  }

  if($_POST['action'] == 'moveup') {
    //get question to change sort order
    $stmt = $conn->prepare('SELECT id,sort_order FROM questions WHERE id = ?');
    $stmt->execute([(int)$_POST['id']]);
    $question = $stmt->fetch(PDO::FETCH_ASSOC);

    if((int)$question['sort_order'] != 1 ) {
      //get question above to swap places
      $stmt = $conn->prepare('SELECT * FROM questions WHERE sort_order = ?');
      $so = (int)$question['sort_order'] - 1;
      $stmt->execute([$so]);
      $movedown = $stmt->fetch(PDO::FETCH_ASSOC);

      //swap sort orders
      $stmt = $conn->prepare('UPDATE questions SET sort_order = ? WHERE id = ?');
      $so = (int)$movedown['sort_order'] + 1;
      $stmt->execute([$so, (int)$movedown['id']]);
      $so = (int)$question['sort_order'] - 1;
      $stmt->execute([$so, (int)$question['id']]);
    }
  }

  if($_POST['action'] == 'movedown') {
    //get count for sort order boundary check
    $count = $conn->query('SELECT count(*) FROM questions')
                  ->fetchColumn();
    $count = (int) $count;

    //get question to change sort order
    $stmt = $conn->prepare('SELECT * FROM questions WHERE id = ?');
    $stmt->execute([(int)$_POST['id']]);
    $question = $stmt->fetch(PDO::FETCH_ASSOC);
    if((int)$question['sort_order'] != $count ) {
      //get question to swap places
      $stmt = $conn->prepare('SELECT * FROM questions WHERE sort_order = ?');
      $so = (int)$question['id'] + 1;
      $stmt->execute([$so]);
      $moveup = $stmt->fetch(PDO::FETCH_ASSOC);

      //swap sort orders
      $stmt = $conn->prepare('UPDATE questions SET sort_order = ? WHERE id = ?');
      $so = (int)$moveup['sort_order'] - 1;
      $stmt->execute([$so, (int)$moveup['id']]);
      $so = (int)$question['sort_order'] + 1;
      $stmt->execute([$so, (int)$question['id']]);
    }
  }

  if($_POST['action'] == 'delete') {
    //get sort order from question to be deleted
    $stmt = $conn->prepare('SELECT sort_order FROM questions WHERE id = ?');
    $stmt->execute([(int)$_POST['id']]);
    $question = $stmt->fetch(PDO::FETCH_ASSOC);

    //get questions to update sort orders
    $stmt = $conn->prepare('SELECT id,sort_order FROM questions WHERE sort_order > ?');
    $stmt->execute([(int)$question['sort_order']]);
    $questions = $stmt->fetchAll();

    //delete question
    $stmt = $conn->prepare('DELETE FROM questions WHERE id = ?');
    $stmt->execute([(int)$_POST['id']]);

    // update new sort orders
    $stmt = $conn->prepare('UPDATE questions SET sort_order = ? WHERE id = ?');
    foreach($questions as $question) {
      $so = (int)$question['sort_order'] - 1;
      $stmt->execute([$so, (int)$question['id']]);
    }
  }
}

$questions = $conn->query('SELECT id,question,sort_order FROM questions ORDER BY sort_order ASC');
$count = $conn->query('SELECT count(*) FROM questions')->fetchColumn();

?>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>H2O</title>
		<link rel="stylesheet" type="text/css" href="style2.css" />
	</head>

	<body>
    <?php echo $message . "<br />"; ?>
    <div id="questions">
    <?php foreach ($questions as $question): ?>
      <div class="form-group">
        <label class="col-sm-4 control-label"><?php echo htmlspecialchars($question['question']); ?></label>
        <div class="col-sm-8">
          <div><?php echo $question['sort_order']; ?></div>
					<form action="Edit.php" method="post">
            <input type="submit" <?php if($question['sort_order'] == 1) echo 'class="hidden"'; ?> value="Move up" />
            <input type="hidden" name="id" value="<?php echo $question['id'] ?>" />
            <input type="hidden" name="action" value="moveup" />
          </form>
          <form action="Edit.php" method="post">
            <input type="submit" <?php if($question['sort_order'] == $count) echo 'class="hidden"'; ?> value="Move down" />
            <input type="hidden" name="id" value="<?php echo $question['id'] ?>" />
            <input type="hidden" name="action" value="movedown" />
          </form>
          <form action="Edit.php" method="post">
            <input type="submit" value="Delete" />
            <input type="hidden" name="id" value="<?php echo $question['id'] ?>" />
            <input type="hidden" name="action" value="delete" />
          </form>
				</div>
      <div>
    <?php endforeach; ?>
    </div>
    <form action="Edit.php" method="post">
      <input type="text" name="value" maxlength="100" />
      <input type="submit" value="Add Question" />
      <input type="hidden" name="action" value="addquestion" />
    </form>
   </body>
</html>
