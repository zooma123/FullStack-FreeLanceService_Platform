import Input from "../components/Input";
import Btn from "../components/Btn";
import "./reg_log_style.css";
import { Link } from 'react-router-dom';


export default function Register(){
    return(
         <div style={{display:"flex"}}>
                    <div className="reg-log-img"></div>
                    <div className="reg-log-container" style={{ paddingTop:"100px" }}>
                        <h1>logo</h1>
                        <h1>Sign Up</h1>
                        <div className="reg-log-card">
                            <div style={{display: "flex", justifyContent:"space-between"}}>
                                <Input placeholder="First name" style={{width:"45%"}}/>
                                <Input placeholder="Last name" style={{width:"45%"}}/>
                            </div>
                            <Input type="text" placeholder="Email " style={{width:"100%"}}/>
                            <Input type="password" placeholder="Password" style={{width:"100%"}}/>
                        
                            
                            <div style={{textAlign:"left" , width:"100%", fontSize:"18px"}}>
                                <input style={{ border:"1px solid"}} type="checkbox"/>
                                <label>I agree to the freelancer Privacy Policy.</label>
                            </div>                             
                            <Btn name="Sign Up" style={{width:"100%", padding:"20px 25px", fontSize:"20px", fontWeight:"700"}} />
                            <hr style={{width:"100%"}}  />
                            <p>Already have an account?<Link to="/login" className="mr-4"> Log In</Link></p>

                        </div>
                    </div>
                </div>
    )
}