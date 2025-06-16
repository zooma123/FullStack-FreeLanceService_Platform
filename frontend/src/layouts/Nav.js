import Btn from '../components/Btn'
import './Nav.css'
import { Link } from 'react-router-dom';

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
                        <li><Link to="/login" className="mr-4"> Log In</Link></li>
                        <li><Link to="/register" className="mr-4">Register</Link></li>
                        <li><Btn size="18px" name="Post a Project"/></li>
                    </ul>
                </div>
            </nav>
        </div>
    )
}