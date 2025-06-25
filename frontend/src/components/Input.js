import './Input.css'
import { useState } from 'react'
export default function Input(props){
    console.log("render")
    const [inputValue, setInputValue] = useState("");
    function changeInputValue(e){
        setInputValue(e.target.value);
    }
    return(
            <input className='custom-input'
                   type={props.type} 
                   placeholder={props.placeholder}
                   style={props.style}
                   value={inputValue}
                   onChange={changeInputValue}
                   />
                  
    )
}