<?php
session_start();

// تحقق من وجود بيانات POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // تعيين البريد الإلكتروني وكلمة المرور من النموذج
    $email = $_POST['email'];
    $password = $_POST['motdepass'];

    // هنا يجب أن تضيف كود التحقق من البريد الإلكتروني وكلمة المرور من قاعدة البيانات
    // للتبسيط، سنستخدم بيانات ثابتة
    $email_correct = "simo@gmail.com";
    $password_correct = "123456789";

    // التحقق من صحة البيانات
    if ($email == $email_correct && $password == $password_correct) {
        // إذا كانت البيانات صحيحة، أعد توجيه المستخدم إلى صفحة الاستقبال
        $_SESSION['loggedin'] = true;
        header("Location: acceuille.php");
        exit;
    } else {
        // إذا كانت البيانات غير صحيحة، أعد توجيه المستخدم إلى الصفحة الحالية مع رسالة خطأ
        header("Location: cnx.php?error=invalid");
        exit;
    }
}

// إذا كان هناك خطأ، أظهره
if (isset($_GET['error'])) {
    echo '<p style="color:red;">البريد الإلكتروني أو كلمة المرور غير صحيحة.</p>';
}
?>