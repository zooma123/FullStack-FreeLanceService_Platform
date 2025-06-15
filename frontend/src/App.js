import logo from './logo.svg';
import Nav from './layouts/Nav';
import Login from './pages/Login';
import './App.css';

function App() {
  return (
    <div className="App">
     <Nav/>
     <div style={{marginBottom:"300px"}}></div>
     <Login/>
    </div>
  );
}

export default App;
