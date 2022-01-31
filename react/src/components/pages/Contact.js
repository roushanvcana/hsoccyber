import React, { Fragment } from 'react';
import { Container,
     Row, Col,
     Button,
      Form } from 'react-bootstrap';
import { Link } from 'react-router-dom';
import Map from '../assets/images/google-maps.png';

export const Contact = () => {
  return(
      <Fragment>

         {/* first-section */}
          <section className='contact-section'>
          <Container>
              <Row>
                  <Col md={12} lg={12} xs={12} sm={12}>
                      <div className="bread-crumb">     
                    <h2>CONTACT US</h2>
                    </div>
                <div class="crumb-list">
                   <ul class="list">
                    <li class="breadcrumb-item">
                      <Link to="/"> Home</Link>  
                    </li>
                    <li class="breadcrumb-item active">
                        Contact Us
                    </li>
                   </ul>
                </div>
                  </Col>
              </Row>
          </Container>

          </section>
            {/* first-section */}

              {/* second-section */}
              
              <section className='contact-grid'>
              <Container>
                  <Row>
                      <Col md={3} lg={3} xs={12} sm={12}>
                       <div className="grid-1">
                           <img src={Map} alt="map" />
                           <h6>New York</h6>
                           <p>88 Flower Avenue. Kingdom St. New York</p>
                           <a href="mailto:hello@seku">Email: info@seku.com</a>
                           <br />
                           <a href="tel:+822456974">+822456974</a>
                       </div>
                      </Col>

                      <Col md={3} lg={3} xs={12} sm={12}>
                         <div className="map">
                         <div class="mapouter">
                         <div class="gmap_canvas">
                    <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                
                    </iframe>

                    </div></div>
                         </div>
                      </Col>

                      <Col md={3} lg={3} xs={12} sm={12}>
                      <div className="grid-1">
                           <img src={Map} alt="map" />
                           <h6>California</h6>
                           <p>658 Lane Drive st Riverside. California</p>
                           <a href="mailto:hello@seku">Email: hello@seku.com</a>
                           <br />
                           <a href="tel:+892-569-756">+892-569-756</a>
                       </div>
                      </Col>

                      <Col md={3} lg={3} xs={12} sm={12}>
                          <div className="map">
                          <div class="mapouter">
                        <div class="gmap_canvas">
                    <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=California&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                    
                    </iframe>
                   </div></div>
                         </div>
                      </Col>
                  </Row>
              </Container>

              </section>
               
               {/* second-section */}

                {/* third-section */}
                 
             <section className='form-section'>

             <Container>
                 <Row>
                     <Col md={12} lg={12} sm={12} xs={12}>
                         <div className="head">
                       <h6> Contact Us</h6> 
                     <h2>Drop Us A Message For Any Query</h2>  
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                 Eaque quibusdam deleniti porro praesentium. 
                   Aliquam minus quisquam velit in at nam.</p> 
                         </div>
                     </Col>
                     </Row>


                    <Row className="form">
                       
                        <Col md={6} lg={6}>
                         <div className="contact-form">
                         <Form>
                         <Form.Group className="mb-3" controlId="formBasicName">
                         <Form.Control type="text" placeholder="Enter Your Name" />
                      </Form.Group>
                      </Form>
                         </div>
                         </Col>
                          
                         <Col md={6} lg={6}>
                         <Form>
                         <div>
                         <Form.Group className="mb-3" controlId="formBasicEmail">
                         <Form.Control type="email" placeholder="Enter Your Email Address" />
                      </Form.Group>
                      
                         </div>
                         </Form>
                         </Col>

                         <Col md={6} lg={6}>
                         <Form>
                         <div>
                         <Form.Group className="mb-3" controlId="formBasicPhone">
                         <Form.Control type="text" placeholder="Enter Your Phone" />
                      </Form.Group>
                      
                         </div>
                         </Form>
                         </Col>

                         <Col md={6} lg={6}>
                         <Form>
                         <div>
                         <Form.Group className="mb-3" controlId="formBasictext">
                         <Form.Control type="text" placeholder="Enter Your Subject" />
                      </Form.Group>
                      
                         </div>
                         </Form>
                         </Col>

                         <Col md={12} lg={12}>
                         <Form>
                         <div>
                         <Form.Control as="textarea" rows={4} placeholder='Your Message' />
                                   
                         </div>
                         </Form>
                         </Col>
                          
                          <Col md={12} lg={12}>
                        
                    <Button className='head-button' variant="primary" type="submit">
                   Sign Up
                  </Button>
                          </Col>
                                                      
                   
                 </Row>
             </Container>

             </section>

                {/* third-section */}

      </Fragment>
  );
};
