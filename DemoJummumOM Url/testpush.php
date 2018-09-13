<?php
    include_once('dbConnect.php');
    setConnectionValue("");
    $arrBody = array(
                     'alert' => 'test demo jummum om'//ข้อความ
                      ,'sound' => 'default'//,//เสียงแจ้งเตือน
//                      ,'badge' => 3 //ขึ้นข้อความตัวเลขที่ไม่ได้อ่าน
                     ,'category' => 'Print'
                      );
    sendTestApplePushNotification('d8aa42e08a5243961f7de96b99505832f52514b6244739dbf3aa1d289a50ffa6',$arrBody);
    
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
