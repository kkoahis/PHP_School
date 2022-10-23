<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/styleForm1.css" />
    <script language="JavaScript">
      function clearFields() {
        document.form2.userName.value = "";
        document.form2.passWord.value = "";
      }

      function checkLogin() {
        var keyUser = document.form2.userName.value;
        var keyPass = document.form2.passWord.value;

        if (keyUser === "" && keyPass === "") {
          window.alert("Xin hãy nhập Username và Password");
        } else if (keyPass === "") {
          window.alert("Xin hãy nhập Password");
        } else if (keyUser === "") {
          window.alert("Xin hãy nhập Username");
        } else {
          window.alert("Đăng nhập thành công!");
        }
      }
    </script>
    <title>Form 1</title>
  </head>

  <body bgcolor="BBFFCC">
    <form action="xulidangnhap.jsp" name="form2" method="post/get">
      <div class="container">
        <table border="0" class="table-form1">
          <caption>
            LOGIN
          </caption>
          <tr>
            <td>Username</td>
            <td>
              <input
                type="text"
                name="userName"
                value=""
                class="input-Username"
              />
            </td>
          </tr>
          <tr>
            <td>Password</td>
            <td>
              <input
                type="password"
                name="passWord"
                value=""
                class="input-Password"
              />
            </td>
          </tr>
          <tr>
            <td></td>
            <td>
              <div class="button-form1">
                <input
                  type="button"
                  name="LoginButton"
                  value="OK"
                  onclick="checkLogin()"
                  class="login-btn"
                />
                <input
                  type="button"
                  name="ResetButton"
                  value="Reset"
                  onclick="clearFields()"
                  class="reset-btn"
                />
              </div>
            </td>
          </tr>
        </table>
      </div>
    </form>
  </body>
</html>
