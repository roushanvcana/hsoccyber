import React from 'react';
import { Home } from './components/pages/Home';
import { BrowserRouter as Router, Switch, Route, Link, Routes, BrowserRouter } from 'react-router-dom';
import Logo  from './components/assets/images/Comp_7.gif';
import {
  Navbar,
  Container,
  Nav,
} from 'react-bootstrap';
import './App.css';
import { HsocNavbar } from './components/navbar/navbar';
import { Footer } from './components/navbar/footer';
import { Contact } from './components/pages/Contact';

function App() {

  return (
    <BrowserRouter>
    <div className="App">
    <>
     <HsocNavbar />
    </>
   
   <div>
      <Routes>
        <Route path="/" exact element={<Home />} />
        <Route path="/contact" exact element={<Contact />} />
      </Routes>
   </div>

    <>
      <Footer />
    </>

    </div>
    </BrowserRouter>
  );
}

export default App;
