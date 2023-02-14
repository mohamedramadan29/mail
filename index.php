<?php /*
$to = 'mohamedramadan2930@gmail.com';
$sub = "Testing Mail";
$msg = "";
$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Your name <mr319242@gmail.com>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
$res = mail($to,$sub,$msg,$headers);
if($res){
    echo "Good";
}else{
    echo "Bad";
}
*/
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> فورم ارسال الايميل </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Noto Kufi Arabic', sans-serif;
            background-color: #fbfbfb;
        }

        .form_mail {
            margin-top: 100px;
            max-width: 700px;
            margin: auto;
            padding: 20px;
            direction: rtl;
        }

        .form_mail .data {
            box-shadow: 0px 0px 10px 2px #eee;
            border-radius: 10px;
            background-color: #fff;
            padding: 100px;
        }

        .form_mail .data img {
            display: block;
            text-align: center;
            max-width: 250px;
            margin: auto;
            margin-top: 20px;
            margin-bottom: 60px;
        }

        .form_mail .data label {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .form_mail .data input {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="form_mail">
        <div class="container">
            <div class="data">
                <form action="" method="post" enctype="multipart/form-data">
                    <img src="logo_ar.png" alt="">
                    <label for=""> ادخل البريد الالكتروني للعميل </label>
                    <input type="email" required name="email" class="form-control">
                    <button class="btn btn-primary" type="submit"> ارسال المستند </button>
                </form>
            </div>
        </div>
    </div>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $email = $_POST['email'];
        $fromName = "Mohamed Ramadan";
        $to = $email;
        $from  = "info@thelight.host";
        $subject = " محمد وبران أل الكليب  ";
        $htmlContent = "
        <!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD' crossorigin='anonymous'>
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic&display=swap' rel='stylesheet'>

    <style>
        body {
            font-family: 'Noto Kufi Arabic', sans-serif;
            background-image: url(background.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
        }

        .form_content {
            background-color: #fff;
            padding: 10px;
            border-radius: 10px;
        }
 
        .form_temp .form_head {
            padding-top: 60px;
            padding-bottom: 60px;
        }

        .form_temp .form_head img {
            text-align: center;
            margin: auto;
            display: block;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
        }

        .form_temp .form_content {}

        .form_temp .form_content .ar_text {
            text-align: right;
            direction: rtl;
        }

        .form_content tr {}

        .form_content tr td {
            font-size: 14px;
            line-height: 1.9;
            font-weight: 500;
        }

        .form_content h4 {
            font-size: 15px;
            font-weight: bold;
        }

        .footer {
            background-color: #091d3e;
            padding: 20px;
            margin-top: 20px;
            color: #fff;
        }

        .footer p {
            padding: 0;
            margin: 0;
            margin-bottom: 5px;
            font-size: 14px;
            
        }
    </style>
</head>

<body>
    <div class='form_temp'> 
        <div class='container'>
            <div class='form_head'>
                <a href='https://www.mwk-group.com/'> <img src='logo_ar.png' alt=''> </a>
            </div>
            <div class='form_content'>
                <div class='table-resposive'>
                    <table class='table table-bordered  table-striped'>
                        <tbody>
                            <tr>
                                <td>Do you need to check the zakat and tax due on your facility?</td>
                                <td class='ar_text'>هل تحتاج للتأكد من الزكاة والضريبة المستحقة على منشأتك </td>
                            </tr>
                            <tr>
                                <td> Do you suffer from linking and frequent inquiries? </td>
                                <td class='ar_text'>هل تعاني من الربط والاستفسارات المتكررة</td>
                            </tr>
                            <tr>
                                <td>Are fines or costs calculated and would you like to avoid them in the right way?</td>
                                <td class='ar_text'>هل تم احتساب غرامات أو تكاليف وتود تجنبها بالطريقة الصحيحة</td>
                            </tr>
                            <tr>
                                <td> You would like to obtain accurate and sound audited financial statements? </td>
                                <td class='ar_text'>تود الحصول على قوائم مالية مدققة دقيقة وسليمة </td>
                            </tr>
                            <tr>
                                <td> Would you like to obtain reliable financial or zakat advice? </td>
                                <td class='ar_text'> تود الحصول على استشارة مالية او زكوية موثوقة </td>
                            </tr>
                            <tr>
                                <td>
                                    We are Mohammad Wabran Al Kulaib Office Specializes in Zakat and Tax consultancy pleased to offer you our services: Zakat and Tax Consultancy, Financial Consultant and Value-added Tax impact assessment on the companies Through a group of experienced consultants, efficient and fully aware of the Regulations, Zakat and Tax Laws Applicable at Kingdom of Saudi Arabia
                                    <hr>
                                    <ul>
                                        <h4>Our services in the field of zakat, income tax and value added tax</h4>
                                        <li>Preparing and submitting zakat returns, income tax, value added tax, and issuing zakat and tax certificates</li>
                                        <li>Making objections to the invoices sent by the Zakat and Income Authority, appeals to the zakat assessment, responding to all inquiries of the Zakat and Income Authority, and attending committee sessions</li>
                                        <li>Monitor and attend field inspections on behalf of the client and end the Zakat and tax status with the General Authority for Zakat and Income</li>
                                    </ul>
                                    <hr>
                                    <ul>
                                        <h4>Our services in the field of financial and accounting consulting</h4>
                                        <li>Recording accounts using accounting programs and training facility employees on them</li>
                                        <li>Reviewing the financial statements for submission to the Zakat Authority and financing agencies (banks and others). </li>
                                        <li>Qualifying establishments to obtain financial financing from the competent authorities</li>
                                        <li>Qualifying the establishments to obtain the classification of contractors</li>
                                        <li>Preparing economic feasibility studies</li>
                                        <li>Preparing special accounting reports.</li>
                                    </ul>

                                </td>
                                <td class='ar_text'>يسعدنا نحن مكتب محمد وبرا آل كليب للإستشارات المحاسبية، أن نقدم لكم خدماتنا المتمثلة في الإستشارات الزكويـة والضريبية، الإستشارات المالية والمحاسبية وتقييم أثر ضريبة القيمة المضافة على المنشآت وجميع الخدمات المحاسبيـة من خلال مجموعــة مـــن المستشارين ذوي الخبرة والكفاءة وعلى دراية تامة بالأنظمة والقوانين الزكوية والضريبية المعمول بها في المملكة العربية السعـــودية.
                                    ويسعدنا أيضا تقديم خدماتنا في مجال الزكاة والضريبة وفي مجال خدمات الاستشارات المالية والمحاسبية وتشمل:
                                    <hr>
                                    <ul class='ar_text'>
                                        <h4>خدماتنا في مجال الزكاة وضريبة الدخل وضريبة القيمة المضافة:</h4>
                                        <li class='ar_text'> إعداد وتقديم الإقرارات الزكوية وضريبة الدخل وضريبة القيمة المضافة واستخراج شهادات الزكاة والضريبة.</li>
                                        <li> إجراء الإعتراضات على الفواتير الواردة من هيئة الزكاة والدخل والإستئنافات على الربط الزكوية والرد على جميع استفسارات هيئة الزكاة والدخل وحضور جلسات اللجان. </li>
                                        <li> مراقبة وحضور عمليات الفحص الميداني بالنيابة عن العميل وإنهاء الوضع الزكوي والضريبي مع الهيئة العامة للزكاة والدخل.</li>
                                    </ul>
                                    <hr>
                                    <ul class='ar_text'>
                                        <h4>خدماتنا في مجال الاستشارات المالية والمحاسبية:</h4>
                                        <li>تسجيل الحسابات بواسطة برامج محاسبية وتدريب موظفي المنشأة عليها.</li>
                                        <li>مراجعة القوائم المالية لتقديمها لهيئة الزكاة والجهات التمويلية (البنوك وغيرها). </li>
                                        <li>تأهيل المنشآت للحصول على التمويل المالي من (البنوك وغيرها).</li>
                                        <li>- تأهيل المنشآت للحصول على تصنيف المقاولين. </li>
                                        <li>إعداد دراسات الجدوى الإقتصادية.</li>
                                        <li>إعداد التقارير المحاسبية الخاصة.</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    We hope you will join us to our list of clients where professionalism and speed of accomplishment are the Standard.
                                    We are happy to contact you and make an appointment to offer our services.
                                    For more information, please find our profile attached, also you can visit our website : <br>
                                    <a href='https://www.mwk-group.com/'> www.mwk-group.com </a>

                                </td>
                                <td class='ar_text'>نسعد ونفتخر بانضمامكم لقائمة عملائنا حيث المهنية وسرعة الإنجاز هي المعيار لدينا.
                                    ونرجوا التواصل معكم وتحديد موعد لعرض خدماتنا ولمزيد من المعلومات الرجاء الاطلاع على الملف المرفق
                                    أو زيارة موقعنا الإلكتروني : <br>
                                    <a href='https://www.mwk-group.com/'>www.mwk-group.com</a>

                                </td>

                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class='form_links'>
                    <div class='text-center'>
                        <a style='background-color: #15648b; border-color:#15648b' href='' class='btn btn-primary'> لطلب عرض سعر </a>
                        <a style='background-color: #102a48; border-color:#102a48' href='' class='btn btn-primary'> لطلب استشارة مجانية </a>
                        <a style='background-color: #25D366; border-color:#25D366' href='' class='btn btn-primary'> تواصل معنا <i class='fa fa-whatsapp'></i> </a>

                    </div>
                    <div class='footer text-center'>
                        <div class='row'>
                            <div class='col-lg-6'>
                            <p>Jeddah – Madina Road-Gulf Plaza Center</p>
                        <p>Mobile: +966 (55) 754 4358</p>
                        <p> Tel : +966 12 6503113 </p>
                            </div>
                            <div class='col-lg-6'>
                            <p>Email : ibrahimhaj@mwk-group.com</p>
                        <p>Website : www.mwk-group.com</p>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src='https://kit.fontawesome.com/74a918f54f.js' crossorigin='anonymous'></script>
</body>

</html>
        ";
        // Set content-type header for sending HTML email 
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // Additional headers 
        $headers .= 'From: ' . $fromName . '<' . $from . '>' . "\r\n";
        $mail_send =  mail($to, $subject, $htmlContent, $headers);
        if ($mail_send) {
    ?>
            <div class="container">
                <div class="alert alert-success">
                    تم ارسال البريد الالكتروني بنجاح
                </div>
            </div>
        <?php
        } else {
        ?>
            <div class="container">
                <div class="alert alert-danger">
                    هناك خطا ما من فضلك حاول في مرة اخري
                </div>
            </div>
    <?php
        }
    }
    ?>

</body>

</html>