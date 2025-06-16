import Input from "../components/Input";
import Btn from "../components/Btn";
import "./reg_log_style.css";
import {Link} from 'react-router-dom';

export default function Login(){
    return(
        <div style={{display:"flex"}}>
            <div className="reg-log-img"></div>
            <div className="reg-log-container" style={{ paddingTop:"100px" }}>
                <h1>logo</h1>
                <h1>Welcome back</h1>
                <div className="reg-log-card">

                    <Input type="text" placeholder="Email or Username" style={{width:"100%"}}/>
                    <Input type="password" placeholder="Password" style={{width:"100%"}}/>
                
                    <div style={{display:"flex",
                            justifyContent:"space-between",
                            width:"100%",
                            fontSize:"18px"
                            }}>
                        <div>
                        <input style={{ border:"1px solid"}} type="checkbox"/>
                        <label>Remember me</label>
                        </div> 
                        <a href="www.facebook.com" style={{color:"rgb(49 206 126)" , textDecoration:"underline"}}>Forget Password</a> 
                    </div>
                
                    <Btn name="Log In" style={{width:"100%", padding:"20px 25px", fontSize:"20px", fontWeight:"700"}} />
                    <hr style={{width:"100%"}}/>
                    <p>Don't have an account?<Link to="/register" className="mr-4" style={{color:"rgb(0, 255, 157)"}}> Sign Up</Link></p>
                </div>
            </div>
        </div>
    )
}