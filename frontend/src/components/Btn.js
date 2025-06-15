import './Btn.css'
export default function Btn(props){
    return(
        <div>
            <button style={{fontSize:props.size,width:props.width, height:props.height}}>{props.name}</button>
        </div>
    )
}