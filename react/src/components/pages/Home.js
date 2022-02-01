import React, { Fragment, useEffect, useState} from 'react';
import OwlCarousel from 'react-owl-carousel';  
 import 'owl.carousel/dist/assets/owl.carousel.css';  
 import 'owl.carousel/dist/assets/owl.theme.default.css';  
import { Col, 
    Container, 
    Row,
    Button,
    Card,
    Modal
 } from 'react-bootstrap';

 import LogoImage from '../assets/images/Comp_7.gif';
 import Image1 from '../assets/images/abt1.jpg';
 import Image2 from '../assets/images/abt2.jpg';
 import Image3 from '../assets/images/abt3.jpg';
 import Image4 from '../assets/images/abt4.jpg';
 
 import Logo1 from '../assets/images/logo_1.png';
 import Logo2 from '../assets/images/logo_2.png';
 import Logo3 from '../assets/images/logo_3.png';
 import Logo4 from '../assets/images/logo_4.png';
 import Logo5 from '../assets/images/logo_5.png';
 import Logo6 from '../assets/images/logo_6.png';
 import Logo7 from '../assets/images/logo_7.png';
 import Logo8 from '../assets/images/logo_8.png';
 import Logo9 from '../assets/images/logo_9.png';
 import Logo10 from '../assets/images/logo_10.png';
 import Logo11 from '../assets/images/logo_11.png';
 import Logo12 from '../assets/images/logo_12.png';

 import Pro_1 from '../assets/images/live1.jpg';
 import Pro_2 from '../assets/images/live2.jpg';

 import Grid_1 from '../assets/images/nisttt.png';
 import Grid_2 from '../assets/images/nistt.png';
 import Grid_3 from '../assets/images/nist.png';

 import SideImg1 from '../assets/images/3-protection-1.png';
 import SideImg2 from '../assets/images/10-server-1.png';
 import SideImg3 from '../assets/images/2-database-1.png';
 import SideImg4 from '../assets/images/16-antivirus-1.png';
 import SideImg5 from '../assets/images/25-shopping-online-1.png';
 import SideImg6 from '../assets/images/18-laptop-1.png';

 import Icon_1 from '../assets/images/icon1.jpg';
 import Icon_2 from '../assets/images/icon2.jpg';
 import Icon_3 from '../assets/images/icon3.jpg';
 import Icon_4 from '../assets/images/icon4.jpg';

 import Client_1 from '../assets/images/test1.png';
 import Client_2 from '../assets/images/test2.png';
 import Client_3 from '../assets/images/test3.png';

 import Blog_1 from '../assets/images/cropped-view.jpg';
 import Blog_2 from '../assets/images/woman-working.jpg';
 import Blog_3 from '../assets/images/male-teenage.jpg';
 import Blog_4 from '../assets/images/computer.jpg';
  import $ from 'jquery';

