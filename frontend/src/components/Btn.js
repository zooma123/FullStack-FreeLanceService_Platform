import './Btn.css'
export default function Btn(props){
    return(
        
            <button 
                className='custom-button' 
                style={props.style}>
               {props.name}
            </button>
        
    )
}