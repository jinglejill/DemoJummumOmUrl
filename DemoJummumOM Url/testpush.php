<?php
    include_once('dbConnect.php');
    setConnectionValue("DEMO_JUMMUM_OM");
    $arrBody = array(
                     'alert' => 'test demo jummum om'//ข้อความ
                      ,'sound' => 'default'//,//เสียงแจ้งเตือน
//                      ,'badge' => 3 //ขึ้นข้อความตัวเลขที่ไม่ได้อ่าน
                     ,'category' => 'Print'
                      );
    sendTestApplePushNotification('d988d1e4c26d978a1d11ed3c64e08695f8a8d89d02d6b12f362dd38195116de6',$arrBody);
    
//    sleep(5);
//
//
//    $arrBody = array(
//                     'alert' => 'เทสจิ๋ว 2
//                     เอ'//ข้อความ
//                     ,'sound' => 'default'//,//เสียงแจ้งเตือน
//                     //                      ,'badge' => 3 //ขึ้นข้อความตัวเลขที่ไม่ได้อ่าน
//                     );
//    sendTestApplePushNotification('1877301d04f677b7fcc415b7f0bcbd799bf679013b14f76ce746d778087a22f6',$arrBody);
?>

//<table><tr><td style="text-align: center;border: 1px solid black; padding-left: 10px;padding-right: 10px; border-radius: 15px;">x</td></tr></table>
