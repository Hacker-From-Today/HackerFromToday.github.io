<body>
<?php

/*
 * IPアドレスのチェック
 * @param   String  $remoteIp           リモートIP
 * @param   String  $allowIpListFile    許可IPリストのファイル
 * @return  boolean
 */
function checkIp($remoteIp, $allowIpListFile){
    foreach (@file($allowIpListFile) as $ipAndMask){
        $ipAndMask = chop($ipAndMask);
        if (''  === $ipAndMask)                 continue;
        if ('#' === substr($ipAndMask, 0, 1))   continue;

        list($allowIp, $mask) = explode("/", $ipAndMask);

        $remoteLong = ip2long($remoteIp) >> (32 - $mask);
        $allowLong  = ip2long($allowIp)  >> (32 - $mask);

        if ($remoteLong == $allowLong)  return true;
    }
    return false;
}

// 許可IP範囲ファイル（allow_ip_list.txt）は同一ディレクトリにあると想定。
if (checkIp($_SERVER["REMOTE_ADDR"], 'allow_ip_list.txt')){
    print"Welcome!!";
}else{
    header('Location: https://discord.gg/XVA6SjJyC8');
}

?>
</body>
<!doctype html>
<html><head><script src="https://www.googletagservices.com/activeview/js/current/osd.js"></script><script src="https://partner.googleadservices.com/gampad/cookie.js?domain=51.91.56.16&amp;callback=_gfp_s_&amp;client=ca-pub-5528711779368380"></script><script src="https://pagead2.googlesyndication.com/pagead/js/r20210601/r20190131/show_ads_impl_fy2019.js" id="google_shimpl"></script><script src="chrome-extension://mooikfkahbdckldjjndioackbalphokd/assets/prompt.js"></script><meta http-equiv="origin-trial" content="A+b/H0b8RPXNaJgaNFpO0YOFuGK6myDQXlwnJB3SwzvNMfcndat4DZYMrP4ClJIzYWo3/yP2S+8FTZ/lpqbPAAEAAABueyJvcmlnaW4iOiJodHRwczovL2ltYXNkay5nb29nbGVhcGlzLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzVGhpcmRQYXJ0eSI6dHJ1ZX0="><meta http-equiv="origin-trial" content="A9ZgbRtm4pU3oZiuNzOsKcC8ppFSZdcjP2qYcdQrFKVzkmiWH1kdYY1Mi9x7G8+PS8HV9Ha9Cz0gaMdKsiVZIgMAAAB7eyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9"><meta http-equiv="origin-trial" content="AxL6oBxcpn5rQDPKSAs+d0oxNyJYq2/4esBUh3Yx5z8QfcLu+AU8iFCXYRcr/CEEfDnkxxLTsvXPJFQBxHfvkgMAAACBeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXRhZ3NlcnZpY2VzLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9"><meta http-equiv="origin-trial" content="A9KPtG5kl3oLTk21xqynDPGQ5t18bSOpwt0w6kGa6dEWbuwjpffmdUpR3W+faZDubGT+KIk2do0BX2ca16x8qAcAAACBeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9"><meta http-equiv="origin-trial" content="A3HucHUo1oW9s+9kIKz8mLkbcmdaj5lxt3eiIMp1Nh49dkkBlg1Fhg4Fd/r0vL69mRRA36YutI9P/lJUfL8csQoAAACFeyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiQ29udmVyc2lvbk1lYXN1cmVtZW50IiwiZXhwaXJ5IjoxNjI2MjIwNzk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ=="><meta http-equiv="origin-trial" content="A0OysezhLoCRYomumeYlubLurZTCmsjTb087OvtCy95jNM65cfEsbajrJnhaGwiTxhz38ZZbm+UhUwQuXfVPTg0AAACLeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiQ29udmVyc2lvbk1lYXN1cmVtZW50IiwiZXhwaXJ5IjoxNjI2MjIwNzk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ=="><meta http-equiv="origin-trial" content="AxoOxdZQmIoA1WeAPDixRAeWDdgs7ZtVFfH2y19ziTgD1iaHE5ZGz2UdSjubkWvob9C5PrjUfkWi4ZSLgWk3Xg8AAACLeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXRhZ3NlcnZpY2VzLmNvbTo0NDMiLCJmZWF0dXJlIjoiQ29udmVyc2lvbk1lYXN1cmVtZW50IiwiZXhwaXJ5IjoxNjI2MjIwNzk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ=="><meta http-equiv="origin-trial" content="A7+rMYR5onPnACrz+niKSeFdH3xw1IyHo2AZSHmxrofRk9w4HcQPMYcpBUKu6OQ6zsdxf4m/vqa6tG6Na4OLpAQAAAB4eyJvcmlnaW4iOiJodHRwczovL2ltYXNkay5nb29nbGVhcGlzLmNvbTo0NDMiLCJmZWF0dXJlIjoiQ29udmVyc2lvbk1lYXN1cmVtZW50IiwiZXhwaXJ5IjoxNjI2MjIwNzk5LCJpc1RoaXJkUGFydHkiOnRydWV9"><meta http-equiv="origin-trial" content="AwfG8hAcHnPa/kJ1Co0EvG/K0F9l1s2JZGiDLt2mhC3QI5Fh4qmsmSwrWObZFbRC9ieDaSLU6lHRxhGUF/i9sgoAAACBeyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiSW50ZXJlc3RDb2hvcnRBUEkiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9"><meta http-equiv="origin-trial" content="AwQ7dCmHkvR6FuOFxAuNnktYSQrGbL4dF+eBkrwNLALc69Wr//PnO1yzns3pjUoCaYbKHtVcnng2hU+8OUm0PAYAAACHeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiSW50ZXJlc3RDb2hvcnRBUEkiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9"><meta http-equiv="origin-trial" content="AysVDPGQTLD/Scn78x4mLwB1tMfje5jwUpAAzGRpWsr1NzoN7MTFhT3ClmImi2svDZA7V6nWGIV8YTPsSRTe0wYAAACHeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXRhZ3NlcnZpY2VzLmNvbTo0NDMiLCJmZWF0dXJlIjoiSW50ZXJlc3RDb2hvcnRBUEkiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9"><link rel="preload" href="https://adservice.google.co.jp/adsid/integrator.js?domain=51.91.56.16" as="script"><script type="text/javascript" src="https://adservice.google.co.jp/adsid/integrator.js?domain=51.91.56.16"></script><link rel="preload" href="https://adservice.google.com/adsid/integrator.js?domain=51.91.56.16" as="script"><script type="text/javascript" src="https://adservice.google.com/adsid/integrator.js?domain=51.91.56.16"></script></head><body>
   <div style="padding: 10px; margin-bottom: 10px; border: 1px solid #333333;">
  <center><a style="font-size: 40px;" > .elf .rpx loader </center>
    </div>
