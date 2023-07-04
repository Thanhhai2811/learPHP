<!doctype html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>ここにタイトル</title>
    <!-- <link href="css/reset.css" rel="stylesheet" type="text/css"> -->
    <link href="./style.css" rel="stylesheet" type="text/css">
​
</head>

​
  <body>
  <?php
  

$organization = $male = $files = $iem = $section  = $addrees = $genphone = $oneaddrees = $password = '';
$organizationErr = $maleErr = $filesErr = $iemErr = $sectionErr = $addreesErr = $genphoneErr = $oneaddreesErr = $passwordErr = '';
$content = '';

if (isset($_POST['Submit'])) {
   $organization = $_POST['organization'];
    $male = $_POST['male'];
    $files = $_POST['files'];
    $iem = $_POST['iem'];
    $section = $_POST['section'];
    $addrees = $_POST['addrees'];
    $genphone = isset($_POST['genphone']) ? $_POST['genphone'] : '';
    $oneaddrees = $_POST['oneaddrees'];
    $password = $_POST['password'];


         // Validate for Tên tổ chức
    if (empty($organization)) {
      $organizationErr = '管理者名は必ず指定してください。';
    }

     // Validate for đơn vị liên kết 
    if (empty($male)) {
      $maleErr  = '所属は必ず指定してください。 ';
    }

    // Validate for Tên quản trị viên
    if (empty($files)) {
      $filesErr  = '管理者名は必ず指定してください。 ';
    }

    // validate mã bưu điện
    if (empty($iem)) {
      $iemErr  = '郵便番号は必ず指定してください。';
    }


    if (empty($section)) {
      $sectionErr = '郵便番号は必ず指定してください。 ';
    }

       // Validate for địa chỉ 
    if (empty($addrees)) {
      $addreesErr = 'ご住所は必ず指定してください。';
    }

       // Validate for số điện thoại
    if (empty($genphone)) {
      $genphoneErr = '電話番号は必ず指定してください。';
    }else if (strlen($_POST['genphone']) > 10) {
      $genphoneErr = 'Số điện thoại không quá 10 ký tự';
    }

    
    if (empty($oneaddrees)) {
      $oneaddreesErr = 'Vui lòng nhập email của bạn';
    } else if (!filter_var($_POST['oneaddrees'], FILTER_VALIDATE_EMAIL)) {
      $oneaddreesErr = 'Email không đúng định dạng';
    }

       // Validate for  Mật khẩu
    if (empty($password)) {
      $passwordErr  = 'パスワードは必ず指定してください。';
    }
}

    // In thông tin hiển thị ra màn hình
    if ($organization && $male && $files && $iem && $section &&  $addrees && $genphone && $oneaddrees ) {
      $content .= "<p>Tên khách hàng : ${organization}";  
      $content .= "<p>Đơn vị liên kết : ${male}";
      $content .= "<p>Tên quản trị : ${files}";
      $content .= "<p>Mã bưu điện : ${iem}";
      $content .= "<p>Mã bưu điện : ${section}";
      $content .= "<p>Địa chỉ : ${addrees}";
      $content .= "<p>số điện thoại : ${genphone}";  
      $content .= "<p>password : ${password}";

    }
  

?>
    <header id="header">
    </header>
    
​
    <div class="container">
      <div class="breadcrumbs">
        パンくずリスト > <a href="">パンくずリスト</a>
      </div>
    </div>

    <main>
​
​
      <form action="" method="POST">
      <section>
        <div class="section_header">
          <h2 class="section_title">お客様登録</h2>
        </div>
​
        <div class="container">
          <div class="form_frame">
​
            <div class="form_box">
​
              <div class="form_headline">
                商品引渡し先
              </div>
​
              <label class="side_label">
                <input type="radio" name="destination" value="company" checked>会社
              </label>
              <label class="side_label">
                <input type="radio" name="destination" value="school">学校
              </label>
              <label class="side_label">
               
              </label>
​
            </div>
​
            <!-- 会社･勤務先フォーム -->
            <div id="company_form">

              <div class="form_box">
                <div class="form_headline">
                  団体名
                </div>
                <input type="text" name="organization" placeholder="株式会社〇〇" class="<?= $organizationErr ? 'input-error' : '' ?>" value="<?= $organization?>">
                <?= $organizationErr ? "<span class='smg-error'>{$organizationErr}</span>" : '' ?>
              </div>
​
              <div class="form_box">
                <div class="form_headline">
                  所属（引渡し先）
                </div>
                <input type="text" name="male" placeholder="営業部" class="<?= $maleErr ? 'input-error' : '' ?>" value="<?= $male ?>">
                <?= $maleErr ? "<span class='smg-error'>{$maleErr}</span>" : '' ?>
              </div>
​
              <div class="form_box">
​
                <div class="form_headline">
                  管理者名
                </div>
                <input type="text" name="files" placeholder="山田　太郎" class="<?= $filesErr ? 'input-error' : '' ?>" value="<?= $files ?>">
