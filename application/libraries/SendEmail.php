<?php

/*author:matt 2012-02-15
  发送Email类*/

include_once('smtp.class.php');
class SendEmail extends  smtp   {
	//邮件发送配置
     private   $admin_mail='791972747@qq.com';
     private   $admin_mail_psw='woaicrylp1314';
     private   $email_user='791972747@qq.com';
     private   $smtpserver='smtp.exmail.qq.com';
     private   $smtpserverport=25;
	
	
	//构造函数
	public function __construct(){
		$this->smtp($this->smtpserver,$this->smtpserverport,true,$this->email_user,$this->admin_mail_psw);
	}
	
	
	//发送邮件，参数说明：1发送的邮箱,2发送标题,3发送内容，4是否使用默认模板(1是不用默认模板，0为否);    默认系统发送模板
	public function send_email($email,$title,$comment,$is_default=0){
		$this->debug = FALSE;	
		//默认模板HTML代码
		
           $new_title= iconv("UTF-8",'GB2312',$title);
		
		if ($is_default==0) {//是否默认模板
			 $new_comment=  "<table width='650' cellspacing='0' cellpadding='0' border='0' align='center' style='border:1px solid #cccccc;'>
  <tbody>
    <tr>
      <td style='font-size:12px; line-height:20px; padding-top:10px; text-align:left;'><table width='633' cellspacing='0' cellpadding='0' border='1' style='width:460pt; margin-left: 7.5pt; border:none; border-bottom:solid #003399 1.5pt' class='MsoNormalTable'>
          <tbody>
            <tr>
              <td width='192' height='40' style='width:144.0pt; border: none; padding:10px 0px 10px 0px;'><p align='center' style='text-align: center; line-height:3.0pt' class='MsoNormal'> <span lang='EN-US' xml:lang='EN-US' style='font-size:10.5pt; color: black'><a href='http://".$_SERVER['SERVER_NAME']."' target='_blank'> <span style='text-decoration: none'> <img border='0' src='http://".$_SERVER['SERVER_NAME']."/images/email_logo.jpg'></span></a></span> </p></td>
              <td width='428' valign='bottom' height='40' style='width: 321.0pt; border:none; padding: 0cm 0cm 7.5pt 0cm'><p align='right' style='text-align: right; line-height: 18.0pt' class='MsoNormal'>&nbsp;</p></td>
            </tr>
          </tbody>
        </table>
        <table width='620' cellspacing='0' cellpadding='0' border='0' style='margin-left: 10px;'>
          <tbody>
            <tr>
              <td style='font-size: 12px; line-height:25px; padding-top: 10px;'><strong>亲爱的富家医疗用户</strong> </td>
            </tr>
			<tr>
              <td style='line-height: 18px; padding-top: 15px; font-size: 12px;'><p style='text-indent:2em; line-height:180%; '>您好！</p></td>
            </tr>
            <tr>
              <td style='line-height: 18px; padding-top: 15px; font-size: 12px;'><p style=' line-height:180%; '>asdasdas</p></td>
            </tr>
            <tr>
              <td><br></td>
            </tr>
            <tr>
              <td style='line-height: 40px; font-size: 12px'><br></td>
            </tr>
            <tr class='MsoNormalTable'>
              <td align='left' style='border: none; padding:1.5pt 0cm 7.5pt 0cm; border-top:dashed #999999 1.0pt;'>
			    <p style='line-height:180%; padding:10px 0;'> <span style='font-size: 9.0pt; color: #999999'>此邮件为系统自动发送，请不要回复！<br />
                <span style='float:right'>富家医疗管理员<br>
                  2012-12-12 12:00:00</span></span></p>
				  </td>
            </tr>
          </tbody>
        </table></td>
    </tr>
  </tbody>
</table>";  
		$return=$this->sendmail($email,$this->admin_mail,$new_title,$new_comment,"HTML");
		}else{
		$return=$this->sendmail($email,$this->admin_mail,$new_title,$comment,"HTML");	
		}
		
		return  $return;
	}
}


?>