<div style="display:inline-flex">
  <button><a style="font-size: 40px;" type=“button” onclick="location.href='https://www.a-exploit.ml/index-appStore.php'">appStore</button></a></center>
  <button><a style="font-size: 40px;" type=“button” onclick="location.href='https://www.a-exploit.ml/splaFest.php'">SplaFest</button></a>
  <button><a style="font-size: 40px;" type=“button” onclick="location.href='https://www.a-exploit.ml/hbl.php'">  HBL  </button></a>
     </div>



<br>
  <div style="padding: 10px; margin-bottom: 10px; border: 1px solid #333333;">
<center><a style="font-size: 25px;" >Made By</center>
  <center><a style="font-size: 20px;" >Coding</center>
    <center><a style="font-size: 15px;" href="https://github.com/coding">Github</a></center>
    <center><a style="font-size: 20px;" >Yolopia</center>
       <center><a style="font-size: 15px;" href="https://discord.gg/XVA6SjJyC8">Discord</a></center>
      </div>

<script data-ad-client="ca-pub-5528711779368380" async="" src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" data-checked-head="true"></script>
<ins class="adsbygoogle adsbygoogle-noablate" style="display: none !important;" data-adsbygoogle-status="done" data-ad-status="unfilled"><ins id="aswift_0_expand" style="display:inline-table;border:none;height:0px;margin:0;padding:0;position:relative;visibility:visible;width:0px;background-color:transparent;" tabindex="0" title="Advertisement" aria-label="Advertisement"><ins id="aswift_0_anchor" style="display:block;border:none;height:0px;margin:0;padding:0;position:relative;visibility:visible;width:0px;background-color:transparent;"><iframe id="aswift_0" name="aswift_0" style="left:0;position:absolute;top:0;border:0;width:undefinedpx;height:undefinedpx;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" frameborder="0" src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-5528711779368380&amp;output=html&amp;adk=1812271804&amp;adf=3025194257&amp;lmt=1622892815&amp;plat=9%3A32768%2C16%3A8388608%2C17%3A32%2C24%3A32%2C25%3A32%2C30%3A1048576%2C32%3A32&amp;format=0x0&amp;url=http%3A%2F%2F51.91.56.16%2Fbo2%2Findex.php&amp;ea=0&amp;flash=0&amp;pra=5&amp;wgl=1&amp;dt=1622892814379&amp;bpp=13&amp;bdt=636&amp;idt=574&amp;shv=r20210601&amp;cbv=%2Fr20190131&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;nras=1&amp;correlator=7016743559136&amp;frm=20&amp;pv=2&amp;ga_vid=1865474485.1622892815&amp;ga_sid=1622892815&amp;ga_hid=1938750477&amp;ga_fc=0&amp;u_tz=540&amp;u_his=3&amp;u_java=0&amp;u_h=768&amp;u_w=1366&amp;u_ah=768&amp;u_aw=1288&amp;u_cd=24&amp;u_nplug=3&amp;u_nmime=4&amp;adx=-12245933&amp;ady=-12245933&amp;biw=682&amp;bih=697&amp;scr_x=0&amp;scr_y=0&amp;eid=42530671&amp;oid=3&amp;pvsid=152846193885037&amp;pem=819&amp;eae=2&amp;fc=1920&amp;brdim=78%2C0%2C78%2C0%2C1288%2C0%2C1288%2C768%2C682%2C697&amp;vis=1&amp;rsz=%7C%7Cs%7C&amp;abl=NS&amp;fu=32768&amp;bc=23&amp;ifi=1&amp;uci=a!1&amp;fsb=1&amp;dtd=648" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" data-google-container-id="a!1" data-load-complete="true"></iframe></ins></ins></ins><iframe id="google_osd_static_frame_1888273619094" name="google_osd_static_frame" style="display: none; width: 0px; height: 0px;"></iframe><iframe src="https://tpc.googlesyndication.com/sodar/sodar2/222/runner.html" width="0" height="0" style="display: none;"></iframe><iframe src="https://www.google.com/recaptcha/api2/aframe" width="0" height="0" style="display: none;"></iframe></body><iframe id="google_esf" name="google_esf" src="https://googleads.g.doubleclick.net/pagead/html/r20210601/r20190131/zrt_lookup.html" style="display: none;"></iframe></html>
