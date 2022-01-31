import React, { Fragment } from 'react';
import {
    Navbar,
    Container,
    Nav,
    NavDropdown,
} from 'react-bootstrap';
import { BrowserRouter as Router, Switch, Route, Link } from 'react-router-dom';

import Logo  from '../assets/images/Comp_7.gif';

export const HsocNavbar = () => {
  return(
      <Fragment>

<Navbar bg="dark" variant="dark" expand="lg">
         <Container fluid>
           <Navbar.Brand className='brand' as={Link} to="/">
               <img src={Logo} alt="Logo" />
           </Navbar.Brand>
           <Navbar.Toggle aria-controls="basic-navbar-nav" />
            <Navbar.Collapse id="basic-navbar-nav" className="justify-content-end">
              <Nav>
              <Nav.Link className='navlink' as={Link} to="/">Home</Nav.Link>
              <Nav.Link className='navlink' as={Link} to="/about">About Us</Nav.Link>
              <Nav.Link className='navlink' as={Link} to="/service">Service</Nav.Link>
              <Nav.Link className='navlink' as={Link} to="/contact">Contact Us</Nav.Link>
         </Nav>
       </Navbar.Collapse>
     </Container>
    </Navbar>

      </Fragment>
  );
};
