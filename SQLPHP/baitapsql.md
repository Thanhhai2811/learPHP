1. Lấy ra tất cả user có giới tính là nữ
select * from users where gender = 1;

2. Lấy ra tất cả user có giới tính là nam
select * from users where gender = 2;

3. Lấy ra tất cả user có giới tính là nữ và thuộc hộ gia đình có ID là 1
select * from users where gender = 1 and family_id = 1;


4. Lấy ra tất cả user có giới tính là nữ và thuộc hộ gia đình có ID là 1
select * from users where gender = 2 and family_id = 1;


5. Lấy ra những user có ngày sinh vào ngày 17-10-2000
select * from user where birthday = '2000-11-28';

6. Lấy ra những gia đình có 2 thành viên trở lên
sELECT id FROM famalies GROUP BY id HAVING COUNT(*) >= 2;

7. Lấy ra những gia đình ko có thành viên nào
sELECT * FROM families WHERE (SELECT COUNT(*) FROM users WHERE users.family_id = families.id) = 0;

8. Lấy ra những gia đình có con sinh ngày 20-10-2000
select family_id from users where birthday = '1966-11-25';
9. Lấy ra những gia đình có con là nữ
select * FROM famalies WHERE id IN (SELECT family_id FROM users WHERE gender = 2 );
10. Lấy ra những gia đình có con là Nam
sELECT * FROM families WHERE id IN (SELECT family_id FROM users WHERE gender = 1 );
11.  Lấy ra những user thuộc từ 2 team trở lên
select user_id from user_groups group by user_id having count(*) >= 2;

12. Lấy ra những user không thuộc team nào
select user_id from user_groups group by user_id having count(*) >= 0;

13. Lấy ra những team chỉ có thành là nữ
select group_id FROM user_groups where group_id in (select id from users where gender = 2);
14. Lấy ra những team chỉ có thành là Nam
select group_id FROM user_groups where group_id in (select id from users where gender = 1);
15.  Lấy ra danh sách hộ gia đình và số thành viên tương ứng của hộ gia đình đó
select famaly_name, name FROM famalies inner join users on famalies.id = users.family_id;

