<?php
define('DB_NAME', '/c/xampp/htdocs/php_hasin/08.crud_project/data/data.txt');
function seed()
{
  $data = array(
    array(
      'id' => 1,
      'fname' => 'Sujon',
      'lname' => 'Ahmed',
      'roll' => '11',
    ),
    array(
      'id' => 2,
      'fname' => 'Rahim',
      'lname' => 'Ahmed',
      'roll' => '12',
    ),
    array(
      'id' => 3,
      'fname' => 'Kamal',
      'lname' => 'Ahmed',
      'roll' => '13',
    ),
    array(
      'id' => 4,
      'fname' => 'Jamal',
      'lname' => 'Ahmed',
      'roll' => '14',
    ),
    array(
      'id' => 5,
      'fname' => 'Rafiq',
      'lname' => 'Ahmed',
      'roll' => '15',
    ),
  );

  $serializeData = serialize($data);
  file_put_contents(DB_NAME, $serializeData, LOCK_EX);
}


function generateReport()
{
  $serializeData = file_get_contents(DB_NAME);
  $students = unserialize($serializeData);
?>
  <table>
    <tr>
      <th>Name</th>
      <th>Roll</th>
      <th width="25%">Action</th>
    </tr>
    <?php
    foreach ($students as $student) {
    ?>
      <tr>
        <td><?php printf("%s %s", $student['fname'], $student['lname']); ?></td>

        <td><?php printf("%s", $student['roll']); ?></td>

        <td><?php printf("<a href='index.php?task=edit&id=%s'>Edit</a> | <a class='delete' href='index.php?task=delete&id=%s'>Delete</a>", $student['id'], $student['id']); ?></td>
      </tr>
    <?php } ?>
  </table>
<?php
}