​                 <?= $filesErr ? "<span class='smg-error'>{$filesErr}</span>" : '' ?>
              </div>
​
​     
              <div class="form_box">
                <div class="form_headline">
                  郵便番号
                </div>
                <div class="flex_wrap zip_frame">
                  <div>
                    <input type="text" name="iem" maxlength="3" placeholder="000"  class="<?= $iemErr? 'input-error' : '' ?>" value="<?= $iem ?>">
                    <?= $iemErr ? "<span class='smg-error'>{$iemErr}</span>" : '' ?>
                  </div>
                  <div>
                    <input type="text" name="section" maxlength="4" onKeyUp="AjaxZip3.zip2addr('zip31','zip32','pref','pref','addr1');" placeholder="0000" class="<?= $sectionErr ? 'input-error' : '' ?>" value="<?= $section ?>">
                    <?= $sectionErr ? "<span class='smg-error'>{$sectionErr}</span>" : '' ?>
                  </div>
                </div>
              </div>
​
              <div class="form_box">
                <div class="form_headline">
                  ご住所
                </div>
                <div class="pref"></div>
                <input type="text" name="addrees" placeholder="〇〇町1-1　〇〇マンション301" class="<?= $addreesErr ? 'input-error' : '' ?>" value="<?= $addrees?>">
                <?= $addreesErr ? "<span class='smg-error'>{$addreesErr}</span>" : '' ?>
              </div>
​
              <div class="form_box">
​
                <div class="form_headline">
                  電話番号
                </div>
                <input type="text" name="genphone" placeholder="000-0000-0000" class="<?= $genphoneErr ? 'input-error' : '' ?>" value="<?= $genphone?>">
                <?= $genphoneErr? "<span class='smg-error'>{$genphoneErr}</span>" : '' ?>
​
              </div>
​
              <div class="form_box">
​
                <div class="form_headline">
                  メールアドレス
                </div>
                <input type="email" name="oneaddrees" placeholder="example@example.com"  class="<?= $oneaddreesErr ? 'input-error' : '' ?>" value="<?= $oneaddrees ?>">
                <?= $oneaddreesErr ? "<span class='smg-error'>{$oneaddreesErr}</span>" : '' ?>
​
              </div>
​
              <div class="form_box">
​
                <div class="form_headline">
                  パスワード
                </div>
                <input type="text" name="password" placeholder="※半角英数字１５文字以内" class="<?= $passwordErr ? 'input-error' : '' ?>" value="<?= $password ?>">
                <?= $passwordErr ? "<span class='smg-error'>{$passwordErr}</span>" : '' ?>
​
              </div>
  
            </div>
​
            <!-- 学校フォーム -->
            <div id="school_form">
​
              <div class="form_box">
                <div class="form_headline">
                  団体名
                </div>
                <input type="text" name="" placeholder="〇〇中学校">
              </div>
​
              <div class="form_box">
                <div class="form_headline">
                  所属（学年・クラス）
                </div>
                <input type="text" name="" placeholder="〇年〇組">
                
              </div>
​
              <div class="form_box">
                <div class="form_headline">
                  管理者名
                </div>
                <input type="text" name="" placeholder="山田太郎">
              </div>
​
              <div class="form_box">
                <div class="form_headline">
                  郵便番号
                </div>
                <div class="flex_wrap zip_frame">
                  <div>
                    <input type="text" name="zip31" maxlength="3" placeholder="000">
                  </div>
                  <div>
                    <input type="text" name="zip32" maxlength="4" onKeyUp="AjaxZip3.zip2addr('zip31','zip32','pref','pref','addr1');" placeholder="0000">
                  </div>
                </div>
              </div>
​
              <div class="form_box">
                <div class="form_headline">
                  ご住所
                </div>
                <div name="pref"></div>
                <input type="text" name="addr1" placeholder="〇〇町1-1　〇〇マンション301">
              </div>
​
              <div class="form_box">
​
                <div class="form_headline">
                  電話番号
                </div>
                <input type="text" name="" placeholder="00-0000-0000">
​
              </div>
​
              <div class="form_box">
​
                <div class="form_headline">
                  メールアドレス
                </div>
                <input type="email" name="" placeholder="example@example.com">
​
              </div>
​
              <div class="form_box">
​
                <div class="form_headline">
                  パスワード
                </div>
                <input type="text" name="" placeholder="※半角英数字１５文字以内">
​
              </div>
​
            </div>
​
            <!-- 自宅フォーム -->
            <div id="home_form">
              自宅フォームが表示されます
            </div>
​
            </div>
​
          <div class="button">
            <div>
              <input type="submit" class="button01" name="Submit" value="確認画面へ">
            </div>
          </div>
​
​
        </div>
​
      </section>
      </form>             


      <div ><?= $content?></div>
​
​
    </main>
​
    <footer id="footer">
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
    <script src="script.js"></script>
​
    <script>
      $(function(){
        $("#header").load("header.html");
        $("#footer").load("footer.html");
      });
    </script>
​
​
  </body>
</html>