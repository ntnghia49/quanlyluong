<?php
    include("../../../../PHPMail/src/SMTP.php");
    include("../../../../PHPMail/src/PHPMailer.php");
    include("../../model/bangluong.php");
    function sendMail($title, $content, $nTo, $mTo,$diachicc){
        $nFrom = 'Luong';
        $mFrom = 'lynhnguyenit.com';  //dia chi email cua ban 
        $mPass = 'yenlinh23';       //mat khau email cua ban
        $mail  = new PHPMailer\PHPMailer\PHPMailer();
        $body  = $content;
        $mail->IsSMTP(); 
        $mail->CharSet   = "utf-8";
        $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
        $mail->SMTPAuth   = true;                 // enable SMTP authentication
        $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
        $mail->Host       = "smtp.gmail.com";        
        $mail->Port       = 465;
        $mail->Username   = $mFrom;  // GMAIL username
        $mail->Password   = $mPass;               // GMAIL password
        $mail->SetFrom($mFrom, $nFrom);
        //chuyen chuoi thanh mang
        $ccmail = explode(',', $diachicc);
        $ccmail = array_filter($ccmail);
        if(!empty($ccmail)){
            foreach ($ccmail as $k => $v) {
                $mail->AddCC($v);
            }
        }
        $mail->Subject = $title;
        $mail->MsgHTML($body);
        $address = $mTo;
        $mail->AddAddress($address, $nTo);
        $mail->AddReplyTo('info@freetuts.net', 'Freetuts.net');
        if(!$mail->Send()) {
            return 0;
        } else {
            return 1;
        }
    }
    function kiemtra($bien){
        if($bien!="null")
            return $bien;
        else
            return " ";
    }
    //Gửi mail
    $bl=new BangLuong();
    //
    $thang=$_POST['thangchon'];
    $nam=$_POST['namchon'];
    $kttt=$bl->kiemtratrangthai($thang,$nam);
    //
    if($kttt=="0"){
    $bl->select2($thang,$nam);
    $i=0;
    while($row=$bl->laybangluong()){
        $MaBL=$row['MaBL'];
        $HoTen=$row['HoTen'];
        $SoTKATM=$row['SoTKATM'];
        $TLuongThang=kiemtra($row['TLuongThang']);
        $TruyLinhLuong=kiemtra($row['TruyLinhLuong']);
        $BDTheoGio=kiemtra($row['BDTheoGio']);
        $TienLuongTang=kiemtra($row['TienLuongTang']);
        $PCCNV=kiemtra($row['PCCNV']);
        $PCLD=kiemtra($row['PCLĐ']);
        $TruyThuTienLuong=kiemtra($row['TruyThuTLuong']);
        $TongSoTien=kiemtra($row['TongSoTien']);
        $KPCD=kiemtra($row['KPCD']);
        $SoTienCL=kiemtra($row['SoTienCL']);
        $str='<div id=":id" class="Am Al editable LW-avf" hidefocus="true" aria-label="Nội dung thư" g_editable="true" role="textbox" contenteditable="true" tabindex="1" itacorner="6,7:1,1,0,0" style="direction: ltr; min-height: 34px;"><div style="text-align:center"><b><font color="#008000">TRƯỜNG ĐẠI HỌC SƯ PHẠM KỸ THUẬT VĨNH LONG</font></b></div><div style="text-align:center">PHIẾU LƯƠNG THANH TOÁN TIỀN LƯƠNG VÀ PHỤ CẤP</div><div style="text-align:center">THÁNG'." $thang/$nam ".'</div><div style="text-align:left">Kính gửi:</div><blockquote style="margin:0 0 0 40px;border:none;padding:0px"><div style="text-align:left">- &nbsp; &nbsp; Thầy/Cô: '."$HoTen".'</div></blockquote><blockquote style="margin:0 0 0 40px;border:none;padding:0px"><div style="text-align:left">- &nbsp; &nbsp; Số tài khoản ATM: '."$SoTKATM".'</div><div style="text-align:left"><br></div></blockquote>Thông tin chi tiết về thanh toán tiền lương và phụ cấp như sau:<blockquote style="margin:0 0 0 40px;border:none;padding:0px"><div>- &nbsp; &nbsp; Tiền lương tháng/hđtn: '."$TLuongThang".'</div></blockquote><blockquote style="margin:0 0 0 40px;border:none;padding:0px"><div>- &nbsp; &nbsp; Truy lĩnh lương, tiền công, UDGV, TNNG: '."$TruyLinhLuong".'</div></blockquote><blockquote style="margin: 0 0 0 40px; border: none; padding: 0px;">- &nbsp; &nbsp; BD theo giờ làm việc: '."$BDTheoGio".'<br>- &nbsp; &nbsp; Tiền lương tăng thêm: '."$TienLuongTang".'</blockquote><div><blockquote style="margin:0 0 0 40px;border:none;padding:0px"><div style="text-align:left">- &nbsp; &nbsp; Phụ cấp CNV (20%): '."$PCCNV".'</div></blockquote><blockquote style="margin:0 0 0 40px;border:none;padding:0px"><div style="text-align:left">- &nbsp; &nbsp; Phụ cấp lãnh đạo: '."$PCLD".'</div></blockquote><blockquote style="margin:0 0 0 40px;border:none;padding:0px"><div style="text-align:left">- &nbsp; &nbsp; Truy thu tiền lương, PCUDGV, PCTNNG: '."$TruyThuTienLuong".'</div></blockquote><blockquote style="margin:0 0 0 40px;border:none;padding:0px"><div style="text-align:left">- &nbsp; &nbsp; <b>Tổng số tiền: '."$TongSoTien".'</b></div></blockquote><blockquote style="margin:0 0 0 40px;border:none;padding:0px"><div style="text-align:left"><b>- &nbsp; &nbsp; </b>Trừ đoàn phí công đoàn quý: '."$KPCD".'</div></blockquote><blockquote style="margin:0 0 0 40px;border:none;padding:0px"><div style="text-align:left"><b>- &nbsp; &nbsp; <font color="#ff0000">SỐ TIỀN CÒN ĐƯỢC NHẬN (VNĐ): '."$SoTienCL".'</font></b></div><div style="text-align:left"><br></div></blockquote>Lưu ý:</div><div><blockquote style="margin: 0 0 0 40px; border: none; padding: 0px;"><div>- &nbsp; &nbsp; Thầy/Cô vui lòng email phản hồi (reply) từ địa chỉ email này.</div></blockquote><blockquote style="margin: 0 0 0 40px; border: none; padding: 0px;"><div>- &nbsp; &nbsp; Mọi thông tin thắc mắc vui lòng liên hệ trao đổi với cô Đặng Thị Kim Anh (email:<a href="mailto:anhdtk@vlute.edu.vn">anhdtk@vlute.edu.vn</a>) phòng TCKT của trường</div></blockquote><blockquote style="margin:0 0 0 40px;border:none;padding:0px"><div style="text-align:left"><br></div><div style="text-align:left"><br></div></blockquote></div></div>';
        //
        $title = 'Hướng dẫn gửi mail bằng phpmailer';
        $content = $str;
        $nTo = $HoTen;//Tên người gửi đến
        $mTo = $row['Email'];//Email ng ười gửi đến
        $diachicc = 'ntnghia1234@gmail.com';
        //test gui mail
        $mail = sendMail($title, $content, $nTo, $mTo,$diachicc);
        if($mail==1)
           $i++;
        $bl->MaBL=$MaBL;
        $bl->capnhattrangthai();
    }
    echo "Đã gửi thành công ".$i." email ";
    }else{
        echo "DG";
    }
?>