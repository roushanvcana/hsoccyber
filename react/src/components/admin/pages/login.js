import React, { Fragment } from 'react';
import { Container, Row, Col } from 'react-bootstrap';
import { Link } from 'react-router-dom';
import LoginImg from '../../assets/images/about-img.jpg';

export const Login = () => {
  return(
      <Fragment>
                       {/* login-section */}
          <section className='login-section'>
          <Container>
              <Row>
                  <Col md={12} lg={12} xs={12} sm={12}>
                      <div className="bread-crumb">     
                    <h2>LOGIN</h2>
                    </div>
               
                  </Col>
        
              </Row>

          </Container>

          </section>

          <section className='login-form'>
               <Container>
                   <Row>
                   <Col md={6} lg={6} sm={12} xs={12}>
                      <div className="login-img">
                         <img src={LoginImg} alt="login" />
                      </div>
                  </Col>

                  <Col md={6} lg={6} sm={12} xs={12}>
                      <div className="login-text">
                          <h1>HSOC Cyber</h1>
                           <div className="form">
                           <form>

                                  <p>Sign in to start your session</p>

                <div className="form-group">
                 <div className="icon">
                 <i className="fas fa-envelope-open"></i>
                 </div> <input type="email" className="form-control" placeholder="Enter email" />
                </div>
                <br />

                <div className="form-group">
                <div className="icon">
                <i className="fas fa-key"></i>
                </div>
              <input type="password" className="form-control" placeholder="Enter password" />
            </div>
            <br />

              <div className="form-group">
                <div className="custom-control custom-checkbox">
             <input type="checkbox" className="custom-control-input" id="customCheck1" />
            <label className="custom-control-label" htmlFor="customCheck1">Remember me</label>
             </div>
            </div>

            <br />

                 <button type="submit" className="btn btn-dark btn-lg btn-block">Sign in</button>
                 <br />
                 <br />
                  <p className="forgot-password text-right">
                   Forgot <a href="#">password?</a>
                   </p>
                    </form>
                           </div>
                      </div>
                  </Col>
                   </Row>
               </Container>
          </section>

            {/* login-section */}
      </Fragment>
  );
};
