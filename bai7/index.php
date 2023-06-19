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

$cookie = $male = $files = $iem = $section  = $diachi = $genphone = $getdiachi = $password = '';
$cookieErr = $maleErr = $filesErr = $iemErr = $sectionErr = $diachiErr = $genphoneErr = $getdiachiErr = $passwordErr = '';
$content = '';

if (isset($_POST['Submit'])) {
    $cookie = $_POST['cookie'];
    $male = $_POST['male'];
    $files = $_POST['files'];
    $iem = $_POST['iem'];
    $section = $_POST['section'];
    $diachi = $_POST['diachi'];
    $genphone = isset($_POST['genphone']) ? $_POST['genphone'] : '';
    $getdiachi = $_POST['getdiachi'];
    $password = $_POST['password'];


         // Validate for _COOKIE1
    if (empty($cookie)) {
        $cookieErr = '管理者名は必ず指定してください。';
    }

     // Validate for _COOKIES
    if (empty($male)) {
      $maleErr  = '所属は必ず指定してください。 ';
    }

    // Validate for _FILES
    if (empty($files)) {
      $filesErr  = '管理者名は必ず指定してください。 ';
    }


    if (empty($iem)) {
      $iemErr  = '郵便番号は必ず指定してください。';
    }


    if (empty($section)) {
      $sectionErr = '郵便番号は必ず指定してください。 ';
    }

       // Validate for diachi
    if (empty($diachi)) {
      $diachiErr  = 'ご住所は必ず指定してください。';
    }

       // Validate for sodienthoai
    if (empty($genphone)) {
      $genphoneErr = '電話番号は必ず指定してください。';
    }else if (strlen($_POST['genphone']) > 10) {
      $genphoneErr = 'Số điện thoại không quá 10 ký tự';
    }

    
    if (empty($getdiachi)) {
      $getdiachiErr = 'Vui lòng nhập email của bạn';
    } else if (!filter_var($_POST['getdiachi'], FILTER_VALIDATE_EMAIL)) {
    $getdiachiErr = 'Email không đúng định dạng';
    }

       // Validate for matkhau
    if (empty($password)) {
      $passwordErr  = 'パスワードは必ず指定してください。';
    }
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
                <input type="radio" name="destination" value="home">自宅
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
                <input type="text" name="cookie" placeholder="株式会社〇〇" class="<?= $cookieErr ? 'input-error' : '' ?>" value="<?= $cookie ?>">
                <?= $cookieErr ? "<span class='smg-error'>{$cookieErr}</span>" : '' ?>
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
                <input type="text" name="diachi" placeholder="〇〇町1-1　〇〇マンション301" class="<?= $diachiErr ? 'input-error' : '' ?>" value="<?= $diachi?>">
                <?= $diachiErr ? "<span class='smg-error'>{$diachiErr}</span>" : '' ?>
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
                <input type="email" name="getdiachi" placeholder="example@example.com"  class="<?= $getdiachiErr ? 'input-error' : '' ?>" value="<?= $getdiachi ?>">
                <?= $getdiachiErr ? "<span class='smg-error'>{$getdiachiErr}</span>" : '' ?>
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