import React, { Fragment } from 'react';
import { BrowserRouter as Router, Switch, Route, Link, Routes, BrowserRouter } from 'react-router-dom';
import {
    Container,
    Row,
    Col,
    Form,
    Button
} from 'react-bootstrap';

import Logo  from '../assets/images/Comp_7.gif';

export const Footer = () => {
  
    const currTime = new Date().getFullYear();
   
  return(
      <Fragment>
          <section className='footer-section'>
              <Container>
                  <Row className='row_1'>
                      <Col md={3} lg={3} xs={12} sm={12}>
                       <div className="footer-logo">
                         <Link to="/"><img src={Logo} alt="logo" /></Link>  
                           <p>HSOC Cyber, formerly Professional Certifications and Consulting Services, 
                      is a service-disabled, veteran-owned small business (SDVOSB).</p>
                       </div>
                     
                      </Col>

                      <Col md={3} lg={3} xs={12} sm={12}>
                       <div className="footer-links">
                           <h4>Quick Links</h4>
                           <div className="links">
                               <ul>
                               <li> 
                               <Link className='link' to="/">Home</Link>
                              </li>

                               <li> 
                               <Link className='link' to="/about">About Us</Link>
                              </li>

                               <li>
                               <Link className='link' to="/service">
                               Service
                               </Link>
                               </li>

                               <li>
                               <Link className='link' to="/contact">
                               Contact
                               </Link>
                              </li>
                               </ul>
                           </div>
                       </div>
                      </Col>

                      <Col md={3} lg={3} xs={12} sm={12}>
                      <div className="support-links">
                           <h4>Support</h4>
                           <div className="links">
                               <ul>
                               <li> 
                               <Link className='link' to="/">Help Center</Link>
                              </li>

                               <li> 
                               <Link className='link' to="/about">FAQ</Link>
                              </li>

                               <li>
                               <Link className='link' to="/service">
                               Ticket
                               </Link>
                               </li>
                              

                               <li>
                               <Link className='link' to="/service">
                               Forum
                               </Link>
                               </li>

                               <li>
                               <Link className='link' to="/contact">
                               Contact Us
                               </Link>
                              </li>
                               </ul>
                           </div>
                       </div>
                      </Col>

                      <Col md={3} lg={3} xs={12} sm={12}>
                       <div className="head">
                           <h4>Newsletter</h4>
                           <p>Sign up our newsletter for update information, insight and promotion.</p>
                           <div className="form">
                           <Form>
                         <Form.Group className="mb-3" controlId="formBasicEmail">
                         <Form.Control type="email" placeholder="Enter your email address" />
                      </Form.Group>

                    <Button className='head-button' variant="primary" type="submit">
                   Sign Up
                  </Button>
                  </Form>
                           </div>
                       </div>
                      </Col>

                  </Row>

                  <Row className='row_2'>
                      <Col md={4} lg={4} sm={12} xs={12} style={{
                          padding: 0,
                      }}>
                        <div className="new-list">
                         <ul>
                             <li>
                                 <Link className='new-link' to="">Privacy Policy</Link>
                             </li>
                             <li>
                                 <Link className='new-link' to="">Cookie Policy</Link>
                             </li>
                             <li>
                                 <Link className='new-link' to="">Terms of Use</Link>
                             </li>
                             <li>
                                 <Link className='new-link' to="">Site Map</Link>
                             </li>
                         </ul>
                        </div>
                      </Col>

                      <Col md={4} lg={4} sm={12} xs={12}>
                          <div className="social-links">
                              <ul>
                                  <li>
                                  <i className="fab fa-facebook"></i>
                                  </li>

                                  <li>
                                  <i className="fab fa-linkedin-in"></i>
                                  </li>

                                  <li>
                                  <i className="fab fa-twitter"></i>
                                  </li>
                              </ul>
                          </div>
                      </Col>

                      <Col md={4} lg={4} sm={12} xs={12} style={{
                          padding: 0,
                      }}>
                       <div className="copy">
                           <p>Copyright © {currTime}, All rights reserved. Design by : Vcanaglobal.</p>
                       </div>
                      </Col>
                  </Row>
              </Container>
          </section>
      </Fragment>
  );
};
