import React from "react";
import ReactDOM from "react-dom/client";

export default function HelloReact(){
    //Function Component
    function Header(props){
        return (<h1>Table for admin {props.author}</h1>);
    }

    function Deconstructur({name}){
        return (<h1>Welcome to {name ? name : 'WPU' }</h1>)
    }


    const students = ['Andhika', 'Doddy', 'Eris'];
    const [likes, setLikes] = React.useState(0);


    function handleClick() {
    setLikes(likes + 1);
    }

    return (
        <div>
        <Header author="Myself"/>
        <Deconstructur name="Jov"/>
        <ul>
            {students.map((student) => (
            <li key={student}>{student}</li>
            ))}
        </ul>
        <button onClick={handleClick}>like({likes})</button>
        </div>
    )
}

const container = document.getElementById('root');
const root = ReactDOM.createRoot(container);
root.render(<HelloReact></HelloReact>)