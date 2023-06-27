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

    $studentId = $_GET['id'] ?? null;

    if (empty($studentId)) {
        echo '<p>Không tìm thấy sinh viên</div>';
    } else {
        $studentInfo = null;

        foreach ($students as $student) {
            if ($student['id'] == $studentId) {
                $studentInfo = $student;
            }
        }

        if ($studentInfo) {
            echo '<h4>Thông tin sinh viên</h4>';
            echo '<ul>';
            echo '<li>Họ và tên: ' . $studentInfo['name']. '</li>';
            echo '<li>Email: ' . $studentInfo['email'] . '</li>';
            echo '<li>Địa chỉ: ' . $studentInfo['address'] . '</li>';
            echo '</ul>';
        } else {
            echo '<p>Không tìm thấy sinh viên</div>';
        }
    }

    echo "<p><a href='index.php'>Quay lại danh sách</a></p>";