export const Home = () => {

  const [show, setShow] = useState(false);

  useEffect(()=>{
    setTimeout(()=>{
      setShow(true)
    }, 1000)
  }, [])

  const handleClose = () => setShow(false);
  const handleShow = () => setShow(true);

  const options = {
    margin: 30,
    responsiveClass: true,
    //nav: true,
    autoplay: true,
    loop: true,
    //navText: ["Prev", "Next"],
    smartSpeed: 1000,
    responsive: {
        0: {
            items: 1,
        },
        400: {
            items: 1,
        },
        600: {
            items: 2,
        },
        700: {
            items: 2,
        },
        1000: {
            items: 4,
        }
    },
  };

  const options_2 = {
     margin: 30,
    responsiveClass: true,
    //nav: true,
    autoplay: true,
    loop: true,
    //navText: ["Prev", "Next"],
    smartSpeed: 2000,
    responsive: {
        0: {
            items: 1,
        },
        400: {
            items: 1,
        },
        600: {
            items: 2,
        },
        700: {
            items: 2,
        },
        1000: {
            items: 4,
        }
    },
  };


  const client_prop = {
    // margin: 30,
    responsiveClass: true,
    //nav: true,
    autoplay: true,
    loop: true,
    //navText: ["Prev", "Next"],
    smartSpeed: 1000,
    responsive: {
        0: {
            items: 1,
        },
        400: {
            items: 1,
        },
        600: {
            items: 1,
        },
        700: {
            items: 1,
        },
        1000: {
            items: 1,
        }
    },
  };

  return(
      <Fragment>
        
        {/* first-section */}
          <section className='home-section'>
            <Container>
                <Row>
                    <Col xs={12} md={12}>
                        <div className="home-header">
                            <h4>Welcome to Home Security Operations Center
                            <br /> 
                            (HSOC) Cyber!</h4>
                            <h5>Securing Your Home Beyond the Physical</h5>
                            <Button className='button' variant="primary">Discover More</Button>
                        </div>
                    </Col>
                </Row>
            </Container>
          </section>
            {/* first-section */}

              {/* second-section */}
               
               <section className='card-section'>
               <Container style={{ 'max-width': '1250px',}}>
                   <Row>
                       <Col xs={12} md={6} lg={6} sm={12}>
                       <div className="card1">
                       <Card className='card-1'>
                  <Card.Img className='card-img' variant="top" src={LogoImage} />
                      <Card.Body className='cardbody'>
                     <Card.Title className='card-title'>Securing Your Business</Card.Title>
                  <Card.Text className='card-text'>
                 <p> Whether you have a home-based business, a small- or medium-sized business, 
                  HSOC Cyber professional interns will consult with you to help you achieve your business 
                  objectives and provide the protection and defense you deserve. 
                  Contact us to learn more. We want to help you; therefore, we provide services at an extremely affordable rate</p>
                   </Card.Text>
               <Button className='card-button' variant="primary">Discover More</Button>
                   </Card.Body>
                     </Card>
                       </div>
                      
                       </Col>

                       <Col xs={12} md={6} lg={6} sm={12}>
                       <div className="card2">
                       <Card className='card-2'>
                  <Card.Img className='card-img' variant="top" src={LogoImage} />
                       <Card.Body className='cardbody'>
                      <Card.Title className='card-title'>Securing Your Home</Card.Title>
                     <Card.Text className='card-text'>
                    <p>Gain real cybersecurity experience by building your own HSOC. 
                     Apply the same tools and techniques that protect and defend organizations in your home, 
                     and then take those new skills with you to your professional organization. 
                     Learn more about the HSOC Cyber Internship Program.</p> 
                    </Card.Text>
                    {/* <br /> */}
                      <Button className='card-button' variant="primary">Discover More</Button>
                      </Card.Body>
                      </Card>
                       </div>
                       </Col>
                   </Row>
               </Container>

               </section>
     
                {/* second-section */}

                  {/* third-section */}

                  <section className='image-section'>
                  <Container>
                      <Row>
                      <Col xs={12} md={7} lg={7} sm={12}>

                       <div className="first-card">
                       <Col xs={12} md={4} lg={4} sm={12}>
                         <div className="first-img">
                             <img src={Image1} alt="pic-1" />
                         </div>
                       </Col>

                       <Col xs={12} md={4} lg={4} sm={12}>
                       <div className="second-img">
                             <img src={Image2} alt="pic-2" />
                         </div>
                       </Col>

                       <Col xs={12} md={4} lg={4} sm={12}>
                       <div className="third-img">
                             <img src={Image3} alt="pic-3" />
                         </div>
                       </Col>
                       </div>

                       <div className="second-card">
                       <Col xs={12} md={12} lg={12} sm={12}>
                       <div className="first-img">
                             <img src={Image4} alt="pic-4" />
                         </div>
                       </Col>
                       </div>
                      </Col>
                      
                      <Col xs={12} md={5} lg={5} sm={12}>
                      <div className="card-heading">
                      <h4>Welcome to HOSC Security</h4>
                      <p>At HSOC Cyber, security starts at home! Our voluntary, non-paid internship program is designed to help you gain quality,
                       resume-building cybersecurity experience quickly. We empower you to change your life with a proven, real-time, live, hands-on training system that contributes to ethics and national security within the cybersecurity profession. 
                      Contact us to learn more about the HSOC Cyber Internship Program. Join us on Patreon today!</p>
                      </div>
                    
                      </Col>

                      </Row>
                  </Container>

                  </section>

                    {/* third-section */}

                     {/* fourth-section */}

                     <section className='slider-section'>
                         {/* <div className="bg-overlay overlay">   
                         </div> */}
                         <Container>
                             <Row>
                                 <Col xs={12} lg={12} md={12} sm={12}>
                                 <div className="heading">
                                 <h1>Trusted by International Brand</h1>
                                 <p>Erat morbi si adipiscing laoreet praesent. Adipiscing duis laoreet orci aliquet ex dis auctor platea. 
                                 Penatibus <br /> enim volutpat lectus curae ac porta etiam erat quam justo.</p>
                                 </div>
                                 </Col>
                                 </Row>
                                 </Container>

                               <Container style={{
                                 width: 829,
                               }}>
                               <Row>
                               <Col xs={12} lg={12} md={12} sm={12}>
                                 <div className="slider">
                                   <OwlCarousel className="slider-items owl-carousel" {...options}>  
                        <div className='slider-image'>
                      <img  className="img" src={Logo1} alt="Logo-1"/>
                      </div>  

                           <div className='slider-image'>
                           <img  className="img" src={Logo2} alt="Logo-2" />
                           </div>  

                            <div className='slider-image'>
                            <img  className="img" src= {Logo3} alt="Logo-3"/>
                            </div>  

                         <div className='slider-image'>
                         <img  className="img" src= {Logo4} alt="Logo-4" />
                         </div>  

                         <div className='slider-image'>
                         <img className="img" src= {Logo5} alt="Logo-5" />
                         </div>  

                       <div className='slider-image'>
                       <img className="img" src= {Logo6} alt="Logo-6" />
                       </div>  

                      </OwlCarousel> 
                                 </div>
                                   
                                 </Col>
                             </Row>
                         </Container>

                         <Container style={{
                                 width: 829,
                               }}>
                               <Row>
                               <Col xs={12} lg={12} md={12} sm={12}>
                                 <div className="slider">
                                   <OwlCarousel className="slider-items owl-carousel" {...options_2}>  
                        <div className='slider-image'>
                      <img  className="img" src={Logo7} alt="Logo-7"/>
                      </div>  

                           <div className='slider-image'>
                           <img  className="img" src={Logo8} alt="Logo-8" />
                           </div>  

                            <div className='slider-image'>
                            <img  className="img" src= {Logo9} alt="Logo-9"/>
                            </div>  

                         <div className='slider-image'>
                         <img  className="img" src= {Logo10} alt="Logo-10" />
                         </div>  

                         <div className='slider-image'>
                         <img className="img" src= {Logo11} alt="Logo-11" />
                         </div>  

                       <div className='slider-image'>
                       <img className="img" src= {Logo12} alt="Logo-12" />
                       </div>  

                      </OwlCarousel> 
                                 </div>
                                   
                                 </Col>
                             </Row>
                         </Container>
                     </section>

                      {/* fourth-section */}

                      {/* fivth-section */}

                      <section className='pro-section'>
                       <Container>
                         <Row>
                           <Col xs={12} lg={6} md={6} sm={12}>
                             <div className="pro-heading">
                              <h6>Who we are</h6>
                              <h2>We know how to <br /> 
                              protect you.</h2>
                              <div className="pro-img">
                                <ul className='pro-list'>
                                  <li>
                                    <img src={Pro_1} alt="pic-1" />
                                  </li>

                                  <li>
                                    <img src={Pro_2} alt="pic-1" />
                                  </li>
                                </ul>

                                <p>
                                HSOC Cyber, formerly Professional Certifications and Consulting Services, 
                                is a service-disabled, veteran-owned small business (SDVOSB). 
                                Since 2016, HSOC Cyber has provided certification and real skill training 
                                in information technology, cybersecurity, and project management. 
                                As a result of COVID-19, HSOC Cyber altered its business model from the live 
                                classroom training to live online training in the form of an internship, 
                                and all from the comfort of your home. At HSOC Cyber, we work on real projects 
                                and tasks that equate to real experience versus attending an online class to complete 
                                assignments.
                                </p>
                                <Button className='pro-button' variant="primary">Read More</Button>
                              </div>
                             </div>
                           </Col>
                         
                           <Col xs={12} lg={6} md={6} sm={12} className='hide-sec'>
                           </Col>

                         </Row>
                       </Container>

                       <Container className='grid-section'>
                         <Row>
                           <Col xs={12} md={4} lg={4} sm={12}>
                           <div className="grid-img">
                             <img src={Grid_1} alt="grid-1" />
                             <h3>Information Security Learning <br /> 
                             Continuum</h3>
                             <ul className='grid-list'>
                               <li>
                               Developing a Workforce for Security: A NICE Framework Workshop.
                               </li>

                               <li>
                               Cyber-security-workforce-framework.
                               </li>

                              
                             </ul>
                           </div>
                           
                           </Col>

                           <Col xs={12} md={4} lg={4} sm={12}>
                           <div className="grid-img">
                             <img src={Grid_2} alt="grid-2" />
                             <h3>Infosec Wheel</h3>
                             <ul className='grid-list'>
                               <li>
                               Introducing the InfoSec colour wheel- blending developers with red and blue security teams.
                               </li>                  
                              
                             </ul>
                           </div>
                           
                           </Col>

                           <Col xs={12} md={4} lg={4} sm={12}>
                           <div className="grid-img">
                             <img src={Grid_3} alt="grid-3" />
                             <h3>Risk Management Framework</h3>
                             <ul className='grid-list'>
                               <li>
                               NIST Risk Management Framework RMF.
                               </li>

                             </ul>
                           </div>
                           
                           </Col>
                         </Row>
                       </Container>

                      </section>

                       {/* fivth-section */}

                       {/* sixth-section */}

                       <section className='service-section'>
                         <Container>
                           <Row>
                             <Col xs={12} lg={12} md={12} sm={12}>
                               <div className="service-head">
                                 <h6>WHAT WE DO</h6>
                                 <h2>Our Professional Services</h2>
                                 <p>
                                 The HSOC Cyber Roadmap indicates what you will do as you become more proficient and 
                                 independent in your cybersecurity career journey. 
                                 You will also build, learn, and practice real skills that last, create value, 
                                 and produce observable change that make it easy for you to be noticed, known, and heard. 
                                 Real skill employers desire are:
                                 </p>
                               </div>
                             </Col>

                             <Col xs={12} lg={4} md={4} sm={12}>
                             <div className="flex-text">
                             <div className="side-img">  
                               <img src={SideImg1} alt="side-img" />
                             </div>

                             <div className="side-text">
                             <h3>Self-Control</h3>
                             <p>
                             Completing tasks and projects without letting distractors 
                             or bad habits get in the way 
                             (e.g., adaptability, self-awareness, self-confidence, stress management).
                             </p>
                             
                             </div>
                             </div>
                            
                             
                             </Col>

                             <Col xs={12} lg={4} md={4} sm={12}>
                             <div className="flex-text">
                             <div className="side-img">  
                             <img src={SideImg2} alt="side-img" />
                             </div>

                             <div className="side-text">
                             <h3>Productivity </h3>
                             <p>
                             Using your non-vocational skills and commitment to 
                             complete tasks (e.g., attention to detail, crisis management, 
                             effective decision making, troubleshooting). 
                             </p>
                             </div>
                             </div>
                             </Col>

                             <Col xs={12} lg={4} md={4} sm={12}>
                             <div className="flex-text">
                             <div className="side-img">  
                             <img src={SideImg3} alt="side-img" />
                             </div>

                             <div className="side-text">
                             <h3>Wisdom</h3>
                             <p>
                             Real-world skills applied based off experience, knowledge, and good judgment 
                             (e.g., conflict resolution instincts, 
                             creativity in the face of challenges, critical thinking, supervising with confidence).
                             </p>
                             </div>
                             </div>
                             </Col>

                             <Col xs={12} lg={4} md={4} sm={12}>
                             <div className="flex-text">
                             <div className="side-img">  
                             <img src={SideImg4} alt="side-img" />
                             </div>

                             <div className="side-text">
                             <h3>Perception</h3>
                             <p>
                             Experience and practice that provide insight to point things out 
                             with courage and without influence from others 
                             (e.g., designing, mapping, judging people and situations, strategic thinking).
                             </p>
                             </div>
                             </div>
                             </Col>

                             <Col xs={12} lg={4} md={4} sm={12}>
                             <div className="flex-text">
                             <div className="side-img">  
                             <img src={SideImg5} alt="side-img" />
                             </div>

                             <div className="side-text">
                             <h3>Influence</h3>
                             <p>
                             The skills needed to inspire others to act 
                             (e.g., constructive criticism, presentation skills, team building, writing for impact).
                             </p>
                             </div>
                             </div>
                             </Col>

                             <Col xs={12} lg={4} md={4} sm={12}>
                             <div className="flex-text">
                             <div className="side-img">  
                             <img src={SideImg6} alt="side-img" />
                             </div>

                             <div className="side-text">
                             <h3>Secure Transactions</h3>
                             <p>
                             Quis neque fringilla duis auctor nam laoreet porttitor morbi diam suscipit montes. 
                             </p>
                             </div>
                             </div>
                             </Col>
                           </Row>
                         </Container>
                       </section>

                        {/* sixth-section */}


                          {/* seventh-section */}

                          <section className='business-section'>
                            <Container>
                              <Row>
                                <Col md={6} lg={6} sm={12} xs={12}>
                                <div className="business-text">
                                <h1>Our business is <br /> 
                                  protecting yours</h1>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                  Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                                  <Button className='business-button' variant="primary">Discover More</Button>
                                </div>
                                
                                </Col>

                                <Col md={6} lg={6} sm={12} xs={12}>
                                <div className="flex-grid">
                                <div className="flex-img">
                                   <img src={Icon_1} alt="icons" />
                                   <div className="flex-text">
                                     <h3>Trusted Company</h3>
                                     <p>Lorem pellentesque scelerisque pharetra mus faucibus
                                      consectetur maximus interdum eros</p>
                                   </div>

                                 </div>

                                 <div className="flex-img">
                                   <img src={Icon_2} alt="icons" />
                                   <div className="flex-text">
                                     <h3>Expertise</h3>
                                     <p>Lorem pellentesque scelerisque pharetra mus faucibus
                                      consectetur maximus interdum eros</p>
                                   </div>

                                 </div>
                                </div>
                                
                                <div className="flex-grid">
                                <div className="flex-img">
                                   <img src={Icon_3} alt="icons" />
                                   <div className="flex-text">
                                     <h3>System Protection</h3>
                                     <p>Lorem pellentesque scelerisque pharetra mus faucibus
                                      consectetur maximus interdum eros</p>
                                   </div>

                                 </div>

                                 <div className="flex-img">
                                   <img src={Icon_4} alt="icons" />
                                   <div className="flex-text">
                                     <h3>24/7 Support</h3>
                                     <p>Lorem pellentesque scelerisque pharetra mus faucibus
                                      consectetur maximus interdum eros</p>
                                   </div>

                                 </div>
                                </div>
                                
                                </Col>
                              </Row>
                            </Container>
                          </section>

                          {/* seventh-section */}

                          {/* eighth-section */}

                          <section className='request-section'>
                            <Container>
                              <Row>
                                <Col md={8} lg={8} xs={12} sm={12} className='side_border'>
                                  <div className="req-head">
                                  <h1>Request an evaluation.</h1>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                  Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                                  </div>
                                
                                </Col>

                                <Col md={4} lg={4} xs={12} sm={12}>
                                <div className="req-button">
                                <Button className='business-button' variant="primary">Evaluate Now &nbsp;
                                <i className="fas fa-arrow-right"></i></Button>
                                </div>
                                </Col>
                              </Row>
                            </Container>
                          </section>

                            {/* eighth-section */}

                            {/* ninth-section */}
                       
                       <section className='client-section'>
                      <Container>
                        <Row>
                          <Col md={6} lg={6} sm={12} xs={12}>
                          <div className="client-heading">
                          <h6>TESTIMONIAL</h6>
                          <h1>What they say about us.</h1>

                          <div className="client-slider">
                             <OwlCarousel className="slider-items owl-carousel" {...client_prop}>  
                        <div className='slider-image'>
                        <i className="fas fa-star"></i> &nbsp;
                        <i className="fas fa-star"></i> &nbsp;
                        <i className="fas fa-star"></i> &nbsp;
                        <i className="fas fa-star"></i> &nbsp;
                        <i className="fas fa-star"></i>
                        <p>
                        Quam auctor inceptos purus nec elementum consectetur. 
                        Faucibus nullam gravida quisque class a metus vitae venenatis ornare. 
                        Tempus ut accumsan natoque mattis porttitor aliquam felis taciti. 
                        Sagittis primis at nibh sociosqu platea turpis suscipit. 
                        Sociosqu nostra eget magnis viverra eleifend netus.
                        </p>

                        <div className="slider-flex">
                           <img  className="img" src={Client_1} alt="client-1"/> 
                           <div className="slider-text">
                           <p>Jonathan <br />
                             Biologist</p>
                           </div>
                        </div>
                         
                      </div> 
                       
                       <div className='slider-image'>
                       <i className="fas fa-star"></i> &nbsp;
                        <i className="fas fa-star"></i> &nbsp;
                        <i className="fas fa-star"></i> &nbsp;
                        <i className="fas fa-star"></i> &nbsp;
                        <i className="fas fa-star"></i>
                        <p>
                        Quam auctor inceptos purus nec elementum consectetur. 
                        Faucibus nullam gravida quisque class a metus vitae venenatis ornare. 
                        Tempus ut accumsan natoque mattis porttitor aliquam felis taciti. 
                        Sagittis primis at nibh sociosqu platea turpis suscipit. 
                        Sociosqu nostra eget magnis viverra eleifend netus.
                        </p>
                        <div className="slider-flex">
                           <img  className="img" src={Client_2} alt="client-2"/> 
                           <div className="slider-text">
                           <p>Amber White<br />
                             Biologist</p>
                           </div>
                        </div>
                  
                       </div> 

                         <div className='slider-image'>
                         <i className="fas fa-star"></i> &nbsp;
                        <i className="fas fa-star"></i> &nbsp;
                        <i className="fas fa-star"></i> &nbsp;
                        <i className="fas fa-star"></i> &nbsp;
                        <i className="fas fa-star"></i>
                        <p>
                        Quam auctor inceptos purus nec elementum consectetur. 
                        Faucibus nullam gravida quisque class a metus vitae venenatis ornare. 
                        Tempus ut accumsan natoque mattis porttitor aliquam felis taciti. 
                        Sagittis primis at nibh sociosqu platea turpis suscipit. 
                        Sociosqu nostra eget magnis viverra eleifend netus.
                        </p>
                        <div className="slider-flex">
                           <img  className="img" src={Client_3} alt="client-3"/> 
                           <div className="slider-text">
                             <p>Andre Harris<br />
                             Biologist</p>
                         
                           </div>
                        </div>
                     
                       </div>   

                      </OwlCarousel>    
                             </div>
                          </div>
                           
                          </Col>

                          <Col md={6} lg={6} sm={12} xs={12} className='hide'>               
                          </Col>
                        </Row>
                      </Container>
                       </section>

                             {/* ninth-section */}

                             {/* tenth-section */}

                             <section className='blog-section'>
                             <Container>
                               <Row className='row_1'>
                                 <Col md={6} lg={6} xs={12} sm={12}>
                                   <div className="heading">
                                     <h1>Blog & Article</h1>
                                     </div>
                                  </Col>
                                 
                                 <Col md={6} lg={6} xs={12} sm={12}>
                                  <div className="blog-button">
                                  <Button className='button' variant="primary">All Articles &nbsp;
                                <i className="fas fa-arrow-right"></i></Button>
                                  
                                  </div>
                                 </Col>                            
                               </Row>

                               <Row className='row_2'>
                                 <Col md={3} lg={3} xs={12} sm={12}>
                                 <div className="blog-card">
                                 <Card className='my-card'>
                         <Card.Img className='card-img' variant="top" src={Blog_1} />
                            <div className="flex-text">
                              <h6>Computer Virus</h6>
                            </div>
                           <Card.Body className='card-body'>
                         <Card.Title className='card-title'>
                         City of Liège hit by ransomware, Ryuk suspected
                         </Card.Title>
                         
                       </Card.Body>
                             </Card>
                                 </div>
                                 </Col>

                                 <Col md={3} lg={3} xs={12} sm={12}>
                                 <div className="blog-card">
                                 <Card  className='my-card'>
                         <Card.Img className='card-img' variant="top" src={Blog_2} />
                         <div className="flex-text" style={{
                           width: '30%',
                         }}>
                              <h6>Featured</h6>
                            </div>
                           <Card.Body className='card-body'>
                         <Card.Title className='card-title'>
                         Make the Internet a Better, Safer Place on Stop Cyberbullying Day
                         </Card.Title>
                       </Card.Body>
                             </Card>
                                 </div>
                                 </Col>

                                 <Col md={3} lg={3} xs={12} sm={12}>
                                 <div className="blog-card">
                                 <Card className='my-card'>
                         <Card.Img className='card-img' variant="top" src={Blog_3} />
                         <div className="flex-text">
                              <h6>Cyber Security</h6>
                            </div>
                           <Card.Body className='card-body'>
                         <Card.Title className='card-title'>
                         Threat Actors Spread Agent Tesla Disguised as COVID-19 Vaccination Registration
                         </Card.Title>
                       </Card.Body>
                             </Card>
                                 </div>
                                 </Col>

                                 <Col md={3} lg={3} xs={12} sm={12}>
                                 <div className="blog-card">
                                 <Card className='my-card'>
                         <Card.Img className='card-img' variant="top" src={Blog_4} />
                         <div className="flex-text" style={{
                           width: '30%',
                         }}>
                              <h6>Criminal</h6>
                            </div>
                           <Card.Body className='card-body'>
                         <Card.Title className='card-title'>
                         Repairmen suspected of installing ransomware on customers’ PCs. Arrests in South Korea
                         </Card.Title>
                       </Card.Body>
                             </Card>
                                 </div>
                                 </Col>
                               </Row>
                             </Container>
                             </section>

                             {/* tenth-section */}

                      <>
                      <Modal  
                   show={show}
                onHide={() => setShow(false)} 
              animation={true}>
        <Modal.Header closeButton>
          <Modal.Title>
          <h4>Join me on Patreon</h4></Modal.Title>
          <h3>Your Cybersecurity Coach</h3>
        </Modal.Header>
        <Modal.Body>
      <p>
      Hey! Are you new to cybersecurity or interested in transitioning into the profession?
      </p>
      <p>Great! You’re in the right place.</p>

      <p>Gain experience and confidence now every Tuesday and Thursday from 6:30pm to 8:30pm.</p>
      
      </Modal.Body>
        <Modal.Footer>
          {/* <Button variant="secondary" onClick={handleClose}>
            Close
          </Button> */}
          <Button variant="primary" onClick={handleClose}>
          Join me on Patreon
          </Button>
        </Modal.Footer>
      </Modal>
                      {/* <Modal
                show={show}
                onHide={() => setShow(false)}
                dialogClassName="modal-90w"
                aria-labelledby="contained-modal-title-vcenter"
                      >
                <Modal.Header closeButton>
                    <Modal.Title id="contained-modal-title-vcenter">
                        Lorem Ipsum Dolor
                    </Modal.Title>
                </Modal.Header>
                <Modal.Body>
                    <Row className="text-center justify-content-center">
                        <Col>
                            <Button>USER</Button>
                        </Col>
                        <Col>
                            <Button>AGENT</Button>
                        </Col>
                    </Row>
                </Modal.Body>
            </Modal> */}
                      </>
                             {/* <>
    <div id="modalOverlay">
		<div className="modalPopup">
			<div className="headerBar">
				<img src="https://placehold.it/200x25/edcb04/333333/?text=LOGO" alt="Logo" />
			</div>
			<div className="modalContent">
					<h1>Modal window title here</h1>
					 <p>Modal appears on page load, presents information and is dismissed after the "Close" button is clicked. Styled modal messaging, images and other information here.</p>
					 <button className="buttonStyle" id="button">Close</button>
			</div>
		</div>
	</div>
    </> */}

      </Fragment>

      
  );
};
