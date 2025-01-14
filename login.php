<?php
session_start();
include 'db_connect.php'; // รวมไฟล์เชื่อมต่อฐานข้อมูล
$error = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // ตรวจสอบข้อมูลผู้ใช้
    $sql = "SELECT * FROM admins WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        
        // ตรวจสอบว่ามีการเก็บรหัสผ่านในฐานข้อมูล
        if (empty($row['password'])) {
            echo "ไม่พบรหัสผ่านในฐานข้อมูล";
        } else {
            // ตรวจสอบรหัสผ่าน
            if (password_verify($password, $row['password'])) {
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;

                // ส่งไปยังหน้า admin_edit.php พร้อมกับ ID ของข้อมูลที่ต้องการแก้ไข (เลือก ID แรกจากฐานข้อมูล)
                $sql = "SELECT id FROM messages LIMIT 1"; // ดึง ID แรกจากฐานข้อมูล
                $result = $conn->query($sql);
                if ($result && $result->num_rows > 0) {
                    $first_row = $result->fetch_assoc();
                    header("Location: admin_edit.php?id=" . $first_row['id']);
                } else {
                    // ถ้าไม่มีข้อมูลในฐานข้อมูล ให้ส่งกลับไปที่ show_data.php
                    header("Location: show_data.php");
                }
                exit; // หยุดการทำงาน
            } else {
                $error = "รหัสผ่านไม่ถูกต้อง";
            }
        }
    } else {
        $error = "ชื่อผู้ใช้ไม่ถูกต้อง";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
  <div class="container">
<table >
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div style="margin-top: 30%;"class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="img/LOGO.jpg"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
      <form method="post" action="login.php">
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3">Login KUROTA</p>
            <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-linkedin-in"></i>
            </button>
          </div>                  
          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0"> Edit By Hack_IT</p>
          </div>

          <!-- User input -->
          <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" name="username"  id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter Username" />
              <?php if ($error && strpos($error, 'ชื่อผู้ใช้ไม่ถูกต้อง') !== false): ?>
        <div class="text-danger"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>
          </div>

          <!-- Password input -->
          <div data-mdb-input-init class="form-outline mb-3">
            <input type="password" name="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter password" />
              <?php if ($error && strpos($error, 'รหัสผ่านไม่ถูกต้อง') !== false): ?>
        <div class="text-danger"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
         
          <div class="text-center text-lg-start mt-4 pt-2">
            <button  type="submit" name="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
        </form>
      </div>
    </div>
  </div>
</section>
</form>
</table>
</div>
</body>
</html>