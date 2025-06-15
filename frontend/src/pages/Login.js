import "./Login.css";
import Input from "../components/Input";
import Btn from "../components/Btn";

export default function Login(){
    return(
        <div>
            <h1>Welcome</h1>
            <div style={{height:"200px", border:"2px solid rgba(130, 130, 130, 0.5)"}}>
               <Input type="text" placeholder="Email or Username"/>
               <Input type="password" placeholder="Password"/>
                <a href="www.facebook.com" style={{color:"#ff0084" , textDecoration:"underline"}}>Forget Password</a>
                <Btn name="Log In" size="20px" width="305px" height="60px"/>
            </div>
        </div>
    )
}