import Btn from '../components/Btn'
import './Nav.css'

export default function Nav(){
    return(
        <div>
            <nav>
                <div className="left-side"> 
                    <ul>
                        <li className="logo">Freelance</li>
                        <li>Hire Freelance</li>
                        <li>Find work</li>
                        <li>Solution</li>
                    </ul>
                </div>
                <div className="right-side"> 
                    <ul>
                        <li><a href='#'>Log In</a></li>
                        <li><a href='#'>Sign Up</a></li>
                        <li><Btn size="18px" name="Post a Project"/></li>
                    </ul>
                </div>
            </nav>
        </div>
    )
}