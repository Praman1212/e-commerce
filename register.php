<!-- <?php 
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'shopee';
    
    // catabase connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $rpwd = $_POST['re_password'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
    
    if ($conn->connect_error) 
    {
        die("connetion failed:" . $conn->connect_error);
    }else
    {
       $stmt = $conn->prepare("insert into users(firstName, lastName, email, password, address, phone) value(?, ?, ?, ?, ?, ?)");

       $stmt->bind_param("ssssss",$fname, $lname, $email, $hashed_password, $address, $phone);
       if($pwd == $rpwd)
       {
       $stmt->execute();
                echo"
					<script>
					alert('Your data is store in Database, Now login for Shopping');
					window.location.href = 'login.php';
					</script>
				";	
        }
        else{
            echo "enter same password";
        }
            
       $stmt->close();
       $conn->close();
    }
?> -->