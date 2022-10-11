import Button from "./Button";
import Input from "./Input";

const first = "Username";
const second = "Password";

function Login() {
  return (
    <div className="login-page">
      <div className="login-container">
        <div className="login-header">Login</div>
        <div className="login-content">
          <p className="login-parag">Login by entering your username and password</p>
          <Input input_options={first} />
          <Input input_options={second} />
          <div className="login-button"><Button options={"Login"} /></div>
        </div>
      </div>
    </div>
  );
}

export default Login;
