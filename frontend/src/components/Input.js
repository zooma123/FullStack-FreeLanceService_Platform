import './Input.css'
export default function Input(props){
    return(
            <input className='custom-input'
                   type={props.type} 
                   placeholder={props.placeholder}
                   style={props.style}/>
    )
}