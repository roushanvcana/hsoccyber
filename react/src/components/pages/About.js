import React from "react";
import aboutimg from '../../assets/img/about/about_1.png';
import drwec from '../../assets/img/about/drwec.jpg';
import about_img from '../../assets/img/about/about_img.jpg';
import value_img from '../../assets/img/about/valueimg.jpg';
import team_1 from '../../assets/img/about/team-1.jpg';
import team_2 from '../../assets/img/about/team-2.jpg';
import team_3 from '../../assets/img/about/team-3.jpg';

const About = () => {
    return (
        <>
        <section className="page-banner">
            <div className="container">
                <div className="banner-title">
                    <h1>About Us</h1>
                    <p>Home / <span>About</span></p>
                </div>
            </div>
        </section>
         <div className="works-about-area">
        <div className="container">
            <div className="works-about-items default-padding">
                <div className="row align-center">
                    <div className="col-lg-6 info">
                        <h2>About us</h2>
                        <p>HSOC Cyber, formerly Professional Certifications and Consulting Services, is a service-disabled, veteran-owned small business (SDVOSB). Since 2016, HSOC Cyber has provided certification and real skill training in information technology, cybersecurity, and project management. As a result of COVID-19, HSOC Cyber altered its business model from the live classNameroom training to live online training in the form of an internship, and all from the comfort of your home. At HSOC Cyber, we work on real projects and tasks that equate to real experience versus attending an online className to complete assignments.</p>
                        <p>Whether new to the industry or experienced, each HSOC Cyber team member is considered a cybersecurity intern from day one. We practice with a variety of real industry tools and techniques used in federal agencies, and small to large businesses. We work in a peer-supported environment, where team members conduct a myriad of tasks and projects related to popular cybersecurity roles within the National Initiative for Cybersecurity Education (NICE) Workforce Framework, the INFOSEC Wheel, and the National Institute of Standards and Technology (NIST) Risk Management Framework.</p>
                    </div>
                    <div className="col-lg-6 my-auto">
                        <div className="thumb">
                           <img src={about_img} alt="photo" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <div className="about-area default-padding">
        <div className="container">
            <div className="row">
							<div className="col-lg-7 info">
                        <h2 className="elementor-heading-title elementor-size-default color-black">Biography</h2>
                        <p className="sp">Dr.  Wesley Phillips (Doc Wes)</p>
                        <p className="drdc">Accomplished cybersecurity professional with over 20 years of combined law enforcement, physical security, network security, risk management, and executive protection experience.  Over 16 years specific counterintelligence, technical surveillance countermeasures, and cybersecurity experience focused on proactively protecting the infrastructure and security of company resources and data.  Proven project manager, strategist, educator, and technologist with demonstrated leadership ability to set strategic direction, align teams and their performance, and achieve desired results with greater efficiency and effectiveness.  Collaborative team leader, college instructor, certification instructor, skill-based instruction, and effective communicator with the ability to work well both independently and in group settings, as well as the ability to engage with others throughout the organization to set and achieve common goals.</p>
                    </div>
                <div className="col-lg-5">
                    <div className="thumb">
                        <img src={drwec} alt="" />
                        <div className="overlay">
                            <div className="content">
                                <h4>Doc Wes is the recipient of the 2021 Blacks in Cyber Outstanding Cybersecurity Training & Curriculum Award</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="col-lg-12">
                    <div className="doc_img">
                    <img src={aboutimg} alt="picture" />
                    </div>
                </div>
            </div>
        </div>
    </div>
<section className="bg-dark-blue">
    <div className="col-lg-12">
        <div className="row">
        <div className="elementvalue_img">
            <img src={value_img} alt="photo" />
        </div>
            <div className="col-md-5 ml-md-auto">
                <div className="element_right">
                    <h3>Our Value</h3>
                    <h2>Professional Service Ready for You.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                    <ul className="feature-list-items circle framed p-0">
                        <li className="feature-list-item elementor-repeater-item-e9bd0b0 icon-align">
                        <div className="feature-list-icon-box">
                            <div className="feature-list-icon-inner bg-none"> <span className="feature-list-icon fl-icon-0 bg-none"> <i className="fas fa-low-vision font-awesome-free"></i> </span> </div>
                        </div>
                        <div className="feature-list-content-box">
                            <h5 className="feature-list-title color-white">Vision</h5>
                            <p className="feature-list-content color-white">Lorem ipsum dolor sit amet, consectetur adipisi cing elit, sed do eiusmod tempor incididunt ut abore et dolore magna</p>
                        </div>
                        </li>
                        <li className="feature-list-item elementor-repeater-item-9262403 icon-align">
                        <div className="feature-list-icon-box">
                            <div className="feature-list-icon-inner bg-none"> <span className="feature-list-icon fl-icon-1 bg-none"> <i className="fas fa-cogs font-awesome-pro"></i> </span> </div>
                        </div>
                        <div className="feature-list-content-box color-white">
                            <h5 className="feature-list-title">Mission</h5>
                            <p className="feature-list-content">Lorem ipsum dolor sit amet, consectetur adipisi cing elit, sed do eiusmod tempor incididunt ut abore et dolore magna</p>
                        </div>
                        </li>
                        <li className="feature-list-item elementor-repeater-item-96f0f9d icon-align">
                        <div className="feature-list-icon-box">
                            <div className="feature-list-icon-inner bg-none"> <span className="feature-list-icon fl-icon-2 bg-none"> <i className="fas fa-paw font-awesome-free"></i> </span> </div>
                        </div>
                        <div className="feature-list-content-box color-white">
                            <h5 className="feature-list-title">Motto</h5>
                            <p className="feature-list-content">Lorem ipsum dolor sit amet, consectetur adipisi cing elit, sed do eiusmod tempor incididunt ut abore et dolore magna</p>
                        </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section className="ourteam">
<div className="container">
    <div className="row">
        <div className="col-lg-4 my-auto">
            <div className="team_hedng">
            <div className="inner">
                <h2>Strong Team to secure you.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
            </div>
            </div>
        </div>
        <div className="col-lg-8">
        <div className="row">
        <div className="col-md-4 col-sm-6">
            <div className="our-team">
                <div className="pic">
                    <img src={team_1} alt="" />
                </div>
                <div className="team-content">
                    <h3 className="title">Larry T Mann</h3>
                    <span className="post">CEO</span>
                    <ul className="social">
                        <li><a href="#"><i className="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i className="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i className="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
 
        <div className="col-md-4 col-sm-6">
            <div className="our-team">
                <div className="pic">
                <img src={team_2} alt="" />
                </div>
                <div className="team-content">
                    <h3 className="title">Yvonne Jacobson</h3>
                    <span className="post">Network Expert</span>
                    <ul className="social">
                        <li><a href="#"><i className="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i className="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i className="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div className="col-md-4 col-sm-6">
            <div className="our-team">
                <div className="pic">
                <img src={team_3} alt="" />
                </div>
                <div className="team-content">
                    <h3 className="title">Yvonne Jacobson</h3>
                    <span className="post">Network Expert</span>
                    <ul className="social">
                        <li><a href="#"><i className="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i className="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i className="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>
</div>
</section>
        </>
    )
}

export default About;