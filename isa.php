<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    
    .container {
      width: 300px;
      margin: 40px auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    form {
      margin-bottom: 20px;
    }
    
    label {
      display: block;
      margin-bottom: 10px;
    }
    
    input[type="text"], input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
    }
    
    button[type="submit"] {
      background-color: #4CAF50;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    
    button[type="submit"]:hover {
      background-color: #3e8e41;
    }
    
    #create-account-form, #welcome-message {
      display: none;
    }
    
    #welcome-message {
      color: #00698f;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Login Form</h1>
    <form id="login-form">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username"><br><br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password"><br><br>
      <button type="submit">Login</button>
    </form>
    <p>Belum memiliki akun? <a href="#" id="create-account">Buat Akun Baru</a></p>
    
    <div id="create-account-form" style="display: none;">
      <h2>Buat Akun Baru</h2>
      <form>
        <label for="new-username">Username:</label>
        <input type="text" id="new-username" name="new-username"><br><br>
        <label for="new-password">Password:</label>
        <input type="password" id="new-password" name="new-password"><br><br>
        <button type="submit">Buat Akun</button>
      </form>
    </div>
    
    <div id="welcome-message" style="display: none;">
      <h2>Selamat Datang, <span id="username-display"></span>!</h2>
    </div>
    
    <script>
      let users = [];
      
      const createAccountLink = document.getElementById('create-account');
      const loginForm = document.getElementById('login-form');
      const createAccountForm = document.getElementById('create-account-form');
      const welcomeMessage = document.getElementById('welcome-message');
      const usernameDisplay = document.getElementById('username-display');
      
      createAccountLink.addEventListener('click', () => {
        createAccountForm.style.display = 'block';
      });
      
      loginForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;
        
        for (let i = 0; i < users.length; i++) {
          if (users[i].username === username && users[i].password === password) {
            welcomeMessage.style.display = 'block';
            usernameDisplay.textContent = username;
            return;
          }
        }
        
        alert('Username atau password salah!');
      });
      
      createAccountForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const newUsername = document.getElementById('new-username').value;
        const newPassword = document.getElementById('new-password').value;
        
        users.push({ username: newUsername, password: newPassword });
        alert('Akun berhasil dibuat!');
        createAccountForm.style.display = 'none';
      });
    </script>
  </div>
</body>
</html>