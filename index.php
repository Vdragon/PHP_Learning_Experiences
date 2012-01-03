<?php echo "<?xml version='1.0' encoding='UTF-8'?>" . PHP_EOL; ?>
<!DOCTYPE html
     PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--（此標籤包住的內容為註解）以上為XML和DTD(Document Type
    Definition)的宣告-->

<!--
我的專案(My projects) | 林博仁的網頁空間(Henry Lin's Webpage Space)
    本網頁使用的智慧財產授權：
    詳細資料註明於下方meta元素。
已知問題：

待辦事項：

變更紀錄：

-->

<!--html標籤：html主要內容
    XHTML規範需要／選用的屬性：xmlns, xml:lang
-->
<html xmlns="http://www.w3.org/1999/xhtml"
       xml:lang="zh_TW"
       lang="zh_TW">
  <!--head標籤：包含一些metadata（中介資料）-->
  <head>
    <!--title標籤：顯示於標題列(title bar)的文字-->
    <title>PHP_Learning_Experiences | 林博仁的網頁空間(Henry Lin's Webpage Space)</title>
    <!--meta標籤：一些非此標籤所能表示的一些其他的metadata（中介資料）
          name屬性：metadata的名稱
            author：網頁的創作者名稱。
            description：網頁的內容描述。
            generator：產生這份網頁的軟體名稱。
            keyword：這個網頁的關鍵字。
            robots：要求搜索引擎的索引軟體對這個網頁採取的行動。
          content屬性：這個metadata名稱之內容
          http-equiv屬性：用來變更伺服器跟user-agent的行為，使用content屬性定義這個屬性的值。
            content-type：
              text/html：原本要用application/xhtml+xml的MIME（Multipurpose Internet
Mail Extensions，多用途網際網路郵件檔案類型），不過為了增加HTML 4相容性故使用text/html
              charset：網頁內容使用的字元集合(charset)
          參考網址：https://developer.mozilla.org/en/HTML/Element/meta
    -->
    <!--網頁版本-->
    <meta name="webpage-version" content="1.03(3)201112152243" />
    <!--XHTML範本版本-->
    <meta name="template-version" content="1.03(7)201111232041" />
    <meta name="author" content="林博仁(Henry Lin)" />
    <meta name="description" content="林博仁的網頁空間(Henry Lin's Webpage Space)" />
    <meta name="generator" content="gedit文字編輯器(gedit word editor)" />
    <meta name="keywords" content="Henry Lin,Webpage,Space,NTOU,IND" />
    <meta name="robots" content="index,follow" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <!--
    <link href='' rel='stylesheet' type='text/css' />
    <style type='text/css'>

    </style>
    <script src='' type='text/javascript'>
    -->
    <link href='http://ind.ntou.edu.tw/~pika1021/Stylesheets/Generic_stylesheet.css' rel='stylesheet' type='text/css' />
  </head>
  <!--body標籤：包含網頁的內容(content)
      XHTML規範需要／選用的屬性：
        xml:lang：用來宣告XML使用的語言
      參考網址：https://developer.mozilla.org/en/HTML/Element/body
  -->
  <body xml:lang="zh-TW" lang="zh-TW" class='generic_body'>
    <!--header-->
    <div class='header'>
      <a href='../index.html' target='_self'>到外層頁面</a>
      <hr />

    </div>
    <h1>PHP_Learning_Experiences</h1>
    <a href='001_Hello_World/'
target='_self'>001_Hello_World</a><br />
    <a href='002_phpinfo/'
target='_self'>002_phpinfo</a><br />
    <a
      href='003_variables_and_loops/'
      target='_self'>
      003_variables_and_loops
    </a><br />
    <a
      href='004_Advanced_escaping/'
      target='_self'>
      004_Advanced_escaping
    </a><br />
    <!--footer-->
    <div class='footer'>
     <hr />
      <!--W3C HTML Markup Validator通過之後可以放上此圖片-->
      <a href="http://validator.w3.org/check?uri=referer">
      <img src="http://www.w3.org/Icons/valid-xhtml10"
           alt="W3C HTML Markup Validation Service驗證(XHTML 1.0)通過圖示 | W3C HTML markup Validater Passed Icon"
           height="31"
           width="88" />
      </a><br />
這個圖示代表了這個網頁的開發者致力於讓網頁的內容能盡量符合W3C的規範，讓不同的網頁瀏覽器能更加正確的顯示這個網頁而不會出現相容性問題。您可以點擊這個圖示直接讓W3C的Markup Validation Service再次對這個網頁進行檢查。
      <hr />
      <!--W3C CSS Validator通過之後可以放上此圖片-->
      <a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img style="border:0;width:88px;height:31px"
             src="http://jigsaw.w3.org/css-validator/images/vcss"
             alt="有效的CSS樣式表 | Valid CSS!" />
      </a><br />
這個圖示代表了這個網頁的開發者致力於讓CSS（Cascading Style Sheets，層疊樣式表）的內容能盡量符合W3C的規範，讓不同的網頁瀏覽器能更加正確的顯示這個網頁而不會出現相容性問題。您可以點擊這個圖示直接讓W3C的CSS Validation Service再次對這個網頁進行檢查。
    </div>
  </body>
</html>
