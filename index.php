<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form sinh viên </title>
    <style>
       .container {
        width: 900px;
        margin : 0px auto;
       
       }

       button {
        background: #d9ead3;
        border-radius : 5px;
        font-size : 0.9rem
       }
      

    </style>
</head>

<?php
 $students = [
    [
        'id' => 1,
        'name' => 'Nguyễn Van A',
        'email' => 'aaaa@gmail.com',
        'address' => 'Hà Nội',
        'gender' => 1, // 1: nam, 2: nữ
    ],
    [
        'id' => 2,
        'name' => 'Nguyễn Van B',
        'email' => 'bbbb@gmail.com',
        'address' => 'Vĩnh Phúc',
        'gender' => 1, // 1: nam, 2: nữ
    ],
    [
        'id' => 3,
        'name' => 'Nguyễn Van C',
        'email' => 'cccc@gmail.com',
        'address' => 'Hồ Chí Minh',
        'gender' => 2, // 1: nam, 2: nữ
    ],
    [
        'id' => 4,
        'name' => 'Vũ Đức Đam',
        'email' => 'damvd@gmail.com',
        'address' => 'Hải Dương',
        'gender' => 2, // 1: nam, 2: nữ
    ],
    [
        'id' => 5,
        'name' => 'Xuân Phúc',
        'email' => 'xuanphuc@gmail.com',
        'address' => 'Việt Nam',
        'gender' => 1, // 1: nam, 2: nữ
    ],
    [
        'id' => 6,
        'name' => 'Tấn Dũng',
        'email' => 'xuanphuc@gmail.com',
        'address' => 'Bạc Liêu',
        'gender' => 1, // 1: nam, 2: nữ
    ],
    [
        'id' => 7,
        'name' => 'Nguyễn Văn E',
        'email' => 'eeeee@gmail.com',
        'address' => 'Hà Nội',
        'gender' => 1, // 1: nam, 2: nữ
    ],
];
    //  xử lý Phần tìm kiếm
    $gender = $_GET['gender'] ?? null;
    $keyword = $_GET['keyword'] ?? null;
    $result = $students;

    if (!empty($_GET)) {
        if (!empty($gender) || !empty($keyword)) {
            $result = [];

            foreach ($students as $student) {
                $isMergeKeyword = false;
                $isMergeGender = false;
            }

            // Xử ly tìm kiếm theo từng thông tin sinh viên theo key
            if (!empty($keyword)) {
                $valueSearchs = [
                    $student['name'],
                    $student['address'],
                    $student['email']
                ];

        if (in_array($keyword, $valueSearchs)) {
            $isMergeKeyword = true;
        } else {
            $isMergeKeyword = true;
        }

        // Tìm theo giới tính nam nữ
         if (!empty($gender)) {
            if($student['gender'] == $gender) {
                $isMergeGender = true;
                }
            } else {
                $isMergeGender = true;   
         }

         if ($isMergeKeyword && $isMergeGender) {
            $result[] = $student;
         }
        }   
    }
}
?>

<body>
  <div class="container">
    <div class="form-search">
        <form action="" method="Get">
            <label>
                <input type="text" name="keyword" placeholder="Tìm địa chỉ email tìm kiếm" size="30" value="<?= $keyword ?>" />
                <input type="radio" name="gender" value="1" <?= $gender ==1 ? 'checked' : '' ?> />Nam
                <input type="radio" name="gender" value="2" <?= $gender ==2 ? 'checked' : '' ?> />Nữ
                <button>Tìm kiếm</button>
            </label>           
        </form>
    </div>

    <div class="total-result" style="text-align: right; width: 800px;">Tổng số sinh viên <?= count($result) ?></div>
   <div class="total-result"></div>
    <table width="850" border="1" cellspacing="0" cellpadding="0">
        <tr>
            <td>ID</td>
            <td>Họ và tên</td>
            <td>Email</td>
            <td>Giới tính</td>
            <td>Địa chỉ</td>
            <td>Hành động</td>
        </tr>

        <?php foreach ($result as $student): ?>
        <tr>
            <td><?= $student['id'] ?></td>
            <td><?= $student['name'] ?></td>
            <td><?= $student['email'] ?></td>
            <td><?= $student['gender'] == 1 ? 'Nam' : 'Nữ' ?></td>
            <td><?= $student['address'] ?></td>
            <td>
            <a href="form-studen.php?id=<?= $student['id'] ?>">Xem chi tiết</a>
            </td>
        </tr>

        <?php endforeach; ?>
    </table>
  </div>
</body>

</html>